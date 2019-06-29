<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('Input');
    }

    public function index() {
    	$now = new DateTime();
	
        if($this->input->post())
        {
        $judul  = $this->input->post('judul');
        $isi    = $this->input->post('isi');
        $name = rand(1,999)."-".$_FILES['file']['name'];

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $name;
        $config['file_ext_tolower']     = TRUE;
	
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file')){
			$error = array('error' => $this->upload->display_errors());
           
            echo json_encode($error);

            
		}else{
			$data = array('upload_data' => $this->upload->data());
            $url_img = base_url()."uploads/". $data['upload_data']['file_name'];
            $aplud  = $this->Input->masukan($url_img, $judul, $isi);
           

            $data['alert'] = '<div class="alert alert-success alert-dismissible " role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            $this->load->view('post',$data);

	
       
    }
}else{
    $data['alert'] = "";
    $this->load->view('post',$data);

}

   

}

public function data()
{
    echo "data";
}

}
