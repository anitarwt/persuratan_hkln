<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends Admin_Controller
{
	public function index()
	{
		$this->data['pageTitle'] = 'Laporan';

		$params = $this->input->post();

		$datatable = $this->datatables->init();
		$datatable->select('*');
		$datatable->from('ph_surat_masuk');

		if (isset($params['jenis_surat']) && !empty($params['jenis_surat'])) {
			$datatable->where('jenis_surat', $params['jenis_surat']);
		}
		if (isset($params['tanggal_surat_awal']) && !empty($params['tanggal_surat_awal'])) {
			$datatable->where('tanggal_surat >=', date_create($params['tanggal_surat_awal'])->format('Y-m-d'));
		}
		if (isset($params['tanggal_surat_akhir']) && !empty($params['tanggal_surat_akhir'])) {
			$datatable->where('tanggal_surat <=', date_create($params['tanggal_surat_akhir'])->format('Y-m-d'));
		}
		if (isset($params['tanggal_penyelesaian_bulan']) && !empty($params['tanggal_penyelesaian_bulan'])) {
			$datatable->where('month(tanggal_penyelesaian)', date_create($params['tanggal_penyelesaian_bulan'])->format('m'));
		}
		if (isset($params['tanggal_penyelesaian_tahun']) && !empty($params['tanggal_penyelesaian_tahun'])) {
			$datatable->where('year(tanggal_penyelesaian)', $params['tanggal_penyelesaian_tahun']);
		}

		$datatable
			->style(array(
				'class' => 'table table-striped table-bordered table-responsive',
			))
			->column('Tanggal Surat', 'tanggal_surat', function ($data, $row) {
				return date_create($data)->format('d-m-Y');
			})
			->column('Tanggal Terima', 'tanggal_terima', function ($data, $row) {
				return date_create($data)->format('d-m-Y');
			})
			->column('Nomor Surat', 'nomor_surat')
			->column('Jenis Surat', 'jenis_surat')
			->column('Pengirim', 'nama_pengirim')
			->column('Disposisi', 'bagian_disposisi')
			->column('Tanggal Penyelesaian', 'tanggal_penyelesaian', function ($data, $row) {
				return date_create($data)->format('d-m-Y');
			})
			->column('Status', 'tindak_lanjut', function ($data, $row) {
				if ($row['tindak_lanjut']) {
					return '<label class="badge badge-gradient-success">SELESAI</label>';
				} else {
					return '<label class="badge badge-gradient-warning">DALAM PROSES</label>';
				}
			})
			->column('Action', 'id_surat', function ($data, $row) {
				$detail = '<a class="btn btn-xs btn-info detail" data-id="' . $data . '" href="javascript:void(0)"><i class="mdi mdi-magnify"></i></a>';
				return '<div class="btn-group">'
					. $detail
					. '</div>';
			});

		$this->datatables->create('table_surat_masuk', $datatable);

		$this->load->view('laporan-index', $this->data);
	}
}
