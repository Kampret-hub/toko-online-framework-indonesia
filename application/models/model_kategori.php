<?php

class Model_kategori extends CI_Model {

	public function data_elektronik(){
		return $this->db->get_where("tbl_barang", array('kategori' => 'elektronik'));
	}
	public function data_pp(){
		return $this->db->get_where("tbl_barang", array('kategori' => 'pakaian pria'));
	}
	public function data_pw(){
		return $this->db->get_where("tbl_barang", array('kategori' => 'pakaian wanita'));
	}
	public function data_pa(){
		return $this->db->get_where("tbl_barang", array('kategori' => 'pakaian anak'));
	}
	public function data_po(){
		return $this->db->get_where("tbl_barang", array('kategori' => 'peralatan olahrga'));
	}
}
?>