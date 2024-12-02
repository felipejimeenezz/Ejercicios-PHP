<?php

//Funcion sumar
function sumar($a, $b)
{
    $suma = $a + $b;

    return $suma;
}

//Llamamos a la función
$resultado = sumar(1, 2);

echo "La suma es: " . $resultado . "\n";
?>