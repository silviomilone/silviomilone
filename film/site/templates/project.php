<?php snippet('header') ?>

  <main class="main" role="main">
 
	    <hr>  
	  <object>
	      <?php if($page->featured()->isNotEmpty()): ?>

        <?= $page->featured()->oembed() ?>
		    <?php endif; ?>
      </object>
	  
	<h2><?php echo $page->title()->html() ?></h2>

    <ul class="meta cf">
	<li><?php echo $page->year() ?>
        <?php echo $page->wtf() ?></li>
	<li><?php echo $page->tags() ?></li>
    </ul>
	  
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
    </div>      

   <nav class="nextprev cf" role="navigation">
      <?php if($prev = $page->prevVisible()): ?>
      <a class="prev" href="<?php echo $prev->url() ?>">&larr; previous</a>
      <?php endif ?>
      <?php if($next = $page->nextVisible()): ?>
      <a class="next" href="<?php echo $next->url() ?>">next &rarr;</a>
      <?php endif ?>
    </nav>

            </main>
<?php snippet('footer') ?>
