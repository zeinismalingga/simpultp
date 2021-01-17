<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Tu_apbd extends MY_Controller {

	private $anggaran = 2;
	private $class = "tu_apbd";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_tu(){
		$data['sertifikasi'] = $this->tu_apbd_model->get_list();
		$data['class'] = $this->class;
		$data['anggaran'] = "APBD";
		$data['id_tu'] = "id_tu_apbd";
		$data['id_input_lab'] = "id_input_lab_apbd";
			
		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/tu/list', $data);
	}

	public function add($id_sertifikasi){
		$cek_no = $this->tu_apbd_model->cek_no($id_sertifikasi);

		if($cek_no){
			$this->session->set_flashdata('notif', 'SERTIFIKASI SUDAH DIBERI NO TU.');
			redirect('sertifikasi_apbd/list_sertifikasi');
		}

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['id_sertifikasi'] = $id_sertifikasi;

			$this->template->load('admin/template/template', 'admin/tu/add_tu', $data);
		}else{			
			$this->tu_apbd_model->add($id_sertifikasi);
			$this->session->set_flashdata('notif', 'BERHASIL MENAMBAH NO TU.');
			redirect('tu_apbd/list_tu');		
		}			
	}

	public function edit($id){
		$data['tu'] = $this->tu_apbd_model->get_all($id);

		$data['id_tu'] = $id;

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;

			$this->template->load('admin/template/template', 'admin/tu/edit', $data);
		}else{			

			$this->tu_apbd_model->edit($id);
			redirect('tu_apbd/list_tu');		
		}
			
	}

	public function delete($id){
		$this->tu_apbd_model->delete($id);
		redirect('tu_apbd/list_tu');			
	}

	public function add_asal($id_tu){
		$cek_no = $this->tu_apbd_model->cek_asal($id_tu);

		if($cek_no){
			$this->session->set_flashdata('notif', 'SERTIFIKASI SUDAH DIBERI NO ASAL.');
			redirect('tu_apbd/list_tu');
		}

		// nomor
		$nomor = $this->tu_apbd_model->get_max_id();
		$nomor = $nomor['nomor'];

		$nomor = sprintf("%02d", $nomor); 

		// no asal
		$no_asal = sprintf("%02d", $nomor); 
		$no_asal = "TM. ". $no_asal;

		$this->tu_apbd_model->add_asal($id_tu, $no_asal);
		$this->session->set_flashdata('notif', 'BERHASIL MENAMBAH NO ASAL.');
		redirect('tu_apbn/list_tu');	
	}

	public function print($id){
		$data['tu'] = $this->tu_apbd_model->get_all($id);
	
		$this->load->view('admin/tu/print', $data);
	}

	public function export_excel(){
		$tu = $this->tu_apbd_model->get_all();

		// dd($tu);

		$styleCol = [
		    'font' => [
		        'bold' => true,
		    ],
		    'alignment' => [
		        'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
		        'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
		    ],
		    
		];

		$styleRow = [
		    'borders' => [
		        'allBorders' => [
		            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
		        ],
		    ],
		];

		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$sheet->setCellValue('A1', 'No');
		$sheet->setCellValue('B1', 'No Asal Sertifikasi');
		$sheet->setCellValue('C1', 'No TU');
		$sheet->setCellValue('D1', 'No Lab');
		$sheet->setCellValue('E1', 'Produsen Benih');
		$sheet->setCellValue('F1', 'Alamat');
		$sheet->setCellValue('G1', 'Varietas');
		$sheet->setCellValue('H1', 'KB');
		$sheet->setCellValue('I1', 'Tgl Panen');
		$sheet->setCellValue('J1', 'Tanggal');
		$sheet->setCellValue('J2', 'Penerimaan');
		$sheet->setCellValue('K2', 'Pengeluaran');
		$sheet->setCellValue('L1', 'Wadah');
		$sheet->setCellValue('M1', 'Ton');
		$sheet->setCellValue('N1', 'Tgl Selesai Kontrak');
		$sheet->setCellValue('O1', 'KA');
		$sheet->setCellValue('P1', 'BM');
		$sheet->setCellValue('Q1', 'BTL');
		$sheet->setCellValue('R1', 'KB');
		$sheet->setCellValue('S1', 'CVL');
		$sheet->setCellValue('T1', 'DB');
		$sheet->setCellValue('U1', 'KET');

		//load data
		$i = 3;
		$no = 1;
		$array = 0;
		foreach ($tu as $tu_item) {
			$sheet->setCellValue('A'.$i, $no++);
			$sheet->setCellValue('B'.$i, $tu_item['no_induk']);
			$sheet->setCellValue('C'.$i, $tu_item['no_tu']);
			$sheet->setCellValue('D'.$i, $tu_item['no_lab']);
			$sheet->setCellValue('E'.$i, $tu_item['produsen_benih']);
			$sheet->setCellValue('F'.$i, $tu_item['alamat']);
			$sheet->setCellValue('G'.$i, $tu_item['nama_varietas']);
			$sheet->setCellValue('H'.$i, $tu_item['kotoran_benih']);
			$sheet->setCellValue('I'.$i, tgl_indo($tu_item['tgl_panen']));
			$sheet->setCellValue('J'.$i, '');
			$sheet->setCellValue('K'.$i, '');
			$sheet->setCellValue('L'.$i, $tu_item['jml_wadah']);
			$sheet->setCellValue('M'.$i, $tu_item['produksi']);
			$sheet->setCellValue('N'.$i, '');
			$sheet->setCellValue('O'.$i, $tu_item['kadar_air']);
			$sheet->setCellValue('P'.$i, $tu_item['benih_murni']);
			$sheet->setCellValue('Q'.$i, $tu_item['benih_tan_lain']);
			$sheet->setCellValue('R'.$i, $tu_item['kotoran_benih']);
			$sheet->setCellValue('S'.$i, $tu_item['cvl_pemlap_3']);
			$sheet->setCellValue('T'.$i, $tu_item['daya_berkecambah']);
			$sheet->setCellValue('U'.$i, '');

			$i++;
			$array++;
		}

		// apply style colloum
		$spreadsheet->getActiveSheet()->getStyle('A1:U2')->applyFromArray($styleCol);

		// apply style default
		$i--;
		$spreadsheet->getActiveSheet()->getStyle('A1:U'. $i)->applyFromArray($styleRow);

		// merge cell
		$spreadsheet->getActiveSheet()->mergeCells('A1:A2');
		$spreadsheet->getActiveSheet()->mergeCells('B1:B2');
		$spreadsheet->getActiveSheet()->mergeCells('C1:C2');
		$spreadsheet->getActiveSheet()->mergeCells('D1:D2');
		$spreadsheet->getActiveSheet()->mergeCells('E1:E2');
		$spreadsheet->getActiveSheet()->mergeCells('F1:F2');
		$spreadsheet->getActiveSheet()->mergeCells('G1:G2');
		$spreadsheet->getActiveSheet()->mergeCells('H1:H2');
		$spreadsheet->getActiveSheet()->mergeCells('I1:I2');
		$spreadsheet->getActiveSheet()->mergeCells('J1:K1');
		$spreadsheet->getActiveSheet()->mergeCells('L1:L2');
		$spreadsheet->getActiveSheet()->mergeCells('M1:M2');
		$spreadsheet->getActiveSheet()->mergeCells('N1:N2');
		$spreadsheet->getActiveSheet()->mergeCells('O1:O2');
		$spreadsheet->getActiveSheet()->mergeCells('P1:P2');
		$spreadsheet->getActiveSheet()->mergeCells('Q1:Q2');
		$spreadsheet->getActiveSheet()->mergeCells('R1:R2');
		$spreadsheet->getActiveSheet()->mergeCells('S1:S2');
		$spreadsheet->getActiveSheet()->mergeCells('T1:T2');
		$spreadsheet->getActiveSheet()->mergeCells('U1:U2');

		// Auto size columns for each worksheet
		foreach ($spreadsheet->getWorksheetIterator() as $worksheet) {

		    $spreadsheet->setActiveSheetIndex($spreadsheet->getIndex($worksheet));

		    $sheet = $spreadsheet->getActiveSheet();
		    $cellIterator = $sheet->getRowIterator()->current()->getCellIterator();
		    $cellIterator->setIterateOnlyExistingCells(true);
		    /** @var PHPExcel_Cell $cell */
		    foreach ($cellIterator as $cell) {
		        $sheet->getColumnDimension($cell->getColumn())->setAutoSize(true);
		    }
		}
		
		$writer = new Xlsx($spreadsheet);
		$filename = 'laporan-TU';
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

	}
}
