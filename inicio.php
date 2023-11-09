<?php 
//<?php forma de iniciar programa php

//echo forma de imprimir mensajes php
echo " hola a todos me llamo camilo " ;
echo "\n";
/*
para comentarios largos
*/

//$ declarar variables en php
$nombre = " Camilo " ;
$apellido = " Salazar " ;
$numero1 = 1;
$numero2= 5;
$my_string = "dolar";

// imprimir variables
echo $my_string . "\n";

//$ concatenar con puntos .
echo " Mi nombre y apellido son:  " . $nombre . " " . $apellido . "\n" ;

//$ concatenar sin puntos
echo " MI NOMBRE ES $nombre $apellido \n " ; 

echo " el resultado de 5x5 es: " . ( 5 * 5 ) . " \n ";

//lista
$personas = [
" camilo " => 23,
" paola " => 24,
" jader " => 46,
" paula " => 44
];

// ver contenido de la lista
var_dump($personas) . "\n";


// ver contenido de la lista de una forma mas limpia
print_r($personas);


//<?php forma de cerrar programa php
?>
