<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Event Organizer</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/depan/css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/depan/css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/depan/css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/depan/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/depan/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="header">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img class="logo-img" src="<?php echo base_url()?>assets/depan//img/logo.png" alt="logo">
						<img class="logo-alt-img" src="<?php echo base_url()?>assets/depan//img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
		<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url()?>#home">Home</a></li>
					<li><a href="<?php echo base_url()?>#about">About</a></li>
					<li><a href="<?php echo base_url()?>#galery">Photos</a></li>
					<li><a href="<?php echo base_url()?>#team">Team</a></li>
					<li><a href="<?php echo base_url()?>#client">client</a></li>
					<li><a href="<?php echo base_url()?>#contact">Contact</a></li>
					<li><a href="<?php echo base_url()?>blog">Blog</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->
	<!-- BLOG -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- blog -->
				<div class="col-md-12">
					<div class="blog">
						<!-- blog content -->
						<div class="blog-img">
							<img src="<?php echo base_url()?>assets/upload/blog/<?php echo $blog->gambar?>" alt="">
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<h3><?php echo $blog->judul?></h3>
								<div class="blog-day"><?php echo $blog->date?></div>
							</div>
							<p><?php echo $blog->isi?></p>
						</div>
					</div>
				</div>
				<!-- /blog -->

				<!-- related posts -->
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title"><span>Related</span> <span style="color: #dd0a37;">Posts</span></h3>
					</div>

					<div class="row">
						<?php foreach($post as $row){?>
						<div class="col-md-4">
							<div class="blog">
								<div class="blog-img">
									<img src="<?php echo base_url()?>assets/upload/blog/<?php echo $row->gambar?>" alt="">
								</div>
								<div class="blog-content">
									<div class="blog-meta">
										<div class="blog-day"><?php echo $row->date?></div>
									</div>
									<h3 class="blog-title"><a href="<?php echo base_url()?>blog/detail/<?php echo $row->slug_blog?>"><?php echo $row->judul?></a></h3>
									<p><?php echo substr($row->isi, 0, 200)?> </p>
									<a class="read-more" href="<?php echo base_url()?>blog/detail/<?php echo $row->slug_blog?>">Read More</a>
								</div>
							</div>
						</div>
					<?php }?>
					</div>
				</div>
				<!-- /related posts -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->