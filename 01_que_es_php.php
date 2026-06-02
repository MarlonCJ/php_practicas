<?php

echo "<h1>01 - Que es PHP</h1>";

echo "<h2>Que es PHP</h2>";
echo "<p>PHP es un lenguaje de programacion que se usa principalmente para crear paginas web dinamicas. Una pagina dinamica es una pagina que puede cambiar segun los datos, el usuario, una condicion, una base de datos o un formulario.</p>";
echo "<p>HTML sirve para estructurar contenido, CSS sirve para darle estilo y JavaScript suele ejecutarse en el navegador. PHP, en cambio, normalmente se ejecuta en el servidor antes de que la pagina llegue al navegador.</p>";

echo "<h2>Como funciona</h2>";
echo "<p>Cuando escribes una direccion como http://localhost/php_practicas/01_que_es_php.php, el navegador le pide esa pagina al servidor Apache de XAMPP. Apache detecta que el archivo tiene codigo PHP, lo manda a ejecutar y luego devuelve al navegador el resultado final en HTML.</p>";
echo "<p>Esto significa que el usuario no ve directamente el codigo PHP. El usuario ve el resultado que PHP genero.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>PHP se utiliza para crear sistemas web que necesitan logica. Por ejemplo: registrar usuarios, iniciar sesion, guardar productos, listar tareas, consultar una base de datos, calcular totales o mostrar informacion diferente para cada usuario.</p>";

echo "<h2>Ejemplo mental</h2>";
echo "<p>Imagina una tienda virtual. HTML muestra la pagina, CSS la hace bonita, pero PHP puede consultar los productos en una base de datos, calcular el total del carrito y guardar la compra.</p>";

echo "<h2>Reglas importantes</h2>";
echo "<ul>";
echo "<li>Los archivos PHP normalmente terminan en .php.</li>";
echo "<li>El codigo PHP se escribe dentro de las etiquetas &lt;?php y ?&gt;.</li>";
echo "<li>Para ver PHP funcionando debes abrirlo desde localhost, no directamente como archivo.</li>";
echo "<li>PHP puede generar HTML usando echo.</li>";
echo "</ul>";

echo "<h2>Ejemplo</h2>";
echo "<pre>&lt;?php\n\necho \"Hola desde PHP\";</pre>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Escribe con echo una frase explicando que estas aprendiendo PHP.</li>";
echo "<li>Muestra tu nombre usando echo.</li>";
echo "<li>Crea una pagina simple que diga: Mi primera practica con PHP.</li>";
echo "</ol>";

echo "<h2>Solución de ejercicios</h2>";

echo "Estoy aprendiendo el lenguaje de programación PHP";
echo "<br>";
echo "Mi nombres es: Marlon";
echo "<br>";
echo "Mi primera página en PHP";