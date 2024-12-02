<?php

$tamanoArray = 10;
$contadorPositivos = 0;
$contadorNegativos = 0;
$contadorCeros = 0;

$array = [];

//Bucle que genera numeros aleatorios
for ($i = 0; $i < $tamanoArray; $i++) {
    $array[] = mt_rand(-100, 100);
}

echo "Array harcodeado: ";
foreach ($array as $numeros) {
    echo $numeros," ";
}

//Para contar los numeros
foreach ($array as $positivos) {
    if ($positivos > 0) {
        $contadorPositivos++;
    }

    if ($positivos < 0) {
        $contadorNegativos++;
    }

    if ($positivos = 0) {
        $contadorCeros++;
    }
}

echo "\nCantidad de positivos: $contadorPositivos";
echo "\nCantidad de negativos: $contadorNegativos";
echo "\nCantidad de ceros: $contadorCeros";

?>