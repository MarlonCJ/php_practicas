<?php
/*
Variables

En PHP, una variable es un espacio donde guardas un dato para usarlo después.

Piensa en una variable como una caja con nombre. En esa caja puedes guardar un texto, un número, un precio, una edad, un resultado, etc.

Ejemplo:

$nombre = "Marlon";
Aquí:

$nombre es la variable.
"Marlon" es el valor guardado.
= significa “guarda este valor en esta variable”.
Luego puedes usar esa variable:

echo $nombre;
Eso imprimiría:

Marlon
En PHP, las variables siempre empiezan con el símbolo $.

Ejemplos:

$edad = 33;
$ciudad = "Villavicencio";
$precio = 10000;
$cantidad = 5;
$total = $precio * $cantidad;
Una variable puede guardar distintos tipos de datos:

$nombre = "Ana";       // Texto
$edad = 20;            // Número entero
$precio = 19.99;       // Número decimal
$activo = true;        // Booleano: verdadero o falso
Lo importante: una variable te permite no repetir datos y trabajar con valores que pueden cambiar.

Por ejemplo:

$precio = 10000;
$cantidad = 3;
$total = $precio * $cantidad;

echo $total;
Resultado:

30000
Si luego cambias la cantidad:

$cantidad = 5;
El total cambia sin tener que reescribir toda la lógica.

En resumen: una variable es un nombre que le das a un valor para poder guardarlo, reutilizarlo y manipularlo en tu programa.


*/

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

// Ejercicio 5
// Crea una variable $producto con el nombre de un producto.
// Crea una variable $valorUnitario.
// Crea una variable $unidades.
// Calcula y muestra el subtotal.

$producto = "computador";
$valorUnitario = 2600000;
$unidades = 20;
$subtotal = $valorUnitario * $unidades;



// Ejercicio 6
// Crea una variable $descuento con valor 2000.
// Resta ese descuento al subtotal y muestra el total final.

$descuento = 2000;
$totalFinal = $subtotal - $descuento;

echo "Producto: $producto<br>";
echo "Subtotal: $subtotal<br>";
echo "Descuento: $descuento<br>";
echo "Total final: $totalFinal<br>";


// Ejercicio 7
// Crea una variable $mensaje con una frase cualquiera.
// Muestra cuántos caracteres tiene usando strlen().

$mensaje = "Hola estoy practicando PHP para volver duro en este lenguaje";

echo strlen($mensaje)."<br>";