<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_input_apbd extends MY_Controller {

	private $anggaran = 2;
	private $class = "lab_input_apbd";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_lab(){
		$data['sertifikasi'] = $this->lab_input_apbd_model->get_all();
		$data['class'] = $this->class;
		$data['anggaran'] = "APBD";
		$data['id_tu'] = "id_tu_apbd";
		$data['id_lab'] = "id_input_lab_apbn";

		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/lab_input/list', $data);
	}

	public function add($id_tu){

		//cek id tu
		$cek_id = $this->lab_input_apbd_model->cek_no($id_tu);

		if($cek_id){
			$this->session->set_flashdata('notif', 'Data telah di input.');
			redirect('lab_input_apbd/list_lab');
		}

		$data['id_tu'] = $id_tu;

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$this->template->load('admin/template/template', 'admin/lab_input/add', $data);
		}else{	
			// input lab apbn
			$max_id = $this->lab_input_apbd_model->get_max_id();

			$nomor = $max_id['nomor'];
			$nomor = sprintf("%02d", $nomor + 1); 

			$no_lab = "S. $nomor"; 

			$this->lab_input_apbd_model->add_apbd($id_tu, $nomor);

			//input lab 
			$id_lab_anggaran = $this->lab_input_apbd_model->get_max_id();

			$id_lab_anggaran = $id_lab_anggaran['id_lab_apbd'];	

			// die($id_lab_anggaran);	

			// notif
			$this->session->set_flashdata('notif', 'BERHASIL MENAMBAH LAB');

			$this->lab_model->add($id_lab_anggaran, 2);			
			redirect('lab_input_apbd/list_lab');			
		}
	}
	
}
