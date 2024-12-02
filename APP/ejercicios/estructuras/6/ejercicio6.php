<?php

$edad = mt_rand(0, 100);

echo "Edad: $edad\n";

if ($edad >= 18) {
    echo "Es mayor de edad";
} else {
    echo "Es menor de edad";
}

?>