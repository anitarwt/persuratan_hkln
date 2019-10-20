<?php $this->load->view('includes/header', compact('pageTitle')) ?>
<div class="page-header">
	<h3 class="page-title">
		<span class="page-title-icon bg-gradient-primary text-white mr-2"><i class="mdi mdi-table-large"></i></span> <?php echo $pageTitle ?>
	</h3>
</div>
<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body p-4">
				<?php
				$this->datatables->generate('table_role');
				$this->datatables->jquery('table_role');
				?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('includes/footer') ?>
