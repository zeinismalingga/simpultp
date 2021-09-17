<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_mutu_pangan extends MY_Controller {

	private $class = "cek_mutu_pangan";

	function __construct(){
		parent::__construct();		
		$this->cekLogin();
	}

	public function list(){
		$data['class'] = $this->class;
		$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN jenis_varietas ON cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON cek_mutu_pangan.id_varietas = varietas.id_varietas LEFT JOIN kelas_benih ON cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih")->result_array();

		// dd($data['cek_mutu']);	
		$level = $this->session->userdata('level');

		if($level == 'tu' || $level == 'admin'){
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/list', $data);
		}elseif($level == 'lab'){
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/list_lab', $data);
		}elseif($level == 'wasar'){
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/list_wasar', $data);
		}
		
	}

	public function add(){

		if($this->form_validation->run() === FALSE){	
			$data['class'] = $this->class;
			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas();
			$data['kelas_benih'] = $this->master_model->get_kelas_benih();
			$data['varietas'] = $this->master_model->get_varietas();

			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/add', $data);
		}else{	

			$data = array(
				'no_contoh_benih' => $this->input->post('no_contoh_benih'),
				'kadar_air' => $this->input->post('kadar_air'),
				'kemurnian' => $this->input->post('kemurnian'),
				'daya_berkecambah' => $this->input->post('daya_berkecambah'),
				'tgl_pengambilan_cth' => $this->input->post('tgl_pengambilan_cth'),
				'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'tgl_panen' => $this->input->post('tgl_panen'),
				'berat_contoh_benih' => $this->input->post('berat_contoh_benih'),
				'catatan' => $this->input->post('catatan'),
			);	

			$this->db->insert('cek_mutu_pangan', $data);
			redirect("cek_mutu_pangan/list");		
		}
			
	}

	public function edit($id){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['class'] = $this->class;
			$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan, jenis_varietas, varietas, kelas_benih WHERE cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas AND cek_mutu_pangan.id_varietas = varietas.id_varietas AND cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih AND cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();

			$data['jenis_varietas'] = $this->master_model->get_jenis_varietas();
			$data['kelas_benih'] = $this->master_model->get_kelas_benih();
			$data['varietas'] = $this->master_model->get_varietas();
			// dd($data['cek_mutu']);
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/edit', $data);
		}else{			
			$data = array(
				'no_contoh_benih' => $this->input->post('no_contoh_benih'),
				'kadar_air' => $this->input->post('kadar_air'),
				'kemurnian' => $this->input->post('kemurnian'),
				'daya_berkecambah' => $this->input->post('daya_berkecambah'),
				'tgl_pengambilan_cth' => $this->input->post('tgl_pengambilan_cth'),
				'id_jenis_varietas' => $this->input->post('id_jenis_varietas'),
				'id_varietas' => $this->input->post('id_varietas'),
				'id_kelas_benih' => $this->input->post('id_kelas_benih'),
				'tgl_panen' => $this->input->post('tgl_panen'),
				'berat_contoh_benih' => $this->input->post('berat_contoh_benih'),
				'catatan' => $this->input->post('catatan'),
			);	

			$this->db->where('id_cek_mutu_pangan', $id);
			$this->db->update('cek_mutu_pangan', $data);
			redirect("cek_mutu_pangan/list");	
		}
			
	}

	public function edit_lab($id){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['class'] = $this->class;
			$data['pemohons'] = $this->inventaris_produsen_model->get_all();
			$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();
			// dd($data['cek_mutu']);
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/edit_lab', $data);
		}else{			
			$data = array(
				'id_produsen' => $this->input->post('id_produsen'),
				'tonase' => $this->input->post('tonase'),
				'wadah' => $this->input->post('wadah'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'tgl_pengujian' => $this->input->post('tgl_pengujian'),
				'tgl_hasil' => $this->input->post('tgl_hasil'),
				'benih_murni' => $this->input->post('benih_murni'),
				'kotoran_benih' => $this->input->post('kotoran_benih'),
				'benih_tanaman_lain' => $this->input->post('benih_tanaman_lain'),
				'biji_gulma' => $this->input->post('biji_gulma'),
				'kadar_air_persen' => $this->input->post('kadar_air_persen'),
				'daya_berkecambah_persen' => $this->input->post('daya_berkecambah_persen'),
				'benih_murni_hu' => $this->input->post('benih_murni_hu'),
				'kotoran_benih_hu' => $this->input->post('kotoran_benih_hu'),
				'benih_tanaman_lain_hu' => $this->input->post('benih_tanaman_lain_hu'),
				'biji_gulma_hu' => $this->input->post('biji_gulma_hu'),
				'kadar_air_hu' => $this->input->post('kadar_air_hu'),
				'daya_berkecambah_hu' => $this->input->post('daya_berkecambah_hu'),
			);	

			$this->db->where('id_cek_mutu_pangan', $id);
			$this->db->update('cek_mutu_pangan', $data);
			redirect("cek_mutu_pangan/list");	
		}
			
	}

	public function edit_wasar($id){

		if($this->form_validation->run() === FALSE){	
			$data['id'] = $id;
			$data['class'] = $this->class;
			$data['pemohons'] = $this->inventaris_produsen_model->get_all();
			$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();
			// dd($data['cek_mutu']);
			$this->template->load('admin/template/template', 'admin/cek_mutu_pangan/edit_wasar', $data);
		}else{			
			$data = array(
				'no_surat_pengantar' => $this->input->post('no_surat_pengantar'),
			);	

			$this->db->where('id_cek_mutu_pangan', $id);
			$this->db->update('cek_mutu_pangan', $data);
			redirect("cek_mutu_pangan/list");	
		}
			
	}

	public function delete($id){
		$this->cek_mutu_pangan_model->delete($id);
		redirect("cek_mutu_pangan/list");			
	}

	public function print($id){
		$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN jenis_varietas ON cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON cek_mutu_pangan.id_varietas = varietas.id_varietas LEFT JOIN kelas_benih ON cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();

		$this->load->view('admin/cek_mutu_pangan/print', $data);			
	}

	public function print_lab($id){
		$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN jenis_varietas ON cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON cek_mutu_pangan.id_varietas = varietas.id_varietas LEFT JOIN kelas_benih ON cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();

		$this->load->view('admin/cek_mutu_pangan/print_lab', $data);			
	}

	public function print_pengantar($id){
		$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN jenis_varietas ON cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON cek_mutu_pangan.id_varietas = varietas.id_varietas LEFT JOIN kelas_benih ON cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih LEFT JOIN kota ON inventaris_produsen.id_kota = kota.id_kota WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();

		$this->load->view('admin/cek_mutu_pangan/print_pengantar', $data);			
	}

	public function print_permohonan($id){
		$data['cek_mutu'] = $this->db->query("SELECT * FROM cek_mutu_pangan LEFT JOIN inventaris_produsen ON cek_mutu_pangan.id_produsen = inventaris_produsen.id_inventaris_pangan LEFT JOIN jenis_varietas ON cek_mutu_pangan.id_jenis_varietas = jenis_varietas.id_jenis_varietas LEFT JOIN varietas ON cek_mutu_pangan.id_varietas = varietas.id_varietas LEFT JOIN kelas_benih ON cek_mutu_pangan.id_kelas_benih = kelas_benih.id_kelas_benih LEFT JOIN kota ON inventaris_produsen.id_kota = kota.id_kota WHERE cek_mutu_pangan.id_cek_mutu_pangan = $id")->row_array();

		$this->load->view('admin/cek_mutu_pangan/print_permohonan', $data);			
	}
	
}
