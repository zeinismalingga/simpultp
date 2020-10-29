<?php 
class Lab_apbn_model extends CI_Model {

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM lab");		
		return $query->result_array();		
	}

}