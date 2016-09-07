<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_login extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->tbl = "pengguna";
	}

	function cek_user($username="",$password="")
	{
		$query = $this->db->get_where($this->tbl,array('PENGGUNA_USERNAME' => $username, 'PENGGUNA_PASS' => $password));
		$query = $query->result_array();
		return $query;
	}
	function ambil_user($username)
    {
        $query = $this->db->get_where($this->tbl, array('PENGGUNA_USERNAME' => $username));
        $query = $query->result_array();
        if($query){
            return $query[0];
        }
    }
    function register($data,$table)
    {
    	$this->db->insert($table,$data);
    }

}