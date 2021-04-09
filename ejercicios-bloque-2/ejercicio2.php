<?php

//AÑADIR VALORES A UN ARRAY MIENTRAS QUE SU LONGITUD SEA MENOR A 120 Y MOSTRARLO POR PANTALLA

$coleccion = array();

for ($i = 0; $i < 120; $i++) {
    array_push($coleccion, $i);
};

var_dump($coleccion);
