<?php 
class Varietas_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id_varietas) as total FROM varietas");
        return $query->row_array();		
	}

	public function get_jenis(){
		$query = $this->db->query("SELECT * FROM jenis_varietas");		
		return $query->result_array();
	}

	public function get_all($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM varietas, jenis_varietas WHERE varietas.jenis = jenis_varietas.id_jenis_varietas ORDER BY varietas.id_varietas DESC");		
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM varietas WHERE id_varietas = $id ORDER BY id_varietas DESC");
			return $query->row_array();	
		}		
	}

	public function add(){
		$data = array(
			'nama_varietas' => $this->input->post('nama_varietas'),
			'kode' => $this->input->post('kode'),
			'jenis' => $this->input->post('jenis'),
		);		

		return $this->db->insert('varietas', $data);
	}

	public function edit($id){
		$data = array(
			'nama_varietas' => $this->input->post('nama_varietas'),
			'kode' => $this->input->post('kode'),
			'jenis' => $this->input->post('jenis'),
		);					

		$this->db->where('id_varietas', $id);
		return $this->db->update('varietas', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_varietas', $id);
		return $this->db->delete('varietas', $data);		
	}

}