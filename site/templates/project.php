<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

    <h1>PROJECT: <?php echo html($page->title()) ?></h1>
	
	Project Type: <?php echo kirbytext($page->project_type()) ?>

    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->slideshow()) ?> <!-- ? -->

    Created <?php echo kirbytext($page->created()) ?>
    <a href="<?php echo kirbytext($page->link()) ?>">APP BUTTON or LINK</a>
    Team: <?php echo kirbytext($page->credits()) ?>

  </article>

</section>

<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>