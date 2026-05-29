<?php

echo "<h1>08 - Operadores logicos</h1>";

echo "<h2>Que son</h2>";
echo "<p>Los operadores logicos permiten combinar varias condiciones para formar una condicion mas completa.</p>";

echo "<h2>Operadores principales</h2>";
echo "<ul>";
echo "<li><strong>&&</strong> significa Y. Todas las condiciones deben cumplirse.</li>";
echo "<li><strong>||</strong> significa O. Basta con que una condicion se cumpla.</li>";
echo "<li><strong>!</strong> significa NO. Invierte el resultado de una condicion.</li>";
echo "</ul>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Se utilizan cuando una decision depende de varios factores. Por ejemplo, para iniciar sesion necesitas que el usuario sea correcto y que la clave tambien sea correcta.</p>";

echo "<h2>Ejemplo con &&</h2>";
echo "<pre>\$usuario = \"admin\";\n\$clave = \"1234\";\n\nvar_dump(\$usuario == \"admin\" && \$clave == \"1234\");</pre>";

echo "<h2>Ejemplo con ||</h2>";
echo "<pre>\$edad = 16;\n\$tienePermiso = true;\n\nvar_dump(\$edad >= 18 || \$tienePermiso == true);</pre>";

echo "<h2>Error comun</h2>";
echo "<p>Un error comun es usar && cuando realmente necesitas ||, o al contrario. Antes de escribir la condicion, dilo en lenguaje natural: necesito que pase esto Y esto, o necesito que pase esto O esto.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Valida usuario y clave usando &&.</li>";
echo "<li>Valida si una persona puede entrar si es mayor de edad o tiene permiso usando ||.</li>";
echo "<li>Usa ! para negar una condicion.</li>";
echo "<li>Crea una condicion donde se necesiten tres requisitos al mismo tiempo.</li>";
echo "</ol>";

