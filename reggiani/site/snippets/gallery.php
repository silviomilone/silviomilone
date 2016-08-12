    <?php
<section id="gallery">
$params = array(
    'api_key'        => '7ff7a5e980813cedb8ee459831c455bf', // A remplacer par votre clef
    'method'        => 'flickr.photosets.getPhotos',
    'photoset_id'    => '72157669477146966',
    'format'        => 'php_serial'
);

$encoded_params = array();

foreach ($params as $k => $v){
    $encoded_params[] = urlencode($k).'='.urlencode($v);
}

#
# appeler l'API et décoder la réponse
#
$url = "https://api.flickr.com/services/rest/?".implode('&', $encoded_params);

$rsp = file_get_contents($url);

$rsp_obj = unserialize($rsp);


#
# afficher le titre de la photo (ou une erreur en cas d'échec)
#

if ($rsp_obj['stat'] == 'ok'){

	$photo_title = $rsp_obj['photo']['title']['_content'];

	echo "Le titre est $photo_title !";
}else{

	echo "Échec de l'appel !";
}
</section>