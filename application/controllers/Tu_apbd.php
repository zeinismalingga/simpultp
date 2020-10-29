<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tu_apbd extends MY_Controller {

	private $anggaran = 2;
	private $class = "tu_apbd";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_tu(){
		$data['sertifikasi'] = $this->tu_apbd_model->get_all(NULL, $this->anggaran);
		$data['class'] = $this->class;
		$data['anggaran'] = "APBD";
		$data['id_tu'] = "id_tu_apbd";
			
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

			$this->tu_apbn_model->edit($id);
			redirect('tu_apbd/list_tu');		
		}
			
	}

	public function add_asal($id_tu){
		$cek_no = $this->tu_apbd_model->cek_asal($id_tu);

		if($cek_no){
			$this->session->set_flashdata('notif', 'SERTIFIKASI SUDAH DIBERI NO ASAL.');
			redirect('tu_apbn/list_tu');
		}

		// nomor
		$nomor = $this->tu_apbd_model->get_max_id();
		$nomor = $nomor['nomor'];

		$nomor = sprintf("%02d", $nomor); 

		// no asal
		$no_asal = sprintf("%02d", $nomor); 
		$no_asal = "TM. ". $no_asal;

		$this->tu_apbd_model->add_asal($id_tu, $no_asal);
		redirect('tu_apbn/list_tu');	
	}

	public function print($id){
		$data['tu'] = $this->tu_apbd_model->get_all($id);
	
		$this->load->view('admin/tu/print', $data);
	}
}
