<?php
echo "Ejercicio 14";

$a = (int) readline("Valor de a: ");
$b = (int) readline("Valor de b: ");
$c = (int) readline("Valor de c: ");
$d = (int) readline("Valor de d: ");
$e = (int) readline("Valor de e: ");
$f = (int) readline("Valor de f: ");

$x = ($c * $e - $b * $f) / ($a * $e - $b * $d);
$y = ($a * $f - $c * $d) / ($a * $e - $b * $d);

echo "El valor de x es: $x"; "<br>";
echo "El valor de y es: $y"; "<br>";






?>