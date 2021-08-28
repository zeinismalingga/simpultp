<?php 
class Lab_apbd_model extends CI_Model {

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM lab, input_lab_apbd, tu_apbd, sertifikasi WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd AND lab.id_lab_anggaran = input_lab_apbd.id_input_lab_apbd");		
		return $query->result_array();		
	}

	public function get_all_approve(){ 
		$query = $this->db->query("SELECT * FROM lab, input_lab_apbd, tu_apbd, sertifikasi WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd AND lab.id_lab_anggaran = input_lab_apbd.id_input_lab_apbd AND sertifikasi.posisi = 4");		
		return $query->result_array();		
	}

	


}