<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-home"></i></span> Dashboard
	</h3>
	<h4 class="text-gray">Selamat Datang di Halaman Tata Usaha, <span class="text-danger">Anita Rahmawati</span></h4>
</div>

<div class="row">

	<div class="col-md-5 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Rekapitulasi Surat Masuk</h4>
				<h3 class="text-small"><?php echo date_create()->format('d F Y') ?></h3>
				<canvas id="traffic-chart"></canvas>
				<div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
