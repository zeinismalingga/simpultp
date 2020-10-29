<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_mutu_pangan extends MY_Controller {

	private $class = "cek_mutu_pangan";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function pilih(){
		$data['bulans'] = $this->master_model->get_bulan();	
		$data['class'] = $this->class;	
		$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/pilih', $data);
	}

	public function list(){
		$data['id_bulan'] = $this->input->get('id_bulan');
		$data['class'] = $this->class;
		$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all('',$data['id_bulan']);

		// dd($data['cek_mutu']);	

		$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/list', $data);
	}

	public function add($id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['id_bulan'] = $id_bulan;
			$data['komoditis'] = $this->master_model->get_komoditi();

			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/add', $data);
		}else{			

			$this->cek_mutu_pangan_model->add($id_bulan);
			redirect("cek_mutu_pangan/list?id_bulan=$id_bulan");		
		}
			
	}

	public function edit($id, $id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['id_bulan'] = $id_bulan;
			$data['class'] = $this->class;
			$data['komoditis'] = $this->master_model->get_komoditi();
			$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all($id ,$data['id_bulan']);

			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/edit', $data);
		}else{			
			$this->cek_mutu_pangan_model->edit($id);
			redirect("cek_mutu_pangan/list?id_bulan=$id_bulan");	
		}
			
	}

	public function delete($id, $id_bulan){
		$this->cek_mutu_pangan_model->delete($id);
		redirect("cek_mutu_pangan/list?id_bulan=$id_bulan");			
	}

	public function print($id_bulan){
		$data['id_bulan'] = $id_bulan;
		$data['class'] = $this->class;
		$data['cek_mutu'] = $this->cek_mutu_pangan_model->get_all('',$data['id_bulan']);

		$this->load->view('admin/cek_mutu_pangan/print', $data);
	}
	
}
