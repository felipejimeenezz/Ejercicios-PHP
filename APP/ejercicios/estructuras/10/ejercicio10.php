<?php

$numeros = 1;

$numFilas = 0;

//Bucle while que genera los numeros pares entre el 1 y el 1000
while ($numeros <= 1000) {
    if ($numeros % 2 == 0) {
        echo "$numeros ";
        $numFilas++;
    }

    $numeros++;
    
    //Si el numero de filas llega a 10 salta la linea y se reinicia el numero de filas a 0
    if ($numFilas == 10) {
        echo "\n";
        $numFilas = 0;
    }
}

?>