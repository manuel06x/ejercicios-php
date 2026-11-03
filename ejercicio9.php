<?php
echo "Ejercicio 9<br>";

$horas_trabajadas = 40;
$precio_por_hora = 15000;
$descuento = 0.20;
$salario_bruto = $horas_trabajadas * $precio_por_hora;
$salario_neto = $salario_bruto - ($salario_bruto * $descuento);
echo "El salario neto es: " . $salario_neto;


