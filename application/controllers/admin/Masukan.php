<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Masukan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	
	}

	public function index()
	{
		$this->db->select('masukan.*, user.*');
		$this->db->join('user', 'masukan.id_user = user.id_user', 'left');
		$this->db->from('masukan');
		$db = $this->db->get()->result_array();
		$data['data'] = $db;
		$data['no'] = 1;

		$this->load->view('v_masukan', $data);
		
	}

}

/* End of file Masukan.php */
/* Location: ./application/controllers/admin/Masukan.php */
