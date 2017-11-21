<?php 
/**
* 
*/
class Member extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Member_model');
	}

	function index()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('Berhasil',$data);
	}

	

	function data_member()
	{
		//print_r($this->member_model->ambil_data());
		$data['member'] = $this->Member_model->ambil_data();
		$this->load->view('admin/Member_list',$data);
	}

	function daftar()
	{
		$data = array(
			'aksi' 			=> site_url('daftar_aksi'),
			'nama' 			=> set_value('nama'),
			'pass' 			=> set_value('pass'),			
			'alamat' 		=> set_value('alamat'),
			'nohp' 			=> set_value('nohp'),
			'button' 		=> 'Submit'
			);
		$this->load->view('Berhasil',$data);
	}

	function daftar_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'pass'		 	=> $this->input->post('pass'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp' 			=> $this->input->post('nohp')
			);
		$this->Member_model->tambah_data($data);
		redirect(site_url('Welcome/Login_memberr'));
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
		$this->Member_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect('member/data_member');
	}

	


	function update($id)
	{
		$member = $this->Member_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('member/update_aksi'),
			'nama'		 		=> set_value('nama',$member->nama),
			'pass' 				=> set_value('pass',$member->pass),
			'alamat' 			=> set_value('alamat',$member->alamat),
			'nohp' 				=> set_value('nohp',$member->nohp),
			'id_member' 		=> set_value('id_member',$member->id_member),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Member_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'pass'		 	=> $this->input->post('pass'),
			'alamat' 		=> $this->input->post('alamat'),
			'nohp'		 	=> $this->input->post('nohp')
			);	
		$id_member = $this->input->post('id_member');
		$this->Member_model->edit_data($id_member,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('member/data_member');
	}

	function mau_daftar()
	{
		
		$this->load->view('User/Daftar');
	}
}

 ?>