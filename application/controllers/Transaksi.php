

 <?php 
 class Transaksi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi_model');
	}

	function index()
	{
		$data['transaksi'] = $this->Transaksi_model->ambil_data();
		$this->load->view('admin/Transaksi_list',$data);
	}

	function delete($id)
	{
		$this->Transaksi_model->hapus_data($id);
		$this->session->set_flashdata("transaksi", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('transaksi');
	}

	function update($id)
	{
		$transaksi = $this->Transaksi_model->ambil_data_id($id);
		$data = array(
			'aksi' 				=> site_url('transaksi/update_aksi'),
			'nama' 				=> set_value('nama',$transaksi->nama),
			'id_transaksi' 		=> set_value('id_transaksi',$transaksi->id_transaksi),
			'button' 			=> 'Update'
			);
		$this->load->view('admin/Transaksi_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'nama' 		=> $this->input->post('nama')
			);	
		$id_transaksi = $this->input->post('id_transaksi');
		$this->Transaksi_model->edit_data($id_transaksi,$data);
		$this->session->set_flashdata("transaksi", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil diubah!!</div></div>");
        redirect('transaksi');
	}

	function tambah()
	{
		$data = array(
			'aksi' 					=> site_url('transaksi/tambah_aksi'),
			'id_transaksi' 			=> set_value('id_transaksi'),
			'id_manager' 			=> set_value('id_manager'),
			'nama'		 			=> set_value('nama'),
			'button' 				=> 'Insert'
			);
		$this->load->view('Admin/Transaksi_form',$data);
	}

	function tambah_aksi()
	{


		$data = array(
			'id_transaksi' 			=> $this->input->post('id_transaksi'),
			'id_manager' 			=> $this->input->post('id_manager'),
			'nama' 					=> $this->input->post('nama')
	           
			);

		$this->Transaksi_model->tambah_data($data);
		redirect(site_url('transaksi'));
	}

}

 ?>