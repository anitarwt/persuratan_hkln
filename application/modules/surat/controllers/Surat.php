<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('master/mmaster');
		$this->load->model('msurat');
	}

	public function index()
	{
		$this->data['pageTitle'] = 'Surat Masuk';

		$datatable = $this->datatables->init();
		$datatable->select('*')->from('ph_surat_masuk');

		$datatable
			->style(array(
				'class' => 'table table-striped table-bordered',
			))
			->column('Nomor Surat', 'nomor_surat')
			->column('Tanggal Terima', 'tanggal_terima', function ($data, $row) {
				return date_create($data)->format('d-m-Y');
			})
			->column('Perihal', 'perihal')
			->column('Nama Pengirim', 'nama_pengirim')
			->column('Ringkasan Isi', 'ringkasan')
			->column('Status', 'tindak_lanjut', function ($data, $row) {
				if ($row['tindak_lanjut']) {
					return '<label class="badge badge-gradient-success">SELESAI</label>';
				} else {
					return '<label class="badge badge-gradient-warning">DALAM PROSES</label>';
				}
			})
			->column('Action', 'id_surat', function ($data, $row) {
				$actions = $this->load->view('actions-surat-masuk', $row, true);
				return $actions;
				$edit = '<a class="btn btn-xs btn-success edit" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-pencil"></i></a>';
				$detail = '<a class="btn btn-xs btn-info detail" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>';
				$cetak = '<a title="Cetak disposisi karo" class="btn btn-xs btn-secondary print" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-printer"></i></a>';
				if ($row['disposisi_print'])
					$cetakBagian = '<a title="Cetak disposisi bagian" class="btn btn-xs btn-secondary print2" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-printer"></i></a>';
				if (!$row['tindak_lanjut'] && !$row['disposisi_print'] && !$row['disposisi_arsip_print'])
					$delete = '<a class="btn btn-xs btn-danger delete" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-trash-can"></i></a>';
				else
					$delete = '';
				return '<div class="btn-group">'
					. $edit
					. $detail
					. $cetak
					. $cetakBagian
					. $delete
					. '</div>';
			});

		$this->datatables->create('table_surat_masuk', $datatable);

		$this->load->view('surat-index', $this->data);
	}

	public function index_bagian()
	{
		$this->data['pageTitle'] = 'Surat Masuk';
		$this->load->view('disposisi-index-action', $this->data);
	}

	public function index_staff()
	{
		$this->data['pageTitle'] = 'Surat Masuk';
		$this->load->view('disposisi-index-list', $this->data);
	}

	public function input($id = null)
	{
		if (isset($id)) {
			$dataSurat = $this->msurat->surat_masuk(array('id' => $id, 'single' => true));
			if (!isset($dataSurat))
				redirect('surat');
			$this->data['id'] = $id;
			$this->data['data'] = $dataSurat;
		}

		unset($_SESSION['form_errors']);
		$this->data['pageTitle'] = 'Input Surat';
		$this->data['disposisi'] = $this->mmaster->disposisi(array('tipe' => 'Kepala Biro'));

		if ($this->input->method() === 'post') {
			$params = $this->input->post();
			$this->form_validation->set_rules('tanggal_terima', 'Tanggal Terima', 'required');
			$this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
			if (!isset($id) || (isset($id) && $dataSurat->nomor_surat !== $params['nomor_surat']))
				$this->form_validation->set_rules('nomor_surat', 'Nomor Surat', 'required|is_unique[ph_surat_masuk.nomor_surat]',
					array(
						'is_unique' => 'Nomor Surat sudah ada.'
					));
			$this->form_validation->set_rules('perihal', 'Perihal', 'required');
			$this->form_validation->set_rules('nama_pengirim', 'Nama Pengirim', 'required');
			$this->form_validation->set_rules('nama_tujuan', 'Nama Kepada', 'required');
			if ($this->form_validation->run() !== FALSE) {
				$this->db->trans_begin();

				if (!isset($id))
					$params['barcode'] = hexdec(crc32($params['nomor_surat']));

				$params['tanggal_terima'] = date_create($params['tanggal_terima'])->format('Y-m-d');
				$params['tanggal_surat'] = date_create($params['tanggal_surat'])->format('Y-m-d');

				if (!isset($id))
					$this->db->insert('ph_surat_masuk', $params);
				else
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
		if (isset($id))
			$this->load->view('surat-edit', $this->data);
		else
			$this->load->view('surat-input', $this->data);
	}

	public function delete($id = null)
	{
		if (isset($id) && !empty($id)) {
			$this->db->trans_begin();
			$this->db->delete('ph_surat_masuk', array('id_surat' => $id));
			if ($this->db->trans_status() === false) {
				$this->db->trans_rollback();
			} else {
				$this->db->trans_commit();
			}
			redirect('surat');
		}
	}

	public function detail_surat($id = null)
	{
		$this->data['pageTitle'] = 'Detail Surat';
		if (!isset($id))
			redirect('surat');
		$dataSurat = $this->msurat->surat_masuk(array('id' => $id, 'single' => true));
		if (!isset($dataSurat)) {
			redirect('surat');
		} else {
			$this->data['surat'] = $dataSurat;
		}
		$this->load->view('surat-detail', $this->data);
	}

	public function cetak_disposisi_arsip($id = null)
	{
		if (!isset($id))
			redirect('surat');
		$dataSurat = $this->msurat->surat_masuk(array('id' => $id, 'single' => true));
		if (!isset($dataSurat)) {
			redirect('surat');
		}

		// Update status cetak disposisi bagian
		$this->db->trans_begin();
		$this->db->update('ph_surat_masuk', array('disposisi_arsip_print' => 1), array('id_surat' => $id));
		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}

		$disposisi = $this->mmaster->disposisi(array(
			'tipe' => 'Bagian'
		));

		$type = pathinfo(FCPATH . 'assets/images/logo_kemenag.png', PATHINFO_EXTENSION);
		$data = file_get_contents(FCPATH . 'assets/images/logo_kemenag.png');
		$base64logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
		$barcode = 'data:image/JPEG;base64,' . base64_encode($generator->getBarcode($dataSurat->barcode, $generator::TYPE_CODE_128));

		$this->load->library('pdf');
		$this->pdf->setPaper('A5', 'potrait');
		$this->pdf->filename = "Surat disposisi - " . $dataSurat->nomor_surat . ".pdf";
		$this->pdf->load_view('cetak-disposisi-arsip', array(
			'data' => $dataSurat,
			'logo' => $base64logo,
			'barcode' => $barcode,
			'disposisi' => $disposisi,
		));
		$this->load->view('cetak-disposisi-arsip', array(
			'data' => $dataSurat,
			'logo' => $base64logo,
			'barcode' => $barcode,
			'disposisi' => $disposisi,
		));
	}

	public function cetak_disposisi_karo($id = null)
	{
		if (!isset($id))
			redirect('surat');
		$dataSurat = $this->msurat->surat_masuk(array('id' => $id, 'single' => true));
		if (!isset($dataSurat)) {
			redirect('surat');
		}

		// Update status cetak disposisi karo
		$this->db->trans_begin();
		$this->db->update('ph_surat_masuk', array('disposisi_print' => 1), array('id_surat' => $id));
		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
		} else {
			$this->db->trans_commit();
		}

		$disposisi = $this->mmaster->disposisi(array(
			'tipe' => 'Bagian'
		));

		$type = pathinfo(FCPATH . 'assets/images/logo_kemenag.png', PATHINFO_EXTENSION);
		$data = file_get_contents(FCPATH . 'assets/images/logo_kemenag.png');
		$base64logo = 'data:image/' . $type . ';base64,' . base64_encode($data);

		$generator = new Picqer\Barcode\BarcodeGeneratorJPG();
		$barcode = 'data:image/JPEG;base64,' . base64_encode($generator->getBarcode($dataSurat->barcode, $generator::TYPE_CODE_128));

		$this->load->library('pdf');
		$this->pdf->setPaper('A5', 'potrait');
		$this->pdf->filename = "Surat disposisi - " . $dataSurat->nomor_surat . ".pdf";
		$this->pdf->load_view('cetak-disposisi-karo', array(
			'data' => $dataSurat,
			'logo' => $base64logo,
			'barcode' => $barcode,
			'disposisi' => $disposisi,
		));
		$this->load->view('cetak-disposisi-karo', array(
			'data' => $dataSurat,
			'logo' => $base64logo,
			'barcode' => $barcode,
			'disposisi' => $disposisi,
		));
	}

	public function detail_disposisi()
	{
		$this->data['pageTitle'] = 'Detail Surat';
		$this->load->view('disposisi-detail', $this->data);
	}

	public function cari_surat()
	{
		$this->data['pageTitle'] = 'Pencarian Surat';
		$this->load->view('surat-cari', $this->data);
	}
}
