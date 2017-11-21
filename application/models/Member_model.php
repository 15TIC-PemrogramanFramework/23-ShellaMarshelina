<?php 
/**
* 
*/
class Member_model extends CI_Model
{
	public $member			= 'member';
	public $id				= 'id_member';
	public $order			= 'ASC';
	public $nama			= 'nama';
	function __construct()
	{
		parent::__construct();
	}

	function cek_login($nama,$pass)
	{
		$this->db->where('nama',$nama);
		$this->db->where('pass',$pass);
		return $this->db->get($this->member)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->member)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->member,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->member);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->member,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->member)->row();
	}

	function ambil_data_user($nama)
	{
		$this->db->where($this->nama,$nama);
		return $this->db->get($this->member)->row();
	}

	
}
 ?>