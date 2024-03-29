<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">


	<!-- Favicons -->
	<link href="<?php echo base_url('user/img/favicon.png'); ?>" rel="icon">
	<link href="<?php echo base_url('user/img/apple-touch-icon.png'); ?>" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo base_url('user/lib/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="<?php echo base_url('user/lib/nivo-slider/css/nivo-slider.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/owlcarousel/owl.carousel.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/owlcarousel/owl.transitions.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/animate/animate.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('user/lib/venobox/venobox.css'); ?>" rel="stylesheet">

	<!-- Nivo Slider Theme -->
	<link href="<?php echo base_url('user/css/nivo-slider-theme.css'); ?>" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="<?php echo base_url('user/css/style.css'); ?>" rel="stylesheet">

	<!-- Responsive Stylesheet File -->
	<link href="<?php echo base_url('user/css/responsive.css'); ?>" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">
	<!-- <div id="preloader"></div> -->

	<header>
		<!-- header-area start -->
		<div id="sticker" class="header-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">

						<!-- Navigation -->
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<!-- Brand -->
								<a class="navbar-brand page-scroll sticky-logo" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>">
									<h1>Salon<span>citra</span></h1>
									<!-- Uncomment below if you prefer to use an image logo -->
									<!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
								<ul class="nav navbar-nav navbar-right">
									<li class="active">
										<a class="page-scroll" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>">Home</a>
									</li>
									<li>
										<a class="page-scroll" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>#about">About</a>
									</li>
									<li>
										<a class="page-scroll" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>#services">Services</a>
									</li>
									<li>
										<a class="page-scroll" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>#team">Team</a>
									</li>
									<li>
										<a class="page-scroll" href="<?php echo base_url('index.php/HOMEPAGE/pindahHalaman') ?>#contact">Contact</a>
									</li>
									<li>
										<a href="<?php echo base_url('index.php/BOOKING_CONTROLLER') ?>">Book Now</a>
									</li>
									<li>
										<a href="<?php echo base_url('index.php/EDITPROFILE_C'); ?>"><?php echo $_SESSION['uname']; ?></a>
									</li>
									<li><a href="<?php echo base_url('index.php/HOMEPAGE/logout'); ?>">Logout</a></li>
								</ul>
							</div>
							<!-- navbar-collapse -->
						</nav>
						<!-- END: Navigation -->
					</div>
				</div>
			</div>
		</div>
		<!-- header-area end -->
	</header>
	<!-- header end -->

	<script src="<?php echo base_url('user/lib/jquery/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/venobox/venobox.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/knob/jquery.knob.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/wow/wow.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/parallax/parallax.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/easing/easing.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/nivo-slider/js/jquery.nivo.slider.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('user/lib/appear/jquery.appear.js'); ?>"></script>
	<script src="<?php echo base_url('user/lib/isotope/isotope.pkgd.min.js'); ?>"></script>
	<script src="<?php echo base_url('user/js/main.js'); ?>"></script>
</body>

</html>