<?php

//Usuario y contraseñas almacenados en variables
$user = "felipejimenez";
$password = "1234";

//Se crean cookies
setcookie("user", $user);
setcookie("password", $password);

if(!isset ($_COOKIE["user"])) {
  $_COOKIE["user"] = $user;
}

if(!isset ($_COOKIE["password"])) {
  $_COOKIE["password"] = $password;
}

//Si coincide el post con la cookie se le redirigira al ejericicio, si no dirá que no es correcto
if (isset($_POST["user"]) && isset($_POST["password"])) {
  if ($_POST["user"] == $_COOKIE["user"] && $_POST["password"] == $_COOKIE["password"]) {
      header("Location: index.php");
      exit;
  } else {
      echo "El usuario o la contraseña no son correctas";
  }
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

  <h3>LOGIN</h3>
  <h5>Datos:</h5>
  <h6>Usuario: felipejimenez</h6>
  <h6>Contraseña: 1234</h6>
  <form action ="login.php" method = "post">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example1">Nombre de usuario</label>
    <input type="text" name="user" id="user" class="form-control" />
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form2Example2">Contraseña</label>
    <input type="password" name="password" id="password" class="form-control" />
  </div>

  <button  type="submit" >Login</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>