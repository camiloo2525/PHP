<?php

// and = y si las dos unicamente son verdaderas

$valor_1 = 1;
$valor_2 = 1;

var_dump($valor_1 && $valor_2) . "\n";

// or = o si una de las dos es verdadera ||

$valor_1 = 1;
$valor_2 = 1;

var_dump($valor_1 || $valor_2) . "\n";

// not = no para cambiar el valor ya sea verdadero o falso

$valor_1 = 1;
$valor_2 = 0;

var_dump(!$valor_1);
var_dump(!$valor_2);


$valor_3 = true;
$valor_4 = false;

$resultado = $valor_3 && $valor_4;
var_dump($resultado);