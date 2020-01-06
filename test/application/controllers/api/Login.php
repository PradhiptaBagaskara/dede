<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Login extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_api','api');
 	}


 	function index_get(){
 		$this->response(array('msg' => false, 'result' => null));

 	}
 
 	public function index_post()
 	{
 		$email = $this->post('email');
 		$username = $this->post('username');
 		$password = $this->post('password');


 		$uname = $this->api->cek_field('username', $username,'user');
 		$mail = $this->api->cek_field('email', $email,'user');
 		// $pass = $this->api->cek_pass('username', $username, $password);


 		if ($uname == "1" ) {

 			$var = $this->api->login('username', $username, $password);
 			if ($var) {
 				$res = $this->api->getAllUser('username', $username);
 				$out = array('status' => true,
 								'msg' => 'success',
 								'result' => $res);
 				$this->response($out);
 			}else{
 				$this->response(array("status" => false,
		 											"msg" => "Wrong Password!",
		 			 								"result" => null));
 			}
		 	
 		}elseif ($mail == "1") {
 				$var = $this->api->login('email', $email, $password);
 			if ($var) {
 				$res = $this->api->getAllUser('email', $email);
 				$out = array('status' => true,
 								'msg' => 'success',
 								'result' => $res);
 				$this->response($out);
 			}else{
 				$this->response(array("status" => false,
		 											"msg" => "Wrong Password!",
		 			 								"result" => null));
 			}
		 	
 		}
 		else{
 			$this->response(array("status" => false,
		 											"msg" => "username or email not exists!",
		 			 								"result" => null));
 		}
 	
 			
 	}

 	
 
 }
 
