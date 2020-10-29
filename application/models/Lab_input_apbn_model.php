<?php 
class Lab_input_apbn_model extends CI_Model {

	public function add_apbn($id_tu, $nomor){
		$data = array(
			'id_tu_apbn' => $id_tu,
			'nomor' => $nomor
		);		
		return $this->db->insert('lab_apbn', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM lab_apbn ORDER BY id_lab_apbn DESC LIMIT 1");      
        return $query->row_array();
    }

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, input_lab_apbn, varietas, jenis_tanaman, kelas_benih WHERE varietas.id_varietas = sertifikasi.id_varietas and sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND jenis_tanaman.id_jenis_tanaman = sertifikasi.id_jenis_tanaman AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih");		
		return $query->result_array();		
	}

	public function cek_no($id_tu){
		$query = $this->db->query("SELECT * FROM lab_apbn WHERE id_tu_apbn = $id_tu");      
        return $query->row_array();
	}


}