<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Sertifikasi_apbn extends MY_Controller {

	private $anggaran = 1;
	private $class = "sertifikasi_apbn";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_sertifikasi(){
		$data['sertifikasi'] = $this->tu_apbn_model->get_rekomendasi();
		$data['class'] = $this->class;
		$data['class_tu'] = "tu_apbn";
		$data['anggaran'] = "APBN";
		// dd($data['sertifikasi']);		
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
			
			redirect('sertifikasi_apbn/list_sertifikasi');			
		}
	}

	public function edit($id){	
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id, $this->anggaran);
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['musim_tanam'] = $this->master_model->get_musim_tanam();
		$data['pemohons'] = $this->inventaris_produsen_model->get_all();
		$data['kelas_benih2'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih2']);

		// dd($data['kelas_benih2']);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/edit', $data);
		}else{	
			$this->sertifikasi_model->edit($this->anggaran, $id);
			$this->session->set_flashdata('notif', 'Data berhasil disimpan');
			redirect('sertifikasi_apbn/list_sertifikasi');			
		}
	}

	public function delete($id){
		$this->sertifikasi_model->delete($id);
		redirect('sertifikasi_apbn/list_sertifikasi');			
	}

	public function print($id){
		$data['sertifikasi'] = $this->sertifikasi_model->rekomendasi($id, $this->anggaran);
		$data['kelas_benih2'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih2']);

		// dd($data['sertifikasi']);

		$this->load->view('admin/sertifikasi/print', $data);
	}

	public function print_llhp($id){
		$anggaran = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array()['jenis_anggaran'];

		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $anggaran);

		if($data['sertifikasi']){
			$this->load->view('admin/sertifikasi/print_llhp', $data);
		}else{
			$this->session->set_flashdata('notif', 'Data Lab atau TU Belum diinput');

			redirect("wasar/list");
		}
	}

	public function print_llhp2($id){
		$anggaran = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array()['jenis_anggaran'];

		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $anggaran);
		
		if($data['sertifikasi']){
			$this->load->view('admin/sertifikasi/print_llhp2', $data);
		}else{
			$this->session->set_flashdata('notif', 'Data Lab atau TU Belum diinput');

			redirect("wasar/list");
		}
	}

	public function print_sertifikat($id){
		$anggaran = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array()['jenis_anggaran'];
		
		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $anggaran);
			
		$this->load->view('admin/sertifikasi/print_sertifikat', $data);
	}

	public function print_pemlab1($id){
		$data['sertifikasi'] = $this->sertifikasi_model->pemlap1($id, $this->anggaran);
		// dd($data['sertifikasi']);
		$this->load->view('admin/sertifikasi/print_pemlab1', $data);
	}

	public function print_pemlab2($id){
		$data['sertifikasi'] = $this->sertifikasi_model->pemlap1($id, $this->anggaran);	
		$this->load->view('admin/sertifikasi/print_pemlab2', $data);
	}

	public function print_pemlab3($id){
		$data['sertifikasi'] = $this->sertifikasi_model->pemlap1($id, $this->anggaran);	
		$this->load->view('admin/sertifikasi/print_pemlab3', $data);
	}

	public function detail($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	

		$this->template->load('admin/template/template', 'admin/sertifikasi/detail', $data);
	}

	public function export_excel(){
		$sertifikasi = $this->db->query("SELECT * FROM sertifikasi LEFT JOIN inventaris_produsen ON sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN kelas_benih ON sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih LEFT JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas LEFT JOIN kota ON inventaris_produsen.id_kota = kota.id_kota LEFT JOIN kecamatan ON inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan LEFT JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi LEFT JOIN input_lab_apbn ON tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn LEFT JOIN lab ON lab.id_lab_anggaran = input_lab_apbn.id_input_lab_apbn")->result_array();

		// dd($sertifikasi);

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
		$sheet->setCellValue('AD1', 'Taksiran Hasil');

		//load data
		$i = 3;
		$no = 1;
		$array = 0;
		foreach ($sertifikasi as $sertifikasi_item) {
			$kelas_benih2 = $this->master_model->get_kelas_benih2($sertifikasi_item['id_kelas_benih2']);

			$sheet->setCellValue('A'.$i, $no++);
			$sheet->setCellValue('B'.$i, $sertifikasi_item['nama_produsen']);
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
			$sheet->setCellValue('N'.$i, isset($kelas_benih2['singkatan']) ? $kelas_benih2['singkatan'] : '');
			$sheet->setCellValue('O'.$i, $sertifikasi_item['nama_varietas']);
			$sheet->setCellValue('P'.$i, $sertifikasi_item['singkatan']);
			$sheet->setCellValue('Q'.$i, tgl_indo($sertifikasi_item['tgl_rekomendasi']));
			$sheet->setCellValue('R'.$i, '');
			$sheet->setCellValue('S'.$i, isset($sertifikasi_item['tgl_tanam']) ? tgl_indo($sertifikasi_item['tgl_tanam']) : '' );
			$sheet->setCellValue('T'.$i, isset($sertifikasi_item['tgl_pemlap1']) ? tgl_indo($sertifikasi_item['tgl_pemlap1']) : '' );
			$sheet->setCellValue('U'.$i, $sertifikasi_item['luas_pemlap_1']);
			$sheet->setCellValue('V'.$i, $sertifikasi_item['cvl_pemlap1']);
			$sheet->setCellValue('W'.$i, isset($sertifikasi_item['tgl_pemlap2']) ? tgl_indo($sertifikasi_item['tgl_pemlap2']) : '' );
			$sheet->setCellValue('X'.$i, $sertifikasi_item['luas_pemlap_2']);
			$sheet->setCellValue('Y'.$i, $sertifikasi_item['cvl_pemlap2']);
			$sheet->setCellValue('Z'.$i, isset($sertifikasi_item['tgl_pemlap3']) ? tgl_indo($sertifikasi_item['tgl_pemlap3']) : '' );
			$sheet->setCellValue('AA'.$i, $sertifikasi_item['luas_pemlap_3']);
			$sheet->setCellValue('AB'.$i, $sertifikasi_item['cvl_pemlap3']);
			$sheet->setCellValue('AC'.$i, isset($sertifikasi_item['tgl_panen']) ? tgl_indo($sertifikasi_item['tgl_panen']) : '' );
			$sheet->setCellValue('AD'.$i, isset($sertifikasi_item['produksi']) ? $sertifikasi_item['produksi'] : '' );

			$i++;
			$array++;
		}

		// apply style colloum
		$spreadsheet->getActiveSheet()->getStyle('A1:AD2')->applyFromArray($styleCol);

		// apply style default
		$i--;
		$spreadsheet->getActiveSheet()->getStyle('A1:AD'. $i)->applyFromArray($styleRow);

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
		$filename = 'laporan-sertifikasi-apbn';
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="'. $filename .'.xlsx"'); 
		header('Cache-Control: max-age=0');

		$writer->save('php://output');

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

	public function pemlap($id){
		$sertifikasi = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array();
		$posisi = $sertifikasi['posisi'] + 1;
		// dd($posisi);
		$this->db->query("UPDATE sertifikasi SET posisi = $posisi WHERE id_sertifikasi = $id");
		$this->session->set_flashdata('notif', 'Sertifikasi berhasil di-approve');
		redirect("admin");
	}
	
}
