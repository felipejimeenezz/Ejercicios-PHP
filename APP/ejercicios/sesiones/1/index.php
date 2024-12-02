<?php

session_start();

// Inicializa en la sesión si no existe el contador y la suma
if (!isset($_SESSION["suma"])) {
  $_SESSION["suma"] = 0;
}

if (!isset($_SESSION["contador"])) {
  $_SESSION["contador"] = 0;
}

$media = 0;

if(isset($_POST["numero"]) && ($_POST["numero"] > 0)){
  //Se van sumando los numeros introducidos
  $_SESSION["suma"] = $_SESSION["suma"] + $_POST["numero"];

  //Se va sumando el numero de numeros introducidos
  $_SESSION["contador"]++;

  echo "Número añadido: " , $_POST["numero"];

} else if (isset($_POST["numero"]) && ($_POST["numero"] < 0)){
  if ($_SESSION["contador"] > 0) {

  $media = $_SESSION["suma"] / $_SESSION["contador"];

  echo "La media de los números introducidos es: ", $media;
  }
  
  session_destroy();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <h3>Actividad 1</h3>

    <form action = "index.php" method = "post">
        <div class="mb-3">
            <label for="numero" class="form-label">Introduce numeros positivos. Si quiere terminar de introducir numeros, introduzca al final un numero negativo</label>
            <input name = "numero" type="number" class="form-control" id="numero" placeholder="Introduce un numero">
        <input type="submit" value="OK">
        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>