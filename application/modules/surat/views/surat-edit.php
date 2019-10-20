<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Input Surat Masuk
	</h3>
</div>
<div class="row">
	<div class="col-md-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?php if (isset($_SESSION['form_errors'])): ?>
					<h3 class="card-title text-danger">Cek kembali inputan surat</h3>
					<ul class="list-arrow text-danger">
						<?php echo validation_errors('<li>', '</li>'); ?>
					</ul>
				<?php endif; ?>
				<?php echo form_open_multipart('surat/input/' . $id); ?>
				<form class="forms-sample">
					<div class="form-group row">
						<label for="tanggal_terima" class="col-sm-3 col-form-label">Tanggal Terima</label>
						<div class="col-sm-9">
							<input type="text" autocomplete="false" class="form-control datepicker" id="tanggal_terima" name="tanggal_terima" placeholder="tanggal terima" value="<?php echo set_value('tanggal_terima', date_create($data->tanggal_terima)->format('d.m.Y')) ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="tanggal_surat" class="col-sm-3 col-form-label">Tanggal Surat</label>
						<div class="col-sm-9">
							<input type="text" autocomplete="false" class="form-control datepicker" id="tanggal_surat" name="tanggal_surat" placeholder="tanggal surat" value="<?php echo set_value('tanggal_surat', date_create($data->tanggal_terima)->format('d.m.Y')) ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="sifat_surat" class="col-sm-3 col-form-label">Sifat Surat</label>
						<div class="col-sm-9">
							<select id="sifat_surat" name="sifat_surat" class="form-control">
								<option value="Rahasia" <?php echo set_select('sifat_surat', 'Rahasia', $data->sifat_surat === 'Rahasia') ?>>Rahasia</option>
								<option value="Biasa" <?php echo set_select('sifat_surat', 'Biasa', $data->sifat_surat === 'Biasa') ?>>Biasa</option>
								<option value="Penting" <?php echo set_select('sifat_surat', 'Penting', $data->sifat_surat === 'Penting') ?>>Penting</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="jenis_surat" class="col-sm-3 col-form-label">Jenis Surat</label>
						<div class="col-sm-9">
							<select id="jenis_surat" name="jenis_surat" class="form-control">
								<option value="Undangan" <?php echo set_select('jenis_surat', 'Undangan', $data->jenis_surat === 'Undangan') ?>>Undangan</option>
								<option value="Surat Biasa" <?php echo set_select('jenis_surat', 'Surat Biasa', $data->jenis_surat === 'Surat Biasa') ?>>Surat Biasa</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="nomor_surat" class="col-sm-3 col-form-label">Nomor Surat</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nomor_surat" name="nomor_surat" placeholder="Nomor Surat" value="<?php echo set_value('nomor_surat', $data->nomor_surat) ?>">
						</div>
					</div>

					<div class="form-group row">
						<label for="lampiran" class="col-sm-3 col-form-label">Lampiran</label>
						<div class="col-sm-9">
							<input type="file" class="form-control" id="lampiran" name="lampiran" placeholder="Lampiran">
						</div>
					</div>

					<div class="form-group row">
						<label for="perihal" class="col-sm-3 col-form-label">Perihal</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="perihal" name="perihal" placeholder="Perihal" value="<?php echo set_value('perihal', $data->perihal) ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nama_pengirim" class="col-sm-3 col-form-label">Nama Pengirim</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nama_pengirim" name="nama_pengirim" placeholder="Nama Pengirim" value="<?php echo set_value('nama_pengirim', $data->nama_pengirim) ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="nama_tujuan" class="col-sm-3 col-form-label">Kepada</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="nama_tujuan" name="nama_tujuan" placeholder="Kepada" value="<?php echo set_value('nama_tujuan', $data->nama_tujuan) ?>">
						</div>
					</div>
					<div class="form-group row">
						<label for="ringkasan" class="col-sm-3 col-form-label">Ringkasan</label>
						<div class="col-sm-9">
							<textarea id="ringkasan" name="ringkasan" class="form-control" placeholder="Ringkasan"><?php echo set_value('ringkasan', $data->ringkasan) ?></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="id_ms_disposisi" class="col-sm-3 col-form-label">Disposisi</label>
						<div class="col-sm-9">
							<select id="id_ms_disposisi" name="id_ms_disposisi" class="form-control">
								<?php
								foreach ($disposisi as $d) {
									echo "<option value='$d->id_ms_disposisi' " . set_select('id_ms_disposisi', $d->id_ms_disposisi, $data->id_ms_disposisi === $d->id_ms_disposisi) . ">$d->nama_disposisi</option>";
								}
								?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-gradient-primary btn-icon-text">Simpan Surat</button>
							<button class="btn btn-warning btn-icon-text" type="reset">Reset</button>
							<a href="<?php echo base_url('surat') ?>" class="btn btn-light btn-icon-text">Batal</a>
						</div>
					</div>
					<?php echo form_close(); ?>
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
