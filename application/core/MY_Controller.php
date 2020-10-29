<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
  public function cekLogin()
  {
    if (!$this->session->userdata('logged_in')) {
      // set message
      $this->session->set_flashdata('error', 'Sorry, You Must Login First!');
      redirect('auth/login');
    }else{
      // redirect('spt_apbd/list_apbd');
    }
  }

  public function isAdmin(){
  	if($this->session->userdata('level') != "admin"){
  		show_404();
  	}
  }
}