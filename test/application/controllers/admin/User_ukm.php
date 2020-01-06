<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_ukm extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_user_ukm', 'user_ukm');

    }

    function index() {
    	// header('Content-Type: application/json');

        $data = $this->user_ukm->getAdminUkm();
        $this->load->view('ukm_user/index', ['Ukms'=>$data]);
    }

    function create(){
    	// header('Content-Type: application/json');    	
    	$user = $this->user_ukm->getUsr();
    	$kat = $this->user_ukm->getKate();
    	if ($this->input->post('simpan')) {
    		$data = ['id_user' => $this->input->post('username'),
    			    			'id_kategori' => $this->input->post('ukm')

    		];
    		$this->user_ukm->insert('ukm', $data);
    		redirect(base_url().'admin/user_ukm','refresh');
	    	
    	}

    	$this->load->view('ukm_user/create', ['user'=>$user, 'kategori'=>$kat]);
    	// echo json_encode($kat);

    }

    function edit($id)
    {
    	$user = $this->user_ukm->get('user');
    	$kat = $this->user_ukm->get('kategori');
    	$ukm = $this->user_ukm->get('ukm', ['id'=> $id]);
    	if ($this->input->post('simpan')) {
    		$data = ['id_user' => $this->input->post('username'),
    			    			'id_kategori' => $this->input->post('ukm')

    		];
    		// var_dump($ukm);
    		$this->user_ukm->update('ukm', $data, ['id'=>$id]);
    		redirect(base_url().'admin/user_ukm','refresh');
	    	
    	}

    	$this->load->view('ukm_user/edit', ['user'=>$user, 'kategori'=>$kat, 'ukm'=>$ukm]);
    }

    function delete($id)
    {
    	$this->user_ukm->delete('ukm', ['id'=> $id]);
    	redirect(base_url().'admin/user_ukm','refresh');

    }
}
        
