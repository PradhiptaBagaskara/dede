<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Msg extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_api', 'api');
		$this->load->model('M_msg', 'kat');
		//Do your magic here
	}

	public function index()
	{
		// var_dump($kategori['id_kategori']);
		$this->load->view('msg/create');
	}

	public function create()
	{
		$img = $this->api->upload_file('img');
 		$imgName = $img['file']['file_name'];
		$kategori = $this->kat->getAll('kategori', ['nama_kategori'=>'administrator']);



 		$data = array('id_kategori' => $kategori['id_kategori'], 						
 						'judul' => $this->input->post('judul'),
 						'img' => $imgName,
 						'is_admin' => 1,
 						'diskripsi' => strip_tags($this->input->post('diskripsi')),
 						'isi' => $this->input->post('isi'),
 						'status' => 'enable'

 						 );
 		if ($this->api->postCerita($data)) {
			$this->api->sendNotif($this->input->post('judul'), 
				strip_tags($this->input->post('diskripsi')));

 			redirect(base_url().'admin/home','refresh');
 		}		
	}



}

/* End of file Msg.php */
/* Location: ./application/controllers/admin/Msg.php */

 ?>