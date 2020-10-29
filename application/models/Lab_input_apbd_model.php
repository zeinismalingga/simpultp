<?php 
class Lab_input_apbd_model extends CI_Model {

	public function add_apbd($id_tu, $nomor){
		$data = array(
			'id_tu_apbd' => $id_tu,
			'nomor' => $nomor
		);		
		return $this->db->insert('lab_apbd', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM lab_apbd ORDER BY id_lab_apbd DESC LIMIT 1");      
        return $query->row_array();
    }

     public function get_all(){ 
		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, input_lab_apbd, varietas, jenis_tanaman, kelas_benih WHERE varietas.id_varietas = sertifikasi.id_varietas and sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd AND jenis_tanaman.id_jenis_tanaman = sertifikasi.id_jenis_tanaman AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih");		
		return $query->result_array();			
	}

	public function cek_no($id_tu){
		$query = $this->db->query("SELECT * FROM lab_apbd WHERE id_tu_apbd = $id_tu");      
        return $query->row_array();
	}


}