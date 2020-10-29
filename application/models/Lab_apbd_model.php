<?php 
class Lab_apbd_model extends CI_Model {

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM lab, lab_apbd WHERE lab.id_lab_anggaran = lab_apbd.id_lab_apbd");		
		return $query->result_array();		
	}

	


}