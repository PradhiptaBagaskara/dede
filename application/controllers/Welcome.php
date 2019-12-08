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

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->session->set_userdata('id','1');


		echo base_url();
		
		
	}

	public function data()
	{
		$field = array('id_admin' => '1',
						'status' => 'true' );
		// $make = $this->web->make_tempdb('post', $field);
		$make = $this->db->insert('session', $field);

		if ($make) {
		// echo json_encode($this->web->get_tempdb());

			echo("sukses");
		}else{
			echo "gagal";
		}
	}
	
}
