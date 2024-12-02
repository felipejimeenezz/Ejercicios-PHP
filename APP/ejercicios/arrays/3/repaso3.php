<?php

$tamanoArray = 10;

$array = [];

//Bucle que añade al array los 10 primeros pares
for ($i = 0; $i <= $tamanoArray; $i++) {
    $array[] = $i * 2;
}

foreach ($array as $imprimir) {
    echo "$imprimir\n";
}

?>