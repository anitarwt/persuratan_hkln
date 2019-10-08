<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Monitoring';
		$this->load->view('monitoring-index', $this->data);
	}
}
