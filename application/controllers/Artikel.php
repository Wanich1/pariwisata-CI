<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{

		parent::__construct();	
		$this->load->model(array('model_konten'));
	}
	public function index()
	{
		$data['destinasi'] = $this->model_konten->get_destinasi();
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('artikel',$data);
		$this->load->view('templates/footer/footer');
	}
}
