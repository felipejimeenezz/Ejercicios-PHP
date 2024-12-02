<?php

//Bucle for que convierte de pesetas a euros del 50 al 1000 saltando 50 en 50
for ($i = 50; $i <= 1000; $i = $i + 50) {
    $euros = $i / 166.386;
    echo "$i pesetas son $euros euros";
}

?>