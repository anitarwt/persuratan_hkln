<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
	<div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
		<a class="navbar-brand brand-logo" href="<?php echo base_url('dashboard') ?>">
			<div class="d-flex text-left">
				<img src="<?php echo base_url(); ?>/assets/images/logo_kementerian_agama.svg" alt="logo"/>
				<small class="text-wrap text-small" style="line-height: 1rem">Biro Hukum dan Kerjasama Luar Negeri</small>
			</div>
		</a>
		<a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url(); ?>/assets/images/logo_kementerian_agama.svg" alt="logo"/></a>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-stretch">
		<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
			<span class="mdi mdi-menu"></span>
		</button>
		<ul class="navbar-nav navbar-nav-right">
			<li class="nav-item nav-profile dropdown">
				<a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
					<div class="nav-profile-img">
						<img src="<?php echo base_url(); ?>/assets/images/faces/face1.jpg" alt="image">
						<span class="availability-status online"></span>
					</div>
					<div class="nav-profile-text">
						<p class="mb-1 text-black">Anita Rahmawati</p>
					</div>
				</a>
				<div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
					<a class="dropdown-item" href="<?= base_url('login') ?>">
						<i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
			<span class="mdi mdi-menu"></span>
		</button>
	</div>
</nav>
<!-- partial -->
