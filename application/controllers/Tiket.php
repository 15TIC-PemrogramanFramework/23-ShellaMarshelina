<?php 
/**
* 
*/
class Tiket extends CI_Controller
{
	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Tiket_model');
		$this->load->helper(array('url'));
	}

	function index($page=NULL,$offset='',$key=NULL)
	{
		//print_r($this->prodi_model->ambil_data());
		$data['tiket'] = $this->Tiket_model->ambil_data();
		$this->load->view('admin/Tiket_list',$data);
	}

	function tambah()
	{
		$data = array(
			'aksi' 				=> site_url('tiket/tambah_aksi'),
			'nama' 				=> set_value('nama'),
			'tgl_berangkat' 	=> set_value('tgl_berangkat'),
			'tujuan'		 	=> set_value('tujuan'),
			'harga' 			=> set_value('harga'),
			'nohp' 				=> set_value('nohp'),
			'alamat' 			=> set_value('alamat'),
			'no_pol' 			=> set_value('no_pol'),
			'button' 			=> 'Insert'
			);
		$this->load->view('Admin/Tiket_form',$data);
	}

	function tambah_aksi()
	{


		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'tgl_berangkat' => $this->input->post('tgl_berangkat'),
			'tujuan' 		=> $this->input->post('tujuan'),
			'harga' 		=> $this->input->post('harga'),
			'nohp' 			=> $this->input->post('nohp'),
			'alamat' 		=> $this->input->post('alamat'),
			'no_pol' 		=> $this->input->post('no_pol')                  
			);

		$this->Tiket_model->tambah_data($data);
		redirect(site_url('tiket'));
	}

	function delete($id)
	{
		$this->Tiket_model->hapus_data($id);
		$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
		redirect('tiket');
	}

	function update($id)
	{
		$tiket = $this->Tiket_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('tiket/update_aksi'),
			'nama' 				=> set_value('nama',$tiket->nama),
			'tgl_berangkat' 	=> set_value('tgl_berangkat',$tiket->tgl_berangkat),
			'tujuan'		 	=> set_value('tujuan',$tiket->tujuan),
			'harga' 			=> set_value('harga',$tiket->harga),
			'nohp' 				=> set_value('nohp',$tiket->nohp),
			'alamat' 			=> set_value('alamat',$tiket->alamat),
			'no_pol' 			=> set_value('no_pol',$tiket->no_pol),
			'id_tiket' 				=> set_value('id_tiket',$tiket->id_tiket),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Tiket_form',$data);		
	}


	function update_aksi()
	{
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'tgl_berangkat' => $this->input->post('tgl_berangkat'),
			'tujuan' 		=> $this->input->post('tujuan'),
			'harga' 		=> $this->input->post('harga'),
			'nohp' 			=> $this->input->post('nohp'),
			'alamat' 		=> $this->input->post('alamat'),
			'no_pol' 		=> $this->input->post('no_pol')    
			);	
		$id_tiket = $this->input->post('id_tiket');
		$this->Tiket_model->edit_data($id_tiket,$data);
		$this->session->set_flashdata("tiket", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
		redirect('tiket');
	}
}

?>