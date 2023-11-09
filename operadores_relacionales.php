<?php

$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

// == igual

var_dump($a == $b);
var_dump($a == $b2);

// === identico

var_dump($a === $b2);
var_dump($a === $b);

// != diferente

var_dump($a != $b);
var_dump($a != $c);


// != diferente igual compara tipos de variables

var_dump($a !== $b2);


// < menor que

var_dump($a < $c);

var_dump($c < $a);


// <= menor o igual que

var_dump($a <= $c);

var_dump($c <= $a);


// > mayor  que 

var_dump($a > $c);

var_dump($c > $a);


// > mayor igual que 

var_dump($a >= $c);

var_dump($c >= $a);

// <=> operador de nave espacial

/*echo 2 <=> 1 . "\n" ; // 1
echo -50 <=> 1 . "\n" ; // -1
echo 1 <=> 1 . "\n" ; // 0
*/

// ?? fusion de null nos dice la primera variable definida

$edad_camilo = 23;

echo $edad_paola ?? $edad_camilo . "\n";

// operador de asignacion

$edad_mama = ($edad_papa = 46) + 44;

echo " la edad de mi papa es: $edad_papa \n" ;
echo " la edad de mi mama es: $edad_mama \n";

// operador de incremento

$contador = 1;
$contador ++;
echo $contador . "\n";

//$contador +=1;

/*
+=
-=
*=
/=

*/
//$contador = $contador+1;

$nombre = " wayne " ;
$nombre .= " " . " rooney " ;
echo $nombre . "\n";

$cont = 1;
$result = ++$cont;
echo $result;

?>