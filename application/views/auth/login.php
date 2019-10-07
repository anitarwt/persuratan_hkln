<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Purple Admin</title>
	<!-- plugins:css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css')?>">
	<!-- endinject -->
	<!-- Plugin css for this page -->
	<!-- End plugin css for this page -->
	<!-- inject:css -->
	<!-- endinject -->
	<!-- Layout styles -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
	<!-- End layout styles -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/images/favicon.png'); ?>" />
</head>
<body>
<div class="container-scroller">
	<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex align-items-center justify-content-center">
		<a class="navbar-brand brand-logo" href="#"><img class="img-fluid" src="<?php echo base_url('assets/images/logo_hkln.png') ?>"></a>
		<div class="d-flex">
			<h4 class="p-2 text-primary">
				APLIKASI MONITORING <br/>PROGRESS SURAT MASUK BIRO HUKUM DAN KERJASAMA LUAR NEGERI
			</h4>
		</div>
	</nav>
	<div class="container-fluid page-body-wrapper full-page-wrapper">
		<div class="content-wrapper d-flex align-items-center auth">
			<div class="row flex-grow">
				<div class="col-lg-4 mx-auto">
					<div class="auth-form-light text-left p-5">
						<h4 class="font-weight-light">Selamat Datang</h4>
						<h6 class="font-weight-light">Login Aplikasi</h6>
						<form class="pt-3">
							<div class="form-group">
								<input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
							</div>
							<div class="form-group">
								<input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
							</div>
							<div class="mt-3">
								<a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="<?php echo base_url('dashboard') ?>">SIGN IN</a>
							</div>
							<div class="my-2 d-flex justify-content-between align-items-center">
								<div class="form-check">
									<label class="form-check-label text-muted">
										<input type="checkbox" class="form-check-input"> Keep me signed in </label>
								</div>
								<a href="#" class="auth-link text-black">Forgot password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- content-wrapper ends -->
	</div>
	<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
<!-- endinject -->
</body>
</html>
