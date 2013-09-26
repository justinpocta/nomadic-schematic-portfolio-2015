<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
  </article>

</section>

<?php snippet('all-projects') ?>
<?php snippet('footer') ?>