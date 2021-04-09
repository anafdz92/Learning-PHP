<?php

// CREAR UN ARRAY CON 8 NUMEROS: RECORRERLO Y MOSTRARLO, ORDENARLO Y MOSTRARLO, MOSTRAR SU LONGITUD Y BUSCAR ALGO DENTRO DEL ARRAY.

//FUNCIONES
$numeros = array(11, 44, 55, 77, 23, 60, 8, 90);

function mostrarArray($numeros)
{
    $result = "";
    foreach ($numeros as $numero) {
        $result .= $numero . "</br>";
    }
    return $result;
}

//RECORRER Y MOSTRAR



echo "<h1>Recorrer y mostrar</h1>";

echo mostrarArray($numeros);


//ORDENARLO Y MOSTRARLO

echo "<h1>Ordenar y Mostrar</h1>";

sort($numeros);
echo mostrarArray($numeros);

//MOSTRAR SU LONGITUD
echo "<h1>Mostrar Longitud</h1>";
echo count($numeros);

//BÚSQUEDA EN EL ARRAY
echo "<h1>Búsqueda en el array un numero dado</h1>";

$busqueda = 11;
$search = array_search($busqueda, $numeros);
if (!empty($search)) {
    echo "<h4>Tu numerito esta en el array wapi. Y está en el índice: $search</h4>";
} else {
    echo "<h4>Tu numerito NO esta en el array wapi</h4>";
}
