<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

	function __construct(){
		parent::__construct();			
	}
	
	public function index()
	{
		$this->cekLogin();
		$data['rekomendasi'] = $this->sertifikasi_model->rekomendasi('', '');
		$data['pemlap1'] = $this->sertifikasi_model->pemlap1('', '');
		$data['pemlap2'] = $this->sertifikasi_model->pemlap2('', '');
		$data['pemlap3'] = $this->sertifikasi_model->pemlap3('', '');
		$data['lab_apbn'] = $this->lab_apbn_model->get_all_approve();
		$data['lab_apbd'] = $this->lab_apbd_model->get_all_approve();
		$this->template->load('admin/template/template', 'admin/home', $data);
	}
	

}
