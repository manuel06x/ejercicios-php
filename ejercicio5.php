<?php
$parcial1 = 45;
$parcial2 = 35;
$parcial3 = 40;
$examen_final = 50;
$trabajo_final = 40;
$promedio_parciales = ($parcial1 + $parcial2 + $parcial3) / 3;
$nota_final = ($promedio_parciales * 0.55) + ($examen_final * 0.30) + ($trabajo_final * 0.15);
echo "La nota final es: " . $nota_final;
