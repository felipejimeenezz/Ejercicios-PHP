<?php
//Variables
$nombre = 'Felipe';
$apellido1 = 'Jiménez';
$apellido2 = 'Luque';
$edad = 19;
$Genero = ' Hombre ';
$info = 'I love videogames';
$salario = 42.21;
$beca = 2000;
$menu = array('Bebida' =>'CocaCola','Comida' => 'Croquetas', 'Postre' =>'Tarta de queso');
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nombre: <?php echo $nombre, $apellido1, $apellido2;?></h1> 
    <h1>Edad: <?=  $edad;?></h1>
    <h1>Genero: <?= $Genero;?></h1>
    <h2>Datos sobre mi: <?= $info;?></h2>
    <p>Salario: <?= $salario+$beca?>€</p>
    <h1>Menu:<?=  ($menu['Comida']);?></h1>
    <h1>Menu:<?=  print_r($menu)?></h1>
</body>
</html>