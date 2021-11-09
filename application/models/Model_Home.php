<?php
class Model_Home extends CI_Model
{
	function tambah_kontak($table,$data){
		$this->db->insert($table,$data);
	}
	

	//produk----------------------------
	function tampil_produk_3($table)
	{
		return $this->db->get($table, 3);
	}

	function tampil_produk($table)
	{
		return $this->db->get($table);
	}

	function detail_produk($table, $where)
	{
		return $this->db->get_where($table,$where);
	}

	function furniture($table)
	{
		return $this->db->get_where($table,array('kategori'=>'furniture'));
	}

	function kopi($table)
	{
		return $this->db->get_where($table,array('kategori'=>'coffe'));
	}

	function rempah($table)
	{
		return $this->db->get_where($table,array('kategori'=>'spices'));
	}
}