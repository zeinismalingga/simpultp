<?php 
class Tu_apbd_model extends CI_Model {

	public function get_rekomendasi(){ 
    	$query = $this->db->query("SELECT * FROM sertifikasi LEFT JOIN inventaris_produsen ON sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan INNER JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi");		
		return $query->result_array();	
	}
	
	public function add($id_sertifikasi){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_rekomendasi' => $this->input->post('no_rekomendasi'),
			'tgl_rekomendasi' => $this->input->post('tgl_rekomendasi'),
		);		
		return $this->db->insert('tu_apbd', $data);
	}

	public function edit($id){
		$data = array(
			'no_tu' => $this->input->post('no_tu'),
			'kadar_air' => $this->input->post('kadar_air'),
			'kemurnian' => $this->input->post('kemurnian'),
			'daya_berkecambah' => $this->input->post('daya_berkecambah'),
			'tgl_tu' => $this->input->post('tgl_tu'),
		);		
		$this->db->where('id_tu_apbd', $id);
		return $this->db->update('tu_apbd', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_tu_apbd', $id);
		return $this->db->delete('tu_apbd', $data);		
	}

	public function add_asal($id_tu, $no_asal){
		$data = array(
			'id_tu_apbd' => $id_tu,
			'no_asal' => $no_asal,
		);		
		return $this->db->insert('input_lab_apbd', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM input_lab_apbd ORDER BY id_input_lab_apbd DESC LIMIT 1");      
        return $query->row_array();
    }

   public function get_all($id = null){ 
    	if($id == NULL){
    		$query = $this->db->query("SELECT * FROM sertifikasi INNER JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi INNER JOIN input_lab_apbd ON tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd INNER JOIN lab_apbd ON input_lab_apbd.id_tu_apbd = lab_apbd.id_tu_apbd INNER JOIN lab ON lab.id_lab_anggaran = lab_apbd.id_lab_apbd INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas");		
			return $query->result_array();
    	}else{
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, varietas, jenis_tanaman, kelas_benih WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND tu_apbd.id_tu_apbd = $id");		
			return $query->row_array();
    	}
				
	}

	public function get_list(){ 
    	$query = $this->db->query("SELECT *, sertifikasi.id_sertifikasi AS id_sertifikasi, tu_apbd.id_tu_apbd AS id_tu_apbd FROM sertifikasi LEFT JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi LEFT JOIN jenis_varietas ON sertifikasi.id_jenis_varietas LEFT JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas LEFT JOIN inventaris_produsen ON sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN input_lab_apbd ON tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd LEFT JOIN lab ON input_lab_apbd.id_input_lab_apbd = lab.id_lab_anggaran WHERE sertifikasi.jenis_anggaran = 2 AND sertifikasi.posisi >= 1 GROUP BY sertifikasi.id_sertifikasi");		
		return $query->result_array();	
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