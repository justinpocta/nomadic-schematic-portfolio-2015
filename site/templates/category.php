<?php snippet('header') ?>
<?php $section = $site->uri()->path()->last(); ?>

<!-- <div id="container"> -->

<div class="main-intro" id="main-intro-header">
<div><h2>Nomadic Schematic, <span style="font-family:Baskerville;font-weight:lighter;font-style:italic;">the design portfolio of <a class="nowrap" href="about.html">Justin Pocta</span></a>.</h2></div>
</div>

<div class="main-nav">
<a href="" name="start" style="position:absolute;top:0px;"></a>

<center>
<div id="nav-list"><div id="nav-list-box"
style="">

    <a href="/" style="background-image:url('/assets/img/thumb-Category_button-<?php echo h($section) ?>_white.png')" title="<?php echo h($section) ?>" class="link-button button-category"><p><?php echo h($section) ?></p></a>
    <?php
        $projects = $pages->find('projects')->children();
        $items = $projects->findBy('projecttype', $section);
    ?>
    <?php foreach($projects as $project) : ?>
         <?php if ($project->projecttype==$section) { ?>
<a href="<?php echo $project->url() ?>"
style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')"
title="<?php echo html($project->title()) ?>"
class="link-button <?php echo $project->projecttype_button ?>">
<p><?php echo html($project->title()) ?></p></a>
         <?php } else {} ?>
    <?php endforeach ?>

<!--// BACK BUTTON //-->
	<a href="/" style="background-image:url('/assets/img/button-back_white.png')" title="<?php echo h($section) ?>" class="link-button button-return button-category"><p>Back Home</p></a>
		<!-- End of grid blocks -->
</div></div>
</center>
	</div>
</div>

<?php snippet('footer') ?>
