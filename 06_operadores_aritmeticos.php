<?php

echo "<h1>06 - Operadores aritmeticos</h1>";

echo "<h2>Que son</h2>";
echo "<p>Los operadores aritmeticos son simbolos que permiten hacer operaciones matematicas con valores numericos.</p>";

echo "<h2>Operadores principales</h2>";
echo "<ul>";
echo "<li><strong>+</strong> suma.</li>";
echo "<li><strong>-</strong> resta.</li>";
echo "<li><strong>*</strong> multiplicacion.</li>";
echo "<li><strong>/</strong> division.</li>";
echo "<li><strong>%</strong> modulo o residuo.</li>";
echo "<li><strong>**</strong> potencia.</li>";
echo "</ul>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan en casi cualquier sistema que maneje numeros: calcular subtotales, descuentos, impuestos, promedios, edades, cantidades, inventarios o comisiones.</p>";

echo "<h2>Ejemplo practico</h2>";
echo "<pre>\$precio = 10000;\n\$cantidad = 3;\n\$subtotal = \$precio * \$cantidad;\n\necho \$subtotal;</pre>";

echo "<h2>Modulo</h2>";
echo "<p>El operador modulo (%) devuelve el residuo de una division. Es muy util para saber si un numero es par o impar.</p>";
echo "<pre>\$numero = 10;\necho \$numero % 2; // resultado 0</pre>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Dividir entre cero.</li>";
echo "<li>Confundir multiplicacion (*) con x.</li>";
echo "<li>Intentar hacer operaciones con texto que no representa numeros.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea dos numeros y muestra su suma.</li>";
echo "<li>Muestra su resta, multiplicacion y division.</li>";
echo "<li>Usa el operador modulo para saber el residuo.</li>";
echo "<li>Usa potencia con **.</li>";
echo "<li>Crea precio, cantidad, descuento y calcula el total final.</li>";
echo "</ol>";

echo "<h2>Solución Ejercicios</h2>";

$numero1 = 200;
$numero2 = 400;

$suma = $numero1 + $numero2;
echo "Suma: $suma <br>";

$resta = $numero1 - $numero2;
echo "Resta: $resta <br>";

$multiplicacion = $numero1 * $numero2;
echo "Multiplicación: $multiplicacion <br>";

$division = $numero1 / $numero2;
echo "División: $division <br>";

echo "Modulo:" . $numero1 % 2 . "<br>";

echo "Potencia: " . 2 ** 4 . "<br>";

$precio = 500;
$cantidad = 2;
$subtotal = $precio * $cantidad;
$descuento = $subtotal * 0.20;
$totalFinal = $subtotal - $descuento;

echo "Subtotal: $subtotal <br>";
echo "Descuento: $descuento <br>";
echo "Total a Pagar: $totalFinal <br>";