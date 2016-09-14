<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Atur_buku extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('pagination');
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->load->helper('url');
		$this->load->model('crud/book_crud');
	}

	function index($offset=0)
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		
		$datax = array(
			'user'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			//echo "<script>alert('SAYA ADMIN')</script>";
			
			$perpage = 10;

			$config = array(
			'base_url' => site_url('atur_buku/index'),
			'total_rows' => count($this->book_crud->select_buku()->result()),
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
			$data['daftar_buku'] = $this->book_crud->select_all_paging($limit)->result();

			// yg bener (mungkin)
			//$data['daftar_buku'] = $this->book_crud->select_buku()->result();
			$this->load->view('header' , $datax);
			$this->load->view('crud/adminpage2', $data);
			$this->load->view('footer');
		}else{ //user
			//echo "<script>alert('SAYA USER')</script>";
			$this->load->view('buku/user_buku',$data);
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login','refresh');
	}

	// TAMBAH / CREATE
	function to_tambah_buku()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$this->load->view('header' , $data);
		$this->load->view('crud/form_tambah_buku' , $data);
		$this->load->view('footer');
	}

	function tambah_buku()
	{	$this->load->library('form_validation');
		$config = array(
	        array(
	                'field' => 'judul',
	                'label' => 'Judul',
	                'rules' => 'required|is_unique[buku.BUKU_JUDUL]'
	        ),
	        array(
	                'field' => 'pengarang',
	                'label' => 'Pengarang',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'kategori',
	                'label' => 'kategori',
	                'rules' => 'required|callback_is_default'
	        ),
	        array(
	                'field' => 'sinopsis',
	                'label' => 'Sinopsis',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'status',
	                'label' => 'status',
	                'rules' => 'required|callback_is_default'
	        ),
	        array(
	                'field' => 'tahunterbit',
	                'label' => 'Tahun Terbit',
	                'rules' => 'required|is_natural|exact_length[4]'
	        )
		);
		$this->form_validation->set_rules($config);

		$this->form_validation->set_message('is_default', 'Anda perlu memilih %s');
		$this->form_validation->set_message('required','%s harap diisi');		$this->form_validation->set_message('exact_length','Isi %s dengan benar');
		$this->form_validation->set_message('is_unique','Buku sudah terdaftar');		$this->form_validation->set_message('is_natural','%s harap diisi dengan angka tahun');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->to_tambah_buku();
		}else
		{
			$data['BUKU_JUDUL'] = $this->input->post('judul');
			$data['BUKU_KATE'] = $this->input->post('kategori');
			$data['BUKU_PENGARANG'] = $this->input->post('pengarang');
			$data['BUKU_SINOPSIS'] = $this->input->post('sinopsis');
			$data['BUKU_TAHUNTERBIT'] = $this->input->post('tahunterbit');
			$data['BUKU_STATUS'] = $this->input->post('status');

			$this->book_crud->insert_buku($data);
			echo "<script>alert('Penambahan Sukses');document.location='" . base_url() . "atur_buku'</script>";
			//redirect(site_url('atur_buku'));
		}
		
	}
	function is_default($array)
	{
	    if($array == 'pleaseSelect')
	    { 
	      return FALSE;
	    }
	  
	 return TRUE;
	}

	// EDIT / UPDATE
	function to_edit_buku($id_buku)
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		$data = array(
			'user'	=> $ambil_akun,
			);

		$this->load->view('header' , $data);
		$data['bukuh'] = $this->book_crud->select_by_id($id_buku)->row();
		$this->load->view('crud/form_edit_buku',$data);
		$this->load->view('footer');
	}

	function edit_buku()
	{	$id_buku = $this->input->post('id_buku');
		$this->load->library('form_validation');
		$config = array(
	        array(
	                'field' => 'judul',
	                'label' => 'Judul',
	                'rules' => 'required|'
	        ),
	        array(
	                'field' => 'pengarang',
	                'label' => 'Pengarang',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'kategori',
	                'label' => 'Kategori Buku',
	                'rules' => 'required|callback_is_default'
	        ),
	        array(
	                'field' => 'sinopsis',
	                'label' => 'Sinopsis',
	                'rules' => 'required'
	        ),
	        array(
	                'field' => 'status',
	                'label' => 'Status Buku',
	                'rules' => 'required|callback_is_default'
	        ),
	        array(
	                'field' => 'tahunterbit',
	                'label' => 'Tahun Terbit',
	                'rules' => 'required|is_natural|exact_length[4]'
	        )
		);
		$this->form_validation->set_rules($config);

		$this->form_validation->set_message('is_default', 'Anda perlu memilih %s');
		$this->form_validation->set_message('required','%s harap diisi');		$this->form_validation->set_message('exact_length','Isi %s dengan benar');
		$this->form_validation->set_message('is_natural','%s harap diisi dengan angka tahun');
		
		
		if($this->form_validation->run() == FALSE)
		{	
			$this->to_edit_buku($id_buku);
		}else
		{
			$data['BUKU_JUDUL'] = $this->input->post('judul');
			$data['BUKU_KATE'] = $this->input->post('kategori');
			$data['BUKU_PENGARANG'] = $this->input->post('pengarang');
			$data['BUKU_SINOPSIS'] = $this->input->post('sinopsis');
			$data['BUKU_TAHUNTERBIT'] = $this->input->post('tahunterbit');
			$data['BUKU_STATUS'] = $this->input->post('status');
			
			$id_buku = $this->input->post('id_buku');
			$this->book_crud->update_buku($id_buku , $data);
			redirect(site_url('atur_buku'));
		}

		
	}

	// HAPUS / DELETE
	function to_hapus_buku($id_buku)
	{
		$this->book_crud->delete_buku($id_buku);
		redirect(site_url('atur_buku'));
	}

}