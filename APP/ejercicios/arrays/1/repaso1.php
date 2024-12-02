<?php

//Variables
$frase = "Conozco a alguien llamado ";
$array = array("Juan", "Maria", "Pedro", "Ana", "Luis");

?>

<!DOCTYPE html>
<html>
    <body>
    <? /*Bucle para iterar*/ foreach ($array as $nombres) {
        echo "Conozco a alguien llamado $nombres\n";
    } ?>
    
    </body>
</html>