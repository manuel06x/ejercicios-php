<?php
echo "Ejercicio 10<br>";

$chelines = 200;
$equivalencia_chelines = 100;
$pesetas_chelines = 956871;

$dracmas = 500;
$equivalencia_dracmas = 100;
$pesetas_dracmas = 88607;

$franco_frances = 20110;

$pesetas = 100000;
$dolar = 122499;
$lira_italiana = 9289;

$valor_un_chelin = $pesetas_chelines / $equivalencia_chelines;
$resultado_pesetas = $chelines * $valor_un_chelin;
echo $chelines . " chelines equivalen a " . $resultado_pesetas . " pesetas<br>";

$valor_un_dracma = $pesetas_dracmas / $equivalencia_dracmas;
$resultado_pesetas_dracmas = $dracmas * $valor_un_dracma;
echo $dracmas . " dracmas equivalen a " . $resultado_pesetas_dracmas . " pesetas<br>";


$valor_un_franco_frances = $resultado_pesetas_dracmas / $franco_frances;
echo $dracmas . " dracmas equivalen a " . $valor_un_franco_frances . " francos franceses<br>";


$valor_un_dolar = $pesetas / $dolar;
echo $pesetas . " pesetas equivalen a " . $valor_un_dolar . " dólares<br>";


$equivalencia_lira = 100;
$valor_un_lira_italiana = $lira_italiana / $equivalencia_lira;
$resultado_liras = $pesetas / $valor_un_lira_italiana;

echo $pesetas . " pesetas equivalen a " . $resultado_liras . " liras italianas<br>";

