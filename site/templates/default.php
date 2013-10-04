<?php snippet('header') ?>

<?php

$blog = $pages->find('projects');
$tags = tagcloud($blog);

?>

<!-- <div id="container"> -->

<div class="main-intro" id="main-intro-header">
  <div><h2><a href="/" style="color:#FFF;text-decoration:none">Nomadic Schematic</a>, <span style="font-family:Baskerville;font-weight:lighter;font-style:italic;">the design portfolio of <a class="nowrap" href="about.html">Justin Pocta</span></a>.</h2></div>
</div>

<div class="main-nav">
  <a href="" name="start" style="position:absolute;top:0px;"></a>

<center>
	<div id="nav-list"><div id="nav-list-box">

		<a href="#bottom" id="nomadic-schematic" class="link-button"><p></p></a>

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

<?php if ($project->projecttype=='app') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='web') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='print') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>" data-tooltip="<?php echo $project->title ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='brand') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_villages.png')" title="The Villages" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="The Villages"><p> The Villages </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_purus.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Purus </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_stash.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Stash Furniture </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_hebron.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Hebron Station </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_lakeofstars.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Lake of Stars </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_rei.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> REI </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_kroger.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Kroger </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_sandbox.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Sandbox </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_midtown.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Midtown </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_dogpoint.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Dog Point </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_cameronbreen.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p> Cameron Breen </p></a>

<?php } else { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>" data-tooltip="<?php echo $project->title ?>"><p><?php echo html($project->title()) ?></p></a>
  <?php }
endforeach ?>

<!--//
<a href="/apps" style="background-image:url('/assets/img/thumb-Category_button-app_white.png')" title="Apps" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Apps</p></a>
<a href="/websites" style="background-image:url('/assets/img/thumb-Category_button-web_white.png')" title="Websites" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Websites</p></a>
<a href="/brand" style="background-image:url('/assets/img/thumb-Category_button-brand_white.png')" title="Brand" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Brand</p></a>
<a href="/print" style="background-image:url('/assets/img/thumb-Category_button-print_white.png')" title="Print" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Print</p></a>
<a href="/illustration" style="background-image:url('/assets/img/thumb-Category_button-illustration_white.png')" title="Illustration" class="link-button button-category" data-tooltip="<?php echo $project->title ?>"><p>Illustration</p></a>
//-->
<a href="/justin-pocta" style="background-image:url('/assets/img/button-info_white.png')" title="About Justin" class="link-button button-category" data-tooltip="About Justin"><p>Info</p></a>

		<!-- End of grid blocks -->
	  </div></div>
	</center>
	</div>
</div>

<?php snippet('footer') ?>
