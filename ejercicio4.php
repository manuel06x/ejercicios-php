<?php
$compra = 250000;
$descuento = 0.15;
$valor_descuento = $compra * $descuento;
$valor_final = $compra - $valor_descuento;
echo "El valor del descuento es: " . $valor_descuento . "<br>";
echo "El valor final de la compra es: " . $valor_final;
