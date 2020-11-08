<?php 
class Lab_input_apbn_model extends CI_Model {

	public function add_apbn($id_tu, $nomor){
		$data = array(
			'id_tu_apbn' => $id_tu,
			'nomor' => $nomor
		);		
		return $this->db->insert('lab_apbn', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM lab_apbn ORDER BY id_lab_apbn DESC LIMIT 1");      
        return $query->row_array();
    }

    public function get_all(){ 
		$query = $this->db->query("SELECT *, input_lab_apbn.id_tu_apbn as id_tu_apbn FROM sertifikasi INNER JOIN tu_apbn ON sertifikasi.id_sertifikasi = tu_apbn.id_sertifikasi INNER JOIN input_lab_apbn ON tu_apbn.id_tu_apbn = input_lab_apbn.id_tu_apbn LEFT JOIN lab_apbn ON input_lab_apbn.id_tu_apbn = lab_apbn.id_tu_apbn INNER JOIN jenis_varietas ON sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas INNER JOIN kelas_benih ON sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih");		
		return $query->result_array();		
	}

	public function cek_no($id_tu){
		$query = $this->db->query("SELECT * FROM lab_apbn WHERE id_tu_apbn = $id_tu");      
        return $query->row_array();
	}


}