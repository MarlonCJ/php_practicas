<?php

echo "<h1>10 - Switch</h1>";

echo "<h2>Que es</h2>";
echo "<p>Switch es una estructura condicional que compara una misma variable contra varios valores posibles. Es una alternativa ordenada cuando tienes muchos casos concretos.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Se utiliza cuando una variable puede tener varios valores definidos, como un dia de la semana, un rol de usuario, un estado de pedido o una opcion de menu.</p>";

echo "<h2>Partes de switch</h2>";
echo "<ul>";
echo "<li><strong>switch:</strong> recibe la variable que se va a evaluar.</li>";
echo "<li><strong>case:</strong> representa cada valor posible.</li>";
echo "<li><strong>break:</strong> detiene el switch cuando encuentra el caso correcto.</li>";
echo "<li><strong>default:</strong> se ejecuta si ningun caso coincide.</li>";
echo "</ul>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$dia = \"lunes\";\n\nswitch (\$dia) {\n    case \"lunes\":\n        echo \"Inicio de semana\";\n        break;\n    case \"viernes\":\n        echo \"Fin de semana cerca\";\n        break;\n    default:\n        echo \"Dia normal\";\n}</pre>";

echo "<h2>Error comun</h2>";
echo "<p>Olvidar break puede hacer que PHP siga ejecutando los siguientes casos aunque ya haya encontrado una coincidencia.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea una variable dia y muestra un mensaje segun el dia.</li>";
echo "<li>Crea una variable rol y muestra permisos segun el rol.</li>";
echo "<li>Agrega un caso default.</li>";
echo "<li>Crea un switch para estados de pedido: pendiente, enviado, entregado.</li>";
echo "</ol>";

