<?php

$edad = mt_rand(0, 100);

//Condicional
echo "Edad: $edad\n";
if ($edad < 16 || $edad > 65) {
    echo "El usuario NO esta en edad laboral";
} else {
    echo "El usuario está en edad laboral";
}

?>