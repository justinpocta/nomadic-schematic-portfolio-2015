<?php snippet('header') ?>
<link rel="stylesheet" href="/assets/css/slides.css" />
<script src="/assets/js/vendor/jquery.slides.min.js"></script>
<script src="/assets/js/vendor/arrowpager.js"></script>
<?php if($page->slidecss()) { ?><style type="text/css">
/* FIND ME */
<?php echo h($page->slidecss()) ?>
</style><?php } else {}; ?>
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
    <?php echo $page->title ?> <?php if ($page->projecttype()) { echo "- "; echo h($page->projecttype()); } else { }; ?>
  </span>
<?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
  <a href="/" class="button-home-right" title="Home"></a>
<?php }; ?>
</div>

</div>

<!-- objective -->
<div class="small-12 large-12" style="margin:0 auto; display:block; background-image:url('<?php echo $page->images()->find('bg.jpg')->url() ?>'); background-repeat:no-repeat; <?php echo $page->headercss ?>">

     <!--// GALLERY 1 //-->
     <div class="container slidesPrimary" style="<?php echo $page->headerwidth ?>">
      <div id="slides" style="<?php echo $page->headerheight ?>">
  	    <?php foreach($page->images() as $image) { if(!preg_match('^header-^', $image->filename() )) continue; ?>
        <div style="background-image:url('<?php echo $image->url() ?>'); <?php echo $page->headerheight ?>"></div>
<?php } ?>
      </div>
    </div>

  </div>

<!-- end objective -->

  <article>

<!-- content intro -->
<div class="large-12 small-12" style="padding-top:25px;">

  <div class="large-12 small-12"> <!-- MAIN 1 -->
	<div class="row">
	<div id="detail-main" class="column <?php if ($page->text()) { ?>large-8<? } else { ?>large-12<?php }; ?> small-12"><!--// content 1 - left //-->

    <?php
      if ($page->text()) {
        echo kirbytext("<span class='detail-title'>Project Information</span>");
        echo kirbytext($page->text());
      } elseif ($page->textabout()) {
        echo kirbytext($page->textabout());
      } else { } ?>

		<?php if($page->quote()) {?>
			<div class="quotes"><p><?php echo $page->quote() ?></p></div>
		<?php } else {}; ?>

	</div>
	</div>


  <div id="detail-sidebar" class="column large-4 small-12"><!--// content 2 - right : sidebar //-->
    <div style="float:left;max-width:200px;"><!-- tags -->

    <?php if($page->weblink()) {?>
      <div style="float:left;padding-bottom:15px;"><?php echo kirbytext($page->weblink()) ?></div>
    <?php } else {}; ?>

    <?php if ($page->tags()) { ?>
      <span class="detail-title">Tags</span>
      <ul class="keywords-list">
	    <?
	      $articleTags = str::split($page->tags());
        $blog = $pages->find('projects');
	    ?>
	    <? foreach($articleTags as $tag): ?>
	    <li><?= $tag ?></li>
	    <? endforeach ?>
      </ul>
    <?php } else {}; ?>

    </div><!-- end tags -->


    <div style="float:left;margin-top:10px;clear:left;" class="project-credits">

    <?php if ($page->created()) { ?>
      <span class="detail-title">Details</span>
	    <small>Completed <?php echo h($page->created()) ?></small>
	    <?php echo kirbytext($page->credits()) ?>

    <?php } else { ?>

    <?php } ?>

	  <?php if($page->applink()) {?>
      <div style="margin-top:15px;"><?php echo kirbytext($page->applink()) ?></div>
      <div style="padding-bottom:100px;"></div>
   <?php } else { ?>
      <div style="padding-bottom:100px;"></div>
      <?php }; ?>
    </div>
  </div>

	</div> <!--// end project info div //-->

  </article>

</section>

  <!-- SlidesJS Required: Link to jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Link to jquery.slides.js // not .min.js anymore -->
  <script src="/assets/js/vendor/jquery.slides.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
var paginationcheck = <?php echo h($page->paginateslide()) ?>;

$(function() {

    $('#slides3').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          active: true,
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        play: {
          active: true,
          auto: false,
          interval: 8500,
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


     $('#slides2').slidesjs({
        width: 940,
        height: 528,
        navigation: {
          active: true,
          effect: "fade"
        },
        pagination: {
          active: true,
          effect: "fade"
        },
        play: {
          active: true,
          auto: false,
          interval: 8500,
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
          active: true,
          effect: "fade"
        },
         pagination: {
          // active: this.write(paginationcheck);
          active: true,
          effect: "fade"
        },
play: {
active: false,
auto: false,
interval: 8000,
swap: true,
pauseOnHover: true,
restartDelay: 2500
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



  <div class="footer-navigation">
    <?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" class="button-back" style="left:0;" title="Previous"></a>
      <?php } else { ?>
        <a href="/" class="button-home-left" title="Home"></a>
          <?php }; ?>
              <span style="text-transform:capitalize;text-align:center;width:100%;display:block;line-height:3em;color:#FFF">
                      <?php echo $page->title ?> <?php if ($page->projecttype()) { echo "- "; echo h($page->projecttype()); } else { }; ?>
                                </span>
                                          <?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
                                                      <a href="/" class="button-home-right" title="Home"></a>
                                                                  <?php }; ?>
                                                                              </div>

<?php snippet('footer') ?>
