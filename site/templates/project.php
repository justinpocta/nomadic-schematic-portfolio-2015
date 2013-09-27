<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>
<h1>PROJECT: <?php echo html($page->title()) ?></h1> <br>
	 <br>
	Project Type: <?php echo kirbytext($page->project_type()) ?> <br>
	 <br>
    TEXT:: <?php echo kirbytext($page->text()) ?> <br>
    SLIDESHOW:: <?php echo kirbytext($page->slideshow()) ?> <br>
    CREATED:: <?php echo kirbytext($page->created()) ?> <br>
    CREDITS:: <?php echo kirbytext($page->credits()) ?> <br>
 	<br>
	TINYURL:: <?php echo $page->tinyurl() ?> <br>
	URL:: <?php echo $page->url() ?> <br>
	 <br>
	PREV:: <?php echo $page->previous($sort='title', $direction='asc') ?> <br>
	NEXT:: <?php echo $page->next($sort='title', $direction='asc') ?> <br>

	NEXT x:: <?php echo $page->hasNext($sort='title', $direction='asc') ?> <br>
 	<br>
    LINK:: <a href="<?php echo kirbytext($page->link()) ?>">APP BUTTON or LINK</a> <br>
 	<br>
  </article>

</section>

    ALL THE THING <BR>
<?php echo html($page->title()) ?>
<?php echo $pages->findByDirname(App) ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php echo kirbytext($page->link()) ?>
<?php echo $page->findBy($page->projecttype()) ?>

<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>