<?php

echo "<h1>14 - Bucle for</h1>";

echo "<h2>Que es</h2>";
echo "<p>El bucle for permite repetir un bloque de codigo un numero definido de veces. Es ideal cuando sabes desde donde empieza el contador, hasta donde llega y como cambia en cada vuelta.</p>";

echo "<h2>Partes del for</h2>";
echo "<ul>";
echo "<li><strong>Inicio:</strong> se crea una variable contador.</li>";
echo "<li><strong>Condicion:</strong> indica hasta cuando se repite.</li>";
echo "<li><strong>Incremento:</strong> cambia el contador en cada vuelta.</li>";
echo "</ul>";

echo "<h2>Ejemplo</h2>";
echo "<pre>for (\$i = 1; \$i <= 5; \$i++) {\n    echo \$i . \"&lt;br&gt;\";\n}</pre>";

echo "<h2>Como leerlo</h2>";
echo "<p>Empieza en 1. Mientras \$i sea menor o igual a 5, ejecuta el codigo. Al final de cada vuelta, suma 1 a \$i.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Se utiliza para contar, generar tablas, repetir elementos, recorrer posiciones de arrays o ejecutar tareas varias veces.</p>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Crear un bucle infinito porque la condicion nunca se vuelve falsa.</li>";
echo "<li>Usar mal el incremento.</li>";
echo "<li>Confundir &lt; con &lt;= y repetir una vez menos o una vez mas.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Muestra los numeros del 1 al 10.</li>";
echo "<li>Muestra la tabla de multiplicar del 5.</li>";
echo "<li>Muestra los numeros pares del 2 al 20.</li>";
echo "<li>Suma los numeros del 1 al 100 usando for.</li>";
echo "</ol>";

