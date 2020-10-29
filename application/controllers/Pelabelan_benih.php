<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelabelan_benih extends MY_Controller {

	private $class = "pelabelan_benih";
	private $anggaran = 1;

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list($id_sertifikasi){
		$data['class'] = $this->class;
		$data['id_sertifikasi'] = $id_sertifikasi;
		$data['pelabelan'] = $this->pelabelan_benih_model->get_all('' ,$id_sertifikasi);

		$this->template->load('admin/template/template', 'admin/pelabelan_benih/list', $data);
	}

	public function add($id_sertifikasi){
		$data['id_sertifikasi'] = $id_sertifikasi;

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;

			$this->template->load('admin/template/template', 'admin/pelabelan_benih/add', $data);
		}else{			
			$this->pelabelan_benih_model->add($id_sertifikasi, $this->anggaran);
			redirect("pelabelan_benih/list/$id_sertifikasi");		
		}
			
	}

	public function edit($id, $id_sertifikasi){
		$data['id'] = $id;
		$data['id_sertifikasi'] = $id_sertifikasi;
		$data['class'] = $this->class;
		$data['pelabelan'] = $this->pelabelan_benih_model->get_all($id ,$id_sertifikasi);

		if($this->form_validation->run() === FALSE){	
			$data['pelabelan'] = $this->pelabelan_benih_model->get_all($id ,$id_sertifikasi);

			$this->template->load('admin/template/template', 'admin/pelabelan_benih/edit', $data);
		}else{			
			$this->pelabelan_benih_model->edit($id);
			redirect("pelabelan_benih/list/$id_sertifikasi");		
		}
			
	}

	public function delete($id, $id_sertifikasi){
		$this->pelabelan_benih_model->delete($id);
		redirect("pelabelan_benih/list/$id_sertifikasi");			
	}

	public function print($id_komoditi, $id_bulan){
		$data['id_komoditi'] = $id_komoditi;
		$data['id_bulan'] = $id_bulan;
		$data['class'] = $this->class;
		$data['stok_pangan'] = $this->pelabelan_benih_model->get_all('',$data['id_komoditi'], $data['id_bulan']);

		$data['total_kelas_bd'] = $this->pelabelan_benih_model->total_kelas_bd($data['id_komoditi'], $data['id_bulan']);
		$data['total_kelas_bp'] = $this->pelabelan_benih_model->total_kelas_bp($data['id_komoditi'], $data['id_bulan']);
		$data['total_kelas_br'] = $this->pelabelan_benih_model->total_kelas_br($data['id_komoditi'], $data['id_bulan']);
		$data['jumlah'] = $this->pelabelan_benih_model->jumlah($data['id_komoditi'], $data['id_bulan']);

		$this->load->view('admin/pelabelan_benih/print', $data);
	}
	
}
