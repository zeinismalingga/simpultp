<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wasar extends MY_Controller {

	private $class = "wasar";

	function __construct(){
		parent::__construct();
		$this->cekLogin();
	}

	public function list_apbn(){
		$data['class'] = $this->class;
		$data['wasar'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, input_lab_apbn, lab WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND input_lab_apbn.id_input_lab_apbn = lab.id_lab_anggaran AND sertifikasi.posisi = 5 AND sertifikasi.jenis_anggaran = 1")->result_array();

		// dd($data['wasar']);

		$this->template->load('admin/template/template', 'admin/wasar/list', $data);
	}

	public function list_apbd(){
		$data['class'] = $this->class;
		$data['wasar'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, input_lab_apbd, lab WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd AND input_lab_apbd.id_input_lab_apbd = lab.id_lab_anggaran AND sertifikasi.posisi = 5 AND sertifikasi.jenis_anggaran = 2")->result_array();

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
				'tgl_akhir_label' => $this->input->post('tgl_akhir_label'),
				'tgl_pengantar_llhp' => $this->input->post('tgl_pengantar_llhp'),
				'tgl_llhp' => $this->input->post('tgl_llhp'),
				'no_sertifikat' => $this->input->post('no_sertifikat'),
			);	

			$this->db->where('id_sertifikasi', $id);
			$this->db->update('sertifikasi', $data);

			redirect("wasar/list");
		}

	}

}
