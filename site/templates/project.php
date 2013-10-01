<?php snippet('header') ?>
<link rel="stylesheet" href="/assets/css/slides.css" />
<script src="/assets/js/vendor/jquery.slides.min.js"></script>

<body id="secondary">
<section class="content">


<!-- hero slideshow -->
<div class="large-12 small-12 logo-intro">
  
  <a class="go-home" href="/">&laquo; back to projects</a>
  <div>
<?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" class="button-back" style="left:0;" title="Previous"></a>
<?php } else { ?>
<a href="/" class="button-home-left" title="Home"></a>
<?php }; ?>
  <span style="text-transform:capitalize;">
    <?php echo $page->title ?> - <?php echo h($page->projecttype) ?>
  </span>
<?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
<a href="/" class="button-home-right" title="Home"></a>
<?php }; ?>
</div>

</div>

<!-- objective -->
<div class="small-12 large-12" style="background-color:rgba(1,71,11,1.0); margin:0 auto; display:block; background-image:url('/assets/img/header-<?php echo $page->projecttype() ?>_<?php echo $page->thumb ?>-bg.jpg'); background-repeat:no-repeat; max-height:500px; <?php echo $page->headercss ?>">
        <div class="container">
      <div id="slides">
        <div style="background:url(/assets/img/header-<?php echo $page->projecttype() ?>_<?php echo $page->thumb() ?>.png);"></div>
        <div style="background:url(/assets/img/header-<?php echo $page->projecttype() ?>_<?php echo $page->thumb() ?>.png);"></div>
      </div>
    </div>

  </div>
<!-- end objective -->

  <article>

<!-- content intro -->
<div class="row" style="padding-top:25px;">
  
  <div class="columns large-8 small-12"> <!-- MAIN 1 -->
    <span class="detail-title">Project Information</span>
    <?php echo kirbytext($page->text()) ?>
    <div class="quotes">
      <p><?php echo $page->quote() ?></p>
    </div>
    
</div>

  <div id="detail-sidebar" class="columns large-4 small-12">
    <div style="float:left"><!-- tags -->
      <span class="detail-title">Project Tags</span>
      <ul class="keywords-list">
	<?
	  $articleTags = str::split($page->tags());
	  $blog = $pages->find('projects');
	?>
	<? foreach($articleTags as $tag): ?>
	  <li><?= $tag ?></li>
	<? endforeach ?>
      </ul>
    </div><!-- end tags -->
    <div style="float:left;margin-top:10px;width:100%;">
      <span class="detail-title">More Info</span>
      <ul style="list-style:none;margin:0;">
        <li><b>Created:</b> <?php echo h($page->created()) ?></li>
        <li><b>Credits:</b> <?php echo h($page->credits()) ?></li>
        <li>&nbsp;</li>
      </ul>
      <?php echo kirbytext($page->applink) ?><br>
      <?php echo kirbytext($page->weblink) ?><br>
    </div>
  </div>

  </article>

</section>

<br /><br />



  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="/assets/js/vendor/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides2').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true,
          pauseOnHover: true,
          restartDelay: 2500
        },
        effect: {
          fade: {
            speed: 400
          }
        }

        });

      $('#slides').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        effect: {
          fade: {
            speed: 1
          }
        }
        });

    });
  </script>
  <!-- End SlidesJS Required -->


<?php snippet('footer') ?>
