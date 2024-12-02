<?php

$edad;

echo "Edad: $edad\n";

if ($edad >= 0 && $edad <= 10) {
    echo "Se encuentra entre los 0 y los 10 años";
} elseif ($edad > 10 && $edad <= 20) {
    echo "Se encuentra entre los 10 y los 20 años";
} elseif ($edad > 20 && $edad <= 30) {
    echo "Se encuentra entre los 20 y los 30 años";
} elseif ($edad > 30 && $edad <= 40) {
    echo "Se encuentra entre los 30 y los 40 años";
} elseif ($edad > 40 && $edad <= 50) {
    echo "Se encuentra entre los 40 y los 50 años";
} elseif ($edad > 50 && $edad <= 60) {
    echo "Se encuentra entre los 50 y los 60 años";
} elseif ($edad > 60 && $edad <= 70) {
    echo "Se encuentra entre los 60 y los 70 años";
} elseif ($edad > 70 && $edad <= 80) {
    echo "Se encuentra entre los 70 y los 80 años";
} elseif ($edad > 80 && $edad <= 90) {
    echo "Se encuentra entre los 80 y los 90 años";
} elseif ($edad > 90 && $edad <= 100) {
    echo "Se encuentra entre los 90 y los 100 años";
} else {
    echo "La edad no es valida";
}

?>