<?php

echo "<h1>01 - Variables</h1>";

// Ejercicio 1
// Crea variables para tu nombre, edad y ciudad.
// Luego muestra una frase con esos datos.

$nombre = "Marlon";
$edad = 33;
$ciudad = "Villavicencio";

echo "Mi nombre es $nombre tengo $edad años y soy de $ciudad.<br>";

// Ejercicio 2
// Crea una variable $profesion.
// Muestra: "Estoy practicando para ser ____."

$profesion = "Programador";

echo "Estoy practicando para ser $profesion.<br>";
// Ejercicio 3
// Crea dos números y muestra la suma, resta, multiplicación y división.

$numero1 = 10;
$numero2 = 30;

echo "Suma: " . ($numero1 + $numero2) . "<br>";
echo "Resta: " . ($numero1 - $numero2) . "<br>";
echo "Multiplicación: " . ($numero1 * $numero2) . "<br>";
echo "División: " . ($numero1 / $numero2) . "<br>";

// Ejercicio 4
// Crea una variable $precio y una variable $cantidad.
// Calcula el total a pagar.

$precio = 10000;
$cantidad = 5;

echo "Total a Pagar: " . ($precio * $cantidad) ."<br>";