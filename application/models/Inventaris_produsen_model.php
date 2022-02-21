<?php
class Inventaris_produsen_model extends CI_Model {

	public function get_all($id = NULL){
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM inventaris_produsen, kota, kecamatan WHERE inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM inventaris_produsen, kota, kecamatan WHERE inventaris_produsen.id_kota = kota.id_kota AND inventaris_produsen.id_kecamatan = kecamatan.id_kecamatan AND inventaris_produsen.id_inventaris_pangan = $id");
			return $query->row_array();
		}
	}

	public function add(){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'desa' => $this->input->post('desa'),
			'id_kota' => $this->input->post('id_kota'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'alamat' => $this->input->post('alamat'),
			'nama_pimpinan' => $this->input->post('nama_pimpinan'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'no_hp' => $this->input->post('no_hp'),
			'lamanya_usaha' => $this->input->post('lamanya_usaha'),
			'modal_kerja' => $this->input->post('modal_kerja'),
			'kapasitas_produksi' => $this->input->post('kapasitas_produksi'),
			'kemampuan_produksi' => $this->input->post('kemampuan_produksi'),
			'bumn' => $this->input->post('bumn'),
			'diperta_prov' => $this->input->post('diperta_prov'),
			'diperta_kab' => $this->input->post('diperta_kab'),
			'swasta' => $this->input->post('swasta'),
			'produksi_benih' => $this->input->post('produksi_benih'),
			'ijin_produksi' => $this->input->post('ijin_produksi'),
			'mendapat_bantuan' => $this->input->post('mendapat_bantuan'),
			'no_kelompok_benih' => $this->input->post('no_kelompok_benih'),
		);
		return $this->db->insert('inventaris_produsen', $data);
	}

	public function edit($id){
		$data = array(
			'nama_produsen' => $this->input->post('nama_produsen'),
			'desa' => $this->input->post('desa'),
			'id_kota' => $this->input->post('id_kota'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'alamat' => $this->input->post('alamat'),
			'nama_pimpinan' => $this->input->post('nama_pimpinan'),
			'luas_lahan' => $this->input->post('luas_lahan'),
			'no_hp' => $this->input->post('no_hp'),
			'lamanya_usaha' => $this->input->post('lamanya_usaha'),
			'modal_kerja' => $this->input->post('modal_kerja'),
			'kapasitas_produksi' => $this->input->post('kapasitas_produksi'),
			'kemampuan_produksi' => $this->input->post('kemampuan_produksi'),
			'bumn' => $this->input->post('bumn'),
			'diperta_prov' => $this->input->post('diperta_prov'),
			'diperta_kab' => $this->input->post('diperta_kab'),
			'swasta' => $this->input->post('swasta'),
			'produksi_benih' => $this->input->post('produksi_benih'),
			'ijin_produksi' => $this->input->post('ijin_produksi'),
			'mendapat_bantuan' => $this->input->post('mendapat_bantuan'),
			'no_kelompok_benih' => $this->input->post('no_kelompok_benih'),
		);

		$this->db->where('id_inventaris_pangan', $id);
		return $this->db->update('inventaris_produsen', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_inventaris_pangan', $id);
		return $this->db->delete('inventaris_produsen', $data);
	}

}
