<?php

echo "<h1>18 - Funciones</h1>";

echo "<h2>Que son</h2>";
echo "<p>Una funcion es un bloque de codigo con nombre que realiza una tarea especifica. Puedes crearla una vez y usarla muchas veces.</p>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Las funciones ayudan a organizar el codigo, evitar repeticion y dividir un problema grande en tareas pequenas. Por ejemplo: saludar, sumar, calcular un total, validar una nota o limpiar un texto.</p>";

echo "<h2>Partes de una funcion</h2>";
echo "<ul>";
echo "<li><strong>function:</strong> palabra clave para crear la funcion.</li>";
echo "<li><strong>Nombre:</strong> identifica la funcion.</li>";
echo "<li><strong>Parametros:</strong> datos que recibe la funcion.</li>";
echo "<li><strong>return:</strong> valor que devuelve la funcion.</li>";
echo "</ul>";

echo "<h2>Ejemplo</h2>";
echo "<pre>function saludar(\$nombre) {\n    return \"Hola, \" . \$nombre;\n}\n\necho saludar(\"Marlon\");</pre>";

echo "<h2>Funcion con calculo</h2>";
echo "<pre>function sumar(\$numero1, \$numero2) {\n    return \$numero1 + \$numero2;\n}\n\necho sumar(5, 3);</pre>";

echo "<h2>Return vs echo</h2>";
echo "<p>echo muestra un resultado en pantalla. return devuelve un valor para que puedas guardarlo, combinarlo o mostrarlo despues. En funciones, muchas veces es mejor usar return.</p>";

echo "<h2>Errores comunes</h2>";
echo "<ul>";
echo "<li>Crear la funcion pero nunca llamarla.</li>";
echo "<li>Olvidar pasar los parametros necesarios.</li>";
echo "<li>Usar echo dentro de la funcion cuando necesitabas return.</li>";
echo "<li>Repetir nombres de funciones.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea una funcion saludar.</li>";
echo "<li>Crea una funcion sumar.</li>";
echo "<li>Crea una funcion calcularTotal.</li>";
echo "<li>Crea una funcion que reciba una nota y diga si aprobo.</li>";
echo "<li>Crea una funcion que reciba precio, cantidad y descuento.</li>";
echo "</ol>";

