<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('home');
	}
	public function input_surat(){
		$this->load->view('input_surat_masuk');
	}
	public function tampilan_surat(){
		$this->load->view('tampilan_surat');
	}
	public function tampilan_disposisi(){
		$this->load->view('tampilan_disposisi');
	}
	public function monitoring_surat(){
		$this->load->view('monitoring_surat');
	}
	public function pencarian_surat(){
		$this->load->view('pencarian_surat');
	}
}
