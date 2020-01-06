<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_kategori extends CI_Model {

	function get_data()
    {
    	return $this->db->get('kategori')->result_array();
        /*$query = $this->db->get('kategori');
            if ($query->num_rows >= 0)
            {
                foreach($query->result_array() as $row)
                {
                    $data[$row['kategori_id']]=$row['nama'];
                }
                return $data;
            }*/
    }
}
?>
