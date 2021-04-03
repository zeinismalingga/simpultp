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
		$data['sertifikasi'] = $this->tu_apbn_model->get_list();

		$data['class'] = $this->class;
		$data['anggaran'] = "APBN";
		$data['id_tu'] = "id_tu_apbn";
		$data['id_input_lab'] = "id_input_lab_apbn";
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
			$this->session->set_flashdata('notif', 'BERHASIL MENAMBAH NO TU.');
			redirect('tu_apbn/list_tu');		
		}
			
	}

	public function edit($id){
		$data['tu'] = $this->tu_apbn_model->get_all($id);
		// dd($data['tu'] );
		$data['id_tu'] = $id;

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;

			$this->template->load('admin/template/template', 'admin/tu/edit', $data);
		}else{			

			$this->tu_apbn_model->edit($id);
			redirect('tu_apbn/list_tu');		
		}
			
	}

	public function delete($id){
		$this->tu_apbn_model->delete($id);
		redirect('tu_apbn/list_tu');			
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
		$this->session->set_flashdata('notif', 'BERHASIL MENAMBAH NO ASAL.');
		redirect('tu_apbn/list_tu');	
	}

	public function print($id){
		$data['tu'] = $this->tu_apbn_model->get_all($id);
		// dd($data['tu']);
	
		$this->load->view('admin/tu/print', $data);
	}

	public function export_excel(){
		$tu = $this->tu_apbn_model->get_list();

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
		$sheet->setCellValue('B1', 'Pemohon/Produsen');
		$sheet->setCellValue('C1', 'Blok');
		$sheet->setCellValue('D1', 'Alamat');
		$sheet->setCellValue('E1', 'Kampung');
		$sheet->setCellValue('F1', 'Desa');
		$sheet->setCellValue('G1', 'Kecamatan');
		$sheet->setCellValue('H1', 'Kabupaten');
		$sheet->setCellValue('I1', 'No Induk');
		$sheet->setCellValue('J1', 'Luas Ha');
		$sheet->setCellValue('K1', 'Sumber Benih');
		$sheet->setCellValue('L1', 'Asal Benih');
		$sheet->setCellValue('M1', 'Sumber / Nomor');
		$sheet->setCellValue('N1', 'Kelas Benih');
		$sheet->setCellValue('O1', 'Varietas');
		$sheet->setCellValue('P1', 'Kelas Benih yang Dihasilkan');
		$sheet->setCellValue('Q1', 'Tanggal Pendahuluan');
		$sheet->setCellValue('R1', 'Tanggal');
		$sheet->setCellValue('R2', 'Semai');
		$sheet->setCellValue('S2', 'Tanam');
		$sheet->setCellValue('T1', 'Ke I (SATU)');
		$sheet->setCellValue('T2', 'Tanggal');
		$sheet->setCellValue('U2', 'Luas Ha');
		$sheet->setCellValue('V2', 'CVL %');
		$sheet->setCellValue('W1', 'Ke II (DUA)');
		$sheet->setCellValue('W2', 'Tanggal');
		$sheet->setCellValue('X2', 'Luas Ha');
		$sheet->setCellValue('Y2', 'CVL %');
		$sheet->setCellValue('Z1', 'Ke III (TIGA)');
		$sheet->setCellValue('Z2', 'Tanggal');
		$sheet->setCellValue('AA2', 'Luas Ha');
		$sheet->setCellValue('AB2', 'CVL %');
		$sheet->setCellValue('AC1', 'Tanggal Panen');
		$sheet->setCellValue('AD1', 'No. TU');
		$sheet->setCellValue('AE1', 'Tanggal');
		$sheet->setCellValue('AE2', 'Penerimaan');
		$sheet->setCellValue('AF2', 'Pengeluaran');
		$sheet->setCellValue('AG1', 'Wadah');
		$sheet->setCellValue('AH1', 'Ton');
		$sheet->setCellValue('AI1', 'Tgl Selesai Kontrak');
		$sheet->setCellValue('AJ1', 'No. Lab');
		$sheet->setCellValue('AK1', 'Kemurnian');
		$sheet->setCellValue('AK2', 'Kadar Air (%)');
		$sheet->setCellValue('AL2', 'Benih Murni (%)');
		$sheet->setCellValue('AM2', 'Benih Tan. Lain (%)');
		$sheet->setCellValue('AN2', 'Kotoran Benih (%)');
		$sheet->setCellValue('AO2', 'Jangka Waktu Pengujian (%)');
		$sheet->setCellValue('AP1', 'Daya Berkecambah');
		$sheet->setCellValue('AP2', 'Kecambah Normal (%)');
		$sheet->setCellValue('AQ2', 'Kecambah Abnormal (%)');
		$sheet->setCellValue('AR2', 'Benih Keras (%)');
		$sheet->setCellValue('AS2', 'Benih Segar (%)');
		$sheet->setCellValue('AT2', 'Benih Mati (%)');
		$sheet->setCellValue('AU1', 'Status');
		$sheet->setCellValue('AV1', 'Suhu');
		$sheet->setCellValue('AW1', 'Ket');

		//load data
		$i = 3;
		$no = 1;
		$array = 0;
		foreach($tu as $tu_item) {
			$kelas_benih2 = $this->master_model->get_kelas_benih2($tu_item['id_kelas_benih2']);

			if($tu_item['status'] == ''){
	            $status = 'Belum dinilai';
	        }
	        if($tu_item['status'] == '1'){
	            $status =  'Lulus';
	        }elseif($tu_item['status'] == '2'){
	            $status = 'Tidak Lulus';
	        }

	        $searchReplaceArray = array(
			  '<p>' => "", 
			  '</p>' => "",
			  '<br>' => "\r"
			);

			$ket = str_replace(
			  array_keys($searchReplaceArray), 
			  array_values($searchReplaceArray), 
			  $tu_item['ket']
			);

			$sheet->setCellValue('A'.$i, $no++);
			$sheet->setCellValue('B'.$i, $tu_item['pemohon']);
			$sheet->setCellValue('C'.$i, $tu_item['blok']);
			$sheet->setCellValue('D'.$i, $tu_item['alamat']);
			$sheet->setCellValue('E'.$i, $tu_item['kampung']);
			$sheet->setCellValue('F'.$i, $tu_item['desa']);
			$sheet->setCellValue('G'.$i, $tu_item['nama_kecamatan']);
			$sheet->setCellValue('H'.$i, ucwords($tu_item['nama_kota']));
			$sheet->setCellValue('I'.$i, $tu_item['no_induk']);
			$sheet->setCellValue('J'.$i, $tu_item['luas']);
			$sheet->setCellValue('K'.$i, $tu_item['nomor_sumber']);
			$sheet->setCellValue('L'.$i, $tu_item['asal_benih']);
			$sheet->setCellValue('M'.$i, $tu_item['no_kelompok_benih']);
			$sheet->setCellValue('N'.$i, $kelas_benih2['singkatan']);
			$sheet->setCellValue('O'.$i, $tu_item['nama_varietas']);
			$sheet->setCellValue('P'.$i, $tu_item['singkatan']);
			$sheet->setCellValue('Q'.$i, tgl_indo($tu_item['tgl_pemlap_pendahuluan']));
			$sheet->setCellValue('R'.$i, tgl_indo($tu_item['tgl_semai']));
			$sheet->setCellValue('S'.$i, tgl_indo($tu_item['tgl_tanam']));
			$sheet->setCellValue('T'.$i, tgl_indo($tu_item['tgl_pemlap_1']));
			$sheet->setCellValue('U'.$i, $tu_item['luas_pemlap_1']);
			$sheet->setCellValue('V'.$i, $tu_item['cvl_pemlap_1']);
			$sheet->setCellValue('W'.$i, tgl_indo($tu_item['tgl_pemlap_2']));
			$sheet->setCellValue('X'.$i, $tu_item['luas_pemlap_2']);
			$sheet->setCellValue('Y'.$i, $tu_item['cvl_pemlap_2']);
			$sheet->setCellValue('Z'.$i, tgl_indo($tu_item['tgl_pemlap_3']));
			$sheet->setCellValue('AA'.$i, $tu_item['luas_pemlap_3']);
			$sheet->setCellValue('AB'.$i, $tu_item['cvl_pemlap_3']);
			$sheet->setCellValue('AC'.$i, $tu_item['tgl_panen'] ? tgl_indo($tu_item['tgl_panen']) : '');
			$sheet->setCellValue('AD'.$i, $tu_item['no_tu']);
			$sheet->setCellValue('AE'.$i, ''); // tgl penerimaan
			$sheet->setCellValue('AF'.$i, ''); // tgl pengeluaran
			$sheet->setCellValue('AG'.$i, $tu_item['jml_wadah']);
			$sheet->setCellValue('AH'.$i, $tu_item['produksi']);
			$sheet->setCellValue('AI'.$i, ''); // tgl selesai kontrak
			$sheet->setCellValue('AJ'.$i, $tu_item['no_lab']);
			$sheet->setCellValue('AK'.$i, $tu_item['kadar_air']);
			$sheet->setCellValue('AL'.$i, $tu_item['benih_murni']);
			$sheet->setCellValue('AM'.$i, $tu_item['benih_tan_lain']);
			$sheet->setCellValue('AN'.$i, $tu_item['kotoran_benih']);
			$sheet->setCellValue('AO'.$i, $tu_item['jangka_waktu_pengujian']);
			$sheet->setCellValue('AP'.$i, $tu_item['kecambah_normal']);
			$sheet->setCellValue('AQ'.$i, $tu_item['kecambah_abnormal']);
			$sheet->setCellValue('AR'.$i, $tu_item['benih_keras']);
			$sheet->setCellValue('AS'.$i, $tu_item['benih_segar']);
			$sheet->setCellValue('AT'.$i, $tu_item['benih_mati']);       
			$sheet->setCellValue('AU'.$i, $status);
			$sheet->setCellValue('AV'.$i, $tu_item['suhu']);
			$sheet->setCellValue('AW'.$i, $ket);

			$i++;
			$array++;
		}
		

		// apply style colloum
		$spreadsheet->getActiveSheet()->getStyle('A1:AW2')->applyFromArray($styleCol);

		// apply style default
		$i--;
		$spreadsheet->getActiveSheet()->getStyle('A1:AW'. $i)->applyFromArray($styleRow);

		$spreadsheet->getActiveSheet()->getStyle('A1:AW'. $i)->getAlignment()->setWrapText(true);

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
		$spreadsheet->getActiveSheet()->mergeCells('J1:J2');
		$spreadsheet->getActiveSheet()->mergeCells('K1:K2');
		$spreadsheet->getActiveSheet()->mergeCells('L1:L2');
		$spreadsheet->getActiveSheet()->mergeCells('M1:M2');
		$spreadsheet->getActiveSheet()->mergeCells('N1:N2');
		$spreadsheet->getActiveSheet()->mergeCells('O1:O2');
		$spreadsheet->getActiveSheet()->mergeCells('P1:P2');
		$spreadsheet->getActiveSheet()->mergeCells('Q1:Q2');
		$spreadsheet->getActiveSheet()->mergeCells('R1:S1');
		$spreadsheet->getActiveSheet()->mergeCells('T1:V1');
		$spreadsheet->getActiveSheet()->mergeCells('W1:Y1');
		$spreadsheet->getActiveSheet()->mergeCells('Z1:AB1');
		$spreadsheet->getActiveSheet()->mergeCells('AC1:AC2');
		$spreadsheet->getActiveSheet()->mergeCells('AD1:AD2');
		$spreadsheet->getActiveSheet()->mergeCells('AE1:AF1');
		$spreadsheet->getActiveSheet()->mergeCells('AG1:AG2');
		$spreadsheet->getActiveSheet()->mergeCells('AH1:AH2');
		$spreadsheet->getActiveSheet()->mergeCells('AI1:AI2');
		$spreadsheet->getActiveSheet()->mergeCells('AJ1:AJ2');
		$spreadsheet->getActiveSheet()->mergeCells('AK1:AO1');
		$spreadsheet->getActiveSheet()->mergeCells('AP1:AT1');
		$spreadsheet->getActiveSheet()->mergeCells('AU1:AU2');
		$spreadsheet->getActiveSheet()->mergeCells('AV1:AV2');
		$spreadsheet->getActiveSheet()->mergeCells('AW1:AW2');

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
