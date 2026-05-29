<?php

echo "<h1>13 - Arrays multidimensionales</h1>";

echo "<h2>Que son</h2>";
echo "<p>Un array multidimensional es un array que contiene otros arrays. Es decir, una lista donde cada elemento puede tener varios datos internos.</p>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan para representar colecciones de registros. Por ejemplo, una lista de estudiantes donde cada estudiante tiene nombre, edad y nota; o una lista de productos donde cada producto tiene nombre, precio y stock.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$estudiantes = [\n    [\"nombre\" => \"Ana\", \"nota\" => 4.5],\n    [\"nombre\" => \"Luis\", \"nota\" => 3.8],\n    [\"nombre\" => \"Carlos\", \"nota\" => 2.9]\n];\n\necho \$estudiantes[0][\"nombre\"]; // Ana</pre>";

echo "<h2>Como leerlo</h2>";
echo "<p>\$estudiantes[0] significa el primer estudiante. Luego [\"nombre\"] significa el dato nombre de ese estudiante.</p>";

echo "<h2>Relacion con bases de datos</h2>";
echo "<p>Mas adelante, cuando consultes una tabla de MySQL, muchas veces recibiras una lista parecida: varios registros, y cada registro con columnas como id, nombre, correo o fecha.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea una lista de estudiantes, donde cada estudiante tenga nombre y nota.</li>";
echo "<li>Muestra el nombre del primer estudiante.</li>";
echo "<li>Muestra la nota del segundo estudiante.</li>";
echo "<li>Crea una lista de productos con nombre, precio y stock.</li>";
echo "<li>Muestra el precio del tercer producto.</li>";
echo "</ol>";

