<?php
// HACER UN PROGRAMA QUE COMPRUEBE SI UNA VARIABLE ESTA VACÍA Y SI LO ESTÁ RELLENARLA CON TEXTO EN MINÚSCULAS Y MOSTRARLO EN MAYÚSCULAS Y NEGRITA.

$texto = "";

if (empty($texto)) {
    $texto = "hola soy un texto en minusculas";
    $textoM = strtoupper($texto);
    echo "<strong>$textoM</strong>";
} else {
    echo "<h4>La variable tiene un contenido:.$texto.</h4>";
}
