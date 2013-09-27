<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

    <h1>PROJECT: <?php echo html($page->title()) ?></h1>
	
	Project Type: <?php echo kirbytext($page->project_type()) ?>

    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->slideshow()) ?> <!-- ? -->

    TEXT:: <?php echo kirbytext($page->text()) ?>
    SLIDESHOW:: <?php echo kirbytext($page->slideshow()) ?>
    CREATED:: <?php echo kirbytext($page->created()) ?>
    CREDITS:: <?php echo kirbytext($page->credits()) ?>

	TINYURL:: $page->tinyurl()
	URL:: $page->url()
	
	NEXT a:: $page->next($sort='title', $direction='asc')
	NEXT b:: $page->hasNext($sort='title', $direction='asc')

    LINK:: <a href="<?php echo kirbytext($page->link()) ?>">APP BUTTON or LINK</a>

  </article>

</section>

<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>