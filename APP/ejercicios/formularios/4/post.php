<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <? 

//Variables con los posts
    $num1 = $_POST['num1']; 
    $num2 = $_POST['num2'];
    $operacion = $_POST['operaciones'];


    //Switch dependiendo de la operacion que se quiera realizar
    switch ($operacion) {
      case "suma":
        echo "Suma: ", $num1 + $num2;
        break;
      case "resta":
        echo "Resta: ", $num1 - $num2;
        break;
      case "multiplicacion":
        echo "Multiplicacion: ", $num1 * $num2;
        break;
      case "division":
        echo "Division: ", $num1 / $num2;
        break;
    }
    
    ?>
  </body>
</html> 