<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-table-large"></i></span> Laporan Biro Hukum dan Kerjasama Luar Negeri
	</h3>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-6">
						<p class="card-title">Berdasarkan Jenis Surat</p>
						<div class="row">
							<div class="col-12">
								<div class="form-group">
									<label>Jenis Surat</label>
									<select id="jenis_surat" class="form-control">
										<option value="">Semua</option>
										<option value="Undangan">Undangan</option>
										<option value="Surat Biasa">Surat Biasa</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Tanggal Surat</label>
									<div class="input-group">
										<input type="text" class="form-control datepicker" id="tanggal_surat_awal" readonly placeholder="01.10.2019">
										<div class="input-group-append">
											<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>sampai dengan</label>
									<div class="input-group">
										<input type="text" class="form-control datepicker" id="tanggal_surat_akhir" readonly placeholder="01.10.2019">
										<div class="input-group-append">
											<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<p class="card-title">Berdasarkan Penyelesaian Surat</p>
						<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>Bulan</label>
									<div class="input-group">
										<input type="text" class="form-control monthpicker" id="tanggal_penyelesaian_bulan" placeholder="Januari">
										<div class="input-group-append">
											<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>Tahun</label>
									<div class="input-group">
										<input type="text" class="form-control yearpicker" id="tanggal_penyelesaian_tahun" placeholder="2019">
										<div class="input-group-append">
											<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 text-center mb-4">
						<button class="btn btn-gradient-success btn-sm" id="searchBtn"><i class="mdi mdi-magnify"></i> Search</button>
						<button class="btn btn-gradient-primary btn-sm" id="print"><i class="mdi mdi-printer"></i> Cetak</button>
						<hr/>
					</div>
				</div>

				<?php
				$this->datatables->generate('table_surat_masuk');
				?>

			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
<script src="<?php echo base_url('assets/vendors/freezeTable/freeze-table.min.js') ?>"></script>
<script>
    (function ($) {
        'use strict';
        $(function () {
            var erTable_table_surat_masuk;
            $('.datepicker').datepicker({
                format: 'dd.mm.yyyy',
                clearBtn: true
            });
            $('.monthpicker').datepicker({
                format: "MM",
                minViewMode: 1,
                maxViewMode: 1,
                clearBtn: true
            });
            $('.yearpicker').datepicker({
                format: "yyyy",
                minViewMode: 2,
                maxViewMode: 2,
                clearBtn: true
            });

            $(document).on('click', '#searchBtn', function () {
                erTable_table_surat_masuk.ajax.reload(null, false);
            });
            function createDatatable() {
                erTable_table_surat_masuk = $("#table_surat_masuk").DataTable({
                    processing: true,
                    serverSide: true,
                    searchDelay: 500,
                    autoWidth: false,

                    ajax: {
                        url: baseURL + "laporan",
                        type: "POST",
                        data: function (d, dt) {
                            d.dt_name = "table_surat_masuk";
                            d.jenis_surat = $('#jenis_surat').val();
                            d.tanggal_surat_awal = $('#tanggal_surat_awal').val();
                            d.tanggal_surat_akhir = $('#tanggal_surat_akhir').val();
                            d.tanggal_penyelesaian_bulan = $('#tanggal_penyelesaian_bulan').val();
                            d.tanggal_penyelesaian_tahun = $('#tanggal_penyelesaian_tahun').val();
                        }
                    }
                });
            };

            createDatatable();
        });
    })(jQuery);
</script>
