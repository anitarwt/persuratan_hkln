<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-table-large"></i></span> <?php echo $pageTitle ?>
	</h3>
</div>
<div class="row">
	<div class="col-lg-8 grid-margin stretch-card">
		<div class="card">
			<div class="card-body p-4">
				<?php
				$this->datatables->generate('table_ms_disposisi');
				$this->datatables->jquery('table_ms_disposisi');
				?>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Form</h3>
				<?php echo validation_errors('* '); ?>
				<?php echo form_open('master/master_disposisi', array('method' => 'post')); ?>
				<input type="hidden" id="id_ms_disposisi" name="id_ms_disposisi">
				<div class="form-group">
					<label for="nama_sifat">Nama Bagian Disposisi</label>
					<input class="form-control" name="nama_disposisi" id="nama_disposisi" placeholder="Nama Bagian Disposisi">
				</div>
				<div class="form-group">
					<label for="nama_sifat">Tipe</label>
					<select class="form-control" name="tipe" id="tipe">
						<option value="Kepala Biro">Kepala Biro</option>
						<option value="Bagian">Bagian</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary">
					Simpan
				</button>
				<button type="reset" class="btn btn-warning">Reset</button>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
<script>
    (function ($) {
        'use strict';
        $(function () {
            $('form').on('reset', function() {
                $("input[type='hidden']", $(this)).val(null);
            });
            $(document).on('click', '.edit', function () {
                $('form').deserialize($(this).data('data'));
            });
            $(document).on('click', '.delete', function () {
                Swal.fire({
                    title: 'Peringatan',
                    text: "Anda yakin untuk menghapus data ini?",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Tidak',
                    confirmButtonText: 'Iya'
                }).then((result) => {
                    window.location = baseURL + 'master/master_disposisi_delete/' + $(this).data('id');
                })
            })
        });
    })(jQuery);
</script>
