<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('username')==NULL)
		{
			$this->session->set_flashdata('pesan','<div 
				class="alert alert-danger alert-dismissable fade show"
				role="alert">
				Anda harus Login terlebih dahulu!!!
				<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
			redirect('auth/login');
		}
	}

	
	public function index()
	{
		
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/template/footer');
		
	}
	public function tambah()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah');
		$this->load->view('admin/template/footer');
	}
	public function list()
	{
		$this->load->model('model_konten');
		$data_konten['konten']= $this->model_konten->get_data();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/list',$data_konten);
		$this->load->view('admin/template/footer');
	}
}
