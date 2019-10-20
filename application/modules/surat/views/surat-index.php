<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-format-list-bulleted"></i></span> Daftar Surat Masuk
	</h3>
	<div class="pull-right">
		<a href="<?php echo base_url('surat/input') ?>" class="btn btn-primary btn-sm"><i class="mdi mdi-plus"></i> Input Surat</a>
	</div>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<?php
				$this->datatables->generate('table_surat_masuk');
				$this->datatables->jquery('table_surat_masuk');
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

            $(document).on('click', '.detail', function () {
                window.location = baseURL + 'surat/detail_surat/' + $(this).data('id');
            });
            $(document).on('click', '.edit', function () {
                window.location = baseURL + 'surat/input/' + $(this).data('id');
            });
            $(document).on('click', '.disposisi', function () {
                window.location = baseURL + 'surat/disposisi/form/' + $(this).data('id');
            });
            $(document).on('click', '.print', function () {
                window.location = baseURL + 'surat/cetak_disposisi_karo/' + $(this).data('id');
            });
            $(document).on('click', '.print2', function () {
                window.location = baseURL + 'surat/cetak_disposisi_arsip/' + $(this).data('id');
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
                    if (result.value) {
                        window.location = baseURL + 'surat/delete/' + $(this).data('id');
                    }
                })
            })
        });
    })(jQuery);
</script>
