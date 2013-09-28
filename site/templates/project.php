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
  <span>
    <?php echo $page->title ?> - <?php echo h($page->projecttype) ?>
  </span>
<?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
<a href="/" class="button-home-right" title="Home"></a>
<?php }; ?>
</div>

</div>

<!-- objective -->
<div class="small-12 large-12" style="background-color:rgba(1,71,11,1.0); margin:0 auto; display:block; background-image:url('/assets/img/zipments-tino_pohlmann.jpg'); background-size:auto 100%; background-position:center center; background-repeat:no-repeat; max-height:500px;">
    
    <div class="container">
      <div id="slides">
        <div style="background:url(/assets/img/zipments-quote_productA.png);"></div>
        <div style="background:url(/assets/img/zipments-quote_productA.png);"></div>
      </div>
    </div>

  </div>
<!-- end objective -->

  <article>
    TEXT:: <?php echo kirbytext($page->text()) ?> <br>
    SLIDESHOW:: <?php echo h($page->slideshow()) ?> <br>
    CREATED:: <?php echo h($page->created()) ?> <br>
    CREDITS:: <?php echo h($page->credits()) ?> <br>
 	<br>
	TINYURL:: <?php echo $page->tinyurl() ?> <br>
	URL:: <?php echo $page->url() ?> <br>
	<br>
	PREV:: <a href="<?php echo h($page->previous($sort='title', $direction='asc')) ?>">PREVIOUS</a> <br>
	NEXT:: <?php echo $page->next($sort='title', $direction='asc') ?> <br>
	<BR>
<!--//
?php $list = $page->children()->paginate(10) 
//-->

<!--//
<ul>
   <?php foreach($list as $item): ?>
   <li><?php echo $item->title() ?></li>
   <?php endforeach ?>
</ul>
//-->

 	<br>
    LINK:: <?php echo h($page->AppLink()) ?><br>
    Download:: <?php echo html($page->download()) ?><br>
    Reference: <?php echo html($page->reference()) ?><br>
    Visit <?php echo html($page->visit()) ?>
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
