<?php

echo "<h1>17 - Foreach</h1>";

echo "<h2>Que es</h2>";
echo "<p>Foreach es un bucle especializado para recorrer arrays. En cada vuelta toma un elemento del array y lo guarda temporalmente en una variable.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Se utiliza porque es la forma mas comoda y clara de recorrer listas. No necesitas manejar indices manualmente como con for.</p>";

echo "<h2>Foreach con array indexado</h2>";
echo "<pre>\$frutas = [\"Manzana\", \"Pera\", \"Mango\"];\n\nforeach (\$frutas as \$fruta) {\n    echo \$fruta . \"&lt;br&gt;\";\n}</pre>";

echo "<h2>Foreach con array asociativo</h2>";
echo "<pre>\$producto = [\"nombre\" => \"Camisa\", \"precio\" => 50000];\n\nforeach (\$producto as \$clave => \$valor) {\n    echo \$clave . \": \" . \$valor . \"&lt;br&gt;\";\n}</pre>";

echo "<h2>Como leerlo</h2>";
echo "<p>La frase foreach (\$frutas as \$fruta) se puede leer como: por cada elemento dentro de \$frutas, guardalo temporalmente en \$fruta.</p>";

echo "<h2>Uso real</h2>";
echo "<p>Cuando traigas datos desde una base de datos, normalmente tendras una lista de registros. Foreach te servira para mostrar cada registro en una tabla HTML.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Recorre un array de frutas.</li>";
echo "<li>Recorre un array asociativo de producto.</li>";
echo "<li>Recorre una lista de estudiantes.</li>";
echo "<li>Muestra solo los numeros mayores que 10 dentro de un array.</li>";
echo "</ol>";

