<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mmaster');
	}


	public function master_role()
	{
		$this->data['pageTitle'] = 'Master Role';

		$datatable = $this->datatables->init();
		$datatable->select('*')->from('ph_role');

		$datatable
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('Name', 'nama');

		$this->datatables->create('table_role', $datatable);

		$this->load->view('role', $this->data);
	}

	public function master_user()
	{
		$this->data['pageTitle'] = 'Master User';
		$this->data['roles'] = $this->mmaster->roles();

		if ($this->input->method() === 'post') {
			$params = $this->input->post();
			$this->form_validation->set_rules('nama', 'Nama User', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('id_role', 'Role User', 'required');
			if ($this->form_validation->run() !== FALSE) {
				$this->db->trans_begin();
				if (empty($params['id_user'])) {
					$this->db->insert('ph_user', array(
						'nama' => $params['nama'],
						'username' => $params['username'],
						'password' => md5($params['password']),
						'id_role' => $params['id_role'],
					));
				} else {
					$this->db->update('ph_user', array(
						'nama' => $params['nama'],
						'username' => $params['username'],
						'password' => md5($params['password']),
						'id_role' => $params['id_role'],
					), array('id_user' => $params['id_user']));
				}
				if ($this->db->trans_status() === false) {
					$this->db->trans_rollback();
				} else {
					$this->db->trans_commit();
					redirect('master/master_user');
				}
			}
		}

		$datatable = $this->datatables->init();
		$datatable->select('id_user, nama, username, id_role')->from('ph_user');

		$mmaster = $this->mmaster;

		$datatable
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('Nama User', 'nama')
			->column('Username', 'username')
			->column('Role', 'id_role', function ($data, $row) use ($mmaster) {
				$role = $mmaster->roles(array('id_role' => $data, 'single' => true));
				return $role->nama;
			})
			->column('Action', 'id_user', function ($data, $row) {
				return '<div class="btn-group">'
					. '<a class="btn btn-xs btn-primary edit" data-id="' . $data . '" data-data=\'' . json_encode($row) . '\' href="javascript:void(0)">Edit</a>'
					. '<a class="btn btn-xs btn-danger delete" data-id="' . $data . '" href="javascript:void(0)">Delete</a>'
					. '</div>';
			});

		$this->datatables->create('table_user', $datatable);

		$this->load->view('user', $this->data);
	}

	public function master_disposisi()
	{
		$this->data['pageTitle'] = 'Master Disposisi';

		if ($this->input->method() === 'post') {
			$params = $this->input->post();
			$this->form_validation->set_rules('nama_disposisi', 'Nama Disposisi', 'required');
			if ($this->form_validation->run() !== FALSE) {
				$this->db->trans_begin();
				if (!isset($params['id_ms_disposisi']) || empty($params['id_ms_disposisi'])) {
					$this->db->insert('ph_ms_disposisi', array(
						'nama_disposisi' => $params['nama_disposisi'],
						'tipe' => $params['tipe'],
					));
				} else {
					$this->db->update('ph_ms_disposisi', array(
						'nama_disposisi' => $params['nama_disposisi'],
						'tipe' => $params['tipe'],
					), array('id_ms_disposisi' => $params['id_ms_disposisi']));
				}
				if ($this->db->trans_status() === false) {
					$this->db->trans_rollback();
				} else {
					$this->db->trans_commit();
					redirect('master/master_disposisi');
				}
			}
		}

		$datatable = $this->datatables->init();
		$datatable->select('*')->from('ph_ms_disposisi');

		$datatable
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('Nama Bagian Disposisi', 'nama_disposisi')
			->column('Tipe Disposisi', 'tipe')
			->column('Action', 'id_ms_disposisi', function ($data, $row) {
				return '<div class="btn-group">'
					. '<a class="btn btn-xs btn-primary edit" data-id="' . $data . '" data-data=\'' . json_encode($row) . '\' href="javascript:void(0)">Edit</a>'
					. '<a class="btn btn-xs btn-danger delete" data-id="' . $data . '" href="javascript:void(0)">Delete</a>'
					. '</div>';
			});

		$this->datatables->create('table_ms_disposisi', $datatable);

		$this->load->view('surat-disposisi', $this->data);
	}

	public function master_disposisi_delete($id = null)
	{
		if (isset($id) && !empty($id)) {
			$this->db->trans_begin();
			$this->db->delete('ph_ms_disposisi', array('id_ms_disposisi' => $id));
			if ($this->db->trans_status() === false) {
				$this->db->trans_rollback();
			} else {
				$this->db->trans_commit();
			}
			redirect('master/master_disposisi');
		}
	}
}
