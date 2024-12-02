<?php

$numPisos = 5;
$numPuertas = 4;

//Bucle dentro de otro bucle para iterar correctamente todos los pisos y puertas
for ($piso = 1; $piso <= $numPisos; $piso++) {
    for ($puerta = 1; $puerta <= $numPuertas; $puerta++) {
        echo "Piso $piso - puerta $puerta\n";
    }
}

?>