<section id="reportage">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>

  <ul>
    <?php foreach($data->children()->visible() as $project): ?>
      <li>
        <figure>
          <img src="<?php echo $project->images()->first()->url() ?>" ">
        </figure>
      </li>
    <?php endforeach ?>
  </ul>
</section>