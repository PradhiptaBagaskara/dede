<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
    	$this->load->model('M_user', 'user');
    	$this->load->model('M_api', 'api');

    }

    function index() {
    	// header('Content-Type: application/json');
    	$user 	= $this->user->get();
    	$this->load->view('user/index', ['users' => $user]);
    	// echo json_encode($user);
        
    }

    function show($id){
    	$where = ['id_user' => $id];

        $user = $this->user->get($where);
        // echo $user->username;
        // var_dump($kategori);die;
        $this->load->view('user/show', ['users' => $user]);
    }

    function edit($id){
    
        $where = ['id_user' => $id];
        if ($this->input->post('edit')) {
        	
	    	if (!empty($this->input->post('password'))) {
	    		$data = [
	            'username' => $this->input->post('username'),
	            'email' => $this->input->post('email'),
	            'nama_user' => $this->input->post('nama'),
	            'password' => $this->api->password($this->input->post('password'))


	        	];

	    	}
	    	else{
		    	$data = array(
		            'username' => $this->input->post('username'),
		            'email' => $this->input->post('email'),
		            'nama_user' => $this->input->post('nama')
		        );
    		}
        // echo var_dump($data);
        	$this->user->update($data, $where);
            redirect(base_url().'admin/user','refresh');
    	
        }

        $user = $this->user->get($where);
        // echo $user->username;
        // var_dump($kategori);die;
        $this->load->view('user/edit', ['users' => $user]);
    }

    function delete($id){
        $this->user->delete(['id_user' => $id]);
        redirect(base_url().'admin/user','refresh');
    }

    function create(){
        if ($this->input->post('simpan')) {
            $data = [
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'nama_user' => $this->input->post('nama'),
                'auth_key' => $this->api->autoId(),
                'password' => $this->api->password($this->input->post('password'))

                ];
            $this->user->insert($data);
            redirect(base_url().'admin/user','refresh');
        

        }
        $this->load->view('user/create');
    }
}
        


 ?>