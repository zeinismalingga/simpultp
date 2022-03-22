<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab extends MY_Controller {

	private $class = "lab";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_lab(){
		$data['lab_apbn'] = $this->lab_apbn_model->get_all();
		$data['lab_apbd'] = $this->lab_apbd_model->get_all();
		$data['class'] = $this->class;
		$data['id_lab'] = "id_lab";

		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/lab/list', $data);
	}

	public function edit($id_lab){

		$data['lab'] = $this->lab_model->get_all($id_lab);
		$data['id_lab'] = $id_lab;
		// dd($data['lab']);
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/lab_input/edit', $data);
		}else{	

			//input lab 
			$id_lab_anggaran = $id_lab;

			// die($id_lab_anggaran);	

			$this->lab_model->edit($id_lab_anggaran);			
			redirect('lab/list_lab');			
		}
	}

	public function delete($id_lab){
		$lab = $this->lab_model->get_all($id_lab);

		$this->lab_model->delete($id_lab, $lab['anggaran']);
	
		redirect('lab/list_lab');
	}

	public function print($id_lab){

		$lab = $this->lab_model->get_all($id_lab);

		// dd($lab);

		$anggaran = $lab['anggaran'];

		$data['lab'] = $this->lab_model->print($id_lab, $anggaran);
	
		$this->load->view('admin/lab/print', $data);
	}

	public function approve($id){
		$sertifikasi = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array();
		$posisi = $sertifikasi['posisi'] + 1;
		// dd($posisi);
		$this->db->query("UPDATE sertifikasi SET posisi = $posisi WHERE id_sertifikasi = $id");
		$this->session->set_flashdata('notif', 'Lab berhasil di-approve');
		redirect("admin");
	}
	
}
