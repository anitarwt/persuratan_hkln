<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Dashboard';
		$this->load->view('index', $this->data);
	}
}
