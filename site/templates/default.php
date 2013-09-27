<?php snippet('header') ?>

<?php

$blog = $pages->find('articles');
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
		
		$articles = $pages->find('articles')
							->children()
							->visible()
							->filterBy('tags', param('tag'), ',')
							->flip();                            
		
		} else {
		
		$articles = $pages->find('articles')
							->children()
							->visible()
							->flip();                            
		
		} ?>
		<a href="#bottom" id="nomadic-schematic" class="link-button"><p></p></a>

		<?php foreach($articles as $article): ?>
		<a href="<?php echo $article->url() ?>" style="background-image:url('/assets/img/thumbnail-<?php echo $article->title ?>.png')" title="<?php echo html($article->title()) ?>" class="link-button project-mask"><p><?php echo html($article->title()) ?></p></a>

		<?php endforeach ?>            
		<!-- End of grid blocks -->
	  </div></div>
	</center>  
	</div>
</div>

<?php snippet('footer') ?>
