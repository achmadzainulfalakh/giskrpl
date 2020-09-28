<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
  <html lang="en">
    <head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php print $title ?></title>
        <meta name="description" content="">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

		<!-- Style -->
        <link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>main.css">
		
		<!-- Responsiv -->
		 <link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>responsive.css">

        <!-- Font awesome -->
        <link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>font-awesome.min.css">
		
		<!-- Bootstrp -->
		<link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>bootstrap.min.css">
        
		<!-- Animations min -->
		<link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>animations.min.css">
		
		<!-- Lightbox -->
		<link rel="stylesheet" href="<?php print $this->config->item('base_css') ?>lightbox.css" />
       
		<!-- Script -->
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>modernizr-2.6.2.min.js"></script>

		<!-- Jquery -->
		<script type="text/javascript" src="<?php print $this->config->item('base_js') ?>jquery-1.10.2.min.js"></script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
              <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
    <body>

			<!-- footer top -->
			<footer id="footer-top">
				<div class="container-full">
					<div class="container">
						<div class="row bm-remove animate" data-anim-type="bounceIn">
							<div class="footer-text">
								<h1>SO WHAT YOU THINK ?</h1>
								<p>"Page Not Found"</p>
								<a href="<?php print base_url()?>" class="btn btn-red">Go Home</a>
							</div>
						</div>
					</div>
				</div>
			</footer> <!-- footer-top -->

        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>plugins.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>main.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>animations.min.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>jquery.scrollUp.min.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>lightbox.min.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>smoothscroll.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>visible.min.js"></script>
        <script type="text/javascript" src="<?php print $this->config->item('base_js') ?>jquery.nav.js"></script>

    </body>
</html>
