<!doctype html>
<html lang="en" dir="ltr">
  <head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa – Bootstrap 5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/brand/ethio.png') ?>" />

		<!-- TITLE -->
		<title>XTRIM SIGN-UP</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet"/>
		<link href="<?php echo base_url('assets/css/skin-modes.css'); ?>" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="<?php echo base_url('assets/css/icons.css'); ?>" rel="stylesheet"/>

		<style>
        .login {
            padding-top: 40px;
            padding-bottom: 40px;
            background: url("<?php echo base_url('assets/images/pattern/always_grey.png') ?>") repeat #444;
        }
    	</style>

	</head>

	<body class="ltr login">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="<?php echo base_url('assets/images/loader.svg'); ?>" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="index.html">
							<img src="<?php echo base_url('assets/images/brand/ethio.png') ?>"  alt="ethiotelecom" height=70/>
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form">
									<span class="login100-form-title">
										Registration
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" placeholder="User name">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="mdi mdi-account" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100" type="text" name="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="pass" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<label class="custom-control custom-checkbox mt-4">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
									</label>
									<div class="container-login100-form-btn">
										<a href="index.html" class="login100-form-btn btn-primary">
											Register
										</a>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Already have account?<a href="<?php echo base_url('/login')?>" class="text-primary ms-1">Sign In</a></p>
									</div>
								</form>
							</div>
							<div class="card-footer">
								<div class="d-flex justify-content-center my-3">
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-google"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center me-4">
										<i class="fa fa-facebook"></i>
									</a>
									<a href="javascript:void(0)" class="social-login  text-center">
										<i class="fa fa-twitter"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

		<!-- JQUERY JS -->
		<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="<?php echo base_url('assets/plugins/p-scroll/perfect-scrollbar.js'); ?>"></script>

		<!-- STICKY JS -->
		<script src="<?php echo base_url('assets/js/sticky.js'); ?>"></script>

		<!-- COLOR THEME JS -->
		<script src="<?php echo base_url('assets/js/themeColors.js'); ?>"></script>

		<!-- CUSTOM JS -->
		<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>

	</body>
</html>
