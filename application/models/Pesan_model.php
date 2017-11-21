<?php 
/**
* 
*/
class Pesan_model extends CI_Model
{
	public $pesan		= 'pesan';
	public $id			= 'id_pesan';
	public $order		= 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('pesan');
        $this->db->join('member', 'pesan.id_member = member.id_member');
        $this->db->join('tiket', 'pesan.id_tiket = tiket.id_tiket');
		$query = $this->db->get();
		return $query->result();
	}

	function edit_data($id,$data)
	{
		$this->db->where($this->id,$id);
		return $this->db->update($this->pesan,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->pesan)->row();//1 data
	}

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->pesan);
	}
}
 ?>