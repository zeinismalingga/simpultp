<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lab_apbd extends MY_Controller {

	private $anggaran = 2;
	private $class = "lab_input";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}
	
	public function list_lab(){
		$data['lab'] = $this->lab_apbd_model->get_all();
		$data['class'] = $this->class;
		$data['anggaran'] = "APBD";
		$data['id_lab'] = "id_lab";

		// dd($data['sertifikasi']);		
		$this->template->load('admin/template/template', 'admin/lab/list', $data);
	}
	
}
