<?php
class Auth extends MY_Controller {

	public function login()
	{
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/auth/login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->auth_model->login($username, $password);

			if($user){
				$user_data = array(
					'username' => $user['username'],
					'user_id' => $user['id_user'],
					'level' => $user['level'],
					"logged_in" => 1
				);

				$this->session->set_userdata($user_data);

				redirect('admin');
			}else{
				// set message
				$this->session->set_flashdata('error', 'Username or Password is incorrect');
				$this->load->view('admin/auth/login');
			}
		}

	}

	public function add_user()
	{
		$this->isAdmin();

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if($this->form_validation->run() === FALSE){

			$this->template->load('admin/template/template', 'admin/auth/tambah');	
		}else{
			$this->auth_model->add_user();

			redirect('auth/list_user');
		}
		
	}

	public function edit($id)
	{
		// $this->isAdmin();

		$data['users'] = $this->auth_model->get_users($id);

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		if($this->form_validation->run() === FALSE){
			$this->template->load('admin/template/template', 'admin/auth/edit', $data);	
		}else{
			$this->auth_model->edit_user($id);

			redirect('auth/list_user');
		}
		
	}

	public function logout(){
		$this->session->sess_destroy();

		$this->load->view('admin/auth/login');
	}

	public function delete($id){
		$this->cekLogin();
		$this->isAdmin();

		$this->auth_model->delete($id);
		redirect('auth/list_user');
	}

	public function list_user(){
		$this->cekLogin();
		$this->isAdmin();

		$data['users'] = $this->auth_model->get_users();

		$this->template->load('admin/template/template', 'admin/auth/list', $data);	
	}
}
