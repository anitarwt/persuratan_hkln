<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Dashboard';
		$this->load->view('surat-index', $this->data);
	}
	public function input()
	{
		$this->data['pageTitle'] = 'Input Surat';
		$this->load->view('surat-input', $this->data);
	}
}
