<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formularios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Escribe un programa que sume, reste, muliplique y divida dos números introducidos por teclado.
    </h1>
    <form action = "post.php" method = "post">
        <div class="mb-3">
            <label for="tp1" class="form-label">Suma, resta, multiplicacion y division</label>
            <input name = "num1" type="number" class="form-control" id="num1" placeholder="Introduce el numero 1">
            <input name = "num2" type="number" class="form-control" id="num2" placeholder="Introduce el numero 2">
            <select name="operaciones" id="operaciones">
              <option value="suma">Sumar</option>
              <option value="resta">Restar</option>
              <option value="multiplicacion">Multiplicar</option>
              <option value="division">Dividir</option>
      </select>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>