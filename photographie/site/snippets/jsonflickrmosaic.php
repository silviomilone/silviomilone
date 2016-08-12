<?php if(!empty($page->link())): ?>

      <script>
		  var setid = "<?php echo $page->link() ?>"
		  
		  		
        $.getJSON("https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos" + "&api_key=7ff7a5e980813cedb8ee459831c455bf" + "&photoset_id=" + setid + "&user_id=143250961%40N04" + "&extras=" + "&format=json&nojsoncallback=1", function(data){
			
            // Debut de la boucle
            $.each(data.photoset.photo, function(numero,item){
				// pour ne pas commencer à compter à partir de zero :
				numero += 1;
				
                // Sockage de l'image dans une variable
                var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_h.jpg';
					var url = "http://www.flickr.com/photos/" + data.photoset.owner + "/" + photo.id + "/";
								
         
							        
				
                // Affichage des images dans la balise ul#images avec le l'url dans la balise li
                $("<img/>").attr({src: photo, alt: item.title}).appendTo("tile").wrap(("<figure class='mosaic-wrap' data-num='+numero+'></figure>" ));

            }); //Fin de la boucle
	
		

			});
			
		    

 		// Fin appel JSON
			
		});
		  

		</script>


	<div id="mosaic wrap">
			<div class="tile "></div>			<div class="mosaic-wrap">">
				<div class="swiper-wrapper"></div>
			</div>

			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
		<div class="pagination"></div>

	</div>
<?php endif ?>
