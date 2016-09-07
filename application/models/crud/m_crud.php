<?php

class M_crud extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function insert_member($data)
	{
		$this->db->insert('pengguna' , $data);
	}

	function select_all()
	{
		$this->db->select('*');
		$this->db->from('pengguna');

		return $this->db->get();
	}

	function select_mem(){
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('PENGGUNA_PRIV = 2');
		
		return $this->db->get();
	}

	function select_by_id($id_pengguna)
	{
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('PENGGUNA_ID' , $id_pengguna);

		return $this->db->get();
	}

	function update_member($id_pengguna , $data)
	{
		$this->db->where('PENGGUNA_ID' , $id_pengguna);
		$this->db->update('pengguna' , $data);
	}

	function delete_member($id_pengguna)
	{
		$this->db->where('PENGGUNA_ID',$id_pengguna);
		$this->db->delete('pengguna');
	}
}


?>