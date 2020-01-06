
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
		$this->load->model('model_kategori');
		$this->load->model(array('model_konten'));
		$this->load->model(array('model_edit'));
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
		$this->load->model('model_kategori');
		$data['kategori'] = $this->model_kategori->get_data();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/tambah',$data);
		$this->load->view('admin/template/footer');
	}
	public function edit($id)
	{
		// $this->load->model('model_kategori');
		$data['konten'] = $this->model_edit->get_data($id);
		$data['kategori'] = $this->model_kategori->get_data();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/edit',$data);
		$this->load->view('admin/template/footer');
	}
	public function list()
	{
		/*$this->load->model('model_konten');*/
		$data_konten['konten']= $this->model_konten->get_data();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/list',$data_konten);
		$this->load->view('admin/template/footer');
	}

	public function hapus($id)
	{
		$where = array
		 (
		 	'id_konten' => $id
		 );
		 $this->model_konten->hapus_data($where, 'konten');
		 redirect('Dashboard/list');
	}

	public function tambah_konten_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah();
		}
		else{
			$judul				= $this->input->post('judul');
			$kategori 			= $this->input->post('kategori');
			$isi 				= $this->input->post('isi');
			$id_user			= $this->session->userdata('id_user');

			$data = array(
				'judul'				=> $judul,
				'id_kategori'		=> $kategori,
				'id_user'			=> $id_user,
				'isi_konten'		=> $isi
			);
			$this->model_konten->insert_data($data,'konten');
			$this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
			redirect('Dashboard/list');
		}
	}

	public function edit_konten_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah();
		}
		else{
			$id 				= $this->input->post('id');
			$judul				= $this->input->post('judul');
			$kategori 			= $this->input->post('kategori');
			$isi 				= $this->input->post('isi');
			$id_user			= $this->session->userdata('id_user');

			$data = array(
				'id_konten'				=> $id,
				'judul'				=> $judul,
				'id_kategori'		=> $kategori,
				'id_user'			=> $id_user,
				'isi_konten'		=> $isi
			);

			$where = array
			(
				'id_konten' => $id
			);
			$this->model_edit->edit_data($where,$data,'konten');
			$this->session->set_flashdata('pesan','Data Berhasil Ditambahkan');
			redirect('Dashboard/list');
		}
	}	

	public function _rules()
	{
		$this->form_validation->set_rules('judul','Judul', 'required');
		$this->form_validation->set_rules('kategori','Kategori', 'required');
		$this->form_validation->set_rules('isi','Isi', 'required');
	}
}
