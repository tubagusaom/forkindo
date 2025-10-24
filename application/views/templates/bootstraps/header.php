<html>
<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		<?php
			// $aplikasi->singkatan_unit
		?>

		FORKINDO
	</title>


	<meta name="keywords" content="Forum , Produsen , Komponen , Kendaraan , Listrik" />
	<meta name="description" content="Forum Produsen Komponen Kendaraan Listrik">
	<meta name="author" content="terabytee.my.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/img/forkindo-transparent.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/img/forkindo-transparent.png">

	<!-- Mobile Metas -->
	<!-- <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> -->
	<meta content="width=device-width, initial-scale=1" name="viewport" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/animate/animate.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/theme.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/theme-elements.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/theme-blog.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/theme-shop.css">

	<!-- Current Page CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/rs-plugin/css/layers.css">
	<link rel="stylesheet" href="<?=base_url() ?>assets/vendor/rs-plugin/css/navigation.css">

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/skins/skin-event.css"> 

	<!-- Demo CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/demos/demo-event.css">

	<!-- Head Libs -->
	<script src="<?=base_url() ?>assets/vendor/modernizr/modernizr.min.js"></script>

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?=base_url() ?>assets/css/custom.css">
	<script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

	<script src="<?= base_url() ?>_assets\theme\js\script-tb.js"></script>
	<script type="text/javascript">
		var base_url = "<?php echo base_url() ?>";
	</script>
	<script src="<?=base_url() ?>assets/js/public/login.js" type="text/javascript"></script>
</head>


<body data-target="#header" data-spy="scroll" data-offset="100">

	<div class="body">
		<header id="header" class="header-narrow header-transparent custom-header-transparent-style-1" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 1, 'stickySetTop': '0'}">
		<div class="header-body">
			<div class="header-container container">
				<div class="header-row">
					<div class="header-column">
						<div class="header-logo">
							<a href="demo-event.html">
								<img alt="forkindo" width="102" height="40" src="<?=base_url() ?>assets/img/forkindo-long-transparent.png">
							</a>
						</div>
					</div>
					<div class="header-column">
						<div class="header-row">
							<div class="header-nav">
								<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
									<i class="fa fa-bars"></i>
								</button>
								<div class="buy-tickets mt-sm pull-right">
									<a href="" class="btn btn-primary custom-border-radius custom-btn-style-1 font-size-md font-weight-bold text-color-light text-uppercase outline-none ml-lg" href="">Masuk / Daftar <i class="custom-long-arrow-right" aria-hidden="true"></i></a>
								</div>
								<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
									<nav>
										<ul class="nav nav-pills custom-nav-pills" id="mainNav">
											<li>
												<a class="font-weight-semibold text-color-light" data-hash href="#revolutionSlider">
													Beranda
												</a>
											</li>
											<!-- <li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#speakers">
													Speakers
												</a>
											</li> -->
											<li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#about">
													Tentang Kami
												</a>
											</li>
											<li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#sponsors">
													Bidang
												</a>
											</li>
											<li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#lokasi">
													Lokasi
												</a>
											</li>
											<!-- <li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#lokasi">
													Lokasi
												</a>
											</li> -->
											<!-- <li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#schedule">
													Schedule
												</a>
											</li>
											<li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#sponsors">
													Sponsors
												</a>
											</li> -->
											<!-- <li>
												<a class="font-weight-semibold text-color-light" data-hash data-hash-offset="80" href="#venue">
													Lokasi
												</a>
											</li> -->
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


		<!-- form login -->
		<div class="modal fade bs-modal" role="dialog" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header" style="background: #db0c13; border-bottom: 1px solid #e5e5e5;">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							<b class="modal-title" style="color:#fff;"> X </b>
						</button>
						<h4 class="modal-title">
							<b style="color:#fff;"> LOGIN </b>
						</h4>
					</div>

					<hr style="margin:0; padding:0;">

					<div class="modal-body" style="padding:0 25px 25px 25px;">

						<div class="control-label labeled-form" style="text-align: center;padding:20px 0 20px 0;border-bottom: 1px solid #e5e5e5;font-weight:bold;">
							Silahkan Masuk <i class="fa fa-arrow-down" style="color:#1c2a5f"></i> untuk mendapatkan penawaran terbaik. <br>
						</div>

						<div class="form-group">
							<div class="row">
								<div class="col-xs-12" style="padding-top:10px;">
									<label class="control-label labeled-form" for="inputUsername">Nama User</label>
								</div>
								<div class="col-xs-12 tooltip-wide">
									<div class="input-group merged">
										<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user fa-xs"></i></span>
										<input type="text" placeholder="Email" class="form-control " aria-describedby="basic-addon1" name="inputUsername" id="inputUsername">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-xs-12">
									<label class="control-label labeled-form" for="inputPassword">Kata Sandi</label>
								</div>
								<div class="col-xs-12 tooltip-wide">
									<div class="input-group merged">
										<span class="input-group-addon" id="basic-addon2"><i class="fa fa-key fa-xs"></i></span>
										<input type="password" placeholder="Kata Sandi" class="form-control " aria-describedby="basic-addon2" name="inputPassword" id="inputPassword" onkeypress="if(event.keyCode==13) login_click();">
									</div>
								</div>
							</div>
						</div>

						<div class="control-label labeled-form pull-left" style="font-weight:bold;">
							<b> <a href="#">Lupa Kata Sandi</a> </b>
						</div>

						<div class="control-label labeled-form pull-right" style="font-weight:bold;">
							Belum punya akun <i class="fa fa-arrow-right" style="color:#1c2a5f"></i>
							<b> <a href="<?= base_url() ?>daftar-buyer">Daftar</a> </b>
						</div>

					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-warning" data-dismiss="modal"><b style="color:#1c2a5f;">Keluar</b></button>
						<button type="button" class="btn btn-tb" id="btn-login">Masuk</button>
					</div>




					<!-- <div class="modal-footer center">
						<div class="center" style="padding-bottom:10px;font-weight:bold;color:#1c2a5f">
							Atau Masuk Dengan
						</div>

						<div class="fb-login-button" data-width="350" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="true"></div>
					</div> -->


				</div>
			</div>
		</div>
