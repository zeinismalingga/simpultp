<?php 
class Sertifikasi_apbn_model extends CI_Model {

	public function add($id_sertifikasi, $nomor){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'nomor' => $nomor,
		);		
		return $this->db->insert('sertifikasi_apbn', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM sertifikasi_apbn ORDER BY id_sertifikasi DESC LIMIT 1");      
        return $query->row_array();
    }

}