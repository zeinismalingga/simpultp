<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Tu_apbn extends MY_Controller {

	private $anggaran = 1;
	private $class = "tu_apbn";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_tu(){
		$data['sertifikasi'] = $this->tu_apbn_model->get_all();
		$data['class'] = $this->class;
		$data['anggaran'] = "APBN";
		$data['id_tu'] = "id_tu_apbn";
		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/tu/list', $data);
	}

	public function add($id_sertifikasi){
		$cek_no = $this->tu_apbn_model->cek_no($id_sertifikasi);

		if($cek_no){
			$this->session->set_flashdata('notif', 'SERTIFIKASI SUDAH DIBERI NO TU.');
			redirect('sertifikasi_apbn/list_sertifikasi');
		}

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['id_sertifikasi'] = $id_sertifikasi;

			$this->template->load('admin/template/template', 'admin/tu/add_tu', $data);
		}else{			

			$this->tu_apbn_model->add($id_sertifikasi);
			redirect('tu_apbn/list_tu');		
		}
			
	}

	public function edit($id){
		$data['tu'] = $this->tu_apbn_model->get_all($id);

		$data['id_tu'] = $id;

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;

			$this->template->load('admin/template/template', 'admin/tu/edit', $data);
		}else{			

			$this->tu_apbn_model->edit($id);
			redirect('tu_apbn/list_tu');		
		}
			
	}



	public function add_asal($id_tu){
		$cek_no = $this->tu_apbn_model->cek_asal($id_tu);

		if($cek_no){
			$this->session->set_flashdata('notif', 'SERTIFIKASI SUDAH DIBERI NO ASAL.');
			redirect('tu_apbn/list_tu');
		}

		// nomor
		$nomor = $this->tu_apbn_model->get_max_id();
		$nomor = $nomor['nomor'];

		$nomor = sprintf("%02d", $nomor); 

		// no asal
		$no_asal = sprintf("%02d", $nomor); 
		$no_asal = "TM. ". $no_asal;

		$this->tu_apbn_model->add_asal($id_tu, $no_asal);
		redirect('tu_apbn/list_tu');	
	}

	public function print($id){
		$data['tu'] = $this->tu_apbn_model->get_all($id);
		// dd($data['tu']);
	
		$this->load->view('admin/tu/print', $data);
	}

	public function export_excel(){
		$tu = $this->tu_apbn_model->get_all();

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
		$sheet->setCellValue('I1', 'Tgl Tanam');

		//load data
		$i = 3;
		$no = 1;
		$array = 0;
		foreach ($tu as $tu_item) {

			$sheet->setCellValue('A'.$i, $no++);
			$sheet->setCellValue('B'.$i, $tu_item['pemohon']);
			$sheet->setCellValue('C'.$i, $tu_item['blok']);
			$sheet->setCellValue('D'.$i, $tu_item['alamat']);
			$sheet->setCellValue('E'.$i, $tu_item['kampung']);
			$sheet->setCellValue('F'.$i, $tu_item['desa']);
			$sheet->setCellValue('G'.$i, $tu_item['nama_kecamatan']);
			$sheet->setCellValue('H'.$i, ucwords($tu_item['nama_kota']));
			$sheet->setCellValue('I'.$i, $tu_item['no_induk']);

			$i++;
			$array++;
		}

		// apply style colloum
		$spreadsheet->getActiveSheet()->getStyle('A1:T2')->applyFromArray($styleCol);

		// apply style default
		$i--;
		$spreadsheet->getActiveSheet()->getStyle('A1:T'. $i)->applyFromArray($styleRow);

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
		$filename = 'laporan-simpul';
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

	}
	
}
