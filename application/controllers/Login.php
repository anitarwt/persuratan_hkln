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
		$this->load->model('auth');

		unset($_SESSION['errors']);

		$params = $this->input->post();

		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect('login');
		} else {
			$checkUser = $this->auth->user(array('username' => $params['username'], 'password' => $params['passowrd'], 'single' => true));
			if (!isset($checkUser)) {
				$this->session->set_flashdata('errors', 'User tidak ditemukan.');
				redirect('login');
			} else {
				$this->session->set_userdata('user', $checkUser);
				redirect('dashboard');
			}
		}

//		if (in_array($params['username'], array('usertu', 'userkabag', 'userkasubag', 'userstaff', 'userkaro'))) {
//			$this->session->set_userdata($params);
//			redirect('dashboard');
//		} else {
//			redirect('login');
//		}
	}

}
