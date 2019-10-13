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
							<select id="jenisSurat" name="jenisSurat" class="form-control">
								<option>Perihal</option>
								<option>Nomor Surat</option>
								<option>Jenis Surat</option>
							</select>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<label>Pencarian berdasarkan</label>
							<input type="text" class="form-control" name="search" placeholder="Cari">
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label>Tanggal Surat</label>
							<div class="input-group">
								<input type="text" class="form-control datepicker" id="inlineFormInputGroupUsername2" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label>Tanggal Surat Masuk</label>
							<div class="input-group">
								<input type="text" class="form-control datepicker" id="inlineFormInputGroupUsername2" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-3">
						<div class="form-group">
							<button class="btn btn-block btn-primary mt-4">Search</button>
						</div>
					</div>
				</div>
				<div id="table-pencarian">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th> No</th>
							<th> No Surat</th>
							<th> Tanggal Terima</th>
							<th> Perihal</th>
							<th> Nama Pengirim</th>
							<th> Ringkasan Isi</th>
							<th> Status</th>
							<th>Aksi</th>

						</tr>


						</thead>
						<tbody>
						<?php for($i=1; $i<10; $i++): ?>
							<tr>
								<td> <?php echo $i ?></td>
								<td> 999/JK.2/KL.822H/2/12/2019</td>
								<td> 20-12-2019</td>
								<td> Undangan Narasumber</td>
								<td> Kementerian Dalam Negeri</td>
								<td> Undangan Narasumber Rapat</td>
								<td>
									<label class="badge badge-gradient-warning">PROGRESS</label>
								</td>
								<td>
									<button type="button" class="btn btn-gradient-primary btn-sm">Detail
										<i class=" mdi mdi-view-grid btn-icon-append"></i></button>
								</td>
							</tr>
						<?php endfor; ?>
						</tbody>
					</table>
				</div>
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
            $("#table-pencarian").freezeTable({
                fixedNavbar: '.navbar',
                columnNum: 2,
                columnBorderWidth: 2,
                shadow: true
            });
            $('.datepicker').datepicker({
            });
        });
    })(jQuery);
</script>
