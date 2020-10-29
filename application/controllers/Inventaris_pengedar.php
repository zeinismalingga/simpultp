<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_pengedar extends MY_Controller {

	private $class = "inventaris_pengedar";

	function __construct(){
		parent::__construct();
		$this->cekLogin();
	}

	public function list(){
		$data['class'] = $this->class;
		$data['inventaris'] = $this->inventaris_pengedar_model->get_all();

		$this->template->load('admin/template/template', 'admin/inventaris_pengedar/list', $data);
	}

	public function add(){

		if($this->form_validation->run() === FALSE){
			$data['class'] = $this->class;
			$data['kotas'] = $this->master_model->get_kota();
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
			
			$this->template->load('admin/template/template', 'admin/inventaris_pengedar/add', $data);
		}else{

			$this->inventaris_pengedar_model->add();
			redirect("inventaris_pengedar/list");
		}

	}

	public function edit($id){

		if($this->form_validation->run() === FALSE){
			$data['class'] = $this->class;
			$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
			$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
			$data['inventaris'] = $this->inventaris_pengedar_model->get_all($id);

			$this->template->load('admin/template/template', 'admin/inventaris_pengedar/edit', $data);
		}else{
			$this->inventaris_pengedar_model->edit($id);
			redirect("inventaris_pengedar/list");
		}

	}

	public function delete($id){
		$this->inventaris_pengedar_model->delete($id);
		redirect("inventaris_pengedar/list");
	}

	public function print(){
		$data['class'] = $this->class;
		$data['kotas'] = $this->master_model->get_kota();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['inventaris'] = $this->inventaris_pengedar_model->get_all();

		$this->load->view('admin/inventaris_pengedar/print', $data);
	}

	public function print_rekomendasi($id){
		$data['class'] = $this->class;
		$data['kotas'] = $this->master_model->get_kota();
		$data['kelas_benihs'] = $this->master_model->get_kelas_benih();
		$data['jenis_varietass'] = $this->master_model->get_jenis_varietas();
		$data['inventaris'] = $this->inventaris_pengedar_model->get_all($id);

		$this->load->view('admin/inventaris_pengedar/print_rekomendasi', $data);
	}

}
