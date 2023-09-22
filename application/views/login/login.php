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
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/efoy.jpg') ?>" />

		<!-- TITLE -->
		<title>Sign in</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet"/>
		<link href="<?php echo base_url('assets/css/skin-modes.css') ?>" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="<?php echo base_url('assets/css/icons.css') ?>" rel="stylesheet"/>

		<style>
        .login {
            padding-top: 40px;
            padding-bottom: 40px;
            background: url("<?php echo base_url('assets/img/random_grey_variations.png') ?>") repeat #444;
        }
    	</style>

	</head>

	<body class="ltr login">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="<?php echo base_url('assets/img/loader.svg') ?>" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div>
				    <!-- CONTAINER OPEN -->
					<div class="col col-login mx-auto text-center">
						<a href="index.html" class="text-center">
                            <img class="pull-right" src="<?php echo base_url('assets/img/efoy.png') ?>"  alt="EFOY" height=80/>
						</a>
					</div>
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form action="<?php echo base_url(); ?>login/validate" method="post" id="login">
									<?php $msg = $this->session->flashdata('msg1');
										if ((isset($msg)) && (!empty($msg))) { ?>
											<div class="alert alert-secondary alert-dismissible fade show" role="alert">
												<span class="alert-inner--text"><?php print_r($msg); ?></span>
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">×</span>
												</button>
											</div>
										<?php }
									?>
									<span class="login100-form-title">
										Login
									</span>
									<div class="wrap-input100 validate-input">
										<input class="input100" type="text" name="username" placeholder="Username">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-face" aria-hidden="true"></i>
										</span>
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock" aria-hidden="true"></i>
										</span>
									</div>
									<!-- <div class="text-end pt-1">
										<p class="mb-0"><a href="#" class="text-primary ms-1">Forgot Password?</a></p>
									</div> -->
									<div class="container-login100-form-btn">
										<button  type="submit" class="login100-form-btn btn-primary">
											Login
										</button>
									</div>
									<!-- <div class="text-center pt-3">
										<p class="text-dark mb-0">Not a member?<a href="<?php echo base_url('Login/register')?>" class="text-primary ms-1">Create an Account</a></p>
									</div> -->
								</form>
							</div>
							<!-- <div class="card-footer">
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
							</div> -->
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->


		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="<?php echo base_url('assets/js/perfect-scrollbar.js') ?>"></script>

		<!-- STICKY JS -->
		<script src="<?php echo base_url('assets/js/sticky.js') ?>"></script>

		<!-- COLOR THEME JS -->
		<script src="<?php echo base_url('assets/js/themeColors.js') ?>"></script>

		<!-- CUSTOM JS -->
		<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>

	</body>
</html>
