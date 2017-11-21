<?php 
/**
* 
*/
class Pesan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pesan_model');
	}

	function index()
	{
		$data['pesan'] = $this->Pesan_model->ambil_data();
		$this->load->view('admin/Pesan_list',$data);
	}

	function delete($id)
	{
		$this->Pesan_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('pesan');
	}

	function update($id)
	{
		$pesan = $this->Pesan_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('pesan/update_aksi'),
			'status' 			=> set_value('status',$pesan->status),
			'id_pesan' 			=> set_value('id_pesan',$pesan->id_pesan),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Pesan_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'status' 		=> $this->input->post('status')
			);	
		$id_pesan = $this->input->post('id_pesan');
		$this->Pesan_model->edit_data($id_pesan,$data);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('pesan');
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('pesan/tambah_aksi'),
			'id_pesan' 			=> set_value('id_pesan'),
			'id_tiket' 			=> set_value('id_tiket'),
			'nama'		 		=> set_value('nama'),
			'status' 			=> set_value('status'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Admin/Tiket_form',$data);
	}

	function tambah_aksi()
	{


		$data = array(
			'id_pesan' 			=> $this->input->post('id_pesan'),
			'id_tiket' 			=> $this->input->post('id_tiket'),
			'nama' 				=> $this->input->post('nama'),
			'status' 			=> $this->input->post('status')                
			);

		$this->tiket_model->tambah_data($data);
		redirect(site_url('tiket'));
	}

}

 ?>