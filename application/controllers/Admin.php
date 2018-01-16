<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() 
    {
		parent::__construct();
		if(!$this->session->userdata('logged_in')) 
		{ 
			redirect('login'); 
		}  
	} 
    
    public function tambah()
	{ 
		$data['pil']='tambah'; 
		$this->load->view('template/header-admin');
		$this->load->view('admin/form', $data);
		$this->load->view('template/footer-admin');     
	}

	public function ubah($no)
	{   
		$data['pil'] = 'edit';
		$data['sql']=$this->m_timnas->editdata($no);
		$this->load->view('template/header-admin');    
		$this->load->view('admin/form', $data);             
	}

	public function hapus($no)
	{
		$this->m_timnas->hapusdata($no);
		redirect('Admin/pemainAdmin');
    }
    
    public function pemainAdmin()
	{
		$data['sql'] = $this->m_timnas->ambildata();
		$this->load->view('template/header-admin');
		$this->load->view('admin/pemain', $data);
		$this->load->view('template/footer-admin');
	}


}