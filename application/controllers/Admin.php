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
		$data['pemlap1_apbn'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND sertifikasi.posisi = 1 AND tu_apbn.no_pemlap1 != '' AND tu_apbn.tgl_pemlap1 != '' AND tu_apbn.cvl_pemlap1 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['pemlap1_apbd'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND sertifikasi.posisi = 1 AND tu_apbd.no_pemlap1 != '' AND tu_apbd.tgl_pemlap1 != '' AND tu_apbd.cvl_pemlap1 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['pemlap2_apbn'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND sertifikasi.posisi = 2 AND tu_apbn.no_pemlap2 != '' AND tu_apbn.tgl_pemlap2 != '' AND tu_apbn.cvl_pemlap2 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['pemlap2_apbd'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND sertifikasi.posisi = 2 AND tu_apbd.no_pemlap2 != '' AND tu_apbd.tgl_pemlap2 != '' AND tu_apbd.cvl_pemlap2 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['pemlap3_apbn'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND sertifikasi.posisi = 3 AND tu_apbn.no_pemlap3 != '' AND tu_apbn.tgl_pemlap3 != '' AND tu_apbn.cvl_pemlap3 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['pemlap3_apbd'] = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE  sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND sertifikasi.posisi = 3 AND tu_apbd.no_pemlap3 != '' AND tu_apbd.tgl_pemlap3 != '' AND tu_apbd.cvl_pemlap3 != '' AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan GROUP BY sertifikasi.id_sertifikasi")->result_array();
		$data['lab_apbn'] = $this->lab_apbn_model->get_all_approve();
		$data['lab_apbd'] = $this->lab_apbd_model->get_all_approve();
		$this->template->load('admin/template/template', 'admin/home', $data);
	}
	

}
