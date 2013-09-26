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

  <?php echo css('assets/css/stylesheet.css') ?>

</head>

<body>

  <header>
    <h1><a href="<?php echo url() ?>"><img src="<?php echo url('assets/img/logo.png') ?>" width="115" height="41" alt="<?php echo html($site->title()) ?>" /></a></h1>
  </header>