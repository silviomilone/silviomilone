<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
<?php echo js(
		array(
			'/assets/js/jquery-11.0.min.js',
			'/assets/js/swiper.jquery.min.js',
			'/assets/js/script.js',
			'/assets/plugins/oembed/js/oembed.js',
			'/assets/plugins/responsive-nav/js/responsive-nav.min.js'
			)
		); 
	?>
  <?php echo css(
		array(
		    '/assets/plugins/responsive-nav/css/responsive-nav.css',
			'/assets/plugins/oembed/css/oembed.css',
	        '/assets/css/main.css')
		); 
	?>

	
	
</head>
<body>

  <header class="header cf" role="banner">
	  	   <div class="row">

   <a class="logo" href="<?php echo url('http://silviomilone.com') ?>">
      <h1>Silvio Milone</h1>
	   
   </a>  
			   
			    <a class="logo" href="<?php echo url() ?>" alt="home">
      <h2>FILM</h2>
	   
   </a>  
	 <ul>

       <?php snippet('menu') ?>
	 </ul> </div>
	 
  </header>
