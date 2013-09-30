<?php snippet('header') ?>

<?php

$blog = $pages->find('projects');
$tags = tagcloud($blog);

?>

<!-- <div id="container"> -->

<div class="main-intro" id="main-intro-header">
  <div><h2>Nomadic Schematic, <span style="font-family:Baskerville;font-weight:lighter;font-style:italic;">the design portfolio of <a class="nowrap" href="about.html">Justin Pocta</span></a>.</h2></div>
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
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='web') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='print') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p><?php echo html($project->title()) ?></p></a>
<?php } elseif ($project->projecttype=='brand') { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_villages.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> The Villages </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_purus.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Purus </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_stash.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Stash Furniture </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_hebron.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Hebron Station </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_lakeofstars.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Lake of Stars </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_rei.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> REI </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_kroger.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Kroger </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_sandbox.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Sandbox </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_midtown.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Midtown </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_dogpoint.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Dog Point </p></a>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_cameronbreen.png')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p> Cameron Breen </p></a>

<?php } else { ?>
<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p><?php echo html($project->title()) ?></p></a>
		<?php }
endforeach ?>

		<!-- End of grid blocks -->
	  </div></div>
	</center>  
	</div>
</div>

<?php snippet('footer') ?>
