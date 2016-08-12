<ul>
  <?php foreach($page->children()->visible() as $project): ?>
<object>
	<?php if($project->featured()->isNotEmpty()): ?>

   <?php echo $project->featured()->oembed() ?><a href="<?php echo $project->url() ?>"><div><h2><?php echo $project->title()->html() ?></h2>    


<?php echo $project->wtf()->html() ?>
	  <ul class="meta cf">
      <?php echo $project->year() ?>
      <?php echo $project->tags() ?>
		  <hr>
    </ul>
        		    <?php endif; ?>
</div>
</object>
  <?php endforeach ?>
</ul>
