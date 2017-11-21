<?php 
/**
* 
*/
class Supir extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Supir_model');
	}

	function index()
	{
		//print_r($this->member_model->ambil_data());
		$data['supir'] = $this->Supir_model->ambil_data();
		$this->load->view('Berhasil',$data);
	}

	function data_supir()
	{
		//print_r($this->member_model->ambil_data());
		$data['supir'] = $this->Supir_model->ambil_data();
		$this->load->view('admin/Supir_list',$data);
	}

	function daftar()
	{
		$data = array(
			'aksi' 			=> site_url('daftar_aksi'),
			'nama' 			=> set_value('nama'),			
			'alamat' 		=> set_value('alamat'),
			'nohp' 			=> set_value('nohp'),
			'status' 		=> set_value('status'),
			'button' 		=> 'Submit'
			);
		$this->load->view('Berhasil',$data);
	}

	function daftar_aksi()
	{
		$data = array(
			'nama' 		=> $this->input->post('nama'),
			'alamat' 	=> $this->input->post('alamat'),
			'nohp' 		=> $this->input->post('nohp'),
			'status' 	=> $this->input->post('status')
			);
		$this->Supir_model->tambah_data($data);
		redirect(site_url('supir/Berhasil'));
	}

	function login()
	{
		$this->load->view('User/Login');
	}

	function berhasil()
	{
		$this->load->view('Berhasil');
	}

	function home()
	{
		$this->load->view('User/Home');
	}




/* ADMIN */

	function delete($id)
	{
		$this->Supir_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect('supir/data_supir');
	}

	

	function update($id)
	{
		$supir = $this->Supir_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('supir/update_aksi'),
			'nama'		 		=> set_value('nama',$supir->nama),
			'alamat' 			=> set_value('alamat',$supir->alamat),
			'nohp' 				=> set_value('nohp',$supir->nohp),
			'status' 			=> set_value('status',$supir->status),
			'id_supir' 			=> set_value('id_supir',$supir->id_supir),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Supir_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 				=> $this->input->post('nama'),
			'alamat' 			=> $this->input->post('alamat'),
			'nohp'		 		=> $this->input->post('nohp'),
			'status'		 	=> $this->input->post('status')
			);	
		$id_supir = $this->input->post('id_supir');
		$this->Supir_model->edit_data($id_supir,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('supir/data_supir');
	}

	function mau_daftar()
	{
		
		$this->load->view('User/Daftar');
	}
}

 ?>