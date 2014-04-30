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

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="//use.typekit.net/qii5wec.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link id="favicon" rel="shortcut icon" href="http://www.nomadic-schematic.com/favicon.ico">
  <link rel="apple-touch-icon-precomposed" href="https://dl.dropboxusercontent.com/sh/5e911y3f20886fi/jye8-vXKZv/apple-touch-icon-01.png" />

  <script src="/assets/js/vendor/custom.modernizr.js"></script>
  <script src="/assets/js/vendor/jquery.js"></script>
  <script src="/assets/js/home.js"></script>

  <?php echo css('/assets/css/stylesheet.css') ?>
  <?php echo css('/assets/css/foundation.css') ?>
  <?php echo css('/assets/css/ss-social.css') ?>

</head>

<body>
<?php include_once("analyticstracking.php") ?>
<a href="/" name="start" style="position:absolute;top:-10px;"></a>

  <header>
	<!-- NAV -->
	<nav class="topbar-container">

		<a href="/" class="nomadic-logo"></a>

		<!--// MOBILE NAV
		<nav class="toggler dropdown-nav" id="effect">
			<li><a href="/apps">App Design</a></li>
			<li><a href="/websites">Websites</a></li>
			<li><a href="/projects/logo-design">Branding</a></li>
			<li><a href="/print">Print Design</a></li>
			<li><a href="/illustration">Illustration</a></li>
			<li><a href="/projects/about">About Justin</a></li>
		</nav> //-->

	</nav>

  </header>
