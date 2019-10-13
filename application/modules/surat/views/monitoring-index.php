<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-chart-bar"></i></span> Monitoring Surat Masuk Biro Hukum dan Kerjasama Luar Negeri
	</h3>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<div id="table-monitoring">
					<table class="table table-bordered table-striped">
						<thead>
						<tr>
							<th> No</th>
							<th> No Surat</th>
							<th> Tanggal Surat</th>
							<th> Tanggal Masuk</th>
							<th> Jenis Surat</th>
							<th> Perihal</th>
							<th> Ringkasan Isi Surat</th>
							<th> Pengirim</th>
							<th> Disposisi Kepada</th>
							<th> Posisi Surat</th>
							<th> Aksi</th>
						</tr>


						</thead>
						<tbody>
						<?php for ($i = 1; $i < 10; $i++): ?>
							<tr>
								<td> <?php echo $i ?></td>
								<td> 999/JK.2/KL.822H/2/12/2019</td>
								<td> 20-12-2019</td>
								<td> 17-12-2019</td>
								<td> Undangan</td>
								<td> Undangan Narasumber</td>
								<td>Undangan Narasumber Acara Kegiatan Workshop</td>
								<td> Kementerian Dalam Negeri</td>
								<td> Bagian IV</td>
								<td> Bagian IV</td>
								<td>
									<button type="button" class="btn btn-gradient-primary btn-icon-text btn-sm"> Edit
										<i class="mdi mdi-file-check btn-icon-append"></i></button>
									<a href="<?php echo base_url('surat/detail_surat') ?>" class="btn btn-gradient-primary btn-sm">Detail
										<i class=" mdi mdi-view-grid btn-icon-append"></i></a>
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
            $("#table-monitoring").freezeTable({
                fixedNavbar: '.navbar',
                columnNum: 2,
                columnBorderWidth: 2,
                shadow: true
            });
        });
    })(jQuery);
</script>
