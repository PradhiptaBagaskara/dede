<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Order_by_kategori extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_api','api');
 	}


 	function index_get(){
 		$this->response(array('status' => false,"msg" => "wrong method", 'result' => null));

 	}
 
 	public function index_post()
 	{

 		if ($this->api->cek_field('auth_key', $this->post('auth_key'), 'user') == '1') {
 		$id = $this->post('id_kategori');
 		if (empty($id)) {
 				$response = array("status" => false,
 									"msg" => "id empty",
 							"result" => null);
 		}else{
	 		$key = $this->post('auth_key');
	 		$response = array("status" => true,
 									"msg" => "success",

 							"result" => $this->api->getCerita("kategori.id_kategori", $id));
 		}
 		}else{
 				$response = array("status" => false,
 									"msg" => "id empty",

 							"result" => null);
 		}
 		
 		// echo $hasil;
 		$this->response($response);
 		
 			
 	}


 
 }
 
