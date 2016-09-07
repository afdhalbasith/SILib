<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Atur_buku extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->auth->cek_auth(); //ngambil auth dari library
		$this->load->helper('url');
		$this->load->model('crud/book_crud');
	}

	function index()
	{
		$ambil_akun = $this->m_login->ambil_user($this->session->userdata('uname'));
		
		$datax = array(
			'user'	=> $ambil_akun,
			);
		$stat = $this->session->userdata('lvl');
		if($stat==1){//admin
			//echo "<script>alert('SAYA ADMIN')</script>";
			//$this->load->view('crud/adminpage2',$data);

			// yg bener (mungkin)
			$data['daftar_buku'] = $this->book_crud->select_buku()->result();
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
	{	
		$data['BUKU_JUDUL'] = $this->input->post('judul');
		$data['BUKU_KATE'] = $this->input->post('kategori');
		$data['BUKU_PENGARANG'] = $this->input->post('pengarang');
		$data['BUKU_SINOPSIS'] = $this->input->post('sinopsis');
		$data['BUKU_TAHUNTERBIT'] = $this->input->post('tahunterbit');
		$data['BUKU_STATUS'] = $this->input->post('status');

		$this->book_crud->insert_buku($data);
		redirect(site_url('atur_buku'));
		
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

	// HAPUS / DELETE
	function to_hapus_buku($id_buku)
	{
		$this->book_crud->delete_buku($id_buku);
		redirect(site_url('atur_buku'));
	}

}