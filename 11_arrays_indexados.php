<?php

echo "<h1>11 - Arrays indexados</h1>";

echo "<h2>Que son</h2>";
echo "<p>Un array indexado es una variable que guarda varios valores en forma de lista. Cada valor tiene una posicion numerica llamada indice.</p>";

echo "<h2>Como funcionan los indices</h2>";
echo "<p>En PHP, las posiciones de un array empiezan en 0. Eso significa que el primer elemento esta en la posicion 0, el segundo en la posicion 1 y asi sucesivamente.</p>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan cuando necesitas manejar varios datos relacionados sin crear una variable para cada uno. Por ejemplo, una lista de frutas, nombres, notas, productos o ciudades.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$frutas = [\"Manzana\", \"Pera\", \"Mango\"];\n\necho \$frutas[0]; // Manzana\necho \$frutas[1]; // Pera</pre>";

echo "<h2>Agregar elementos</h2>";
echo "<p>Puedes agregar un nuevo elemento usando corchetes vacios. PHP lo coloca al final del array.</p>";
echo "<pre>\$frutas[] = \"Uva\";</pre>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Intentar acceder a una posicion que no existe.</li>";
echo "<li>Olvidar que el primer indice es 0.</li>";
echo "<li>Crear muchas variables separadas cuando un array seria mas ordenado.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea un array de frutas.</li>";
echo "<li>Muestra la primera fruta.</li>";
echo "<li>Muestra la tercera fruta.</li>";
echo "<li>Agrega una nueva fruta al array.</li>";
echo "<li>Crea un array de cinco numeros y muestra el segundo y el quinto.</li>";
echo "</ol>";

