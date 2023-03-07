<?php $plantillas = __DIR__ .'/plantillas/'; 

function cuatropost(){
    $plantillas = __DIR__ .'/plantillas/';
    include $plantillas .'cuatropost.php';
}
add_shortcode('latest_posts', 'cuatropost');

?>