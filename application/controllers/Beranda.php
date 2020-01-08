<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{

		parent::__construct();	
		$this->load->model(array('model_konten'));
		$this->load->model(array('model_edit'));
	}
	
	public function index()
	{
		$data['konten'] = $this->model_konten->get_event();
		$data['destinasi'] = $this->model_konten->get_destinasi();
		$data['penginapan'] = $this->model_konten->get_penginapan();
		/*$data['gambar'] =$this->model_kont*/
		/*$data['inap'] = $this->model_edit->get_data();*/
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('beranda',$data);
		
		$this->load->view('templates/footer/footer');
	}
	public function inapan($id)
	{
		$data['konten'] = $this->model_konten->get_data_by_kategori($id);
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('inapan',$data);
		$this->load->view('templates/footer/footer');
	}
	public function jison()
	{
		$data = $this->model_konten->get_event();
		/*$data = $this->db->query("select * from konten")->result();*/

		$hasil = json_encode($data);
		echo $hasil;
	}
}
