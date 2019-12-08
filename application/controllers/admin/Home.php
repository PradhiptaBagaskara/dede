<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->library('session');
		$this->load->model('M_web', 'web');
		
		
	}

	public function index()
	{

		$data['cerita'] = $this->web->getCerita();		
		// var_dump($data);
		$this->load->view('home/index',$data);
	}

	public function view($id)
	{
		$cerita = $this->web->getById($id, 'id_cerita');
		if ($cerita) {
			$this->load->view('home/show', ['cerita' => $cerita]);
		}
	}

	public function toggle($id)
	{
		$cerita = $this->web->getById($id, 'id_cerita');
		if ($cerita) {
			if ($cerita->status == 'enable') {
				$this->web->updateById(['status' => 'disable'], $id, 'id_cerita');
			} else {
				$this->web->updateById(['status' => 'enable'], $id, 'id_cerita');
			}
		}

		redirect(base_url('admin/home'));
	}

	public function test()
	{
		echo '<iframe class="preview" src="http://www.w3schools.com">
  <p>Your browser does not support iframes.</p>
</iframe>';
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/admin/Home.php */ 