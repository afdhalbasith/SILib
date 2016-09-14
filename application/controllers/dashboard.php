<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('pagination');
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->load->helper('url');$this->load->helper('form');
		$this->load->model('crud/m_crud');
	}
	
	function index($offset=0)
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));

		$datax = array(
			'user'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			echo "<script>alert('SAYA ADMIN')</script>";
			
			$perpage = 10;

			$config = array(
			'base_url' => site_url('dashboard/index'),
			'total_rows' => count($this->m_crud->select_mem()->result()),
			'per_page' => $perpage,
			'full_tag_close' => '</ul>',
			'full_tag_open' => '<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">',
			'prev_link' => '&lt;',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',
			'next_link' => '&gt;',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'cur_tag_open' => '<li class="current"><a href="#">',
			'cur_tag_close' => '</a></li>',
			'num_tag_open' => '<li>',
			'num_tag_close' => '</li>',
			'first_tag_open' => '<li>',
			'first_tag_close' => '</li>',
			'last_tag_open' => '<li>',
			'last_tag_close' => '</li>',
			'first_link' => '&lt;&lt;',
			'last_link' => '&gt;&gt;'
			);

			$this->pagination->initialize($config);
			$limit['perpage'] = $perpage;
			$limit['offset'] = $offset;

			$data['currentPage'] = $offset;
			$data['daftar_member'] = $this->m_crud->select_all_paging($limit)->result();
			//$this->load->view('crud/adminpage',$data);


			// yg bener (mungkin)
			//$data['daftar_member'] = $this->m_crud->select_mem()->result();

			$this->load->view('header' , $datax);
			$this->load->view('crud/adminpage', $data);
			$this->load->view('footer');
		}else{ //user
			echo "<script>alert('SAYA USER')</script>";

			$this->load->view('header' , $datax);
			$this->load->view('crud2/dashb_user');
			$this->load->view('footer');
		}
	}
	function login()
	{
		$session = $this->session->userdata('loginGak');
    	if($session == FALSE)
    	{
      		$this->load->view('login_form');
    	}else
    	{
    		//echo "<script>alert('Login Gagal');document.location='" . base_url() . "dashboard'</script>";
      		redirect('dashboard');
    	}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	// TAMBAH / CREATE
	function to_tambah_member()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$this->load->view('header' , $data);
		$this->load->view('crud/form_tambah_member' , $data);
		$this->load->view('footer');
	}

	function tambah_member()
	{	
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[20]|is_unique[pengguna.PENGGUNA_USERNAME]');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telpun','Telpon','required|max_length[13]|is_natural');
		$this->form_validation->set_rules('email','E-Mail','required|trim|valid_email|xss_clean');

		$this->form_validation->set_message('required','%s harap diisi');
		$this->form_validation->set_message('min_length','%s terlalu pendek.Minimal karakter %s');
		$this->form_validation->set_message('max_length','%s terlalu panjang. Maksimal karakter %s');
		$this->form_validation->set_message('is_unique','Username %s sudah terdaftar');
		$this->form_validation->set_message('valid_email','Harap isi %s secara benar');
		$this->form_validation->set_message('is_natural','Harap isi %s dengan angka saja');

		if($this->form_validation->run()==FALSE)
		{
			$this->to_tambah_member();
		}else
		{
			$data['PENGGUNA_NAMA'] = $this->input->post('nama');
			$data['PENGGUNA_ALAMAT'] = $this->input->post('alamat');
			$data['PENGGUNA_TELP'] = $this->input->post('telpun');
			$data['PENGGUNA_USERNAME'] = $this->input->post('username');
			$data['PENGGUNA_PASS'] = $this->input->post('password');
			$data['PENGGUNA_EMAIL'] = $this->input->post('email');
			$data['PENGGUNA_PRIV'] = 2;

			$this->m_crud->insert_member($data);
			
			echo "<script>alert('Penambahan Sukses');document.location='" . base_url() . "dashboard'</script>";
			//redirect(site_url('dashboard'));
		}

		
		
	}

	// EDIT / UPDATE
	function to_edit_member($id_member)
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$data['membah'] = $this->m_crud->select_by_id($id_member)->row();

		$this->load->view('header' , $data);
		$this->load->view('crud/form_edit_member',$data);
		$this->load->view('footer');
	}

	function edit_member()
	{
		$life = $this->input->post('id_member');

		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('password','Password','required|min_length[6]');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('telpun','Telpon','required|max_length[12]|is_natural');
		$this->form_validation->set_rules('email','E-Mail','required|trim|valid_email|xss_clean');

		$this->form_validation->set_message('required','%s harap diisi');
		$this->form_validation->set_message('min_length','%s terlalu pendek.Minimal karakter %s');
		$this->form_validation->set_message('max_length','%s terlalu panjang. Maksimal karakter %s');
		$this->form_validation->set_message('valid_email','Harap isi %s secara benar');
		$this->form_validation->set_message('is_natural','Harap isi %s dengan angka saja');

		if($this->form_validation->run()==FALSE)
		{
			$this->to_edit_member($life);
		}else
		{
			$data['PENGGUNA_NAMA'] = $this->input->post('nama');
			$data['PENGGUNA_TELP'] = $this->input->post('telpun');
			$data['PENGGUNA_ALAMAT'] = $this->input->post('alamat');
			$data['PENGGUNA_PASS'] = $this->input->post('password');
			$data['PENGGUNA_EMAIL'] = $this->input->post('email');
			
			$lol = $this->input->post('prive');
			if ($lol == "Member")
			{
				$data['PENGGUNA_PRIV'] = 2;
			}else{$data['PENGGUNA_PRIV'] = 1;}



			$id_member = $this->input->post('id_member');
			$this->m_crud->update_member($id_member , $data);
			echo "<script>alert('Perubahan Sukses');document.location='" . base_url() . "dashboard'</script>";
			//redirect(site_url('dashboard'));
		}

		
	}

	// HAPUS / DELETE
	function to_hapus_member($id_member)
	{
		$this->m_crud->delete_member($id_member);
		echo "<script>alert('Berhasil Menghapus');document.location='" . base_url() . "dashboard'</script>";
		//redirect(site_url('dashboard'));
	}

	function info()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$this->load->view('header' , $data);
		$this->load->view('info');
		$this->load->view('footer');
	}
	function news()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$this->load->view('header' , $data);
		$this->load->view('news');
		$this->load->view('footer');
	}

	// EDIT / UPDATE   ============================================== USER PERSPECTIVE==================================================================================
	function to_edit_myself($id_member)
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$data['membah'] = $this->m_crud->select_by_id($id_member)->row();

		$this->load->view('header' , $data);
		$this->load->view('crud2/form_edit_myself',$data);
		$this->load->view('footer');
	}

	function edit_myself()
	{
		$data['PENGGUNA_NAMA'] = $this->input->post('nama');
		$data['PENGGUNA_ALAMAT'] = $this->input->post('alamat');
		$data['PENGGUNA_TELP'] = $this->input->post('telpun');
		//$data['PENGGUNA_USERNAME'] = $this->input->post('username');
		$data['PENGGUNA_EMAIL'] = $this->input->post('email');


		$id_member = $this->input->post('id_member');
		$this->m_crud->update_member($id_member , $data);

		$passlawas = $this->input->post('password');
		$passbaru = $this->input->post('passwordbaru');
		$passbaru2 = $this->input->post('passwordbaru2');

		if($passbaru=="" && $passbaru2=="")
		{
			$data['PENGGUNA_PASS'] = $passlawas;
			redirect(site_url('dashboard'));
		}elseif($passbaru=="" || $passbaru2=="" || $passbaru2!=$passbaru)
		{
			$data['PENGGUNA_PASS'] = $passlawas;
			echo "<script>alert('Salah menginputkan password baru');document.location='" . base_url() . "dashboard/to_edit_myself/$id_member'</script>";	
		}elseif($passbaru==$passbaru2)
		{
			$data['PENGGUNA_PASS'] = $passbaru;
			echo "<script>alert('Perubahan Sukses');document.location='" . base_url() . "dashboard'</script>";
		}

		$this->m_crud->update_member($id_member , $data);
		//redirect(site_url('dashboard'));
	}

}
?>
