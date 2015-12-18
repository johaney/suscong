<!DOCTYPE html>
<html lang="en">
  <head>
		<title>Suscong</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='<?php bloginfo('template_url')?>/css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url')?>/css/slicknav.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">
		
		
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.8.3.min.js"></script>

		<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/camera.min.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/myscript.js"></script>
		<script src="<?php bloginfo('template_url')?>/js/sorting.js" type="text/javascript"></script>
		<script src="<?php bloginfo('template_url')?>/js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		

		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>

	<body>
		<header>
			<!--home start-->
			<div id="home">
				<div class="headerLine">
					<div id="menuF" class="default">
						<div class="container">
							<div class="row">
    							<div class="logo col-md-4">
    								<div>
	    								<a href="#">
	    									<img src="">
										</a>
									</div>
								</div>

								<div class="col-md-8">
									<div class="navmenu"style="text-align: center;">
										<ul id="menu">
											<li class="active" >
												<a href="#home">Home</a>
											</li>
											<li>
												<a href="#about">About</a>
											</li>
											<li>
												<a href="#project">Products</a>
											</li>
											<li>
												<a href="#news">Manufacturing Technologies</a>
											</li>
											<li class="last">
												<a href="#contact">Contact</a>
											</li>
											<!--li><a href="#features">Features</a></li-->
										</ul>
									</div>
								</div>
				
							</div>
						</div>
					</div>
				</div>
		
			<div class="container">
				<div class="row wrap">
					<div class="col-md-12 gallery"> 
							<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>
								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>
								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>
							</div><!-- #camera_wrap_1 -->

							<div class="camera_wrap camera_white_skin" id="camera_wrap_1">
								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>

								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>
							
								<div data-thumb="" data-src="<?php bloginfo('template_url'); ?>/imagenes/slides/blank.gif">
									<div class="img-responsive camera_caption fadeFromBottom">
										<h2></h2>
									</div>
								</div>
							</div><!-- #camera_wrap_2 -->
						</div>
					</div>
				</div>
			</div>
		</header>
