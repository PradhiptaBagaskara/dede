<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_web extends MY_Model {

	public function __construct(){
			$table = "cerita";
			parent::__construct($table);
		}

	public function login($email){
		$this->db->where('email', $email);
		$query = $this->db->get('user');
		return $query->row_array();
		}

	function cek_pass($pass, array $where){
		// $this->db->select('password');
		// $this->db->from('user');		
		$this->db->where($where);
		$dbku = $this->db->get('user');
		$db_pass = $dbku->row_array();
		$isi = $db_pass['password'];
		// return $db_pass;

		return password_verify($pass, $isi);
	}

	public function delete_cerita($id, $imgurl)
	{
		@unlink("/uploads/".$imgurl);
		$this->db->where('id_cerita', $id);
		$this->db->delete('cerita');
	}

	public function cek_login()
	{
		if (empty($this->session->userdata('id'))){
			redirect(base_url().'login','refresh');
		}else{
			redirect(base_url().'admin/home','refresh');

		}
	}

	public function store_login($email='', $pass='')
	{
		$data = $this->cek_pass($pass, ['email'=> $email, 'is_admin' => 1]);
		if ($data) {
			$this->db->where(['email'=>$email, 'is_admin'=> 1]);
			$db = $this->db->get('user');
			return $db->row_array();		
		}
		else{
			return false;
		}
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