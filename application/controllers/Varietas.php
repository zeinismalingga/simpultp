<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Varietas extends MY_Controller {

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_varietas()
	{
		$data['varietas'] = $this->varietas_model->get_all();		
		$this->template->load('admin/template/template', 'admin/varietas/list', $data);
	}

	public function add()
	{		
		$data['jeniss'] = $this->varietas_model->get_jenis();
		if($this->form_validation->run() === FALSE){
			$this->template->load('admin/template/template', 'admin/varietas/add', $data);
		}else{
			$this->varietas_model->add();
			redirect('varietas/list_varietas');			
		}
	}

	public function edit($edit)
	{	
		$data['varietas'] = $this->varietas_model->get_all($edit);		
		if($this->form_validation->run() === FALSE){
			$this->template->load('admin/template/template', 'admin/varietas/edit', $data);	
		}else{
			$this->varietas_model->edit($edit);
			redirect('varietas/list_varietas');			
		}
	}

	public function delete($id){
		$this->varietas_model->delete($id);
		redirect('varietas/list_varietas');			
	}
}
