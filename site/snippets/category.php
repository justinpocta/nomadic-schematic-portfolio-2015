<?php

$blog = $pages->find('projects');
$tags = tagcloud($blog);

?>
<ol id="filters">i
	<?php foreach($tags as $tag): ?>      	  
		<li data-filter="Web">Web</li>
	<?php endforeach ?>	       
</ol>

<?php $projects = $pages->findBy('projecttype', 'Web') ?>
<?php foreach($projects as $project): ?> 
			<a href="<?php echo $project->url() ?>" style="background-image:url('/assets/img/thumb-<?php echo $project->projecttype ?>_<?php echo $project->thumb ?><?php echo $project->thumbtype ?>')" title="<?php echo html($project->title()) ?>" class="link-button <?php echo $project->projecttype_button ?>"><p><?php echo html($project->title()) ?></p></a>

                <?php endforeach ?>
