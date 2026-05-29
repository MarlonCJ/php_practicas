<?php

echo "<h1>15 - Bucle while</h1>";

echo "<h2>Que es</h2>";
echo "<p>El bucle while repite un bloque de codigo mientras una condicion sea verdadera. Antes de cada vuelta, PHP revisa la condicion.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Se utiliza cuando no necesariamente sabes cuantas veces se va a repetir una accion, pero si sabes cual condicion debe mantenerse para continuar.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$contador = 1;\n\nwhile (\$contador <= 5) {\n    echo \$contador . \"&lt;br&gt;\";\n    \$contador++;\n}</pre>";

echo "<h2>Diferencia con for</h2>";
echo "<p>for suele usarse cuando el numero de repeticiones es claro. while se usa mucho cuando la repeticion depende de una condicion que puede cambiar durante el programa.</p>";

echo "<h2>Error comun</h2>";
echo "<p>El error mas comun es olvidar cambiar la variable de la condicion. Si \$contador nunca aumenta, el bucle nunca termina.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Muestra los numeros del 1 al 5 usando while.</li>";
echo "<li>Suma los numeros del 1 al 10 usando while.</li>";
echo "<li>Muestra una cuenta regresiva desde 10 hasta 1.</li>";
echo "</ol>";

