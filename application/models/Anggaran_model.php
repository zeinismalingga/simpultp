<?php 
class Anggaran_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id) FROM t_anggaran");           
        return $query->row_array();		
	}

	public function get_all($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM t_anggaran ORDER BY id DESC");		
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM t_anggaran WHERE id = $id ORDER BY id DESC");
			return $query->row_array();	
		}		
	}

	public function add(){
		$data = array(
			'namaBelanja' => $this->input->post('namaBelanja'),
			'kodeRekening' => $this->input->post('kodeRekening'),
		);		

		return $this->db->insert('t_anggaran', $data);
	}

	public function edit($id){
		$data = array(
			'namaBelanja' => $this->input->post('namaBelanja'),
			'kodeRekening' => $this->input->post('kodeRekening'),
		);			

		$this->db->where('id', $id);
		return $this->db->update('t_anggaran', $data);
	}

	public function delete($id){
		$data = $this->db->where('id', $id);
		return $this->db->delete('t_anggaran', $data);		
	}

}