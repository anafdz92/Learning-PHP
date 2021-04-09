<?php
//CREAR UN SCRIPT QUE TENGA 4 VARIABLES UNA TIPO ARRAY OTRA TIPO STRING OTRA int Y OTRA bOOLEAN Y QUE IMPRIMA UN MENSAJE SEGÚN EL TIPO DE VARIABLE QUE SEA

$matriz = array("holi mundi", 60);
$titulo = "Noches Insomnes";
$entero = 28;
$boolean = true;

if (is_array($matriz)) {
    echo "<h1>El array es tipo array(sorpresita!)</h1>";
};

if (is_string($titulo)) {
    echo "<h1>El titulo es tipo string</h1>";
};

if (is_integer($entero)) {
    echo "<h1>El número es un entero</h1>";
};

if (is_bool($boolean)) {
    echo "<h1>Tu variable es booleana</h1>";
};
