	   <?php if(!empty($page->link())): ?>

      <script>
        $.getJSON("<?php echo $page->link() ?>",
          function(data){
			
            // Debut de la boucle
            $.each(data.photoset.info, function(numero,item){
				// pour ne pas commencer à compter à partir de zero :
				numero += 1;
				
                // Sockage de l'image dans une variable
                var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
				
                // Sockage de l'url dans une variable
                var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
				
                // Affichage des images dans la balise ul#images avec le l'url dans la balise li
                $("<info/>").attr({src: description, alt: item.title}).appendTo("#kirbytext").wrap("<h1></h1>");
				
                
            }); //Fin de la boucle
			
			// lancement du slideshowz
		
			});
			
			
			 });

 		// Fin appel JSON
		});
		  
		</script>
			<div class="ratio-container">

		<div id="test" class="swiper-container gallery-top">
			<div class="swiper-wrapper">
			</div>
		</div>

			<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>

		<div id="diapo" class="swiper-container gallery-thumbs">
			<div class="swiper-wrapper">
			</div>
		</div>

	<?php endif ?>


