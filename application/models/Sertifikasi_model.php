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
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, musim_tanam WHERE id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_kabupaten = kota.id_kota AND sertifikasi.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_kelas_benih2 = kelas_benih2.id_kelas_benih2 AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam GROUP BY sertifikasi.id_sertifikasi");
			return $query->row_array();	
		}		
	}

	public function add($anggaran){
		$data = array(
			'id_varietas' => $this->input->post('id_varietas'),
			'id_musim_tanam' => $this->input->post('id_musim_tanam'),
			'no_induk' => $this->input->post('no_induk'),
			'status' => $this->input->post('status'),
			'nomor_sumber' => $this->input->post('nomor_sumber'),
			'pemohon' => $this->input->post('pemohon'),
			'alamat' => $this->input->post('alamat'),
			'luas' => $this->input->post('luas'),
			'id_jenis_tanaman' => $this->input->post('id_jenis_tanaman'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'tgl_tanam' => $this->input->post('tgl_tanam'),
			'blok' => $this->input->post('blok'),
			'kampung' => $this->input->post('kampung'),
			'desa' => $this->input->post('desa'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'id_kabupaten' => $this->input->post('id_kabupaten'),
			'jenis_tanaman' => $this->input->post('jenis_tanaman'),
			'produsen_benih' => $this->input->post('produsen_benih'),
			'asal_benih' => $this->input->post('asal_benih'),
			'id_kelas_benih2' => $this->input->post('id_kelas_benih2'),
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'jenis_anggaran' => $anggaran,
			'tgl_surat' => $this->input->post('tgl_surat'),
			'nama_pbt' => $this->input->post('nama_pbt'),
			'tgl_pemlap_pendahuluan' => $this->input->post('tgl_pemlap_pendahuluan'),
			'kesimpulan_pemlap_pendahuluan' => $this->input->post('kesimpulan_pemlap_pendahuluan'),
			'tgl_kesimpulan' => $this->input->post('tgl_kesimpulan'),
			'no_kelompok_benih' => $this->input->post('no_kelompok_benih'),
			'tgl_semai' => $this->input->post('tgl_semai'),
			'tgl_pemlap_1' => $this->input->post('tgl_pemlap_1'),
			'cvl_pemlap_1' => $this->input->post('cvl_pemlap_1'),
			'luas_pemlap_1' => $this->input->post('luas_pemlap_1'),
			'lulus_1' => $this->input->post('lulus_1'),
			'tgl_pemlap_2' => $this->input->post('tgl_pemlap_2'),
			'cvl_pemlap_2' => $this->input->post('cvl_pemlap_2'),
			'luas_pemlap_2' => $this->input->post('luas_pemlap_2'),
			'lulus_2' => $this->input->post('lulus_2'),
			'tgl_pemlap_3' => $this->input->post('tgl_pemlap_3'),
			'cvl_pemlap_3' => $this->input->post('cvl_pemlap_3'),
			'luas_pemlap_3' => $this->input->post('luas_pemlap_3'),
			'lulus_3' => $this->input->post('lulus_3'),
			'tgl_pemeriksaan_alat_panen' => $this->input->post('tgl_pemeriksaan_alat_panen'),
			'tgl_panen' => $this->input->post('tgl_panen'),
			'produksi' => $this->input->post('produksi'),
			'tgl_permohonan_pengambilan_cb' => $this->input->post('tgl_permohonan_pengambilan_cb'),
			'tgl_pengambilan_contoh_benih' => $this->input->post('tgl_pengambilan_contoh_benih'),
			'tgl_pengiriman_contoh_benih' => $this->input->post('tgl_pengiriman_contoh_benih'),
			'jml_wadah' => $this->input->post('jml_wadah'),
			'jml_sample' => $this->input->post('jml_sample'),

		);		
		return $this->db->insert('sertifikasi', $data);
	}

	public function edit($anggaran, $id){
		$data = array(
			'id_varietas' => $this->input->post('id_varietas'),
			'id_musim_tanam' => $this->input->post('id_musim_tanam'),
			'no_induk' => $this->input->post('no_induk'),
			'status' => $this->input->post('status'),
			'nomor_sumber' => $this->input->post('nomor_sumber'),
			'pemohon' => $this->input->post('pemohon'),
			'alamat' => $this->input->post('alamat'),
			'luas' => $this->input->post('luas'),
			'id_jenis_tanaman' => $this->input->post('id_jenis_tanaman'),
			'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
			'id_kelas_benih' => $this->input->post('id_kelas_benih'),
			'tgl_tanam' => $this->input->post('tgl_tanam'),
			'blok' => $this->input->post('blok'),
			'kampung' => $this->input->post('kampung'),
			'desa' => $this->input->post('desa'),
			'id_kecamatan' => $this->input->post('id_kecamatan'),
			'id_kabupaten' => $this->input->post('id_kabupaten'),
			'jenis_tanaman' => $this->input->post('jenis_tanaman'),
			'produsen_benih' => $this->input->post('produsen_benih'),
			'asal_benih' => $this->input->post('asal_benih'),
			'id_kelas_benih2' => $this->input->post('id_kelas_benih2'),
			'jumlah_benih' => $this->input->post('jumlah_benih'),
			'jenis_anggaran' => $anggaran,
			'tgl_surat' => $this->input->post('tgl_surat'),
			'nama_pbt' => $this->input->post('nama_pbt'),
			'tgl_pemlap_pendahuluan' => $this->input->post('tgl_pemlap_pendahuluan'),
			'kesimpulan_pemlap_pendahuluan' => $this->input->post('kesimpulan_pemlap_pendahuluan'),
			'tgl_kesimpulan' => $this->input->post('tgl_kesimpulan'),
			'no_kelompok_benih' => $this->input->post('no_kelompok_benih'),
			'tgl_semai' => $this->input->post('tgl_semai'),
			'tgl_pemlap_1' => $this->input->post('tgl_pemlap_1'),
			'cvl_pemlap_1' => $this->input->post('cvl_pemlap_1'),
			'luas_pemlap_1' => $this->input->post('luas_pemlap_1'),
			'lulus_1' => $this->input->post('lulus_1'),
			'tgl_pemlap_2' => $this->input->post('tgl_pemlap_2'),
			'cvl_pemlap_2' => $this->input->post('cvl_pemlap_2'),
			'luas_pemlap_2' => $this->input->post('luas_pemlap_2'),
			'lulus_2' => $this->input->post('lulus_2'),
			'tgl_pemlap_3' => $this->input->post('tgl_pemlap_3'),
			'cvl_pemlap_3' => $this->input->post('cvl_pemlap_3'),
			'luas_pemlap_3' => $this->input->post('luas_pemlap_3'),
			'lulus_3' => $this->input->post('lulus_3'),
			'tgl_pemeriksaan_alat_panen' => $this->input->post('tgl_pemeriksaan_alat_panen'),
			'tgl_panen' => $this->input->post('tgl_panen'),
			'produksi' => $this->input->post('produksi'),
			'tgl_permohonan_pengambilan_cb' => $this->input->post('tgl_permohonan_pengambilan_cb'),
			'tgl_pengambilan_contoh_benih' => $this->input->post('tgl_pengambilan_contoh_benih'),
			'tgl_pengiriman_contoh_benih' => $this->input->post('tgl_pengiriman_contoh_benih'),
			'jml_wadah' => $this->input->post('jml_wadah'),
			'jml_sample' => $this->input->post('jml_sample'),
		);					

		$this->db->where('id_sertifikasi', $id);
		return $this->db->update('sertifikasi', $data);
	}

	public function get_llhp($id, $anggaran){
		if($anggaran == 1){
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, tu_apbn, lab, lab_apbn, musim_tanam WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_kabupaten = kota.id_kota AND sertifikasi.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_kelas_benih2 = kelas_benih2.id_kelas_benih2 AND sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi AND tu_apbn.id_tu_apbn = lab_apbn.id_tu_apbn AND lab_apbn.id_lab_apbn = lab.id_lab_anggaran AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam");
		
			return $query->row_array();
		}else{
			$query = $this->db->query("SELECT * FROM sertifikasi, varietas, jenis_varietas, kota, kecamatan, kelas_benih, kelas_benih2, tu_apbd, lab, lab_apbd, musim_tanam WHERE sertifikasi.id_sertifikasi = $id AND sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND sertifikasi.id_varietas = varietas.id_varietas AND sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih AND sertifikasi.id_kabupaten = kota.id_kota AND sertifikasi.id_kecamatan = kecamatan.id_kecamatan AND sertifikasi.id_kelas_benih2 = kelas_benih2.id_kelas_benih2 AND sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi AND tu_apbd.id_tu_apbd = lab_apbd.id_tu_apbd AND lab_apbd.id_lab_apbd = lab.id_lab_anggaran AND sertifikasi.id_musim_tanam = musim_tanam.id_musim_tanam");
		
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

}