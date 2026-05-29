<?php

echo "<h1>16 - Bucle do while</h1>";

echo "<h2>Que es</h2>";
echo "<p>El bucle do while es parecido a while, pero con una diferencia importante: primero ejecuta el bloque de codigo y despues revisa la condicion.</p>";

echo "<h2>Por que se utiliza</h2>";
echo "<p>Se utiliza cuando necesitas que una accion ocurra al menos una vez, incluso si la condicion resulta falsa despues.</p>";

echo "<h2>Ejemplo</h2>";
echo "<pre>\$contador = 1;\n\ndo {\n    echo \$contador . \"&lt;br&gt;\";\n    \$contador++;\n} while (\$contador <= 5);</pre>";

echo "<h2>Diferencia con while</h2>";
echo "<p>while puede no ejecutarse nunca si la condicion empieza siendo falsa. do while se ejecuta al menos una vez porque la condicion se revisa al final.</p>";

echo "<h2>Uso real</h2>";
echo "<p>Puede usarse en menus, intentos de validacion o procesos donde quieres ejecutar algo una primera vez y luego decidir si se repite.</p>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Muestra los numeros del 1 al 5 usando do while.</li>";
echo "<li>Compara el comportamiento con while usando una condicion falsa desde el inicio.</li>";
echo "<li>Crea una cuenta regresiva usando do while.</li>";
echo "</ol>";

