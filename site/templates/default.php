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
  
	<!--
	These are our filter options. The "data-filter" classes are used to identify which
	grid items to show.
	-->
	<!-- <ol id="filters">
		<?php foreach($tags as $tag): ?>      	  
			<li data-filter="<?php echo $tag->name() ?>"><?php echo $tag->name() ?></li>
		<?php endforeach ?>	       
	</ol> -->
<center>
	<div id="nav-list"><div id="nav-list-box">
		<!--
		These are our grid items. Notice how each one has classes assigned that
		are used for filtering. The classes match the "data-filter" properties above.
		-->
                <?php if(param('tag')) {
		
		$projects = $pages->find('projects')
							->children()
							->visible()
							->filterBy('tags', param('tag'), ',')
							->flip();                            
		
		} else {
		
		$projects = $pages->find('projects')
							->children()
							->visible()
							->flip();                            
		
		} ?>
		<a href="#bottom" id="nomadic-schematic" class="link-button"><p></p></a>

		<?php foreach($projects as $project): ?>
		<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->title ?>.png')" title="<?php echo html($project->title()) ?>" class="link-button project-mask"><p><?php echo html($project->title()) ?></p></a>

		<?php endforeach ?>            
		<!-- End of grid blocks -->
	  </div></div>
	</center>  
	</div>
</div>

<?php snippet('footer') ?>
