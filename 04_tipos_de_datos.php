<?php

echo "<h1>04 - Tipos de datos</h1>";

echo "<h2>Que son</h2>";
echo "<p>Los tipos de datos indican que clase de informacion estamos manejando. PHP puede trabajar con texto, numeros, valores verdadero/falso, listas y valores vacios.</p>";

echo "<h2>Tipos principales</h2>";
echo "<ul>";
echo "<li><strong>String:</strong> texto. Ejemplo: \"Marlon\".</li>";
echo "<li><strong>Integer:</strong> numero entero. Ejemplo: 33.</li>";
echo "<li><strong>Float:</strong> numero decimal. Ejemplo: 4.5.</li>";
echo "<li><strong>Boolean:</strong> true o false.</li>";
echo "<li><strong>Array:</strong> lista de varios valores.</li>";
echo "<li><strong>Null:</strong> representa ausencia de valor.</li>";
echo "</ul>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Cada tipo se usa de forma diferente. Los numeros se pueden sumar, el texto se puede concatenar, los booleanos sirven para decisiones y los arrays permiten guardar varios datos juntos.</p>";

echo "<h2>PHP es flexible</h2>";
echo "<p>PHP no obliga a declarar el tipo de una variable desde el inicio. Por ejemplo, puedes crear \$edad = 33 y PHP entiende que es un numero entero. Aun asi, como programador debes saber que tipo de dato estas usando para evitar errores.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$nombre = \"Ana\";      // string\n\$edad = 20;           // integer\n\$promedio = 4.6;      // float\n\$activo = true;       // boolean\n\$frutas = [\"Pera\"];  // array\n\$valor = null;        // null</pre>";

echo "<h2>Herramienta util: var_dump</h2>";
echo "<p>var_dump muestra el tipo de dato y su valor. Es muy util para practicar y depurar.</p>";
echo "<pre>var_dump(\$edad);</pre>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea una variable de tipo texto.</li>";
echo "<li>Crea una variable de tipo numero entero.</li>";
echo "<li>Crea una variable de tipo numero decimal.</li>";
echo "<li>Crea una variable booleana.</li>";
echo "<li>Muestra cada variable con echo o var_dump.</li>";
echo "</ol>";

