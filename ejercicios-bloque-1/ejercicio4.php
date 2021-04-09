<?php

// RECOGER DOS NÚMEROS POR LA URL (GET) Y HACER TODAS LAS OPERACIONES BÁSICAS DE UNA CALCULADORA.


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo "<h1>CALCULADORA</h1>";
    echo "suma:" . $numero1 + $numero2 . "</br>";
    echo "resta:" . $numero1 - $numero2 . "</br>";
    echo "multiplicación:" . $numero1 * $numero2 . "</br>";
    echo "división:" . $numero1 / $numero2 . "</br>";
} else {
    echo "<h1>Introduce correctamente los parámetros en la url</h1>";
}
