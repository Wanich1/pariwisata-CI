<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	
	public function index()
	{
		$this->load->view('landing');
		$this->load->view('templates/header/landing_head');
	}
}
