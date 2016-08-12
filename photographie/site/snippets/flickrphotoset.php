<html><div id="container">
    <ul id="images">
</div> 
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script>
    $.getJSON("<?php echo $page->link()->text() ?>",
function(data){
        // Debut de la boucle
        $.each(data.photoset.photo, function(i,item){
            // Sockage de l'image dans une variable
            var photo = 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_s.jpg';
            // Sockage de l'url dans une variable
            var url= 'http://farm' + item.farm + '.static.flickr.com/' + item.server + '/' + item.id + '_' + item.secret + '_c.jpg';
            // Affichage des images dans la balise ul#images avec le l'url dans la balise li
            $("<img/>").attr({src: photo, alt: item.title}).appendTo("#images").wrap("<li><a href=' "+ url +"' title=' "+ item.title +" ' ></a></li>");
        }); //Fin de la boucle
    });
    // Fin appel JSON
</script>
    </html>