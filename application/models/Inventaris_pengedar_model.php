<?php
class Inventaris_pengedar_model extends CI_Model {

	public function get_all($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM inventaris_pengedar, jenis_varietas, kelas_benih WHERE inventaris_pengedar.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND inventaris_pengedar.id_kelas_benih = kelas_benih.id_kelas_benih");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM inventaris_pengedar, jenis_varietas, kelas_benih WHERE inventaris_pengedar.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND inventaris_pengedar.id_kelas_benih = kelas_benih.id_kelas_benih AND inventaris_pengedar.id_inventaris_pengedar = $id");
			return $query->row_array();
		}
	}

	public function add(){
		$data = array(
			'no_rekomendasi' => $this->input->post('no_rekomendasi'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'nama_pimpinan' => $this->input->post('nama_pimpinan'),
			'bentuk_usaha' => $this->input->post('bentuk_usaha'),
			'alamat_lokasi_usaha' => $this->input->post('alamat_lokasi_usaha'),
			'alamat_pimpinan' => $this->input->post('alamat_pimpinan'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'tgl_inventaris_pengedar' => $this->input->post('tgl_inventaris_pengedar'),
		);
		return $this->db->insert('inventaris_pengedar', $data);
	}

	public function edit($id){
		$data = array(
			'no_rekomendasi' => $this->input->post('no_rekomendasi'),
			'nama_perusahaan' => $this->input->post('nama_perusahaan'),
			'nama_pimpinan' => $this->input->post('nama_pimpinan'),
			'bentuk_usaha' => $this->input->post('bentuk_usaha'),
			'alamat_lokasi_usaha' => $this->input->post('alamat_lokasi_usaha'),
			'alamat_pimpinan' => $this->input->post('alamat_pimpinan'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'tgl_inventaris_pengedar' => $this->input->post('tgl_inventaris_pengedar'),
		);

		$this->db->where('id_inventaris_pengedar', $id);
		return $this->db->update('inventaris_pengedar', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_inventaris_pengedar', $id);
		return $this->db->delete('inventaris_pengedar', $data);
	}

}
