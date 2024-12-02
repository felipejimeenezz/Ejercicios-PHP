<?php

if(!isset($_COOKIE["color"])) {
  $_COOKIE["color"] = "";
}

//Si se le da al boton se cambiará al color que se ha seleccionado y se actualizará la cookie
if (isset($_POST["accion"])) {
  $color = $_POST["accion"];
  setcookie("color", $color);
  $_COOKIE["color"] = $color;

  header("Location: index.php");
  exit;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      
      body {
        background-color: <?= /* Se cambia el fondo con la cookie actualizada*/$_COOKIE["color"] ?>;
      }
    </style>
    
  </head>
  <body>

  <h3>Actividad 5</h3>

    <form action = "index.php" method = "post">
      <p>Cambia de color el fondo</p>
      <select name="accion" id="accion">
        <option value="blue">Azul</option>
        <option value="green">Verde</option>
        <option value="red">Rojo</option>
        <option value="yellow">Amarillo</option>
        <option value="purple">Morado</option>
      </select>
      <input type="submit" value="OK">
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>