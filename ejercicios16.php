<?php
echo "Ejercicio 16\n";

$largo_lamina = 4;
$ancho_lamina = 1.5;

$consumo_pieza = 0.5; 

$area_lamina = $largo_lamina * $ancho_lamina;
echo "El área de la lámina es: $area_lamina metros cuadrados\n";

$cantidad_piezas = ($area_lamina / $consumo_pieza);
echo "La cantidad de piezas que se pueden fabricar es: $cantidad_piezas\n";

$desperdicio = $area_lamina - ($cantidad_piezas * $consumo_pieza);
echo "El desperdicio de material es: $desperdicio metros cuadrados\n";










?>