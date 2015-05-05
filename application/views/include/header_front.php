<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Usafiri - Bus Management Company</title>		
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">
		<link rel="icon" type="image/png" href="<?php echo base_url(); ?>components/frontend/img/favicon.fw.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/fontawesome/css/font-awesome.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/owlcarousel/owl.carousel.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/owlcarousel/owl.theme.default.min.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/magnific-popup/magnific-popup.css" media="screen">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/theme.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/theme-elements.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/theme-blog.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/theme-shop.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/theme-animate.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/vendor/circle-flip-slideshow/css/component.css" media="screen">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/skins/default.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>components/frontend/css/custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url(); ?>components/frontend/vendor/modernizr/modernizr.js"></script>

		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->

	</head>
	<body>
		<div class="body">
			<header id="header">
				<div class="container">
					<div class="logo">
						<a href="../index/index.html">
							<img alt="Porto" width="151" height="119" data-sticky-width="142" data-sticky-height="105" src="<?php echo base_url(); ?>components/frontend/img/logo-4.png">
						</a>
					</div>
					<div class="search">
						<form id="searchForm" action="../index/page-search-results.html" method="get">
							<div class="input-group">
								<input type="text" class="form-control search" name="q" id="q" placeholder="Search..." required>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</form>
					</div>
					<nav>
						<ul class="nav nav-pills nav-top">
							<li>
								<a href="<?php echo base_url();?>index.php/about"><i class="fa fa-angle-right"></i>About Us</a>
							</li>
							<li>
								<a href="<?php echo base_url();?>index.php/contact"><i class="fa fa-angle-right"></i>Contact Us</a>
							</li>
							<li class="phone">
								<span><i class="fa fa-phone"></i>+254 (0)718 126 160</span>
							</li>
						</ul>
					</nav>
					<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
				<div class="navbar-collapse nav-main-collapse collapse">
					<div class="container">
						<ul class="social-icons">
							<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
							<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
							<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
						</ul>
						<nav class="nav-main mega-menu">
							<ul class="nav nav-pills nav-main" id="mainMenu">
								<li>
									<a href="<?php echo base_url();?>">Home</a>
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/about">About Us</a>
								</li>
								</li>
								<li>
									<a href="<?php echo base_url();?>index.php/services">Services</a>
								</li>
								<!-- <li>
									<a href="<?php echo base_url(); ?>latest">latest</a>
								</li> -->
								<li>
									<a href="<?php echo base_url();?>index.php/contact">Contact Us</a>
								</li>								
							</ul>
						</nav>
					</div>
				</div>
			</header>
