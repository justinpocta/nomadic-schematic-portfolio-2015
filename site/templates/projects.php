<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

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

ALL THE THINGS <BR>
1 <?php echo $page->findBy(projecttype,'App') ?> <br>
2 <?php echo $page->findBy('projecttype','App') ?> <br>
3 <?php echo $pages->findBy(projecttype,'App') ?> <br>
4 <?php echo $pages->findBy('projecttype','App') ?> <br>
5 <?php echo $page->findBy($page->projecttype('App')) ?> <br>

<?php snippet('footer') ?>