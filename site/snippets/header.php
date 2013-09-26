<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> | <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, user-scalable=false;">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">

  <link id="favicon" rel="shortcut icon" href="http://www.nomadic-schematic.com/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="http://files.justinpocta.com/apple-touch-icon-01.png"/>

  <script src="js/vendor/custom.modernizr.js"></script>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/home.js"></script>

  <?php echo css('assets/css/stylesheet.css') ?>
  <?php echo css('assets/css/foundation.css') ?>

</head>

<body>

  <header>
	<!-- NAV -->
	<div class="topbar-container">

		<a href="http://nomadic-schematic.com" class="nomadic-logo"></a>
		<a id="button" class="nav-mobile show-for-small">nav</a>

		<!-- MOBILE NAV -->
		<ul class="toggler dropdown-nav" id="effect">
			<li><a href="/app-design">App Design</a></li>
			<li><a href="/web-design">Websites</a></li>
			<li><a href="/branding">Branding</a></li>
			<li><a href="/print-design">Print Design</a></li>
			<li><a href="/illustration">Illustrations</a></li>
			<li><a href="/justin-pocta">About Justin</a></li>
		</ul>

	</div>
	<!-- end NAV -->
	<!--     <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/img/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a></h1> -->
  </header>