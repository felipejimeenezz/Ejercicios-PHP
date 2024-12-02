<?php

session_start();

// Inicializa en la sesión
if (!isset($_SESSION["numeros"])) {
  $_SESSION["numeros"] = [];
}

if (!isset($_SESSION["contador"])) {
  $_SESSION["contador"] = 0;
}

$sumaImpares = 0;
$impares = 0;
$mediaImpares = 0;
$parMax;
$arrayPar = [];

//Si se ha posteado un numero y es mayor que 0 se añade al array de numeros
if(isset($_POST["numero"]) && ($_POST["numero"] > 0)){

    $_SESSION["numeros"][] = $_POST["numero"];
  //Se acumulan los numeros introducidos
  $_SESSION["contador"]++;

} else {
  //Si el contador de numeros es mayor que 0 se comprobara el array en busca de los pares y los impares para realizar lo que nos pide el enunciado
  if ($_SESSION["contador"] > 0) {
    foreach ($_SESSION["numeros"] as $numero) {
      if ($numero % 2 == 0) {
        $arrayPar[] = $numero;
      } else {
        $sumaImpares = $sumaImpares + $numero;
        $impares++;
      }
  
    }
  
    $mediaImpares = $sumaImpares / $impares;
  
    $parMax = max($arrayPar);
  
    echo "Se han introducido " .$_SESSION["contador"]. "números\n";
  
    echo "La media entre los números impares introducidos es: ". $mediaImpares. "\n";
  
    echo "El número mas grande par es el " ,$parMax;
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

  <h3>Actividad 2</h3>

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