<?php
echo "Ejercicio 13";
$n1 = (int) readline("Cantidad de billetes de 50000: ");
$n2 = (int) readline("Cantidad de billetes de 20000: ");
$n3 = (int) readline("Cantidad de billetes de 10000: ");
$n4 = (int) readline("Cantidad de billetes de 5000: ");
$n5 = (int) readline("Cantidad de billetes de 2000: ");
$n6 = (int) readline("Cantidad de billetes de 1000: ");
$n7 = (int) readline("Cantidad de billetes de 500: ");
$n8 = (int) readline("Cantidad de billetes de 100: ");

$total = ($n1 * 50000) + ($n2 * 20000) + ($n3 * 10000) + ($n4 * 5000) + ($n5 * 2000) + ($n6 * 1000) + ($n7 * 500) + ($n8 * 100);

echo "El total de dinero es: $total";




?>