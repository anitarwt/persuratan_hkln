<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disposisi extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/mmaster');
		$this->load->model('msurat');
	}

	public function index()
	{
		$this->data['pageTitle'] = 'Disposisi';
		$this->load->view('disposisi-index', $this->data);
	}
	public function form($id = null)
	{
		$this->data['pageTitle'] = 'Disposisi';
		if (!isset($id))
			redirect('surat');
		$dataSurat = $this->msurat->surat_masuk(array('id' => $id, 'single' => true));
		if (!isset($dataSurat)) {
			redirect('surat');
		} else {
			$this->data['surat'] = $dataSurat;
		}

		unset($_SESSION['form_errors']);

		if ($this->input->method() === 'post') {
			$params = $this->input->post();
			$this->form_validation->set_rules('tanggal_penyelesaian', 'Tanggal Penyelesaian', 'required');
			$this->form_validation->set_rules('isi_disposisi[]', 'Isi Disposisi', 'required');
			$this->form_validation->set_rules('bagian_disposisi[]', 'Tujuan Disposisi', 'required');
			if ($this->form_validation->run() !== FALSE) {
				$this->db->trans_begin();

				$params['tanggal_penyelesaian'] = date_create($params['tanggal_penyelesaian'])->format('Y-m-d');
				$params['isi_disposisi'] = join(',', $params['isi_disposisi']);
				$params['bagian_disposisi'] = join(',', $params['bagian_disposisi']);
				$this->db->update('ph_surat_masuk', $params, array('id_surat' => $id));

				if ($this->db->trans_status() === false) {
					$this->db->trans_rollback();
				} else {
					$this->db->trans_commit();
					redirect('surat');
				}
			} else {
				$this->session->set_flashdata('form_errors', true);
			}
		}

		$this->data['disposisi'] = $this->mmaster->disposisi(array('tipe' => 'Bagian'));
		$this->load->view('disposisi-form', $this->data);
	}
}
