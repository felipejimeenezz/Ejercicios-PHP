<?php
//Este ejercicio lo he decidido hacer con sesiones ya que se me ha complicado el tema de añadir en cookies las palabras y no se me ocurria otra forma
//de hacerlo que no sea con sesiones, ya que en la cookies no se pueden añadir arrays multidimensionales que es como habia planteado el ejercicio
//sin embargo con sesiones si se puede asi que lo he adaptado a las sesiones en vez de cookies. Se que el ejercicio pide especificamente cookies pero
//prefiero hacerlo de otra forma y entendiendolo (con sesiones) a simplemente hacerlo con cookies no entendiendolo y solo copiando sin saber  


session_start();

//Escoger las primeras 5 palabras despues de reordenar todo el array con shuffle (he puesto palabras predeterminadas en el array)

$arrayPalabras = [["wolf", "lobo"], ["ball", "pelota"], ["hello", "hola"], ["bye", "adios"], ["chair", "silla"], ["table", "mesa"], ["wall", "pared"]];
if(!isset($_SESSION["palabras"])) {
  shuffle($arrayPalabras);
  $_SESSION["palabras"] = $arrayPalabras;
}

if(!isset($_POST["palabra1"])) {
  $_POST["palabra1"] = "";
}

if(!isset($_POST["palabra2"])) {
  $_POST["palabra2"] = "";
}

if(!isset($_POST["palabra3"])) {
  $_POST["palabra3"] = "";
}

if(!isset($_POST["palabra4"])) {
  $_POST["palabra4"] = "";
}

if(!isset($_POST["palabra5"])) {
  $_POST["palabra5"] = "";
}

if(!isset($_POST["español"])) {
  $_POST["español"] = "";
}

if(!isset($_POST["ingles"])) {
  $_POST["ingles"] = "";
}
$palabraEspañol = $_POST["español"];
$palabraIngles = $_POST["ingles"];

//Si se envia el post y los campos no están vacios se añade una nueva palabra a la sesion
if(isset($_POST["enviar"])) {
  if (!empty($palabraEspañol) && !empty($palabraIngles)) {
    $nuevaPalabra = [$palabraIngles, $palabraEspañol];
    $_SESSION["palabras"][] = $nuevaPalabra;
  }
}

//Boton de generador de palabras del juego que lo unico que hace es reordenar aleatoriamente el array y poner las 5 primeras palabras. Al reordenarse con este boton se incluirian las palabras nuevas que se añadan
if(isset($_POST["generador"])) {
  shuffle($_SESSION["palabras"]);
}

//Se asocia cada palabra a una variable
$palabra1 = $_SESSION["palabras"][0][0];
$palabra2 = $_SESSION["palabras"][1][0];
$palabra3 = $_SESSION["palabras"][2][0];
$palabra4 = $_SESSION["palabras"][3][0];
$palabra5 = $_SESSION["palabras"][4][0]; 

//Si se reinicia el juego se destruye la sesion, perdiendo las palabras añadidas (si se quiere tener esas palabras siempre no se reinicia solo se generan palabras)
if(isset($_POST["reiniciar"])) {
  session_destroy();
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
  </head>
  <body>

  <h3>Actividad 6: Traduce estas palabras en ingles al español</h3>

    <form action = "index.php" method = "post">
        <div class="mb-3">
            <label for="palabra1" class="form-label"> <?php echo $palabra1 ?> </label>
            <input name = "palabra1" type="text" class="form-control">
            <p> <?php
            //Condicionales para comprobar si son correctas las palabras o no
            if (isset($_POST["comprobar"])) {
              if(isset($_POST["palabra1"]) && $_POST["palabra1"] == $_SESSION["palabras"][0][1]) {
                echo "Correcto!";
              } else {
                echo "Incorrecto";
              }
            }
            ?> </p>

            <label for="palabra2" class="form-label"> <?php echo $palabra2 ?> </label>
            <input name = "palabra2" type="text" class="form-control">
            <p> <?php
            if (isset($_POST["comprobar"])) {
              if(isset($_POST["palabra2"]) && $_POST["palabra2"] == $_SESSION["palabras"][1][1]) {
                echo "Correcto!";
              } else if ($_POST["palabra2"] !== $_SESSION["palabras"][1][1]){
                echo "Incorrecto";
              }
            }
            ?> </p>

            <label for="palabra3" class="form-label"> <?php echo $palabra3 ?> </label>
            <input name = "palabra3" type="text" class="form-control">
            <p for="correcto" class="form-label"> <?php
            if (isset($_POST["comprobar"])) {
              if(isset($_POST["palabra3"]) && $_POST["palabra3"] == $_SESSION["palabras"][2][1]) {
                echo "Correcto!";
              } else {
                echo "Incorrecto";
              }
            }
            ?> </p>

            <label for="palabra4" class="form-label"> <?php echo $palabra4 ?> </label>
            <input name = "palabra4" type="text" class="form-control">
            <p for="correcto" class="form-label"> <?php
            if (isset($_POST["comprobar"])) {
              if(isset($_POST["palabra4"]) && $_POST["palabra4"] == $_SESSION["palabras"][3][1]) {
                echo "Correcto!";
              } else {
                echo "Incorrecto";
              }
            }
            ?> </p>

            <label for="palabra5" class="form-label"> <?php echo $palabra5 ?> </label>
            <input name = "palabra5" type="text" class="form-control">
            <p for="correcto" class="form-label"> <?php
            if (isset($_POST["comprobar"])) {
              if(isset($_POST["palabra5"]) && $_POST["palabra5"] == $_SESSION["palabras"][4][1]) {
                echo "Correcto!";
              } else {
                echo "Incorrecto";
              }
            }
            ?> </p>

        <input name="comprobar" type="submit" value="Comprobar">

        <input name="generador" type="submit" value="Generar palabras nuevas">

        <input name="reiniciar" type="submit" value="Reiniciar juego (se borraran las palabras añadidas)">
        
        <p>Introduce palabras que quieras añadir al diccionario. Debe reiniciar para aplicar los cambios</p>
        <input name = "español" type="text" class="form-control" placeholder="Palabra en español">
        <input name = "ingles" type="text" class="form-control" placeholder="Palabra en ingles">
        <input name="enviar" type="submit" value="Enviar">

        </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>