<?php

class Book_crud extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function insert_buku($data)
	{
		$this->db->insert('buku' , $data);
	}

	function select_all()
	{
		$this->db->select('*');
		$this->db->from('buku');

		return $this->db->get();
	}

	function select_buku(){
		$this->db->select('*');
		$this->db->from('buku');
		
		return $this->db->get();
	}

	function select_by_id($id_buku)
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->where('BUKU_ID' , $id_buku);

		return $this->db->get();
	}

	function update_buku($id_buku , $data)
	{
		$this->db->where('BUKU_ID' , $id_buku);
		$this->db->update('buku' , $data);
	}

	function delete_buku($id_buku)
	{
		$this->db->where('BUKU_ID',$id_buku);
		$this->db->delete('buku');
	}

	function select_all_paging($limit=array())
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->order_by('BUKU_KATE','asc');
	 
		if ($limit != NULL)
			$this->db->limit($limit['perpage'], $limit['offset']);

		return $this->db->get();
	}
}


?>