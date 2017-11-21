<?php 
/**
* 
*/
class Supir_model extends CI_Model
{
	public $supir			= 'supir';
	public $id				= 'id_supir';
	public $order			= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function cek_login($username,$password)
	{
		$this->db->where('nama',$username);
		$this->db->where('pass',$password);
		return $this->db->get($this->supir)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->supir)->result();//banyak data
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->supir,$data);
	}


	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->supir);
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->supir,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->supir)->row();
	}
}
 ?>