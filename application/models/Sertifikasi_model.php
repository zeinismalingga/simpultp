<?php 
class Sertifikasi_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id_sertifikasi) as total FROM sertifikasi");
        return $query->row_array();		
	}

	public function get_all($id = NULL, $anggaran = NULL){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, musim_tanam WHERE sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_kabupaten = kota.id_kota AND sertifikasi.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_kelas_benih2 = kelas_benih2.id_kelas_benih2 AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam AND sertifikasi.jenis_anggaran = $anggaran GROUP BY sertifikasi.id_sertifikasi");		
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi LEFT JOIN jenis_varietas ON jenis_varietas.id_jenis_varietas = sertifikasi.id_jenis_varietas LEFT JOIN musim_tanam ON musim_tanam.id_musim_tanam = sertifikasi.id_musim_tanam LEFT JOIN varietas ON varietas.id_varietas = sertifikasi.id_varietas LEFT JOIN kelas_benih ON kelas_benih.id_kelas_benih = sertifikasi.id_kelas_benih LEFT JOIN inventaris_produsen ON inventaris_produsen.id_inventaris_pangan = sertifikasi.id_produsen WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.jenis_anggaran = $anggaran");
			return $query->row_array();	
		}		
	}

	public function get_list($anggaran){
		if($anggaran == 2){
			$query = $this->db->query("SELECT *, sertifikasi.id_sertifikasi AS id_sertifikasi FROM sertifikasi LEFT JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi LEFT JOIN jenis_varietas ON sertifikasi.id_jenis_varietas LEFT JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas WHERE sertifikasi.jenis_anggaran = $anggaran GROUP BY sertifikasi.id_sertifikasi");		
			return $query->result_array();	
		}elseif($anggaran == 1){
			$query = $this->db->query("SELECT *, sertifikasi.id_sertifikasi AS id_sertifikasi FROM sertifikasi LEFT JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi LEFT JOIN jenis_varietas ON sertifikasi.id_jenis_varietas LEFT JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas WHERE sertifikasi.jenis_anggaran = $anggaran GROUP BY sertifikasi.id_sertifikasi");		
			return $query->result_array();	
		} 
				
	}

	public function add($anggaran){
		$data = array(
			'jenis_anggaran' => $anggaran,
		);		
		$this->db->insert('sertifikasi', $data);
		return $this->db->insert_id();
	}

	public function edit($anggaran, $id){
		$data = array(
			'id_varietas' => $this->input->post('id_varietas'),
			'id_musim_tanam' => $this->input->post('id_musim_tanam'),
			'no_induk' => $this->input->post('no_induk'),
			'status' => $this->input->post('status'),
			'id_produsen' => $this->input->post('id_produsen'),
			'alamat' => $this->input->post('alamat'),
			'luas' => $this->input->post('luas'),
			'id_jenis_tanaman' => $this->input->post('id_jenis_tanaman'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'id_kelas_benih2' => $this->input->post('id_kelas_benih2'),
			'nomor_sumber' => $this->input->post('nomor_sumber'),
			'tgl_tanam' => $this->input->post('tgl_tanam'),
			'tgl_semai' => $this->input->post('tgl_semai'),
			'jenis_anggaran' => $anggaran,
		);					

		$this->db->where('id_sertifikasi', $id);
		return $this->db->update('sertifikasi', $data);
	}

	public function get_llhp($id, $anggaran){
		if($anggaran == 1){
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, tu_apbn, lab, input_lab_apbn ,musim_tanam, inventaris_produsen WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam AND inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn AND input_lab_apbn.id_input_lab_apbn = lab.id_lab_anggaran GROUP BY sertifikasi.id_sertifikasi");
		
			return $query->row_array();
		}else if($anggaran == 2){
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, tu_apbd, lab, input_lab_apbd ,musim_tanam, inventaris_produsen WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam AND inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbn = input_lab_apbd.id_tu_apbn AND input_lab_apbd.id_input_lab_apbn = lab.id_lab_anggaran GROUP BY sertifikasi.id_sertifikasi");
		
			return $query->row_array();
		}
	}

	public function delete($id){
		$data = $this->db->where('id_sertifikasi', $id);
		return $this->db->delete('sertifikasi', $data);		
	}

	function get_varietas(){
		$id = $this->input->post('id');
		$data = $this->master_model->get_varietas($id);
		echo json_encode($data);
	}

	function get_varietas2($id){
		$query = $this->db->query("SELECT * FROM varietas WHERE id_varietas = $id");
			return $query->row_array();
	}

	public function rekomendasi($id, $anggaran){
		$t_anggaran = $anggaran == '1' ? 'tu_apbn' : 'tu_apbd';
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE sertifikasi.posisi = 0 AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih GROUP BY sertifikasi.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi, $t_anggaran, inventaris_produsen, kota, kecamatan, musim_tanam, varietas, kelas_benih, jenis_varietas WHERE sertifikasi.id_sertifikasi = $t_anggaran.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan AND inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas");
			return $query->row_array();
		}
		
	}

	public function pemlap1($id, $anggaran){
		$t_anggaran = $anggaran == '1' ? 'tu_apbn' : 'tu_apbd';
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE sertifikasi.posisi = 1 AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih GROUP BY sertifikasi.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi, $t_anggaran, inventaris_produsen, kota, kecamatan WHERE sertifikasi.id_sertifikasi = $t_anggaran.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan AND inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan");
			return $query->row_array();
		}
		
	}

	public function pemlap2($id, $anggaran){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE sertifikasi.posisi = 2 AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih GROUP BY sertifikasi.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan");
			return $query->result_array();
		}
		
	}

	public function pemlap3($id, $anggaran){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM sertifikasi, jenis_varietas, varietas, kelas_benih, inventaris_produsen WHERE sertifikasi.posisi = 3 AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND kelas_benih.id_kelas_benih = kelas_benih.id_kelas_benih GROUP BY sertifikasi.id_sertifikasi AND sertifikasi.id_produsen = inventaris_produsen.id_inventaris_pangan");
			return $query->result_array();
		}
		
	}

}