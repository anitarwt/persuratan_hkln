<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Disposisi';
		$this->load->view('disposisi-index', $this->data);
	}
	public function form()
	{
		$this->data['pageTitle'] = 'Disposisi';
		$this->load->view('disposisi-form', $this->data);
	}
}
