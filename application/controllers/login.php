<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//https://www.youtube.com/watch?v=oiVXEifDk24//https:
//www.youtube.com/channel/UCxEK2mHnJgLareAyiqi7A6Q/videos
class Login extends CI_Controller{
    function __construct()
    {   
        parent::__construct();
        $this->load->model('m_login'); //memasukkan file model m_login.php ke dalam controller
    }
    function index()
    {
        $session = $this->session->userdata('isLog'); //mengabil dari session apakah sudah login atau belum
        if($session == FALSE) //jika session false maka akan menampilkan halaman login_form     FALSE = LUM LOGIN
        {  
            $this->load->view('login_form');
        }else //jika session true maka di redirect ke halaman dashboard
        {
            redirect('dashboard');
        }
    }
    function do_login()
    {
        $username = $this->input->post("uname");
        $password = $this->input->post("pass");
        
        $cek = $this->m_login->cek_user($username,$password); //melakukan persamaan data dengan database
        if(count($cek) == 1)
        { //cek data berdasarkan username & pass
            foreach ($cek as $cek) {
                $level = $cek['PENGGUNA_PRIV']; //mengambil data(level/hak akses) dari database
            }
            $this->session->set_userdata(array(
                'isLog'   => TRUE, //set data telah login
                'uname'  => $username, //set session username
                'lvl'      => $level, //set session hak akses
            ));
                
            //echo "<script>alert('login/doLogin  masuk ke dashboard')</script>";
            redirect('dashboard','refresh');  //redirect ke halaman dashboard
        }
        else
        { //jika data tidak ada yng sama dengan database
            redirect('login');    
        }
        
    }
    //register
    function registers(){
        $nama = $this->input->post('nama');
        $userz = $this->input->post('username');
        $pazz = $this->input->post('pazz');
        $priv = 2;

        if(empty($userz) || empty($pazz) || empty($nama))
        {
            echo "<script>alert('whut')</script>";
            redirect('login');
        }
        else
        {
            $data = array(
                'PENGGUNA_NAMA' => $nama,
                'PENGGUNA_USERNAME' => $userz,
                'PENGGUNA_PASS' => $pazz,
                'PENGGUNA_PRIV' => $priv
                );
            $this->m_login->register($data,'pengguna');

            //biar langsung ke dashboard
            $username = $userz;
            $password = $pazz;

            $cek = $this->m_login->cek_user($username,$password); //melakukan persamaan data dengan database

            if(count($cek) == 1)
            {   //cek data berdasarkan username & pass
                foreach ($cek as $cek) {
                    $level = $cek['PENGGUNA_PRIV']; //mengambil data(level/hak akses) dari database
                }
                $this->session->set_userdata(array(
                    'isLog'   => TRUE, //set data telah login
                    'uname'  => $username, //set session username
                    'lvl'      => $level, //set session hak akses
                ));
                    
                redirect('dashboard','refresh');  //redirect ke halaman dashboard

            }
            else{
                echo "Something's Wong";
                
            }


            /*

            $this->session->set_userdata(array(
                    'isLogin'   => TRUE, //set data telah login
                    'uname'  => $userz, //set session username
                    'lvl'      => $priv, //set session hak akses
                ));

            echo "<script>alert('masuk ke dashboard via REGISTER')</script>";
            redirect('dashboard','refresh');  //redirect ke halaman dashboard
            */
        }

    }

}