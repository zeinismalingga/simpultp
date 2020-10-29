<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tu_apbn extends MY_Controller {

	private $anggaran = 1;
	private $class = "tu_apbn";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_tu(){
		$data['sertifikasi'] = $this->tu_apbn_model->get_all(NULL, $this->anggaran);
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
	
}
