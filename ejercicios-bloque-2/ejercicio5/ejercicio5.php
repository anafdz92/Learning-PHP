<?php
//CREAR UN ARRAY CON EL CONTENIDO DE LA SIGUIENTE TABLA: LA COLUMNA SERÍA UN ÍNDICE Y DENTRO TENDRÍAMOS DATOS ASOCIADOS: TABLA DE VIDEOJUEGOS DE ACCION AVENTURA Y DEPORTE.
//CADA COLUMNA DEBE IR EN UN FICHERO SEPARADO CON INCLUDES

$tabla = array(
    "divas" => array("Badgyal", "La Dani", "Samantha Hudson"),
    "podcast" => array("Deforme semanal", "Estirando el chicle", "Postapocalipsis"),
    "autoras" => array("Duval", "McCullers", "Hardwick")
);


$indices = (array_keys($tabla));
?>

<table>
    <?php require_once 'ejercicio5/encabezados.php' ?>
    <?php require_once 'ejercicio5/primerafila.php' ?>
    <?php require_once 'ejercicio5/segunda.php' ?>
    <?php require_once 'ejercicio5/tercera.php' ?>

</table>