<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris_produsen extends MY_Controller {

	private $class = "inventaris_produsen";

	function __construct(){
		parent::__construct();
		$this->cekLogin();
	}

	public function list(){
		$data['class'] = $this->class;
		$data['inventaris'] = $this->inventaris_produsen_model->get_all();

		$this->template->load('admin/template/template', 'admin/inventaris_produsen/list', $data);
	}

	public function add(){

		if($this->form_validation->run() === FALSE){
			$data['class'] = $this->class;
			$data['kotas'] = $this->master_model->get_kota();

			$this->template->load('admin/template/template', 'admin/inventaris_produsen/add', $data);
		}else{

			$this->inventaris_produsen_model->add();
			redirect("inventaris_produsen/list");
		}

	}

	public function edit($id){

		if($this->form_validation->run() === FALSE){
			$data['class'] = $this->class;
			$data['kotas'] = $this->master_model->get_kota();
			$data['kecamatans'] = $this->master_model->get_kecamatan();
			$data['inventaris'] = $this->inventaris_produsen_model->get_all($id);

			$this->template->load('admin/template/template', 'admin/inventaris_produsen/edit', $data);
		}else{
			$this->inventaris_produsen_model->edit($id);
			redirect("inventaris_produsen/list");
		}

	}

	public function delete($id){
		$this->inventaris_produsen_model->delete($id);
		redirect("inventaris_produsen/list");
	}

	public function print(){
		$data['class'] = $this->class;
		$data['kotas'] = $this->master_model->get_kota();
			$data['kecamatans'] = $this->master_model->get_kecamatan();
			$data['inventaris'] = $this->inventaris_produsen_model->get_all();

		$this->load->view('admin/inventaris_produsen/print', $data);
	}

}
