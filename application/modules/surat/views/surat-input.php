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
				<form class="forms-sample">
					<div class="form-group row">
						<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tanggal Terima</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputUsername2" placeholder="tanggal terima">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal Surat</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="exampleInputEmail2" placeholder="tanggal surat">
						</div>
					</div>
					<div class="form-group row">
						<label for="sifatSurat" class="col-sm-3 col-form-label">Sifat Surat</label>
						<div class="col-sm-9">
							<select id="sifatSurat" name="JenisSurat" class="form-control">
								<option>Rahasia</option>
								<option>Biasa</option>
								<option>Penting</option>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="jenisSurat" class="col-sm-3 col-form-label">Jenis Surat</label>
						<div class="col-sm-9">
							<select id="jenisSurat" name="jenisSurat" class="form-control">
								<option>Undangan</option>
								<option>Surat Biasa</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nomor Surat</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Nomor Surat">
						</div>
					</div>

					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Lampiran</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Lampiran">
						</div>
					</div>

					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Perihal</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Perihal">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Nama Pengirim</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Nama Pengirim">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Kepada</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="Kepada">
						</div>
					</div>
					<div class="form-group row">
						<label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Ringkasan</label>
						<div class="col-sm-9">
							<textarea name="ringkasan" class="form-control" placeholder="Ringkasan"></textarea>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-gradient-primary btn-icon-text">Tambah Surat</button>
							<button class="btn btn-light btn-icon-text">Batal</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
