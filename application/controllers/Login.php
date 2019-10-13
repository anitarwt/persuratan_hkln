<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return $this->load->view('auth/login');
	}

	public function check_user()
	{
		$params = $this->input->post();
		if (in_array($params['username'], array('usertu', 'userkabag', 'userkasubag', 'userstaff', 'userkaro'))) {
			$this->session->set_userdata($params);
			redirect('dashboard');
		} else {
			redirect('login');
		}
	}

}
