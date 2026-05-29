<?php

echo "<h1>07 - Operadores de comparacion</h1>";

echo "<h2>Que son</h2>";
echo "<p>Los operadores de comparacion sirven para comparar dos valores. El resultado siempre es un booleano: true o false.</p>";

echo "<h2>Operadores principales</h2>";
echo "<ul>";
echo "<li><strong>==</strong> igual en valor.</li>";
echo "<li><strong>===</strong> igual en valor y tipo.</li>";
echo "<li><strong>!=</strong> diferente.</li>";
echo "<li><strong>&gt;</strong> mayor que.</li>";
echo "<li><strong>&lt;</strong> menor que.</li>";
echo "<li><strong>&gt;=</strong> mayor o igual que.</li>";
echo "<li><strong>&lt;=</strong> menor o igual que.</li>";
echo "</ul>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan para tomar decisiones. Por ejemplo: comprobar si una persona puede entrar, si una nota aprueba, si hay stock o si una clave coincide.</p>";

echo "<h2>Igualdad normal y estricta</h2>";
echo "<p>== compara solo el valor. === compara valor y tipo de dato. En proyectos reales se recomienda entender bien === porque evita resultados inesperados.</p>";
echo "<pre>var_dump(5 == \"5\");  // true\nvar_dump(5 === \"5\"); // false</pre>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$edad = 20;\nvar_dump(\$edad >= 18);</pre>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Compara si dos numeros son iguales.</li>";
echo "<li>Compara si una edad es mayor o igual a 18.</li>";
echo "<li>Compara si una nota es menor que 3.</li>";
echo "<li>Usa var_dump para ver el resultado de una comparacion.</li>";
echo "<li>Prueba la diferencia entre == y ===.</li>";
echo "</ol>";

