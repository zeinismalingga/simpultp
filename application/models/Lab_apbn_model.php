<?php 
class Lab_apbn_model extends CI_Model {

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM lab, input_lab_apbn, tu_apbn, sertifikasi WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND lab.id_lab_anggaran = input_lab_apbn.id_input_lab_apbn");		
		return $query->result_array();		
	}

	public function get_all_approve(){ 
		$query = $this->db->query("SELECT * FROM lab, input_lab_apbn, tu_apbn, sertifikasi WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND lab.id_lab_anggaran = input_lab_apbn.id_input_lab_apbn AND sertifikasi.posisi = 4");		
		return $query->result_array();		
	}

}