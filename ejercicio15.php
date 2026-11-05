<?php
echo "Ejercicio 15\n";

$lectura_anterior = (int) readline("Ingrese la lectura anterior del medidor: ");
$lectura_actual = (int) readline("Ingrese la lectura actual del medidor: ");
$costo_por_kilovatio = (float) readline("Ingrese el costo por kilovatio: ");

$consumo = $lectura_actual - $lectura_anterior;

$costo_total = $consumo * $costo_por_kilovatio;

echo "El consumo total es: $consumo kilovatios\n";
echo "El costo total es: $costo_total\n";


?>