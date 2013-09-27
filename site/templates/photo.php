<?php snippet('header') ?>

<?php

$blog = $pages->find('projects');
$tags = tagcloud($blog);

?>

<div id="container">
	<header>
		<h2>Hello my name is</h2>
		<h1><?php echo html($site->name()) ?></h1>
		<h3><?php echo html($site->address()) ?></h3>
		<div id="info">
			<a href="mailto:<?php echo html($site->mail()) ?>" title="Contact me"><img src="<?php echo html($site->url()) ?>/assets/images/icons/interface/info.png"></a>
		</div>
	</header>
	<div id="main" role="main">
	  
	<!--
	These are our filter options. The "data-filter" classes are used to identify which
	grid items to show.
	-->
	<ol id="filters">
		<?php foreach($tags as $tag): ?>      	  
			<li data-filter="<?php echo $tag->name() ?>"><?php echo $tag->name() ?></li>
		<?php endforeach ?>	       
	</ol>

	<ul id="tiles">
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
		<?php foreach($projects as $project): ?>
		<li class="<?php foreach(str::split($project->tags()) as $tag): ?><?php echo $tag ?> <?php endforeach ?>">
			<a href="<?php echo $project->url() ?>" title="<?php echo html($project->title()) ?>"><?php foreach($project->images() as $image): ?><?php echo thumb($image, array('width' => 300, 'quality' => 70)) ?><?php endforeach ?><p><?php echo html($project->title()) ?></p></a></li>             
		<?php endforeach ?>            
		<!-- End of grid blocks -->
	  </ul>
	  
	</div>
</div>

<?php snippet('footer') ?>
