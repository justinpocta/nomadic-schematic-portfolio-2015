<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

ALL THE THINGS <BR>
<?php echo html($pages->title()) ?>
<?php $pages->findBy('projecttype', 'App') ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>
<?php  ?>






    <h1>PROJECTZ: <?php echo html($page->title()) ?></h1>
 	<br>
    TEXT:: <?php echo kirbytext($page->text()) ?> <br>
    SLIDESHOW:: <?php echo kirbytext($page->slideshow()) ?> <br>
    CREATED:: <?php echo kirbytext($page->created()) ?> <br>
    CREDITS:: <?php echo kirbytext($page->credits()) ?> <br>
 	<br>
	TINYURL:: $page->tinyurl() <br>
	URL:: $page->url() <br>
	 <br>
	NEXT a:: $page->next($sort='title', $direction='asc') <br>
	NEXT b:: $page->hasNext($sort='title', $direction='asc') <br>
 	<br>
 	 <br>
	<?php $contact = $pages->findBy('projecttype', 'App') ?> <br>


  </article>

</section>

<?php snippet('footer') ?>