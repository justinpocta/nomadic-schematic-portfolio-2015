<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>

    <h1>PROJECT: <?php echo html($page->title()) ?></h1>

    <?php echo kirbytext($page->text()) ?>
    <?php echo kirbytext($page->slideshow()) ?>
    <?php echo kirbytext($page->created()) ?>
    <?php echo kirbytext($page->credits()) ?>

  </article>

</section>

<?php snippet('all-projects') ?>
<?php snippet('footer') ?>