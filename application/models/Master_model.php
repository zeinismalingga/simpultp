<?php 
class Master_model extends CI_Model {

	public function get_kota(){
		$query = $this->db->query("SELECT * FROM kota");
        return $query->result_array();		
	}

	public function get_kecamatan($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM kecamatan");
        	return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM kecamatan WHERE id_kota = $id");
        	return $query->result();	
		}	
	}

	public function get_kelas_benih(){
		$query = $this->db->query("SELECT * FROM kelas_benih");
        return $query->result_array();		
	}

	public function get_kelas_benih2($id = NULL){
			
        if($id == NULL){
			$query = $this->db->query("SELECT * FROM kelas_benih");
        	return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM kelas_benih WHERE id_kelas_benih = $id");
        	return $query->row_array();
		}	
	}

	public function get_varietas($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM varietas");
        	return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM varietas WHERE jenis = $id");
        	return $query->result();
		}
				
	}

	public function get_varietas2($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM varietas");
        	return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM varietas WHERE jenis = $id");
        	return $query->result_array();
		}
				
	}

	public function get_jenis_varietas($id = NULL){
		$query = $this->db->query("SELECT * FROM jenis_varietas");
        return $query->result_array();		
	}

	public function get_musim_tanam($id = NULL){
		$query = $this->db->query("SELECT * FROM musim_tanam");
        return $query->result_array();		
	}

	public function get_bulan(){
		$query = $this->db->query("SELECT * FROM bulan");
        return $query->result_array();		
	}

	public function get_komoditi(){
		$query = $this->db->query("SELECT * FROM komoditi");
        return $query->result_array();		
	}
}