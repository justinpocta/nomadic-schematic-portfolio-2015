<?php snippet('header') ?>

<link rel="stylesheet" href="http://www.nomadic-schematic.com/assets/css/carousel.css">
<script type="text/javascript" language="javascript" src="http://www.nomadic-schematic.com/assets/js/vendor/jquery.carousel.js"></script>
<script type="text/javascript" language="javascript" src="http://www.nomadic-schematic.com/assets/js/vendor/jquery.carouFredSel-6.2.1.js"></script>

<script type="text/javascript">
// scroll to top - logo
// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
  var distanceCheck = 35
//  else {
//    var distanceCheck = 150
//  }
// });

$(document).on("scroll",function(){
	if($(document).scrollTop()>distanceCheck){
		$("#main-intro-header").removeClass("nomadic-large").addClass("nomadic-small");
	}
	else{
		$("#main-intro-header").removeClass("nomadic-small").addClass("nomadic-large");
	}
});

// fade in projects on scroll
// $(document).ready(function() {

    /* Every time the window is scrolled ... */
    // $(window).scroll( function(){

        /* Check the location of each desired element */
        // $('.fade-in-object').each( function(i){

            // var bottom_of_object = $(this).position().top + $(this).outerHeight();
            // var bottom_of_window = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            // if( bottom_of_window > bottom_of_object ){

                // $(this).animate({'opacity':'1'},500);

            // }

        // });

    // });

// });
</script>

<?php
$blog = $pages->find('projects');
$tags = tagcloud($blog);
?>

<div id="main-intro-foundation"></div>
<div id="main-intro-header" class="nomadic-large">
    <a href="#start" onClick="_gaq.push(['_trackEvent', 'header-Notch', 'clicked'])" class="go-nomadic get-up-there"></a>
</div>

<div id="wrapper2" style="width:100%;background-color:#000;" class="Xsmall-12 Xlarge-12 hide-for-small">
  <div id="carousel" style="">
    <a href="http://www.nomadic-schematic.com/projects/zipments-rwd" title="Zipments Responsive Redesign"><img src="http://www.nomadic-schematic.com/assets/img/slide-01.png" alt="Zipments Responsive Redesign" width="990" height="450" /></a>
    <a href="http://www.nomadic-schematic.com/projects/zephyr-real-estate" title="Zephyr Real Estate Launched on Mobile"><img src="http://www.nomadic-schematic.com/assets/img/slide-02.png" alt="Zephyr Real Estate Launched on Mobile" width="990" height="450" /></a>
    <a href="http://www.nomadic-schematic.com/projects/liquid-finance" title="Liquid - Find Your Finances More Fun"><img src="http://www.nomadic-schematic.com/assets/img/slide-03.png" alt="Liquid Find Your Finances More Fun" width="990" height="450" /></a>
    <a href="http://www.nomadic-schematic.com/projects/zipments-rwd" title="Zipments Responsive Redesign"><img src="http://www.nomadic-schematic.com/assets/img/slide-01.png" alt="Zipments Responsive Redesign" width="990" height="450" /></a>
  <a href="http://www.nomadic-schematic.com/projects/zephyr-real-estate" title="Zephyr Real Estate Launched on Mobile"><img src="http://www.nomadic-schematic.com/assets/img/slide-02.png" alt="Zephyr Real Estate Launched on Mobile" width="990" height="450" /></a>
      <a href="http://www.nomadic-schematic.com/projects/liquid-finance" title="Liquid - Find Your Finances More Fun"><img src="http://www.nomadic-schematic.com/assets/img/slide-03.png" alt="Liquid Find Your Finances More Fun" width="990" height="450" /></a>
  </div>
  <a href="#" id="prever" title="Show previous"> </a>
  <a href="#" id="nexter" title="Show next"> </a>
  <div id="pager"></div>
</div>

<div class="main-nav">

<center>


