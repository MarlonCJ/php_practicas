<?php

echo "<h1>12 - Arrays asociativos</h1>";

echo "<h2>Que son</h2>";
echo "<p>Un array asociativo es un array donde cada valor se guarda con una clave de texto. En vez de acceder con posiciones como 0, 1 o 2, accedes con nombres como nombre, precio o stock.</p>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan cuando quieres representar datos con significado. Son muy utiles para modelar productos, usuarios, estudiantes, pedidos o cualquier entidad con varias propiedades.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$producto = [\n    \"nombre\" => \"Camisa\",\n    \"precio\" => 50000,\n    \"stock\" => 12\n];\n\necho \$producto[\"nombre\"];</pre>";

echo "<h2>Ventaja principal</h2>";
echo "<p>El codigo se vuelve mas claro. No tienes que recordar que la posicion 0 era el nombre y la posicion 1 era el precio. La clave te dice directamente que dato estas usando.</p>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Escribir mal el nombre de una clave.</li>";
echo "<li>Usar una clave que no existe.</li>";
echo "<li>Confundir arrays indexados con arrays asociativos.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea un array producto con nombre, precio y stock.</li>";
echo "<li>Muestra cada dato usando su clave.</li>";
echo "<li>Crea un array estudiante con nombre, edad y ciudad.</li>";
echo "<li>Crea un array usuario con correo, clave y estado.</li>";
echo "</ol>";

