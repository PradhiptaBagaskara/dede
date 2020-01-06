<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_web', 'web');
		$this->session;


	}

	public function index()
	{
		if (!empty($this->session->userdata('id'))) {
			redirect(base_url().'admin/home','refresh');
			
		}

		if ($this->input->post()) {
			$mail = $this->input->post('email');
			$pass = $this->input->post('password');
			$db = $this->web->store_login($mail,$pass);
			$ses = array('id' => $db['id_user'],
							'nama' => $db['nama_user'],
							'username' =>  $db['username'],
							'email' => $db['email']);
			
			$set = $this->session->set_userdata($ses);
			redirect(base_url().'admin/home','refresh');
		}
		$this->load->view('v_login');

 
	}



		public function logout(){
		
		$this->session;
		$this->session->sess_destroy();
		redirect('login');
	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */ ?>