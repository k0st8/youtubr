<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	private $user = null;
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		

		if (!empty($this->user)){
			$this->load->view('home');
		}
		else {
			$this->load->view('login');
		}
	}
	public function login()
	{
		$this->load->helper('url');
		$this->load->helper('form');
		# redirect to search
		if ($this->isLogined()) {
			// $data['error'] = '';
			$this->load->view('show');
		}
		#back to login
		else {
			$data['error'] = 'Wrong user or password, try again!';
			$this->load->view('login', $data);
		}
	}

	private function isLogined()
	{
		$this->load->helper('url');
		$users_dase = json_decode(file_get_contents(base_url() . '/data/dummy-data.json'));
		$users = $users_dase->users;
		$postData = $this->input->post();
		if (!empty($postData['user']) && !empty($postData['pass'])){
			foreach($users as $user){
				if ($user->user == $postData['user'] && $user->pass == $postData['pass']){
					$this->user = $user;
					return true;
				}
			}
		}
		return false;
	}
}
