<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konten extends CI_Model {

	public function get_data()
	{
		// return $this->db->get('konten')->result_array();
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$query=$this->db->get();
		return $query->result_array();
	}
	// public function input_data($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }
	public function insert_data($data)
	{
		$this->db->insert('konten',$data);
		
	}
	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>
