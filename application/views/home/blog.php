
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
							<img class="logo-img" src="<?php echo base_url()?>assets/depan/img/logo.png" alt="logo">
							<img class="logo-alt-img" src="<?php echo base_url()?>assets/depan/img/logo-alt.png" alt="logo">
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
					<li><a href="<?php echo base_url()?>#galery">photos</a></li>
					<li><a href="<?php echo base_url()?>#team">Team</a></li>
					<li><a href="<?php echo base_url()?>#contact">client</a></li>
					<li><a href="<?php echo base_url()?>#contact">Contact</a></li>
					<li><a href="<?php echo base_url()?>blog">Blog</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Page Header -->
	<div id="page-wrapper" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- wrapper content -->
				<div class="col-md-12">
					<div class="page-wrapper-content">
						<h1>Blog Page</h1>
					</div>
				</div>
				<!-- /wrapper content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Page Header -->

	<!-- BLOG -->
	<div id="blog" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
               <?php foreach($blog as $row){?>
				<div class="col-md-4">
					<div class="blog">
						<div class="blog-img">
							<img src="<?php echo base_url()?>assets/upload/blog/<?php echo $row->gambar?>" alt="">
						</div>
						<div class="blog-content">
							<div class="blog-meta">
								<div class="blog-day"><?php echo $row->date?></div>
							</div>
							<h3><a href="<?php echo base_url()?>blog/detail/<?php echo $row->slug_blog?>"><?php echo $row->judul?></a></h3>
							<p><?php echo substr($row->isi,0,200)?>..</p>
							<a class="read-more" href="<?php echo base_url()?>blog/detail/<?php echo $row->slug_blog?>">Read More</a>
						</div>
					</div>
				</div>
			<?php }?>
				

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->
	