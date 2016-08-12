<?php snippet('header') ?>

  <main class="main" role="main">
    <hr>
    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>

    </div>

  </main>

<?php snippet('footer') ?>