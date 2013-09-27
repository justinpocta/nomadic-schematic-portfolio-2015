<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>
<h1>PROJECT: <?php echo html($page->title()) ?></h1> <br>
	 <br>
	Project Type: <?php echo html($page->projecttype()) ?>
	 <?php echo kirbytext($page->project_type()) ?> <br>
	 <br>
    TEXT:: <?php echo kirbytext($page->text()) ?> <br>
    SLIDESHOW:: <?php echo kirbytext($page->slideshow()) ?> <br>
    CREATED:: <?php echo kirbytext($page->created()) ?> <br>
    CREDITS:: <?php echo kirbytext($page->credits()) ?> <br>
 	<br>
	TINYURL:: <?php echo $page->tinyurl() ?> <br>
	URL:: <?php echo $page->url() ?> <br>
	<br>
	PREV:: <?php echo $page->prev($sort='title', $direction='asc') ?> <br>
	NEXT:: <?php echo $page->next($sort='title', $direction='asc') ?> <br>
 	<br>
    LINK:: <a href="<?php echo html($page->link()) ?>">APP BUTTON or LINK</a> <br>
    LINK:: <a href="<?php echo kirbytext($page->link()) ?>">APP BUTTON or LINK</a> <br>
 	<br>
  </article>

</section>

    ALL THE THING <BR> <br>
1 <?php echo $page->findBy(projecttype,'App') ?> <br>
2 <?php echo $page->findBy('projecttype','App') ?> <br>
3 <?php echo $pages->findBy(projecttype,'App') ?> <br>
4 <?php echo $pages->findBy('projecttype','App') ?> <br>
5 <?php echo $page->findBy($page->projecttype('App')) ?> <br>


<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>