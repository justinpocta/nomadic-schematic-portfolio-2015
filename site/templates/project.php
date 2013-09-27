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
	TINYURL:: $page->tinyurl() <br>
	URL:: $page->url() <br>
	 <br>
	NEXT a:: $page->next($sort='title', $direction='asc') <br>
	NEXT b:: $page->hasNext($sort='title', $direction='asc') <br>
 	<br>
    LINK:: <a href="<?php echo kirbytext($page->link()) ?>">APP BUTTON or LINK</a> <br>
 	<br>
  </article>

</section>

<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>