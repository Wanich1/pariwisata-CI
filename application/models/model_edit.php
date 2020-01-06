<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_edit extends CI_Model {

	public function get_data($id)
	{
		$this->db->select('konten.*,kategori.id_kategori AS id_kategori,kategori.nama');
		$this->db->join('kategori','konten.id_kategori = kategori.id_kategori');
		$this->db->from('konten');
		$this->db->where('id_konten',$id);
		$query=$this->db->get();
		return $query->result_array();
		
	}
	// public function input_data($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }

	public function edit_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
		
	}
}
?>