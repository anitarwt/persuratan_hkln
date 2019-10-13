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
					<div class="col-2">
						<div class="form-group">
							<label>Tanggal Surat Masuk</label>
							<div class="input-group">
								<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label>hingga</label>
							<div class="input-group">
								<input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="01.10.2019">
								<div class="input-group-append">
									<button class="btn btn-sm btn-gradient-primary"><i class="mdi mdi-calendar"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label for="admin">Admin</label>
							<select id="admin" name="admin" class="form-control">
								<option>Joko</option>
								<option>Agung</option>
							</select>
						</div>
					</div>
					<div class="col-2">
						<div class="form-group">
							<label for="bagian">Bagian</label>
							<select id="bagian" name="bagian" class="form-control">
								<option>Tata Usaha</option>
							</select>
						</div>
					</div>
					<div class="col-2">
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
							<th> Ringkasan Isi</th>
							<th> Nama Pengirim</th>
							<th> Disposisi Ke</th>
							<th> Status</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td> 1</td>
							<td> 999/JK.2/KL.822H/2/12/2019</td>
							<td> 20-12-2019</td>
							<td> Kitas</td>
							<td> Kitas a.n Wulfgong</td>
							<td> Gereja Imanuel</td>
							<td> VI</td>
							<td>
								<label class="badge badge-gradient-warning">PROGRESS</label>
							</td>
							<td>
								<button type="button" class="btn btn-gradient-primary btn-sm">Detail
									<i class=" mdi mdi-view-grid btn-icon-append"></i></button>
							</td>
						</tr>
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
        });
    })(jQuery);
</script>
