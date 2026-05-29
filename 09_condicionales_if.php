<?php

echo "<h1>09 - Condicionales if</h1>";

echo "<h2>Que son</h2>";
echo "<p>Los condicionales permiten que un programa tome decisiones. Con if, PHP ejecuta un bloque de codigo solo si una condicion es verdadera.</p>";

echo "<h2>Partes de un condicional</h2>";
echo "<ul>";
echo "<li><strong>if:</strong> evalua la primera condicion.</li>";
echo "<li><strong>elseif:</strong> evalua otra condicion si la anterior no se cumplio.</li>";
echo "<li><strong>else:</strong> se ejecuta si ninguna condicion anterior se cumplio.</li>";
echo "</ul>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan para controlar el comportamiento del programa: permitir o negar acceso, mostrar mensajes, validar formularios, calcular estados o clasificar datos.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$edad = 17;\n\nif (\$edad >= 18) {\n    echo \"Mayor de edad\";\n} else {\n    echo \"Menor de edad\";\n}</pre>";

echo "<h2>Ejemplo con elseif</h2>";
echo "<pre>\$numero = 0;\n\nif (\$numero > 0) {\n    echo \"Positivo\";\n} elseif (\$numero < 0) {\n    echo \"Negativo\";\n} else {\n    echo \"Cero\";\n}</pre>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Usar = en vez de == para comparar.</li>";
echo "<li>Olvidar las llaves.</li>";
echo "<li>Poner condiciones en un orden incorrecto.</li>";
echo "<li>No contemplar el caso else.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Valida si una persona es mayor de edad.</li>";
echo "<li>Valida si una nota aprueba o reprueba.</li>";
echo "<li>Valida si un numero es positivo, negativo o cero.</li>";
echo "<li>Valida un login simple con usuario y clave.</li>";
echo "<li>Clasifica una nota: baja, media o alta.</li>";
echo "</ol>";

