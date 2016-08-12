<ul>
  <?php foreach($page->children()->visible() as $projects): ?>
<object><div>
   <?php echo $projects->page()->project()->featured()->oembed() ?><a href="<?php echo $projects->page()->project()->url() ?>"><h2><?php echo $projects->page()->project()->title()->html() ?></h2>    

</div>
<?php echo $projects->page()->project()->wtf()->html() ?>
	  <ul class="meta cf">
      <?php echo $projects->page()->project()->year() ?>
      <?php echo $projects->page()->project()->tags() ?>
    </ul>
        
</object>
  <?php endforeach ?>
</ul>
