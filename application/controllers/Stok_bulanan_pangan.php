<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stok_bulanan_pangan extends MY_Controller {

	private $class = "stok_bulanan_pangan";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function pilih(){
		$data['komoditis'] = $this->master_model->get_jenis_varietas();	
		$data['bulans'] = $this->master_model->get_bulan();	
		$data['class'] = $this->class;	
		$this->template->load('admin/template/template', 'admin/stok_bulanan_pangan/pilih', $data);
	}

	public function list(){
		$data['id_komoditi'] = $this->input->get('id_komoditi');
		$data['id_bulan'] = $this->input->get('id_bulan');
		$data['class'] = $this->class;
		$data['stok_pangan'] = $this->stok_bulanan_pangan_model->get_all('',$data['id_komoditi'], $data['id_bulan']);

		$this->template->load('admin/template/template', 'admin/stok_bulanan_pangan/list', $data);
	}

	public function add($id_komoditi, $id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['id_komoditi'] = $id_komoditi;
			$data['id_bulan'] = $id_bulan;
			$data['kotas'] = $this->master_model->get_kota();
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['varietas'] = $this->master_model->get_varietas2($id_komoditi);

			$this->template->load('admin/template/template', 'admin/stok_bulanan_pangan/add', $data);
		}else{			

			$this->stok_bulanan_pangan_model->add($id_komoditi, $id_bulan);
			redirect("stok_bulanan_pangan/list?id_komoditi=$id_komoditi&id_bulan=$id_bulan");		
		}
			
	}

	public function edit($id, $id_komoditi, $id_bulan){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['id_komoditi'] = $id_komoditi;
			$data['id_bulan'] = $id_bulan;
			$data['class'] = $this->class;
			$data['kotas'] = $this->master_model->get_kota();
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['varietas'] = $this->master_model->get_varietas2($id_komoditi);
			$data['stok_pangan'] = $this->stok_bulanan_pangan_model->get_all($id,$id_komoditi, $id_bulan);

			$this->template->load('admin/template/template', 'admin/stok_bulanan_pangan/edit', $data);
		}else{			
			$this->stok_bulanan_pangan_model->edit($id_komoditi, $id_bulan);
			redirect("stok_bulanan_pangan/list?id_komoditi=$id_komoditi&id_bulan=$id_bulan");		
		}
			
	}

	public function delete($id, $id_komoditi, $id_bulan){
		$this->stok_bulanan_pangan_model->delete($id);
		redirect("stok_bulanan_pangan/list?id_komoditi=$id_komoditi&id_bulan=$id_bulan");			
	}

	public function print($id_komoditi, $id_bulan){
		$data['id_komoditi'] = $id_komoditi;
		$data['id_bulan'] = $id_bulan;
		$data['class'] = $this->class;
		$data['stok_pangan'] = $this->stok_bulanan_pangan_model->get_all('',$data['id_komoditi'], $data['id_bulan']);

		$data['total_kelas_bd'] = $this->stok_bulanan_pangan_model->total_kelas_bd($data['id_komoditi'], $data['id_bulan']);
		$data['total_kelas_bp'] = $this->stok_bulanan_pangan_model->total_kelas_bp($data['id_komoditi'], $data['id_bulan']);
		$data['total_kelas_br'] = $this->stok_bulanan_pangan_model->total_kelas_br($data['id_komoditi'], $data['id_bulan']);
		$data['jumlah'] = $this->stok_bulanan_pangan_model->jumlah($data['id_komoditi'], $data['id_bulan']);

		$this->load->view('admin/stok_bulanan_pangan/print', $data);
	}
	
}
