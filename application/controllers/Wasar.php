<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wasar extends MY_Controller {

	private $class = "wasar";

	function __construct(){
		parent::__construct();
		$this->cekLogin();
	}

	public function list(){
		$data['class'] = $this->class;
		$data['wasar'] = $this->db->query("SELECT * FROM sertifikasi WHERE posisi = 5")->result_array();

		// dd($data['wasar']);

		$this->template->load('admin/template/template', 'admin/wasar/list', $data);
	}

	public function edit($id){

		if($this->form_validation->run() === FALSE){
			$data['class'] = $this->class;
			$data['wasar'] = $this->db->query("SELECT * FROM sertifikasi WHERE id_sertifikasi = $id")->row_array();

			$this->template->load('admin/template/template', 'admin/wasar/edit', $data);
		}else{
			$data = array(
				'tgl_pemeriksaan_alat_panen' => $this->input->post('tgl_pemeriksaan_alat_panen'),
				'tgl_panen' => $this->input->post('tgl_panen'),
				'jml_sample' => $this->input->post('jml_sample'),
				'produksi' => $this->input->post('produksi'),
				'tgl_penerima_contoh' => $this->input->post('tgl_penerima_contoh'),
				'tgl_pengujian' => $this->input->post('tgl_pengujian'),
				'tgl_selesai_pengujian' => $this->input->post('tgl_selesai_pengujian'),
				'jml_wadah' => $this->input->post('jml_wadah'),
				'tgl_laporan' => $this->input->post('tgl_laporan'),
				'no_sertifikat' => $this->input->post('no_sertifikat'),
			);	

			$this->db->where('id_sertifikasi', $id);
			$this->db->update('sertifikasi', $data);

			redirect("wasar/list");
		}

	}

}
