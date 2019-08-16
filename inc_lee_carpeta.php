<?php
$carpeta_seleccionada = 'nombre de la carpeta';

function lista_archivos($carpeta){
    $carpeta = __DIR__ ."/".$carpeta."/";
    $contenido_carpeta = scandir($carpeta);
    // print_r($contenido_carpeta);
    $contenido_carpeta = json_encode($contenido_carpeta, JSON_FORCE_OBJECT);
    echo $contenido_carpeta;
}

lista_archivos($carpeta_seleccionada);

?>
