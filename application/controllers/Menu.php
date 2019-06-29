<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {


    function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->model('Dbms', 'Input');
    }

    function index()
    {
        redirect('menu/dashboard','refresh');
    }

    public function post() {
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
            $url_img = $data['upload_data']['file_name'];
            $aplud  = $this->Input->masukan($url_img, $judul, $isi);
           

            $data['alert'] = '<div class="alert alert-success alert-dismissible " role="alert">
            <strong>Selamat!</strong> Data Berhasil di Inputkan.
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
function dashboard()
{
        $data['data'] = $this->Input->tampil()->result();
        $data['no']     = 1;
        $this->load->view('data', $data);
    
}

function hapus($value='',$img='')
{
    // echo $value." - ".$img;
    $aksi = $this->Input->delete($value, $img);
    if ($aksi) {
        echo("gagal menghapus data");

    }else{
        redirect('menu/dashboard','refresh');

    }
}

public function edit($id='')
{
    $db     = $this->Input->edit($id)->result_array();
    $data['data'] = $db[0];
    // $data['data'] = "<p>asu</p>";

    // var_dump($data);
    // echo $data['data']['isi'];
    // echo $data['data']['isi'];

    $this->load->view('edit', $data);
}

}
