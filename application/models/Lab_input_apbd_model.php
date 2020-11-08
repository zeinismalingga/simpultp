<?php 
class Lab_input_apbd_model extends CI_Model {

	public function add_apbd($id_tu, $nomor){
		$data = array(
			'id_tu_apbd' => $id_tu,
			'nomor' => $nomor
		);		
		return $this->db->insert('lab_apbd', $data);
	}

	public function get_max_id(){
        $query = $this->db->query("SELECT * FROM lab_apbd ORDER BY id_lab_apbd DESC LIMIT 1");      
        return $query->row_array();
    }

    public function get_all(){ 
		$query = $this->db->query("SELECT *, input_lab_apbd.id_tu_apbd as id_tu_apbd FROM sertifikasi INNER JOIN tu_apbd ON sertifikasi.id_sertifikasi = tu_apbd.id_sertifikasi INNER JOIN input_lab_apbd ON tu_apbd.id_tu_apbd = input_lab_apbd.id_tu_apbd LEFT JOIN lab_apbd ON input_lab_apbd.id_tu_apbd = lab_apbd.id_tu_apbd INNER JOIN jenis_varietas ON sertifikasi.id_jenis_varietas = jenis_varietas.id_jenis_varietas INNER JOIN varietas ON sertifikasi.id_varietas = varietas.id_varietas INNER JOIN kelas_benih ON sertifikasi.id_kelas_benih = kelas_benih.id_kelas_benih");		
		return $query->result_array();		
	}

	public function cek_no($id_tu){
		$query = $this->db->query("SELECT * FROM lab_apbd WHERE id_tu_apbd = $id_tu");      
        return $query->row_array();
	}


}