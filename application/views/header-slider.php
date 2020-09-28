<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!-- Header -->
			<header id="header">

					<nav id="head-nav" class="navbar topnavbar navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
						<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<i class="fa fa-bars"></i>
								</button>
								<a href="#header" class="navbar-brand header"><img src="<?php print $this->config->item('base_img') ?>logo.png" alt=""></a>
							</div> <!-- /#navbar-header -->

							<!-- Navigation -->
							<div class="collapse navbar-collapse" id="navbar">
								<ul class="nav pull-right navbar-nav" id="main_navigation_menu">
									<li class="active"><a href="<?php print base_url()?>">HOME</a></li>
									<li><a href="#about">ABOUT</a></li>
									<li><a href="#portfolio">PORTFOLIO</a></li>
									<li><a href="#pricing">PRICING</a></li>
									<li><a href="#testimonial-clients">CLIENTS</a></li>
									<li><a href="#why">WHY</a></li>
									<li><a href="#contact">CONTACT</a></li>
									<li><a href="<?php print base_url()."home/data-lokasi#datalokasi"?>">DATA LOKASI</a></li>
								</ul>
							</div>
						</div>
					</nav> <!-- /#navbar -->
		

				<!-- Slider -->
				<section id="slider">
					<div class="container-full">
						<div class="slider">
							<div id="main-slider" class="carousel slide">
								<ol class="carousel-indicators">
									<li data-target="#main-slider" data-slide-to="0" class="active"></li>
									<li data-target="#main-slider" data-slide-to="1"></li>
									<li data-target="#main-slider" data-slide-to="2"></li>
									<li data-target="#main-slider" data-slide-to="3"></li>
									<li data-target="#main-slider" data-slide-to="4"></li>
								</ol> <!-- /#carousel-indicators -->

								<!-- Carousel items -->
								<div class="carousel-inner">
									<div class="active item">
										<div class="container slide-element">
											<img src="<?php print $this->config->item('base_img') ?>phone.png" alt="">
											<div class="content_slide">
												<h2>Flat & Modern transparent</h2>
												<p>flat inspired UI with some modern transparent Element</p>
												<h1> Get Now Your Copy <span>FREE</span></h1>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="container slide-element">
											<img src="<?php print $this->config->item('base_img') ?>phone_3.png" alt="">
											<div class="content_slide">
												<h2>Flat & Modern transparent</h2>
												<p>flat inspired UI with some modern transparent Element</p>
												<h1> Get Now Your Copy <span>FREE</span></h1>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="container slide-element">
											<img src="<?php print $this->config->item('base_img') ?>phone_4.png" alt="">
											<div class="content_slide">
												<h2>Flat & Modern transparent</h2>
												<p>flat inspired UI with some modern transparent Element</p>
												<h1>Get Now Your Copy <span>FREE</span></h1>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="container slide-element">
											<img src="<?php print $this->config->item('base_img') ?>phone_5.png" alt="">
											<div class="content_slide">
												<h2>Flat & Modern transparent</h2>
												<p>flat inspired UI with some modern transparent Element</p>
												<h1>Get Now Your Copy <span>FREE</span></h1>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="container slide-element">
											<img src="<?php print $this->config->item('base_img') ?>phone_6.png" alt="">
											<div class="content_slide">
												<h2>Flat & Modern transparent</h2>
												<p>flat inspired UI with some modern transparent Element</p>
												<h1>Get Now Your Copy <span>FREE</span></h1>
											</div>
										</div>
									</div>

								</div> <!-- /#carousel-inner -->

								<!-- Controls -->
								<a class="carousel-control left" href="#main-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
								<a class="carousel-control right" href="#main-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

							</div>
						</div>
					</div>
				</section> <!-- /#slider -->
			</header> <!-- /#header -->