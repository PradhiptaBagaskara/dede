<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Masukan extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_api','api');
 	}


 	function index_get(){
 		$this->response(array('status' => false,
 								'msg' => 'Wrong method!'
 								, 'result' => null));

 	}
 
 	public function index_post()
 	{
 		
 		if ($this->api->cek_field('auth_key', $this->post('auth_key'), 'user') == '1') {
 			$data = array('id_user' => $this->post('id_user'),
 						'isi'=> $this->post('masukan'));
 			$po = $this->api->postMasukan($data);
 			if ($po) {
 				$response = array("status" => true,
 							"msg" => "success",
 							"result" => null);
 			}
 		}else{
 			$response = array("status" => false,
 							"msg" => "Wrong Key",
 							"result" => null);
 		}

 		$this->response($response);
	}	
 
 }
 
