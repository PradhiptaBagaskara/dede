<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Cerita extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->model('M_api','api');
 	}


 	function index_get(){
 		$this->response(array('status' => true,
 								'msg' => 'success',
 								 'result' => $this->api->getCerita('cerita.status', 'enable')));

 	}
 
 	public function index_post()
 	{
 		// header('Content-Type: multipart/form-data');


 		if ($this->api->cek_field('auth_key', $this->post('auth_key'), 'user') == '1') {
 		$img = $this->api->upload_file('img');
 		// $this->fil
 		$imgName = $img['file']['file_name'];
 		// var_dump($imgName);

 		$data = array('id_user' => $this->post('id_user'),
 						'id_kategori' => $this->post('id_kategori'),
 						'judul' => $this->post('judul'),
 						'img' => $imgName,
 						'diskripsi' => $this->post('diskripsi'),
 						'isi' => $this->post('isi'),
 						'status' => 'disable'

 						 );
 		if ($this->api->postCerita($data)) {
 			$response = array("status" => true,
 							"msg" => "success",
 							"result" => null);
 		}else{
 			$response = array("status" => false,
 							"msg" => "gagal insert",
 							"result" => null);
 		}

 		
 		// $this->response($response);
 		// var_dump($data);
 		}else{
 			$response = array("status" => false,
 							"msg" => "are u hacker?",
 							"result" => null);
 			// $this->response($response);
 		}
 		
 			$this->response($response);
 		
 			
 	}

 	
 
 }
 
