<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>
<h1>PROJECT: <?php echo h($page->title()) ?></h1> <br>
	 <br>
	Project Type: <?php echo h($page->projecttype()) ?>
	 <?php echo h($page->project_type()) ?> <br>
	 <br>
    TEXT:: <?php echo html($page->text()) ?> <br>
    SLIDESHOW:: <?php echo h($page->slideshow()) ?> <br>
    CREATED:: <?php echo h($page->created()) ?> <br>
    CREDITS:: <?php echo h($page->credits()) ?> <br>
 	<br>
	TINYURL:: <?php echo $page->tinyurl() ?> <br>
	URL:: <?php echo $page->url() ?> <br>
	<br>
	PREV:: <a href="<?php echo $page->previous($sort='title', $direction='asc') ?>">PREVIOUS</a> <br>
	NEXT:: <a href="<?php echo $page->next($sort='title', $direction='asc') ?>">NEXT</a> <br>
	<BR>
<li> <?php if ($page->hasNext)
		   echo html($page->next()) ?>
 	<br>
    LINK:: <a href="<?php echo html($page->link()) ?>">APP BUTTON or LINK</a> <br>
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