<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
 
 class Kategori extends REST_Controller {

 	public function __construct()
 	{
 		parent::__construct();
 	}


 	function index_get(){
 		$db = $this->db->get('kategori')->result();
 		$data = array("msg" => true,
 						"result"=>$db);
 		$this->response($data);

 	}
 

 
 }
 
 /* End of file Order_by_kategori.php */
 /* Location: ./application/controllers/api/Order_by_kategori.php */ ?>