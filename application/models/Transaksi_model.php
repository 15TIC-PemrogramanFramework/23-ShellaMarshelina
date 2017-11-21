<?php 
/**
* 
*/
class Transaksi_model extends CI_Model
{
	public $transaksi		= 'transaksi';
	public $id				= 'id_transaksi';
    public $order       = 'ASC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('manager', 'transaksi.id_manager = manager.id_manager');
        $this->db->join('supir', 'transaksi.id_supir = supir.id_supir');
		$query = $this->db->get();
		return $query->result();
	}

	
	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->transaksi)->row();//1 data
	}

    function edit_data($id,$data)
    {
        $this->db->where($this->id,$id);
        return $this->db->update($this->transaksi,$data);
    }

    function hapus_data($id)
    {
        $this->db->where($this->id,$id);
        return $this->db->delete($this->transaksi);
    }
}
 ?>

    