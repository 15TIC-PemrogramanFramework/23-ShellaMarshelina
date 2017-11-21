<?php

defined('BASEPATH') OR exit ('NO direct script access allow');

class Welcome extends CI_Controller{
	function __construct()
	{
		
		parent::__construct();
	
		$this->load->model('Tiket_model');
	}

public function index(){

	$this->load->view('Member1/Index');
}

public function about(){

	$this->load->view('Member1/About');
}

public function contact(){

	$this->load->view('Member1/Contact');
}


public function profil(){

	$this->load->view('Member1/Profil');
}



public function register(){

		$this->load->view('Member1/Register');
}


public function login_member(){

	$this->load->view('Member1/Login_member');

}

public function login_memberr(){

	$this->load->view('Member/Login_memberr');

}


public function pemesanan(){

	$this->load->view('Member1/Pemesanan');

}


public function tampil(){

	$data['data_tiket']=$this->Tiket_model->ambil_data();
$this->load->view('Member1/tiket',$data);

}


public function tambah()
		{
			$data=array(
				'a' 			=> site_url('pemesanan/tambah_aksi'),
				'id_tiket'		=> set_value('id_tiket'),
				'nama'			=> set_value('nama'),
				'tgl_berangkat'	=> set_value('tgl_berangkat'),
				'tujuan'		=> set_value('tujuan'),
				'nohp'			=> set_value('nohp'),
				'alamat'		=> set_value('alamat'),
				'button'		=>'Tambah'
				);

			$this->load->view('Pemesanan',$data);
		}
			function tambah_aksi()
		{
			$data=array(
			'id_tiket'			=> $this->input->post('id_tiket'),
			'nama'				=> $this->input->post('nama'),
			'tgl_berangkat'		=> $this->input->post('tgl_berangkat'),
			'tujuan'			=> $this->input->post('tujuan'),
			'nohp'				=> $this->input->post('nohp'),
			'alamat'			=> $this->input->post('alamat')
			);
			$this->Tiket_model->tambah_data($data);
			redirect(site_url('index.php/Welcome/tampil'));
		}
		

}
