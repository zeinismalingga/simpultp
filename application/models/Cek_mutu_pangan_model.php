<?php 
class Cek_mutu_pangan_model extends CI_Model {

	public function add($id_bulan){
		$data = array(
			'id_bulan' => $id_bulan,
			'id_komoditi' => $this->input->post('id_komoditi'),
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'memenuhi_standar_perkilo' => $this->input->post('memenuhi_standar_perkilo'),
			'memenuhi_standar_persen' => $this->input->post('memenuhi_standar_persen'),
			'dibawah_standar_perkilo' => $this->input->post('dibawah_standar_perkilo'),
			'dibawah_standar_persen' => $this->input->post('dibawah_standar_persen'),
		);		
		return $this->db->insert('cek_mutu_pangan', $data);
	}

	public function edit($id){
		$data = array(
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'memenuhi_standar_perkilo' => $this->input->post('memenuhi_standar_perkilo'),
			'memenuhi_standar_persen' => $this->input->post('memenuhi_standar_persen'),
			'dibawah_standar_perkilo' => $this->input->post('dibawah_standar_perkilo'),
			'dibawah_standar_persen' => $this->input->post('dibawah_standar_persen'),
		);				

		$this->db->where('id_cek_mutu_pangan', $id);
		return $this->db->update('cek_mutu_pangan', $data);
	}

	public function delete($id){
		$data = $this->db->where('id_cek_mutu_pangan', $id);
		return $this->db->delete('cek_mutu_pangan', $data);		
	}



}