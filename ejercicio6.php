<?php
$hombres = 15;
$mujeres = 25;

$total = $hombres + $mujeres;

$porcentaje_hombres = ($hombres / $total) * 100;
$porcentaje_mujeres = ($mujeres / $total) * 100;

echo "El porcentaje de hombres es: " . $porcentaje_hombres . "%<br>";
echo "El porcentaje de mujeres es: " . $porcentaje_mujeres . "%";