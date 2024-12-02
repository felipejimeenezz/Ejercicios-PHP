<?php

session_start();

//Se crean las sesiones si no estan creadas
if(!isset($_SESSION["suma"])) {
  $_SESSION["suma"] = 0;
}

if(!isset($_SESSION["contador"])) {
  $_SESSION["contador"] = 0;
}

$media = 0;

//Si se ha posteado un numero se guarda el numero en una variables y si la suma acumulada mas el numero introducido es menor que 10000 se sigue acumulando, cuando llegue se mostrara lo que nos pide el ejercicio
if(isset($_POST["numero"])) {

    $numero = (int)$_POST["numero"];

    if ($_SESSION["suma"] + $numero < 10000) {

    $_SESSION["suma"] = $_SESSION["suma"] + $numero;
    $_SESSION["contador"]++;

    } else {
    
      if ($_SESSION["contador"] > 0) {
        $media = $_SESSION["suma"] / $_SESSION["contador"];
      }

    echo "Has introducido ".$_SESSION["contador"]." numeros";
  
    echo "La suma total es de ".$_SESSION["suma"];

    echo "La media es de ".$media;

    session_destroy();
    exit;
  }
}

echo "Suma actual: " . $_SESSION["suma"]
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <h3>Actividad 3</h3>

    <form action = "index.php" method = "post">
        <div class="mb-3">
            <label for="numero" class="form-label">Introduce numeros. Se irá sumando hasta llegar a 10000.</label>
            <input name = "numero" type="number" class="form-control" id="numero" placeholder="Introduce un numero">
        <input type="submit" value="OK">
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>