<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_api', 'api');
		$this->load->model('M_web', 'web');
		$this->session;
		//Do your magic here
	}

	public function index()
	{
		$this->web->cek_login();
		
		
	}



	
}
