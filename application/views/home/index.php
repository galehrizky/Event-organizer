	<!-- Home -->
	<?php foreach($home as $row){?>
	<div id="home">
		<!-- background image -->
		<div class="section-bg" style="background-image:url(<?php echo base_url()?>assets/upload/home/<?php echo $row->banner;?>)" data-stellar-background-ratio="0.5"></div>
		<!-- /background image -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- home content -->
					<div class="col-md-8 col-md-offset-2">
						<div class="home-content">
							<h1><?php echo $row->judul; ?></h1>
							<h4 class="lead"><?php echo $row->isi; ?>.</h4>
						</div>
					</div>
					<!-- /home content -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /home wrapper -->
	</div>
<?php }?>
	<!-- /Home -->

	<!-- About -->
	<?php foreach($about as $row){?>
	<div id="about" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span><?php echo $row->judul;?></span></h3>
				</div>
				<!-- /section title -->

				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- about content -->
					<div class="about-content">
						<p><?php echo $row->isi;?></p>
					</div>
					<!-- /about content -->
				</div>
			</div>
			<!-- row -->
		</div>
		<!-- /container -->
	</div>
<?php }?>
	<!-- /About -->

	<!-- Galery -->
	<div id="galery">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- galery owl -->
				<div id="galery-owl" class="owl-carousel owl-theme">
					<!-- galery item -->
					<?php foreach($photo as $row){?>
					<div class="galery-item">
						<img src="<?php echo base_url()?>assets/upload/photos/<?php echo $row->poto?>" alt="<?php echo $row->project?>">
					</div>
				    <?php }?>
					<!-- /galery item -->


	

				</div>
				<!-- /galery owl -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Galery -->
	<!-- Speakers -->
	<div id="team" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">Team</span></h3>
				</div>
				<!-- section title -->

				<!-- speaker -->
				<?php foreach($team as $row){?>
				<div class="col-md-4 col-sm-6">
					<div class="speaker">
						<div class="speaker-img">
							<img src="<?php echo base_url()?>assets/upload/team/<?php echo $row->foto?>" alt="">
						</div>
						<div class="speaker-body">
							<div class="speaker-social">
								<a href="<?php echo $row->facebook?>"><i class="fa fa-facebook"></i></a>
								<a href="<?php echo $row->twit?>"><i class="fa fa-twitter"></i></a>
								<a href="<?php echo $row->instagram?>"><i class="fa fa-instagram"></i></a>
							</div>
							<div class="speaker-content">
								<h2><?php echo $row->nama?></h2>
								<span><?php echo $row->jabatan?></span>
							</div>
						</div>
					</div>
				</div>
			<?php }?>
				<!-- /speaker -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Speakers -->

	<!-- client -->
	<div id="client" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Our</span> <span style="color: #dd0a37;">client</span></h3>
				</div>
				<!-- /section title -->

				<!-- sponsor -->
				<?php foreach($client as $row){?>
				<div class="col-md-3 col-sm-4 col-xs-6">
					<a href="<?php echo $row->url;?>" class="sponsor">
						<img src="<?php echo base_url()?>assets/upload/client/<?php echo $row->poto;?>" alt="">
					</a>
				</div>
				<?php }?>
				<!-- /sponsor -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /client -->


	<!-- Contact -->
	<?php foreach($contact as $row){?>
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contact</span> <span style="color: #dd0a37;">Info</span></h3>
				</div>
				<!-- /section title -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Alamat</h3>
						<p><?php echo $row->alamat;?></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Telephone</h3>
						<p><?php echo $row->telepon;?></p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="mailto:<?php echo $row->email;?>"><?php echo $row->email;?></a>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
<?php }?>
	<!-- /Contact -->
