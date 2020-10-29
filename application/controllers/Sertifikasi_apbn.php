<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sertifikasi_apbn extends MY_Controller {

	private $anggaran = 1;
	private $class = "sertifikasi_apbn";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_sertifikasi(){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all(NULL, $this->anggaran);
		$data['class'] = $this->class;
		$data['class_tu'] = "tu_apbn";
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
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);
		$data['kotas'] = $this->master_model->get_kota();
		$data['kecamatans'] = $this->master_model->get_kecamatan();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['varietass'] = $this->master_model->get_varietas();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['musim_tanam'] = $this->master_model->get_musim_tanam();
		$data['kelas_benih'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih2']);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/sertifikasi/edit', $data);
		}else{	
			$this->sertifikasi_model->edit($this->anggaran, $id);

			redirect('sertifikasi_apbn/list_sertifikasi');			
		}
	}

	public function delete($id){
		$this->sertifikasi_model->delete($id);
		redirect('sertifikasi_apbn/list_sertifikasi');			
	}

	public function print($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);
		$data['kelas_benih'] = $this->master_model->get_kelas_benih2($data['sertifikasi']['id_kelas_benih2']);

		$this->load->view('admin/sertifikasi/print', $data);
	}

	public function print_llhp($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $this->anggaran);	
	
		$this->load->view('admin/sertifikasi/print_llhp', $data);
	}

	public function print_sertifikat($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_llhp($id, $this->anggaran);	
		$this->load->view('admin/sertifikasi/print_sertifikat', $data);
	}

	public function print_pemlab1($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	
		$this->load->view('admin/sertifikasi/print_pemlab1', $data);
	}

	public function print_pemlab2($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	
		$this->load->view('admin/sertifikasi/print_pemlab2', $data);
	}

	public function print_pemlab3($id){
		$data['sertifikasi'] = $this->sertifikasi_model->get_all($id);	
		$this->load->view('admin/sertifikasi/print_pemlab3', $data);
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
	
}
