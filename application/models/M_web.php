<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends MY_Model {

		public function __construct(){
			$table = "cerita";
			parent::__construct($table);
		}

		public function login($email){
		$this->db->where('email', $email);
		$query = $this->db->get('admin');
		return $query->row_array();
		}

		function cek_pass($field="", $value="", $pass=""){
		$this->db->select('password');		
		$this->db->where($field, $value);
		$dbku = $this->db->get('admin');
		$db_pass = $dbku->row_array();
		$isi = $db_pass['password'];
		// return $isi;

		return password_verify($pass, $isi);
	}

	public function cek_ses_db($db='')
	{
		$this->db->select('count(*)');
		$cek = $this->db->get($db);
		$hasil = $cek->row_array();
		return $hasil['count(*)'];
	}
	public function cek_ses_where($db='',$where='')
	{
		$this->db->select('count(*)');
		$cek = $this->db->get($db);
		$this->db->where('id_admin', $where);
		$hasil = $cek->row_array();
		return $hasil['count(*)'];
	}

	public function getAdmin()
	{
		$db = $this->db->get('session')->row_array();
		$this->db->where('id', $db['id_admin']);
		return $this->db->get('admin')->row_array();
	}

	public function getCerita()
 	{
 		$this->db->select('cerita.id_cerita, user.username, kategori.nama_kategori, cerita.judul, cerita.img, cerita.diskripsi, cerita.isi, cerita.date, cerita.status');
 		// $this->db->select('*');
		$this->db->from('cerita');
		$this->db->join('kategori', 'cerita.id_kategori = kategori.id_kategori');
		$this->db->join('user', 'cerita.id_user = user.id_user');
		// $this->db->where('status', 'enable');
		$this->db->order_by('DATE(cerita.date)', 'desc');
		// $this->db->where('cerita.id_user', 'user.id_user');
		// $this->db->where('cerita.id_kategori', 'kategori.id_kategori');

		$query = $this->db->get();
		return $query->result_array();
 	}


 	

}

/* End of file M_web.php */
/* Location: ./application/models/M_web.php */ ?>