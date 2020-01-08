<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{

		parent::__construct();	
		$this->load->model(array('model_konten'));
	}
	public function index()
	{
		/*$data['destinasi'] = $this->model_konten->get_destinasi();*/
		$data['penginapan'] = $this->model_konten->get_penginapan();
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('inapan',$data);
		$this->load->view('templates/footer/footer');
	}
}
