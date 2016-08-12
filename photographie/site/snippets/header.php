<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css(
		array(
			'/assets/css/swiper.min.css',
			'/assets/css/main.css',
			)
		); 
	?>
	
	<?php echo js(
		array(
			'/assets/js/jquery-11.0.min.js',
			'/assets/js/swiper.jquery.min.js',
			'/assets/js/script.js'
			)
		); 
	?>

      
</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url('http://silviomilone.com') ?>">
      <h1>Silvio Milone</h1>
    </a>
    <?php snippet('menu') ?>
  </header>
