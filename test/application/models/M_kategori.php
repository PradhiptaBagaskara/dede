<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	public function __construct(){
    parent::__construct();
  }

  function get(array $where){
  	$this->db->select('*');
  	$this->db->from('kategori');
  	$this->db->where('nama_kategori !=', 'administrator');
  	$data = $this->db->get();
  	return $data->result();
  }

 }

/* End of file M_kategori.php */
/* Location: ./application/models/M_kategori.php */