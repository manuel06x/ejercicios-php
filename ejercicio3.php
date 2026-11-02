<?php
$sueldo_base = 1500000;
$venta1 = 500000;
$venta2 = 300000;
$venta3 = 200000;
$comision1 = $venta1 * 0.10;
$comision2 = $venta2 * 0.10;    
$comision3 = $venta3 * 0.10;
$comision_total = $comision1 + $comision2 + $comision3;
$sueldo_total = $sueldo_base + $comision_total;
echo "La comisión total es: " . $comision_total . "<br>";
echo "El sueldo total es: " . $sueldo_total;
