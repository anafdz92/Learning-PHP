<?php

//IMPRIMIR POR PANTALLA LOS CUADRADOS DE LOS 40 PRIMEROS NÚMEROS NATURALES

$contador = 0;

while ($contador <= 40) {
    $result = $contador * $contador;
    echo "<h1>El cuadrado de $contador es $result</h1>";
    $contador++;
};

for ($i = 1; $i <= 40; $i++) {
    $result = $i * $i;
    echo "<h1>El cuadrado de $i es $result</h1>";
};
