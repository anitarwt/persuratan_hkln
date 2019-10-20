<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-table-large"></i></span> Cari Surat Masuk Biro Hukum dan Kerjasama Luar Negeri
	</h3>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-2">
						<div class="form-group">
							<label>Pencarian berdasarkan</label>
							<select id="berdasarkan" name="berdasarkan" class="form-control">
								<option value="1">Perihal</option>
								<option value="2">Nomor Surat</option>
								<option value="3">Jenis Surat</option>
							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label>Pencarian berdasarkan</label>
							<input type="text" class="form-control" name="search_by" id="search_by" placeholder="Cari">
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label>Tanggal Surat</label>
							<div class="input-group">
								<input type="text" class="form-control datepicker" id="tanggal_surat" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label>Tanggal Surat Masuk</label>
							<div class="input-group">
								<input type="text" class="form-control datepicker" id="tanggal_terima" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<button class="btn btn-block btn-primary mt-4" id="searchBtn">Search</button>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-3">
						<div class="form-group">
							<label>Pencarian barcode</label>
							<input type="text" class="form-control" name="barcode" id="barcode" placeholder="Cari barcode">
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<button class="btn btn-block btn-primary mt-4" id="searchBtn">Scan</button>
						</div>
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

            $("#table-pencarian").freezeTable({
                fixedNavbar: '.navbar',
                columnNum: 2,
                columnBorderWidth: 2,
                shadow: true
            });
            $('.datepicker').datepicker({
                format: 'dd.mm.yyyy'
            });

            $(document).on('click', '#searchBtn', function () {
                erTable_table_surat_masuk.ajax.reload(null, false);
                $('#barcode').focus();
                $('#barcode').select();
            });

            $('#barcode').focus();

            function createDatatable() {
                erTable_table_surat_masuk = $("#table_surat_masuk").DataTable({
                    processing: true,
                    serverSide: true,
                    searchDelay: 500,
                    autoWidth: false,

                    ajax: {
                        url: baseURL + "surat/cari_surat",
                        type: "POST",
                        data: function (d, dt) {
                            d.dt_name = "table_surat_masuk";
                            d.berdasarkan = $('#berdasarkan').val();
                            d.search_by = $('#search_by').val();
                            d.tanggal_surat = $('#tanggal_surat').val();
                            d.tanggal_terima = $('#tanggal_terima').val();
                            d.barcode = $('#barcode').val();
                        }
                    }
                });
            };

            createDatatable();

        });
    })(jQuery);
</script>
