<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_konten extends CI_Model {

	public function get_data()
	{
		return $this->db->get('konten')->result_array();
	}
	// public function input_data($data,$table)
	// {
	// 	$this->db->insert($table,$data);
	// }
}
?>
