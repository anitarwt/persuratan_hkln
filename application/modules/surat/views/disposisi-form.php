<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Input Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-6 grid-margin stretch-card">
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
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-6 grid-margin">
		<div class="card">
			<div class="card-body">

				<?php if (isset($_SESSION['form_errors'])): ?>
					<h3 class="card-title text-danger">Cek kembali inputan surat</h3>
					<ul class="list-arrow text-danger">
						<?php echo validation_errors('<li>', '</li>'); ?>
					</ul>
				<?php endif; ?>
				<form class="forms-sample" action="<?php echo base_url('surat/disposisi/form/' . $surat->id_surat) ?>" method="post">
					<div class="form-group row">
						<label for="bagian_disposisi" class="col-sm-3 col-form-label">Diteruskan kepada</label>
						<div class="col-sm-9">
							<select id="bagian_disposisi[]" name="bagian_disposisi[]" class="form-control" multiple>
								<?php
								foreach ($disposisi as $d) {
									echo "<option value='$d->nama_disposisi' " . set_select('bagian_disposisi[]', $d->nama_disposisi) . ">$d->nama_disposisi</option>";
								}
								?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Isi Disposisi</label>
						<div class="col-sm-9">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Teliti"> Teliti
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Catat"> Catat
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Pelajari"> Pelajari
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Hadiri"> Hadiri
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Proses sesuai ketentuan"> Proses sesuai ketentuan</label>
										</div>
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Seperlunya"> Seperlunya
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Arsip / Dokumen"> Arsip / Dokumen
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Tindak Lanjut"> Tindak Lanjut
											</label>
										</div>
										<div class="form-check">
											<label class="form-check-label">
												<input type="checkbox" class="form-check-input" name="isi_disposisi[]" value="Siapkan Jawaban"> Siapkan Jawaban
											</label>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group row">
						<label for="catatan_disposisi" class="col-sm-3 col-form-label">Catatan</label>
						<div class="col-sm-9">
							<textarea name="catatan_disposisi" id="catatan_disposisi" class="form-control" placeholder="Catatan"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="tanggal_penyelesaian" class="col-sm-3 col-form-label">Tanggal Penyelesaian</label>
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" id="tanggal_penyelesaian" name="tanggal_penyelesaian" placeholder="tanggal terima">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-gradient-primary btn-icon-text">Disposisi</button>
							<button class="btn btn-light btn-icon-text">Batal</button>
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
                format: 'dd.mm.yyyy',
                autoclose: true,
            });

            $('form').on('reset', function () {
                $("input[type='hidden']", $(this)).val(null);
            });
        });
    })(jQuery);
</script>
