<?php 
class Tu_apbd_model extends CI_Model {

	public function add($id_sertifikasi){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_tu' => $this->input->post('no_tu'),
			'kadar_air' => $this->input->post('kadar_air'),
			'kemurnian' => $this->input->post('kemurnian'),
			'daya_berkecambah' => $this->input->post('daya_berkecambah'),
			'tgl_tu' => $this->input->post('tgl_tu'),
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
			'no_pemlap1' => $this->input->post('no_pemlap1'),
			'no_pemlap2' => $this->input->post('no_pemlap2'),
			'no_pemlap3' => $this->input->post('no_pemlap3'),
			'no_llhp' => $this->input->post('no_llhp'),
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
        $query = $this->db->query("SELECT * FROM tu_apbd ORDER BY id_tu_apbd DESC LIMIT 1");      
        return $query->row_array();
    }

   public function get_all($id = null){ 
    	if($id == NULL){
    		$query = $this->db->query("SELECT * FROM sertifikasi INNER JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi INNER JOIN input_lab_apbd ON tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd INNER JOIN lab_apbd ON input_lab_apbd.id_tu_apbd = lab_apbd.id_tu_apbd INNER JOIN lab ON lab.id_lab_anggaran = lab_apbd.id_lab_apbd INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas");		
			return $query->result_array();
    	}else{
    		$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, varietas, jenis_tanaman, kelas_benih WHERE sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND varietas.id_varietas = sertifikasi.id_varietas AND sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND tu_apbd.id_tu_apbd = $id");		
			return $query->row_array();
    	}
				
	}

	public function get_list(){ 
    	$query = $this->db->query("SELECT *, tu_apbd.id_tu_apbd as id_tu_apbd FROM sertifikasi INNER JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas INNER JOIN kota ON sertifikasi.id_kabupaten = kota.id_kota INNER JOIN kecamatan ON sertifikasi.id_kecamatan = kecamatan.id_kecamatan INNER JOIN kelas_benih ON sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih LEFT JOIN input_lab_apbd ON tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd LEFT JOIN lab_apbd ON lab_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd LEFT JOIN lab ON lab.id_lab_anggaran = lab_apbd.id_lab_apbd");		
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