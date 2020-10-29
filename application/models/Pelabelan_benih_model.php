<?php 
class Pelabelan_benih_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id_sertifikasi) as total FROM sertifikasi");
        return $query->row_array();		
	}

	public function get_all($id = NULL, $id_sertifikasi){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_sertifikasi = $id_sertifikasi");	
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_sertifikasi = $id_sertifikasi AND id_pelabelan_benih = $id");
			return $query->row_array();	
		}		
	}

	public function add($id_sertifikasi, $id_anggaran){
		$data = array(
			'id_sertifikasi' => $id_sertifikasi,
			'no_awal' => $this->input->post('no_awal'),
			'no_akhir' => $this->input->post('no_akhir'),
			'berat_kemasan' => $this->input->post('berat_kemasan'),
			'jml_lembar' => $this->input->post('jml_lembar'),
			'total_terlabel' => $this->input->post('total_terlabel'),
			'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
			'jenis_anggaran' => $id_anggaran,
		);		
		return $this->db->insert('pelabelan_benih', $data);
	}

	public function edit($id){
		$data = array(
			'no_awal' => $this->input->post('no_awal'),
			'no_akhir' => $this->input->post('no_akhir'),
			'berat_kemasan' => $this->input->post('berat_kemasan'),
			'jml_lembar' => $this->input->post('jml_lembar'),
			'total_terlabel' => $this->input->post('total_terlabel'),
			'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
		);					

		$this->db->where('id_pelabelan_benih', $id);
		return $this->db->update('pelabelan_benih', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_pelabelan_benih', $id);
		return $this->db->delete('pelabelan_benih', $data);		
	}

	public function total_kelas_bd($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 2");
		return $query->result_array();		
	}

	public function total_kelas_bp($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 3");
		return $query->result_array();		
	}

	public function total_kelas_br($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 4");
		return $query->result_array();		
	}

	public function jumlah($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM pelabelan_benih WHERE id_komoditi = 1 AND id_bulan = 1");
		return $query->result_array();		
	}



}