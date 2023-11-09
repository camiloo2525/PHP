<?php

//funcion readline pedir ingresar datos
/*
$segundos = readline(" Ingresa el tiempo en segundos : ");

$horas = (int) ( $segundos / 3600 ) ;
$segundos = (int) ( $segundos % 3600 ) ;
$minutos = (int) ( $segundos / 60) ;
$segundos = (int) ( $segundos % 60) ;

echo " Son $horas horas, $minutos minutos y $segundos segundos \n";

*/
?>

<?php
/*
$horas = readline(" ingresa el numero de horas: ");
$minutos = readline(" ingresa el numero de minutos: ");
$segundos = readline(" ingresa el numero de segundos: ");

$tiempo = ($horas * 60 *60) + ($minutos * 60) + $segundos;

echo "Este tiempo equivale a $tiempo segundos " . "\n" ;
*/
?>

<?php

$hora = readline (" ingresar el numero de horas ");
$minutos = readline ( " ingresar el numero de minutos ");
$segundo = readline (" ingresar el numero de segundos ");

$calculo = ($horas *3600) + ($minutos*60) + $segundos;
echo "Los segundos calculados fueron :" . $calculo . "\n" ;

?>