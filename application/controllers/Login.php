
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() 
	{ 
		if($this->session->userdata('logged_in')) 
		{ 
		redirect('Admin/pemainAdmin', 'refresh'); 
		}else{
			$this->load->view('template/header-admin');
			$this->load->view('admin/login');
			$this->load->view('template/footer-admin'); 
		} 
    }

    public function cek_login() 
	{ 
		if($this->input->post('username', true) == "" && $this->input->post('password', true) == "")
		{ 
		redirect('', 'refresh'); 
		} 
			$username = $this->input->post('username', true); 
			$password = $this->input->post('password', true); 
			$this->m_login->cek_login($username, $password); 
    }
    
    public function logout()
	{ 
 		$this->session->unset_userdata('logged_in'); 
		redirect('login', 'refresh'); 
	}
}