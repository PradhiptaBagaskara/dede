<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Kategori extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_api', 'api');
 	}


 	function index_get(){
 		$db = $this->db->get('kategori')->result();
 		$data = array("msg" => true,
 						"result"=>$db);
 		$this->response($data);

 	}

 	function index_post(){
 		if ($this->api->cek_field('id_user', $this->post('id_user'), 'user') == '1') {

 			$data = $this->api->getKat($this->post('id_user'));
 			
 			$response = array("status" => true,
 							"msg" => "success",
 							"result" => $data);
 		}else{
 			$response = array("status" => false,
 							"msg" => "User Not Found!",
 							"result" => null);
 		}

 		$this->response($response);
 	}
 

 
 }
 
 /* End of file Order_by_kategori.php */
 /* Location: ./application/controllers/api/Order_by_kategori.php */ ?>