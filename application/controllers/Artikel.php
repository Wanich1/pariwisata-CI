<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	
	public function index()
	{
		$this->load->view('templates/header/head');
		$this->load->view('templates/header/banner');
		$this->load->view('artikel');
		$this->load->view('templates/footer/footer');
	}
}
