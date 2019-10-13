<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Laporan';
		$this->load->view('laporan-index', $this->data);
	}
}
