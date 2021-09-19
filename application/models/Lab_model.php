<?php 
class Lab_model extends CI_Model {

	public function get_all($id_lab = NULL){ 
		if($id_lab == NULL){
			$query = $this->db->query("SELECT * FROM lab");		
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi,jenis_tanaman, varietas, lab, kelas_benih, jenis_varietas WHERE sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND lab.id_lab = $id_lab");
			return $query->row_array();	
		}		
	}

	public function add($id_lab_anggaran, $id_anggaran){
		$data = array(
			'id_lab_anggaran' => $id_lab_anggaran,
			'anggaran' => $id_anggaran,
		);		
		return $this->db->insert('lab', $data);
	}

	public function edit($id){
		$data = array(
			'no_lab' => $this->input->post('no_lab'),
			'kadar_air' => $this->input->post('kadar_air'),
			'metode_ka' => $this->input->post('metode_ka'),
			'berat_cnth_kerja' => $this->input->post('berat_cnth_kerja'),
			'benih_murni' => $this->input->post('benih_murni'),
			'benih_tan_lain' => $this->input->post('benih_tan_lain'),
			'kotoran_benih' => $this->input->post('kotoran_benih'),
			'metode_kemurnian' => $this->input->post('metode_kemurnian'),
			'benih_gulma_gr' => $this->input->post('benih_gulma_gr'),
			'benih_gulma_persen' => $this->input->post('benih_gulma_persen'),
			'jangka_waktu_pengujian' => $this->input->post('jangka_waktu_pengujian'),
			'kecambah_normal' => $this->input->post('kecambah_normal'),
			'kecambah_abnormal' => $this->input->post('kecambah_abnormal'),
			'benih_keras' => $this->input->post('benih_keras'),
			'benih_segar' => $this->input->post('benih_segar'),
			'benih_mati' => $this->input->post('benih_mati'),
			'metode_daya_berkecambah' => $this->input->post('metode_daya_berkecambah'),
			'ket' => $this->input->post('ket'),
			'suhu' => $this->input->post('suhu'),
			'media' => $this->input->post('media'),
			'abnormalis' => $this->input->post('abnormalis'),
			'catatan' => $this->input->post('catatan'),
			'tgl_pengujian' => $this->input->post('tgl_pengujian'),
			'tgl_selesai_pengujian' => $this->input->post('tgl_selesai_pengujian'),
			'hasil' => $this->input->post('hasil'),
		);		
		
		$this->db->where('id_lab', $id);
		return $this->db->update('lab', $data);
	}

	public function delete($id, $id_anggaran){
		if($id_anggaran == 1){
			$query = $this->db->query("DELETE lab, lab_apbn FROM lab, lab_apbn WHERE lab_apbn.id_lab_apbn = lab.id_lab_anggaran AND lab.id_lab = $id");
			return $query;
		}else{
			$query = $this->db->query("DELETE lab, lab_apbd FROM lab, lab_apbd WHERE lab_apbd.id_lab_apbd = lab.id_lab_anggaran AND lab.id_lab = $id");
			return $query;
		}	
	}

	public function cek_no($id_sertifikasi){
		$query = $this->db->query("SELECT * FROM lab_apbn WHERE id_sertifikasi = $id_sertifikasi");      
        return $query->row_array();
	}

	public function print($id_lab, $anggaran){ 
		if($anggaran == 1){
			$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbn, input_lab_apbn,lab, jenis_tanaman, varietas, kelas_benih WHERE sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND lab.id_lab = $id_lab");		
			return $query->row_array();	
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi, tu_apbd, input_lab_apbd, lab, jenis_tanaman, varietas, kelas_benih WHERE sertifikasi.id_jenis_tanaman = jenis_tanaman.id_jenis_tanaman AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd AND lab.id_lab = $id_lab");
			return $query->row_array();	
		}		
	}


}