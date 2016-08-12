
		
    <?php if(!empty($page->link())): ?>

      <script>
        $.getJSON("<?php echo $page->link() ?>",
          function(data){
			
            // Debut de la boucle
            $.each(data.photoset.photo, function(numero,item){
				// pour ne pas commencer à compter à partir de zero :
				numero += 1;
				
                // Sockage de l'image dans une variable
                var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
				
                // Sockage de l'url dans une variable
                var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
				
                // Affichage des images dans la balise ul#images avec le l'url dans la balise li
                $("<img/>").attr({src: photo, alt: item.title}).appendTo("#diapo .swiper-wrapper").wrap("<figure class='swiper-slide' data-num="+numero+"></figure>");
                
            }); //Fin de la boucle
			
			// lancement du slideshowz
			var mySwiper = new Swiper('#diapo.swiper-container', {
				speed: 400,
				loop: true,
				keyboardControl: true,
				pagination: '.swiper-pagination',
				
				// Navigation arrows
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
			}); 
		
        // Fin appel JSON
		});
		  
		
		</script>
		
		<div id="diapo" class="swiper-container">
			<div class="swiper-wrapper">
			</div>
			
			<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>


	<?php endif ?>


