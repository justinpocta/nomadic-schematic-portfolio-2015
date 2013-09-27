<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

    <h1>PROJECTZ: <?php echo html($page->title()) ?></h1>

    TEXT:: <?php echo kirbytext($page->text()) ?>
    SLIDESHOW:: <?php echo kirbytext($page->slideshow()) ?>
    CREATED:: <?php echo kirbytext($page->created()) ?>
    CREDITS:: <?php echo kirbytext($page->credits()) ?>

	TINYURL:: $page->tinyurl()
	URL:: $page->url()
	
	NEXT a:: $page->next($sort='title', $direction='asc')
	NEXT b:: $page->hasNext($sort='title', $direction='asc')


	<?php $contact = $pages->findBy('projecttype', 'App') ?>


  </article>

</section>

<?php snippet('footer') ?>