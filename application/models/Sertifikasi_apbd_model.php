<?php 
class Sertifikasi_apbd_model extends CI_Model {

	public function add($id_sertifikasi, $nomor){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'nomor' => $nomor,
		);		
		return $this->db->insert('sertifikasi_apbd', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM sertifikasi_apbd ORDER BY id_sertifikasi DESC LIMIT 1");      
        return $query->row_array();
    }

}