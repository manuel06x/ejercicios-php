<?php
echo "Ejercicio 11<br>";
$nombre = "Juan";
$horas_normales = 160;
$pago_por_hora = 5000;
$horas_extras = 20;
$numero_por_hijos = 2;

$sueldo_base = $horas_normales * $pago_por_hora;
echo "Sueldo base de $nombre es: $sueldo_base<br>";

$valor_hora_extra = $pago_por_hora * 1.25;

$valor_total_horas_extras = $horas_extras * $valor_hora_extra;
echo "Valor total de horas extras: $valor_total_horas_extras<br>";


$asignacion_academica = 25000;


$asignacion_por_hijos = $numero_por_hijos * 17300;
echo "Asignacion academica: $asignacion_academica<br>";

$prima_hogar = 18000;

$paro_forzoso = 0.05 * $sueldo_base;
echo "Paro forzoso: $paro_forzoso<br>";

$politica_habitacional = 0.02 * $sueldo_base;
echo "Politica habitacional: $politica_habitacional<br>";

$caja_ahorros = 0.07 * $sueldo_base;
echo "Caja de ahorros: $caja_ahorros<br>";

$total_deducciones = $paro_forzoso + $politica_habitacional + $caja_ahorros;
echo "Total deducciones: $total_deducciones<br>";

$total_asignaciones = $sueldo_base + $valor_total_horas_extras + $asignacion_academica + $asignacion_por_hijos + $prima_hogar;
echo "Total asignaciones: $total_asignaciones<br>";

$sueldo_neto = $total_asignaciones - $total_deducciones;
echo "Sueldo neto de $nombre es: $sueldo_neto<br>";
