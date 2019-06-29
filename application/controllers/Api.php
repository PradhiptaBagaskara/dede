<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends CI_Controller {

	    function __construct() {
        parent::__construct();
        $this->load->model('Dbms', 'dbku');
        header('Content-Type: application/json');
    }


	public function index()
	{
		$arrayName = array('msg' => true,
							'data'=> $this->dbku->tampilApi()->result()) ;

		echo json_encode($arrayName);
		
	}

	

}

/* End of file Api.php */
/* Location: ./application/controllers/Api.php */