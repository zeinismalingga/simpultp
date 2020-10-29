<?php 
class Stok_bulanan_pangan_model extends CI_Model {

	public function total(){
		$query = $this->db->query("SELECT COUNT(id_sertifikasi) as total FROM sertifikasi");
        return $query->row_array();		
	}

	public function get_all($id = NULL, $id_komoditi, $id_bulan){ 
		if($id == NULL){
			$query = $this->db->query("SELECT * FROM stok_pangan, jenis_varietas, bulan, kota, kelas_benih, varietas WHERE stok_pangan.id_komoditi = jenis_varietas.id_jenis_varietas AND stok_pangan.id_bulan = bulan.id_bulan AND stok_pangan.id_kota = kota.id_kota AND stok_pangan.id_kelas_benih = kelas_benih.id_kelas_benih AND stok_pangan.id_varietas = varietas.id_varietas AND stok_pangan.id_komoditi = $id_komoditi AND stok_pangan.id_bulan = $id_bulan");	
			return $query->result_array();	
		}else{
			$query = $this->db->query("SELECT * FROM stok_pangan, jenis_varietas, bulan, kota, kelas_benih, varietas WHERE stok_pangan.id_komoditi = jenis_varietas.id_jenis_varietas AND stok_pangan.id_bulan = bulan.id_bulan AND stok_pangan.id_kota = kota.id_kota AND stok_pangan.id_kelas_benih = kelas_benih.id_kelas_benih AND stok_pangan.id_varietas = varietas.id_varietas AND stok_pangan.id_komoditi = $id_komoditi AND stok_pangan.id_bulan = $id_bulan AND stok_pangan.id_stok_pangan = $id");
			return $query->row_array();	
		}		
	}

	public function add($id_komoditi, $id_bulan){
		$data = array(
			'id_komoditi' => $id_komoditi,
			'id_bulan' => $id_bulan,
			'id_kota' => $this->input->post('id_kota'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'id_varietas' => $this->input->post('id_varietas'),
			'sisa_stok_bln_lalu' => $this->input->post('sisa_stok_bln_lalu'),
			'produksi_benih' => $this->input->post('produksi_benih'),
			'pengadaan_luar_prov' => $this->input->post('pengadaan_luar_prov'),
			'penyaluran_luar_prov' => $this->input->post('penyaluran_luar_prov'),
			'subsidi_benih' => $this->input->post('subsidi_benih'),
			'nonsubsidi_benih' => $this->input->post('nonsubsidi_benih'),
		);		
		return $this->db->insert('stok_pangan', $data);
	}

	public function edit($id){
		$data = array(
			'id_kota' => $this->input->post('id_kota'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'id_varietas' => $this->input->post('id_varietas'),
			'sisa_stok_bln_lalu' => $this->input->post('sisa_stok_bln_lalu'),
			'produksi_benih' => $this->input->post('produksi_benih'),
			'pengadaan_luar_prov' => $this->input->post('pengadaan_luar_prov'),
			'penyaluran_luar_prov' => $this->input->post('penyaluran_luar_prov'),
			'subsidi_benih' => $this->input->post('subsidi_benih'),
			'nonsubsidi_benih' => $this->input->post('nonsubsidi_benih'),
		);				

		$this->db->where('id_stok_pangan', $id);
		return $this->db->update('stok_pangan', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_stok_pangan', $id);
		return $this->db->delete('stok_pangan', $data);		
	}

	public function total_kelas_bd($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM stok_pangan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 2");
		return $query->result_array();		
	}

	public function total_kelas_bp($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM stok_pangan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 3");
		return $query->result_array();		
	}

	public function total_kelas_br($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM stok_pangan WHERE id_komoditi = 1 AND id_bulan = 1 AND id_kelas_benih = 4");
		return $query->result_array();		
	}

	public function jumlah($id_komoditi, $id_bulan){
		$query = $this->db->query("SELECT * FROM stok_pangan WHERE id_komoditi = 1 AND id_bulan = 1");
		return $query->result_array();		
	}



}