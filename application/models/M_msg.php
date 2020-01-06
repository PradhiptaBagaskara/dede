<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_msg extends CI_Model {

	public function getAll($tbName='', $where = array())
	{
		$this->db->select('*');
		$this->db->from($tbName);
		$this->db->where($where);
		$data = $this->db->get();
		return $data->result_array()[0];
	}

}

/* End of file M_msg.php */
/* Location: ./application/models/M_msg.php */

 ?>