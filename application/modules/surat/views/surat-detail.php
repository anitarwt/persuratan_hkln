<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Detail Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<form class="forms-sample">
					<div class="form-group row">
						<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Terima</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo date_create($surat->tanggal_terima)->format('d.m.Y') ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Surat</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo date_create($surat->tanggal_surat)->format('d.m.Y') ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="sifatSurat" class="col-sm-3 col-form-label">Sifat Surat</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->sifat_surat ?></p>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Jenis Surat</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->jenis_surat ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nomor Surat</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->nomor_surat ?></p>
						</div>
					</div>

					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Lampiran</label>
						<div class="col-sm-9">
							<p class="col-form-label">
								<a href="#">Lihat lampiran</a>
							</p>
						</div>
					</div>

					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Perihal</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->perihal ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nama Pengirim</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->nama_pengirim ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Kepada</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo $surat->nama_tujuan ?></p>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Ringkasan</label>
						<div class="col-sm-9">
							<p class="col-form-label"><?php echo nl2br($surat->ringkasan) ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<a href="<?php echo base_url('surat')?>" class="btn btn-light btn-icon-text">Tutup</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
<script>
    (function ($) {
        'use strict';
        $(function () {
            $('.datepicker').datepicker({
            });
        });
    })(jQuery);
</script>
