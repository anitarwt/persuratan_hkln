<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<ul class="nav">
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
				<span class="menu-title">Dashboard</span>
				<i class="mdi mdi-home menu-icon"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('surat'); ?>">
				<span class="menu-title">Surat Masuk</span>
				<i class="mdi mdi-format-list-bulleted menu-icon"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('surat/cari_surat') ?>">
				<span class="menu-title">Pencarian Surat Masuk</span>
				<i class="mdi mdi-table-large menu-icon"></i>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="<?php echo base_url('laporan') ?>">
				<span class="menu-title">Laporan</span>
				<i class="mdi mdi-chart-line menu-icon"></i>
			</a>
		</li>
		<?php if($_SESSION['user']->id_role === '1') : ?>
		<li class="nav-item">
			<a class="nav-link" href="#menu-master" data-toggle="collapse" aria-expanded="false" aria-controls="menu-master">
				<span class="menu-title">Master</span>
				<i class="menu-arrow"></i>
				<i class="mdi mdi-chart-line menu-icon"></i>
			</a>
			<div class="collapse" id="menu-master">
				<ul class="nav flex-column sub-menu">
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('master/master_role') ?>">Role</a> </li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('master/master_user') ?>">User</a> </li>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url('master/master_disposisi') ?>">Bagian Disposisi</a> </li>
				</ul>
			</div>
		</li>
		<?php endif ?>
	</ul>
</nav>
<!-- partial -->
