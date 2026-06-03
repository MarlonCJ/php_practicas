<?php

echo "<h1>05 - Constantes</h1>";

echo "<h2>Que son</h2>";
echo "<p>Una constante es un nombre que guarda un valor fijo. A diferencia de una variable, una constante no esta pensada para cambiar durante la ejecucion del programa.</p>";

echo "<h2>Diferencia con variables</h2>";
echo "<p>Una variable empieza con \$ y puede cambiar. Una constante no usa \$ y debe representar un valor estable.</p>";
echo "<pre>\$precio = 10000;\n\$precio = 12000;\n\ndefine(\"IVA\", 0.19);</pre>";

echo "<h2>Por que se utilizan</h2>";
echo "<p>Las constantes se utilizan para evitar repetir valores importantes y para proteger datos que no deberian cambiar por accidente. Por ejemplo: nombre de la aplicacion, porcentaje de IVA, moneda, rutas o configuraciones.</p>";

echo "<h2>Formas de crear constantes</h2>";
echo "<p>En PHP puedes usar define o const. Para empezar, usaremos define porque es facil de entender.</p>";
echo "<pre>define(\"NOMBRE_APP\", \"Practicas PHP\");\necho NOMBRE_APP;</pre>";

echo "<h2>Reglas importantes</h2>";
echo "<ul>";
echo "<li>Las constantes no llevan el simbolo \$ al usarlas.</li>";
echo "<li>Por convencion se escriben en mayusculas.</li>";
echo "<li>No debes redefinir una constante con el mismo nombre.</li>";
echo "<li>Se usan para valores fijos, no para datos que cambian.</li>";
echo "</ul>";

echo "<h2>Ejercicios</h2>";
echo "<ol>";
echo "<li>Crea una constante NOMBRE_APP.</li>";
echo "<li>Crea una constante IVA con valor 0.19.</li>";
echo "<li>Crea una variable precio y calcula el total con IVA.</li>";
echo "<li>Crea una constante MONEDA y muestra el total con la moneda.</li>";
echo "</ol>";

echo "<h2>Solución de Ejercicios</h2>";

define("NOMBRE_APP","pulsodigitalweb");
echo NOMBRE_APP . "<br>";

define("IVA", 0.19);
echo IVA . "<br>";

$precio = 300000;
$totalIVA = $precio * IVA ;
$totalPago = $precio + $totalIVA;
echo $totalIVA . "<br>";
echo "Total a pagar: $totalPago <br>";  

define("MONEDA", "COP");

echo MONEDA . " $totalPago <br>";