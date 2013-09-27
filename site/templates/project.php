<?php snippet('header') ?>

<body id="secondary">
<section class="content">

  <article>
<h1>PROJECT: <?php echo h($page->title()) ?></h1> <br>
	 <br>
	Project Type: <?php echo h($page->projecttype()) ?>
	 <?php echo h($page->project_type()) ?> <br>
	 <br>
    TEXT:: <?php echo kirbytext($page->text()) ?> <br>
    SLIDESHOW:: <?php echo h($page->slideshow()) ?> <br>
    CREATED:: <?php echo h($page->created()) ?> <br>
    CREDITS:: <?php echo h($page->credits()) ?> <br>
 	<br>
	TINYURL:: <?php echo $page->tinyurl() ?> <br>
	URL:: <?php echo $page->url() ?> <br>
	<br>
	PREV:: <a href="<?php echo $pages->previous($sort='title', $direction='asc') ?>">PREVIOUS</a> <br>
	NEXT:: <a href="<?php echo $page->next($sort='title', $direction='asc') ?>">NEXT</a> <br>
	<BR>

<?php $list = $page->children()->paginate(10) ?>

<ul>
   <?php foreach($list as $item): ?>
   <li><?php echo $item->title() ?></li>
   <?php endforeach ?>
</ul>

<BR><BR>
x
<BR><BR>

<?php if($list->pagination()->hasPages()): ?>

  <?php if($list->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $list->pagination()->nextPageURL() ?>">next</a>
  <?php endif ?>

  <?php if($list->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $list->pagination()->prevPageURL() ?>">previous</a>
  <?php endif ?>

<?php endif ?>


 	<br>
    LINK:: <a href="<?php echo html($page->link()) ?>">APP BUTTON or LINK</a> <br>
    <?php echo html($page->download()) ?>
    <?php echo html($page->reference()) ?>
    <?php echo html($page->visit()) ?>
    <br>
  </article>

</section>

    ALL THE THING <BR> <br>
4a <?php echo $site->findBy('projecttype','App') ?> <br>
4b <?php echo $page->findBy('projecttype','Brand') ?> <br>
4c <?php echo $pages->findBy('projecttype','Web') ?> <br>
4d <?php echo $pages->findBy('projecttype','Print') ?> <br>
4e <?php echo $pages->findBy('projecttype','Illustration') ?> <br>

1 <?php echo $page->findBy(projecttype,'App') ?> <br>
2 <?php echo $page->findBy('projecttype','App') ?> <br>
3 <?php echo $pages->findBy(projecttype,'App') ?> <br>
5 <?php echo $page->findBy($page->projecttype('App')) ?> <br>


<?php snippet('projects-apps') ?> <!-- ($types->type()) -->
<?php snippet('footer') ?>