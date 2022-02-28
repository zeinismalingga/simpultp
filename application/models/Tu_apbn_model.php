<?php 
class Tu_apbn_model extends CI_Model {

	public function get_rekomendasi(){ 
    	$query = $this->db->query("SELECT * FROM sertifikasi LEFT JOIN inventaris_produsen ON sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan INNER JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi");		
		return $query->result_array();	
	}

	public function add($id_sertifikasi){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_rekomendasi' => $this->input->post('no_rekomendasi'),
			'tgl_rekomendasi' => $this->input->post('tgl_rekomendasi'),
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

	public function delete($id){
		$data = $this->db->where('id_tu_apbn', $id);
		return $this->db->delete('tu_apbn', $data);		
	}

	
	public function add_asal($id_tu, $no_asal){
		$data = array(
			'id_tu_apbn' => $id_tu,
			'no_asal' => $no_asal,
		);		
		return $this->db->insert('input_lab_apbn', $data);
	}

	public function get_id(){
        $query = $this->db->query("SELECT * FROM input_lab_apbn ORDER BY id_input_lab_apbn DESC LIMIT 1");      
        return $query->row_array();
    }

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM input_lab_apbn ORDER BY id_input_lab_apbn DESC LIMIT 1");      
        return $query->row_array();
    }

    public function get_all($id = null){ 
    	if($id == NULL){
    		$query = $this->db->query("SELECT * FROM sertifikasi INNER JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi INNER JOIN input_lab_apbn ON tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn INNER JOIN lab_apbn ON input_lab_apbn.id_tu_apbn = lab_apbn.id_tu_apbn INNER JOIN lab ON lab.id_lab_anggaran = lab_apbn.id_lab_apbn INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas");		
			return $query->result_array();
    	}else{
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, varietas, jenis_tanaman, kelas_benih WHERE sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND tu_apbn.id_tu_apbn = $id");		
			return $query->row_array();
    	}
				
	}

	public function get_list(){ 
    	$query = $this->db->query("SELECT *, sertifikasi.id_sertifikasi AS id_sertifikasi, tu_apbn.id_tu_apbn AS id_tu_apbn FROM sertifikasi LEFT JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi LEFT JOIN jenis_varietas ON sertifikasi.id_jenis_varietas LEFT JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas LEFT JOIN inventaris_produsen ON sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN input_lab_apbn ON tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn LEFT JOIN lab ON input_lab_apbn.id_input_lab_apbn = lab.id_lab_anggaran WHERE sertifikasi.jenis_anggaran = 1 AND sertifikasi.posisi >= 1 GROUP BY sertifikasi.id_sertifikasi");		
		return $query->result_array();	
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