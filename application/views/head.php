<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php print $this->config->item('catatan_pengembang') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?=$title ?></title>
    <meta name="author" content="<?php print $this->config->item('author') ?>">
	<meta name="description" content="<?php print $this->config->item('deskripsi') ?>">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="icon" href="<?php print $this->config->item('base_img') ?>next.png" type="image/png" sizes="16x16">

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

	<!-- Bootstrap Core JavaScript -->
	<script src="<?php print $this->config->item('base_js') ?>bootstrap.min.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>