	   <?php if(!empty($page->link())): ?>

      <script>
        $.getJSON("<?php echo $page->link() ?>",
          function(data){
			
            // Debut de la boucle
            $.each(data.photoset.photo, function(numero,item){
				// pour ne pas commencer à compter à partir de zero :
				numero += 1;
				
                // Sockage de l'image dans une variable
                var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_h.jpg';
				
                // Sockage de l'url dans une variable
                var photo_small= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_s.jpg';
				
                // Affichage des images dans la balise ul#images avec le l'url dans la balise li
                $("<img/>").attr({src: photo, alt: item.title}).appendTo("#diapo .swiper-wrapper").wrap("<figure class='swiper-slide' data-num='+numero+'></figure>");

                $("<img/>").attr({src: photo_small, class:"thumb"}).appendTo("#diapo .pagination");
				
                
            }); //Fin de la boucle
			
			// lancement du slideshowz
			var gallery = new Swiper('#diapo .swiper-container', {
				nextButton: '.swiper-button-next',
				prevButton: '.swiper-button-prev',
				keyboardControl: true,
				loop: true,

			});
			
		    $("#diapo").on('click', '.pagination img.thumb', function(){
		        gallery.slideTo($(this).index()+1, 500);
		        $('.thumb.active').removeClass('active');
		        $(this).addClass('active');
		    });		

 		// Fin appel JSON
		});
		  
		</script>


	<div id="diapo">
			
		<div class="ratio-container">
			<div class="swiper-container">
				<div class="swiper-wrapper"></div>
			</div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<div class="pagination"></div>

	</div>
<?php endif ?>
