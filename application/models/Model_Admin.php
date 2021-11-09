<?php
class Model_Admin extends CI_Model
{
	//rows----------------------------
	function rows_kontak($table) {
    return $this->db->get($table)->num_rows();
  }
	function rows_produk($table) {
    return $this->db->get($table)->num_rows();
  }
	function spices($table)
	{
		return $this->db->get_where($table,array('kategori'=>'spices'))->num_rows();
	}
	function coffe($table)
	{
		return $this->db->get_where($table,array('kategori'=>'coffe'))->num_rows();
	}
	function furniture($table)
	{
		return $this->db->get_where($table,array('kategori'=>'furniture'))->num_rows();
	}
	

	//contact---------------------------
	function tampil_inbox($table)
	{
		return $this->db->get($table);
	}

	function hapus_inbox($table,$where)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	//produk----------------------------
	function tampil_produk($table)
	{
		return $this->db->get($table);
	}

	function detail_produk($table, $where)
	{
		return $this->db->get_where($table,$where);
	}



	
	
	// function tampil_dasar($table)
	// {
	// 	return $this->db->get_where($table,array('jenis'=>'dasar'));
	// }


	// function hapus_all($table)
	// {
	// 	$this->db->delete($table);
	// }
	
	

	// function total_dasar($table) {
  //   return $this->db->get_where($table,array('jenis'=>'dasar'))->num_rows();
  // }

	// function total_intermediate($table) {
  //   return $this->db->get_where($table,array('jenis'=>'intermediate'))->num_rows();
  // }
}