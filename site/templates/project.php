<?php snippet('header') ?>
<link rel="stylesheet" href="/assets/css/slides.css" />
<script src="/assets/js/vendor/jquery.slides.min.js"></script>

<body id="secondary">
<section class="content">


<!-- hero slideshow -->
<div class="large-12 small-12 logo-intro">
  
  <a class="go-home" href="indexA.html">&laquo; back to projects</a>
  <div>
<?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" class="button-back" style="left:0;" title="Previous"></a>
<?php } else { ?>
<a href="/" class="button-home" style="left:0;" title="Home"></a>
<?php }; ?>
  <span>
    <?php echo $page->title ?> - <?php echo h($page->projecttype) ?>
  </span>
  <a href="/" class="button-next" style="right:0;"></a></div>

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
<?php snippet('footer') ?>
