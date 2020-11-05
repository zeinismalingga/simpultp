<?php 
class Tu_apbn_model extends CI_Model {

	public function add($id_sertifikasi){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_tu' => $this->input->post('no_tu'),
			'kadar_air' => $this->input->post('kadar_air'),
			'kemurnian' => $this->input->post('kemurnian'),
			'daya_berkecambah' => $this->input->post('daya_berkecambah'),
			'tgl_tu' => $this->input->post('tgl_tu'),
		);		
		return $this->db->insert('tu_apbn', $data);
	}

	public function edit($id){
		$data = array(
			'no_tu' => $this->input->post('no_tu'),
			'kadar_air' => $this->input->post('kadar_air'),
			'kemurnian' => $this->input->post('kemurnian'),
			'daya_berkecambah' => $this->input->post('daya_berkecambah'),
			'tgl_tu' => $this->input->post('tgl_tu'),
		);		
		$this->db->where('id_tu_apbn', $id);
		return $this->db->update('tu_apbn', $data);
	}

	
	public function add_asal($id_tu, $no_asal){
		$data = array(
			'id_tu_apbn' => $id_tu,
			'no_asal' => $no_asal,
		);		
		return $this->db->insert('input_lab_apbn', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM tu_apbn ORDER BY id_tu_apbn DESC LIMIT 1");      
        return $query->row_array();
    }

    public function get_all($id = null){ 
    	if($id == NULL){
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, varietas WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas");		
			return $query->result_array();
    	}else{
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, varietas, jenis_tanaman, kelas_benih WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas AND sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND tu_apbn.id_tu_apbn = $id");		
			return $query->row_array();
    	}
				
	}

	public function cek_no($id_sertifikasi){
		$query = $this->db->query("SELECT * FROM tu_apbn WHERE id_sertifikasi = $id_sertifikasi");      
        return $query->row_array();
	}

	public function cek_asal($id_tu){
		$query = $this->db->query("SELECT * FROM input_lab_apbn WHERE id_tu_apbn = $id_tu");      
        return $query->row_array();
	}


}