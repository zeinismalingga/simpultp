<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Sertifikasi_apbd extends MY_Controller {

	private $anggaran = 2;
	private $class = "sertifikasi_apbd";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_sertifikasi(){
		$data['sertifikasi'] = $this->sertifikasi_model->get_list($this->anggaran);

		// dd($data['sertifikasi']);

		$data['class'] = $this->class;
		$data['class_tu'] = "tu_apbd";	
		$data['anggaran'] = "APBD";	
		$this->template->load('admin/template/template', 'admin/sertifikasi/list', $data);
	}

	public function add(){		
		$data['kotas'] = $this->master_model->get_kota();
		$data['kecamatans'] = $this->master_model->get_kecamatan();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['musim_tanam'] = $this->master_model->get_musim_tanam();

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/add', $data);
		}else{	

			$this->sertifikasi_model->add($this->anggaran);

			redirect('sertifikasi_apbd/list_sertifikasi');			
		}
	}

	public function edit($id){	
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);
		$data['kotas'] = $this->master_model->get_kota();
		$data['kecamatans'] = $this->master_model->get_kecamatan();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['musim_tanam'] = $this->master_model->get_musim_tanam();
		$data['kelas_benih2'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih2']);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/edit', $data);
		}else{	
			$this->sertifikasi_model->edit($this->anggaran, $id);

			redirect('sertifikasi_apbd/list_sertifikasi');			
		}
	}

	public function delete($id){
		$this->sertifikasi_model->delete($id);
		redirect('sertifikasi_apbd/list_sertifikasi');			
	}

	public function detail($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	

		$this->template->load('admin/template/template', 'admin/sertifikasi/detail', $data);
	}

	public function get_varietas(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_varietas($id);
		echo json_encode($data);
	}

	public function get_kecamatan(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_kecamatan($id);
		echo json_encode($data);
	}

	public function export_excel(){
		$sertifikasi = $this->sertifikasi_model->get_all(NULL, $this->anggaran);

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

		//load data
		$i = 3;
		$no = 1;
		$array = 0;
		foreach ($sertifikasi as $sertifikasi_item) {
			$kelas_benih2 = $this->master_model->get_kelas_benih2($sertifikasi_item['id_kelas_benih2']);

			$sheet->setCellValue('A'.$i, $no++);
			$sheet->setCellValue('B'.$i, $sertifikasi_item['pemohon']);
			$sheet->setCellValue('C'.$i, $sertifikasi_item['blok']);
			$sheet->setCellValue('D'.$i, $sertifikasi_item['alamat']);
			$sheet->setCellValue('E'.$i, $sertifikasi_item['kampung']);
			$sheet->setCellValue('F'.$i, $sertifikasi_item['desa']);
			$sheet->setCellValue('G'.$i, $sertifikasi_item['nama_kecamatan']);
			$sheet->setCellValue('H'.$i, ucwords($sertifikasi_item['nama_kota']));
			$sheet->setCellValue('I'.$i, $sertifikasi_item['no_induk']);
			$sheet->setCellValue('J'.$i, $sertifikasi_item['luas']);
			$sheet->setCellValue('K'.$i, $sertifikasi_item['nomor_sumber']);

			$sheet->setCellValue('L'.$i, $sertifikasi_item['asal_benih']);
			$sheet->setCellValue('M'.$i, $sertifikasi_item['no_kelompok_benih']);
			$sheet->setCellValue('N'.$i, $kelas_benih2['singkatan']);
			$sheet->setCellValue('O'.$i, $sertifikasi_item['nama_varietas']);
			$sheet->setCellValue('P'.$i, $sertifikasi_item['singkatan']);
			$sheet->setCellValue('Q'.$i, tgl_indo($sertifikasi_item['tgl_pemlap_pendahuluan']));
			$sheet->setCellValue('R'.$i, tgl_indo($sertifikasi_item['tgl_semai']));
			$sheet->setCellValue('S'.$i, tgl_indo($sertifikasi_item['tgl_tanam']));
			$sheet->setCellValue('T'.$i, tgl_indo($sertifikasi_item['tgl_pemlap_1']));
			$sheet->setCellValue('U'.$i, $sertifikasi_item['luas_pemlap_1']);
			$sheet->setCellValue('V'.$i, $sertifikasi_item['cvl_pemlap_1']);
			$sheet->setCellValue('W'.$i, tgl_indo($sertifikasi_item['tgl_pemlap_2']));
			$sheet->setCellValue('X'.$i, $sertifikasi_item['luas_pemlap_2']);
			$sheet->setCellValue('Y'.$i, $sertifikasi_item['cvl_pemlap_2']);
			$sheet->setCellValue('Z'.$i, tgl_indo($sertifikasi_item['tgl_pemlap_3']));
			$sheet->setCellValue('AA'.$i, $sertifikasi_item['luas_pemlap_3']);
			$sheet->setCellValue('AB'.$i, $sertifikasi_item['cvl_pemlap_3']);
			$sheet->setCellValue('AC'.$i, tgl_indo($sertifikasi_item['tgl_panen']));

			$i++;
			$array++;
		}

		// apply style colloum
		$spreadsheet->getActiveSheet()->getStyle('A1:AC2')->applyFromArray($styleCol);

		// apply style default
		$i--;
		$spreadsheet->getActiveSheet()->getStyle('A1:AC'. $i)->applyFromArray($styleRow);

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
