<?php

echo "<h1>02 - Sintaxis basica</h1>";

echo "<h2>Que es la sintaxis</h2>";
echo "<p>La sintaxis es el conjunto de reglas que debes seguir para escribir codigo PHP correctamente. Igual que en un idioma existen reglas para formar frases, en programacion existen reglas para que el lenguaje entienda tus instrucciones.</p>";

echo "<h2>Elementos basicos</h2>";
echo "<ul>";
echo "<li><strong>Etiqueta de apertura:</strong> el codigo PHP empieza con &lt;?php.</li>";
echo "<li><strong>Instrucciones:</strong> son ordenes que PHP ejecuta, por ejemplo echo.</li>";
echo "<li><strong>Punto y coma:</strong> la mayoria de instrucciones terminan con ;.</li>";
echo "<li><strong>Comentarios:</strong> sirven para escribir notas que PHP no ejecuta.</li>";
echo "<li><strong>echo:</strong> permite mostrar texto o HTML en pantalla.</li>";
echo "</ul>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Una buena sintaxis permite que PHP ejecute el programa sin errores. Si olvidas un punto y coma, escribes mal una variable o no cierras unas comillas, PHP puede detenerse y mostrar un error.</p>";

echo "<h2>Comentarios</h2>";
echo "<p>Los comentarios son utiles para explicar partes del codigo, dejar recordatorios o separar ejercicios. No deben usarse para explicar lo obvio, sino para aclarar la intencion.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>&lt;?php\n\n// Esto muestra un mensaje\necho \"Hola desde PHP&lt;br&gt;\";\n\n/*\nComentario de varias lineas\n*/</pre>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Olvidar el punto y coma al final de una instruccion.</li>";
echo "<li>Abrir comillas y no cerrarlas.</li>";
echo "<li>Escribir codigo PHP fuera de la etiqueta &lt;?php.</li>";
echo "<li>Abrir el archivo directamente en el navegador en vez de usar localhost.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Imprime tres frases diferentes usando echo.</li>";
echo "<li>Agrega un comentario de una linea explicando que hace tu codigo.</li>";
echo "<li>Agrega un comentario de varias lineas.</li>";
echo "<li>Prueba quitar un punto y coma, observa el error y luego corrigelo.</li>";
echo "</ol>";

echo "<h2>Solución de ejercicios</h2>";

echo "<h3>Ejercicio 1</h3>";
echo "<ul>";
echo "<li>php</li>";
echo "<li>html</li>";
echo "<li>css</li>";
echo "</ul>";

echo "<h3>Ejercicio 2</h3>";

//muestra un mensaje de bienvenida

echo "Un saludo para todos bienvenidos a pulsodigitalweb";
echo "<br>";

echo "<h3>Ejercicio 3</h3>";

/*
    Importante no se debe utilizar:
        - Mayusculas
        - Números
        - Simbolos
*/

echo "estoy aprendiendo a usar php desde cero";
echo "<br>";

echo "<h3>Ejercicio 4</h3>";

//Probando el uso el ;

// echo "La casa es roja"
echo "La casa es roja";