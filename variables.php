<?php

// variables

$numero_1 = 1;
$numero_2 = 4;
$numero_3 = null;
$numero_4 = 3;
$numero_5 = 25;
$numero_6 = 25.5;
$numero_7 = 1.5;

// ver el valor de las variables

var_dump($numero_1);
var_dump($numero_4);
var_dump($numero_5);
var_dump($numero_6);

// constantes siempre van en mayuscula

define("NUMERO_PI", 3.14);

// imprimir resultados
echo NUMERO_PI . "\n"  ;

echo $numero_1 + $numero_2 . "\n";

echo  $numero_1  +  $numero_4 . "\n" ;

echo $numero_1 = $numero_1 + $numero_5 . "\n";

echo " El resultado de la siguiente suma es :" . $numero_6 + $numero_7 . "\n" ;