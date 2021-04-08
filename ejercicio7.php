<?php

// un programa que muestre todos los números entre dos números IMPARES que nos lleguen por get


if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    if ($numero1 < $numero2) {
        for ($i = $numero1; $i <= $numero2; $i++) {

            if ($i % 2 != 0) {
                echo "<h3>" . $i . "</h3>";
            }
        }
    } else {
        echo "<h2>El número 1 debe ser menor al número2</h2>";
    }
} else {
    echo "<h3> Los parámetros no existen wapi </h3>";
};
