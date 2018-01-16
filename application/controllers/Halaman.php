<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function __construct() 
    {
		parent::__construct(); 
	}   
    
// User
	public function home()
	{
		$data['title'] = 'Beranda | Tim Nasional Indonesia';
		$this->load->view('template/header', $data);
        $this->load->view('user/home');
        $this->load->view('template/footer');
	}

	public function about()
	{
		$data['title'] = 'Tentang | Tim Nasional Indonesia';
		$this->load->view('template/header', $data);
        $this->load->view('user/about');
        $this->load->view('template/footer');
	}

	public function squad()
	{
		$data['title'] = 'Skuad Tim | Tim Nasional Indonesia';
		$data['sql'] = $this->m_timnas->ambildata();
		$this->load->view('template/header', $data);
        $this->load->view('user/squad', $data);
		$this->load->view('template/footer');
	
	}

	public function photos()
	{
		$data['title'] = 'Galeri | Tim Nasional Indonesia';
		$this->load->view('template/header', $data);
		$this->load->view('user/photos');
		$this->load->view('template/footer');	
	
	}

	public function contact()
	{
		$data['title'] = 'Kontak | Tim Nasional Indonesia';
		$this->load->view('template/header', $data);
		$this->load->view('user/contact');
		$this->load->view('template/footer');
	}


// Admin
	
	 
	public function simpan()
	{
		$pil = $this->input->post('pil');
		$no = $this->input->post('no');
       	$nama = $this->input->post('nama'); 
       	$posisi = $this->input->post('posisi');
       	$klub = $this->input->post('klub');
        
       	$data = array(  
       		'no'=> $no,  
			'nama'=> $nama, 
			'posisi'=> $posisi, 
			'klub'=> $klub
			);
         
		if($pil == 'tambah')
		{
			$this->m_timnas->simpandata($data);     
		}else{
			$this->m_timnas->updatedata($no,$data);
		}
		
		redirect('Admin/pemainAdmin');
		         
	}



	



	

}