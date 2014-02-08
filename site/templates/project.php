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

  <a class="go-home" onclick="_gaq.push(['_trackEvent', 'project-BackToProjects', 'clicked'])" href="/">&laquo; back to projects</a>
  <div>
<?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" onclick="_gaq.push(['_trackEvent', 'project-Previous', 'clicked'])" class="button-back" style="left:0;" title="Previous"></a>
<?php } else { ?>
<a href="/" onclick="_gaq.push(['_trackEvent', 'project-HomeFirst', 'clicked'])" class="button-home-left" title="Home"></a>
<?php }; ?>
  <span id="project-headline">
    <?php echo $page->title ?> <?php if ($page->projecttype() != 'aboutme') { echo "- "; echo h($page->projecttype()); } else { }; ?>
  </span>
<?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" onclick="_gaq.push(['_trackEvent', 'project-Next', 'clicked'])" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
  <a href="/" onclick="_gaq.push(['_trackEvent', 'project-HomeFinal', 'clicked'])" class="button-home-right" title="Home"></a>
<?php }; ?>
</div>

</div>

<!-- objective -->
<div class="small-12 large-12" style="margin:0 auto; display:block; background-image:url('<?php echo $page->images()->find('bg.png')->url() ?>'); background-repeat:no-repeat; <?php echo $page->headercss ?>">

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
      <div class="project-detail-sidebar-space"></div>
   <?php } else { ?>
      <div class="project-detail-sidebar-space"></div>
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

<div id="nav-list2" style="background-color:rgba(0,0,0,.1);padding-top:10px;">
<!-- <p style="font-size:1em;padding-left:20px;margin-bottom:.7em !important;"><i>View Another Project</i></p> -->
<div id="nav-list-box2">

<a name="#" id="view-more" class="link-button project-mask"><p></p></a>

<?php if(param('tag')) {
  $projects = $pages->find('projects')
    ->children()
    ->visible()
    ->filterBy('tags', param('tags'), ',');
  } else {
  $projects = $pages->find('projects')
    ->children()
    ->visible();
  } ?>
  <?php foreach($projects as $project): ?>

  <?php if ($project->projecttype=='aboutme') { ?>
    <?php } elseif ($project->projecttype=='app') { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'appFooter', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="App: <?php echo html($project->title()) ?>" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
    <?php } elseif ($project->projecttype=='web') { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'webFooter', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Website: <?php echo html($project->title()) ?>" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a><?php } elseif ($project->projecttype=='print') { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'printFooter', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Print: <?php echo html($project->title()) ?>" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
    <?php } elseif ($project->projecttype=='brand') { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-village', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_villages.png')" title="Brand: The Villages" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="The Villages" data-options="disable-for-touch:true"><p>The Villages</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-purus', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_purus.png')" title="Brand: Purus" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Purus" data-options="disable-for-touch:true"><p>Purus</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-stash', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_stash.png')" title="Brand: Stash Furniture" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Stash Furniture" data-options="disable-for-touch:true"><p>Stash Furniture</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-hebron', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_hebron.png')" title="Brand: Hebron Station" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Hebron Station" data-options="disable-for-touch:true"><p>Hebron Station</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-los', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_lakeofstars.png')" title="Brand: Lake of Stars" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Lake of Stars" data-options="disable-for-touch:true"><p>Lake of Stars</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-rei', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_rei.png')" title="Brand: REI" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="REI" data-options="disable-for-touch:true"><p>REI</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-sandbox', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_sandbox.png')" title="Brand: Sandbox" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Sandbox" data-options="disable-for-touch:true"><p>Sandbox</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-midtown', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_midtown.png')" title="Brand: Midtown" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Midtown" data-options="disable-for-touch:true"><p>Midtown</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-dogpoint', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_dogpoint.png')" title="Brand: Dog Point" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Brand: Dog Point" data-options="disable-for-touch:true"><p>Dog Point</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-cambreen', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_cameronbreen.png')" title="Brand: Cameron Breen" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Cameron Breen" data-options="disable-for-touch:true"><p>Cameron Breen</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-kroger', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_kroger.png')" title="Brand: Kroger" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Kroger" data-options="disable-for-touch:true"><p>Kroger</p></a>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFooter-c3', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_c3.png')" title="Brand: Culture Club" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Culture Club" data-options="disable-for-touch:true"><p>Culture Club</p></a>
    <?php } elseif ($project->projecttype=='illustration') { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'illoFooter', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Illustration: <?php echo html($project->title()) ?>" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
    <?php } else { ?>
    <a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'elseFooter', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
      <?php } endforeach ?>
</div></div>


  <div class="footer-navigation">
    <?php if($page->hasPrev()) { ?><a href="<?php echo $page->prev()->url() ?>" onclick="_gaq.push(['_trackEvent', 'project-PreviousFooter', 'clicked'])" class="button-back" style="left:0;" title="Previous"></a>
      <?php } else { ?>
        <a href="/" onclick="_gaq.push(['_trackEvent', 'project-HomeFirstFooter', 'clicked'])" class="button-home-left" title="Home"></a>
          <?php }; ?>
              <span style="text-transform:capitalize;text-align:center;width:100%;display:block;line-height:3em;color:#FFF">
                <?php echo $page->title ?> <?php if ($page->projecttype() != 'aboutme') { echo "- "; echo h($page->projecttype()); } else { }; ?>
              </span>
                                          <?php if($page->hasNext()) { ?><a href="<?php echo $page->next()->url() ?>" onclick="_gaq.push(['_trackEvent', 'project-NextFooter', 'clicked'])" class="button-next" style="right:0;" title="Next"></a><?php } else { ?>
                                                      <a href="/" onclick="_gaq.push(['_trackEvent', 'project-HomeLastFooter', 'clicked'])" class="button-home-right" title="Home"></a>
                                                                  <?php }; ?>
                                                                              </div>

<?php snippet('footer') ?>
