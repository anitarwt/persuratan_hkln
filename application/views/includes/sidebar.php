<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
	<?php if ($_SESSION['username'] === 'usertu'): ?>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
					<span class="menu-title">Dashboard</span>
					<i class="mdi mdi-home menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat'); ?>">
					<span class="menu-title">Daftar Surat Masuk</span>
					<i class="mdi mdi-format-list-bulleted menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat/input') ?>">
					<span class="menu-title">Input Surat Masuk</span>
					<i class="mdi mdi-plus-box menu-icon"></i>
				</a>

			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat/disposisi') ?>">
					<span class="menu-title">Disposisi Surat</span>
					<i class="mdi mdi-contacts menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat/monitoring') ?>">
					<span class="menu-title">Monitoring Surat Masuk</span>
					<i class="mdi mdi-chart-bar menu-icon"></i>
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


		</ul>
	<?php elseif ($_SESSION['username'] === 'userkabag'): ?>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
					<span class="menu-title">Dashboard</span>
					<i class="mdi mdi-home menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat/index_bagian'); ?>">
					<span class="menu-title">Daftar Surat Masuk</span>
					<i class="mdi mdi-format-list-bulleted menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('laporan') ?>">
					<span class="menu-title">Laporan</span>
					<i class="mdi mdi-chart-line menu-icon"></i>
				</a>
			</li>
		</ul>
	<?php elseif ($_SESSION['username'] === 'userstaff'): ?>
		<ul class="nav">
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
					<span class="menu-title">Dashboard</span>
					<i class="mdi mdi-home menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('surat/index_staff'); ?>">
					<span class="menu-title">Daftar Surat Masuk</span>
					<i class="mdi mdi-format-list-bulleted menu-icon"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url('laporan') ?>">
					<span class="menu-title">Laporan</span>
					<i class="mdi mdi-chart-line menu-icon"></i>
				</a>
			</li>
		</ul>
	<?php endif; ?>
</nav>
<!-- partial -->
