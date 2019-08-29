<?php
$carpeta_seleccionada = 'nombre de la carpeta';
$lista_imagenes = array();

function lista_archivos($carpeta){
    $carpeta = __DIR__ ."/".$carpeta."/";
    global $lista_imagenes;
    $extensiones = array('jpg', 'jpeg', 'png', 'gif', 'bmp');

    $contenido_carpeta = scandir($carpeta);
    //fuerza las minusculas para poder filtrar bien
    $contenido_carpeta = array_map('strtolower', $contenido_carpeta);

//itera los elementos de la carpeta y sólo pone en el array las imágenes
for ($i=0; $i < count($contenido_carpeta); $i++) { 
    if ($contenido_carpeta[$i] != '.' && $contenido_carpeta[$i] != '..') {
       $archivo = pathinfo($contenido_carpeta[$i]);
       $extension = $archivo['extension'];
       if (in_array($extension, $extensiones)) {
           array_push($lista_imagenes,$contenido_carpeta[$i]);
       }
    }       
}

    // print_r($contenido_carpeta);
    $lista_imagenes = json_encode($lista_imagenes, JSON_FORCE_OBJECT);
    echo $lista_imagenes;
}

lista_archivos($carpeta_seleccionada);

?>
