<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Profil extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_userApi','api');
 		$this->load->model('M_api', 'api2');
 	}


 	function index_get(){
 		$get = $this->get('auth_key');
 		if (!empty($get)) {
 			$data = $this->api->get(['auth_key' => $get]);
 			$res = array('status' => true,
 								'msg' => 'With Img'
 								, 'result' => $data);
 		}else{
 			$res = array('status' => false,
 								'msg' => 'Wrong Method!'
 								, 'result' => null);
 		}
 		$this->response($res);

 	}
 
 	public function index_post()
 	{
 		
 		if ($this->api2->cek_field('auth_key', $this->post('auth_key'), 'user') == '1') {
 			$auth_key = $this->post('auth_key');
 		
 			$email = $this->post('email');
 			$nama = $this->post('nama');
	 		$username = $this->post('username');
	 		$password = $this->post('password');
	 		$foto = $this->api->get(array('auth_key'=> $this->post('auth_key')));
 			$fotoName = "uploads/user/".$foto->foto_user;
	 		if (!empty($_FILES['img'])) {
	 			$img = $this->api->upload_file('img');
 				$imgName = $img['file']['file_name'];
 				@unlink($fotoName);
 				

 				if (!empty($password)) {
 					$data = array('email'=> $email,
	 							'nama_user' => $nama,
	 							'username' => $username,
	 							'password' => $this->api2->password($password),
	 							'foto_user' => $imgName);
 				}else{
 					$data = array('email'=> $email,
	 							'nama_user' => $nama,
	 							'username' => $username,
	 							'foto_user' => $imgName);

 				}

	 			

	 			
	 		}elseif (!empty($password)) {
	 			$data = array('email'=> $email,
	 							'nama_user' => $nama,
	 							'username' => $username,
	 							'password' => $this->api2->password($password));
		 	}else{
	 			$data = array('email'=> $email,
	 							'nama_user' => $nama,
	 							'username' => $username
	 						);
		 	}

		 		

		 	if ($this->api->update($data, array('auth_key' => $auth_key))) {
		 		
		 		$response = array('status' => true,
	 								'msg' => "Profile Updated!"
	 								, 'result' => null);

		 	}
 			
 		}
 		else{
 			$response = array('status' => false,
 								'msg' => 'UserNot Found!'
 								, 'result' => null);
 		}
 		

 		$this->response($response);
	}	
 
 }
 
