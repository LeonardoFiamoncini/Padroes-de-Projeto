<?php

require_once './Apartamento.php';
require_once './Casa.php';
require_once './Terreno.php';

echo "\n\n\n__Apartamento__\n";

$apartamento = new Apartamento('A', 200, 6);
//$apartamento->getValorComportamento();
 var_dump($apartamento);
//
//echo "\n\n\n__Casa__\n";
//
//$casa = new Casa('B', 500, 9);
//$casa->getValorComportamento();
//// var_dump($casa);
//
//echo "\n\n\n__Terreno__\n";
//
//$terreno = new Terreno('C', 1000);
//$terreno->getValorComportamento();
// var_dump($terreno);
