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
 
		if ($this->web->cek_ses_db('session') == '1') {
			$db = $this->web->getAdmin();
			// var_dump($db);
			$ses = array('id' => $db['id'],
							'nama' => $db['nama'],
							'username' =>  $db['username'],
							'email' => $db['email']);
			
			$set = $this->session->set_userdata($ses);
			
		}		
		if(!empty($this->session->userdata('id'))){
			$this->db->where('id_admin', $db['id']);
			$del = $this->db->delete('session');
			if ($del) {
			redirect('admin/home', 'refresh');
				# code...
			}
			redirect('admin/home','refresh');
			// echo $this->session->userdata('id');
		}
		else{
			// echo $this->session->userdata('id_user');
			

		$this->load->view('v_login');
		}
	}

	public function login()
	{
 
		$output = array('error' => false);
 
		$email = $_POST['email'];
		$password = $_POST['password'];

		
		$data = $this->web->login($email);
		
 
		if($data){
			$cekpas = $this->web->cek_pass("email", $email, $password );
			$admin = $data['password'];

			if ($cekpas) {
				if ($this->web->cek_ses_where('session', $data['id']) <= 0) {

					$array =array("id_admin" => $data['id'],
									"status" => 'true');
					
					$this->db->insert('session', $array);
				}
			
			$output['message'] = "Success! Please Wait...";
			

				# code...
			}else{			
				$output['error'] = true;

				$output['message'] = 'password salah';
			}

		}
		else{
			$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
		}
 
		echo json_encode($output); 
		// $this->load->view('v_login');
	}

		public function logout(){
		
		$this->session;
		$this->session->sess_destroy();
		redirect('login');
	
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */ ?>