<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    var $API = "";

    function __construct() {
        parent::__construct();
        $this->API = "http://localhost/rest_server";
        $this->load->helper('text');
    }

    public function index() {
       
        $this->load->view('post');
    }

   

    

}
