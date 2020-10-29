<?php 
class Tu_apbd_model extends CI_Model {

	public function add($id_sertifikasi){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_tu' => $this->input->post('no_tu'),
		);		
		return $this->db->insert('tu_apbd', $data);
	}

	public function add_asal($id_tu, $no_asal){
		$data = array(
			'id_tu_apbd' => $id_tu,
			'no_asal' => $no_asal,
		);		
		return $this->db->insert('input_lab_apbd', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM tu_apbd ORDER BY id_tu_apbd DESC LIMIT 1");      
        return $query->row_array();
    }

   public function get_all($id){ 
    	if($id == NULL){
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, varietas WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas");		
			return $query->result_array();
    	}else{
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, varietas, jenis_tanaman, kelas_benih WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas AND sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND tu_apbd.id_tu_apbd = $id");		
			return $query->row_array();
    	}
				
	}


	public function cek_no($id_sertifikasi){
		$query = $this->db->query("SELECT * FROM tu_apbd WHERE id_sertifikasi = $id_sertifikasi");      
        return $query->row_array();
	}

	public function cek_asal($id_tu){
		$query = $this->db->query("SELECT * FROM input_lab_apbd WHERE id_tu_apbd = $id_tu");      
        return $query->row_array();
	}



}