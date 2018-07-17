<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_Model extends CI_Model
{

	var $table = 'kategori';


	public function __construct()
	{
		parent::__construct();
	}


	public function get_all_books()
	{
		$this->db->from('kategori');
		$query=$this->db->get();
		return $query->result();
	}


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('idKategori',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function kategori_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function kategori_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('idKategori', $id);
		$this->db->delete($this->table);
	}


}