<div class="tk-jubilat main-intro" style="padding:20px 0;background-color:#FFF;"><h2><a href="/" onclick="_gaq.push(['_trackEvent', 'about1', 'clicked'])" style="color:#545454;text-decoration:none">Nomadic Schematic</a> <span style="">is the portfolio of <a class="nowrap" onclick="_gaq.push(['_trackEvent', 'button2', 'clicked'])" href="/about">Justin Pocta</span></a>,<br>an interactive product designer living in new york city.</h2></div>

  <div id="nav-list"><div id="nav-list-box">

		<a href="/about" onclick="_gaq.push(['_trackEvent', 'about3', 'clicked'])" id="nomadic-schematic" class="link-button project-mask fade-in-object"><p>About Justin</p></a>

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
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'appFront', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="App: <?php echo html($project->title()) ?>" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='web') { ?>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'webFront', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Website: <?php echo html($project->title()) ?>" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='print') { ?>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'printFront', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Print: <?php echo html($project->title()) ?>" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='brand') { ?>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-village', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_villages.png')" title="Brand: The Villages" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="The Villages" data-options="disable-for-touch:true"><p>The Villages</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-purus', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_purus.png')" title="Brand: Purus" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" d-tooltip="Purus" data-options="disable-for-touch:true"><p>Purus</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-stash', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_stash.png')" title="Brand: Stash Furniture" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Stash Furniture" data-options="disable-for-touch:true"><p>Stash Furniture</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-hebron', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_hebron.png')" title="Brand: Hebron Station" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Hebron Station" data-options="disable-for-touch:true"><p>Hebron Station</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-los', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_lakeofstars.png')" title="Brand: Lake of Stars" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Lake of Stars" data-options="disable-for-touch:true"><p>Lake of Stars</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-rei', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_rei.png')" title="Brand: REI" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="REI" data-options="disable-for-touch:true"><p>REI</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-sandbox', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_sandbox.png')" title="Brand: Sandbox" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Sandbox" data-options="disable-for-touch:true"><p>Sandbox</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-midtown', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_midtown.png')" title="Brand: Midtown" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" d-tooltip="Midtown" data-options="disable-for-touch:true"><p>Midtown</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-dogpoint', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_dogpoint.png')" title="Brand: Dog Point" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Brand: Dog Point" data-options="disable-for-touch:true"><p>Dog Point</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-cambreen', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_cameronbreen.png')" title="Brand: Cameron Breen" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="Cameron Breen" data-options="disable-for-touch:true"><p>Cameron Breen</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-kroger', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_kroger.png')" title="Brand: Kroger" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" d-tooltip="Kroger" data-options="disable-for-touch:true"><p>Kroger</p></a>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'brandFront-c3', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_c3.png')" title="Brand: Culture Club" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" d-tooltip="Culture Club" data-options="disable-for-touch:true"><p>Culture Club</p></a>
<?php } elseif ($project->projecttype=='illustration') { ?>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'illoFront', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="Illustration: <?php echo html($project->title()) ?>" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
<?php } else { ?>
<a href="<?php echo $project->url() ?>" onclick="_gaq.push(['_trackEvent', 'elseFront', 'clicked'])" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="fade-in-object tip-top link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-options="disable-for-touch:true"><p><?php echo html($project->title()) ?></p></a>
  <?php }
endforeach ?>

<!--//
<a href="/projects/about" onclick="_gaq.push(['_trackEvent', 'about4', 'clicked'])" style="background-image:url('/assets/img/button-info_white.png')" title="About Justin" class="info-cat" id="button-info" data-tooltip="About Justin" data-options="disable-for-touch:true"><p>About Justin</p></a>
//-->
<!--//
<a href="/apps" style="background-image:url('/assets/img/thumb-Category_button-app_white.png')" title="Apps" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Apps</p></a>
<a href="/websites" style="background-image:url('/assets/img/thumb-Category_button-web_white.png')" title="Websites" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Websites</p></a>
<a href="/brand" style="background-image:url('/assets/img/thumb-Category_button-brand_white.png')" title="Brand" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Brand</p></a>
<a href="/print" style="background-image:url('/assets/img/thumb-Category_button-print_white.png')" title="Print" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Print</p></a>
<a href="/illustration" style="background-image:url('/assets/img/thumb-Category_button-illustration_white.png')" title="Illustration" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Illustration</p></a>
//-->

		<!-- End of grid blocks -->
	  </div></div>
	</center>
	</div>
</div>

<?php snippet('footer') ?>
