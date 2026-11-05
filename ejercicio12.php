<?php
echo "ejercicio"<"br>";

$matematicas1 = 4.0;
$matematicas2 = 4.0;
$matematicas3 = 4.5;
$matematicas4 = 4.5;

$fisica1 = 3.5;
$fisica2 = 3.5;
$fisica3 = 4.5;

$quimica1 = 4.5;
$quimica2 = 4.5;
$quimica3 = 4.5;
$quimica4 = 5.0;

$matexam = 0.90;
$fisixam = 0.80;
$quimixam = 0.85;




$promediof = ($fisica1 + $fisica2)/2;
$nota_final_fis = ($promediof * 0.20);

$examfinal_fis = ($fisica3 * 0.80 );

$nota_defitiva_fisi = ($nota_final_fis + $examfinal_fis);

echo "la nota final de fisica es: " . $nota_defitiva_fisi . "<br>";

// nota matematicas 

$promedio = ($matematicas1 + $matematicas2 + $matematicas3)/3;

$nota_final_mate = ($promedio * 0.10);

$examfinal_mate = ($matematicas4 * 0.90);

$nota_definitiva_mate = ($nota_final_mate + $examfinal_mate);
echo "la nota final de matematicas es: " . number_format($nota_definitiva_mate,1)  . "<br>";


// nota quimica 
$promedio_quimi = ($quimica1 + $quimica2 + $quimica3)/3;
$nota_final_qui = ($promedio_quimi * 0.15);
$examfinal_quimi = ($quimica4 * 0.85);

$nota_definitiva_qui = ($nota_final_qui + $examfinal_quimi);

echo "la nota final de quimica es: " . number_format( $nota_definitiva_qui,1) . "<br>";

echo "el promedio de las 3 materias es: " . number_format(($nota_definitiva_mate + $nota_definitiva_qui + $nota_defitiva_fisi) / 3, 1) . "<br>";


?>