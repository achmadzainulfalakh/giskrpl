<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
        <!-- Header -->
			<header id="header">

					<?php //jika menggunakan slider, hapus background: #2A3039 agar menjadi transparan ?>
					<nav style="background: #2A3039;" id="head-nav" class="navbar topnavbar navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
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
		

				
			</header> <!-- /#header -->