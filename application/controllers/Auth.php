<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('username')!=NULL)
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
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('login');
		}
		else
		{
			$auth = $this->model_auth->cek_login();
			if ($auth==false)
			{
				$this->session->set_flashdata('pesan','<div 
				class="alert alert-danger alert-dismissable fade show"
				role="alert">
				Username atau Password salah!
				<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>
				');
				redirect('auth/login');
			}else
			{
				$this->session->set_userdata('nama',$auth->nama);
				$this->session->set_userdata('username',$auth->username);
				redirect('dashboard');
			}
		}
	}
}
