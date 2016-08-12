<section id="art">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>
    <div class="text">
      <?php echo $page->text()->kirbytext() ?>
      </div>
	  <?php snippet('jsonflickr', array('page'=>$page)) ?>
</section>