<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Ejercicios PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Cabecera -->
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../../images/logo-fp.jpg" alt="FP Pro" height="28" />
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="../../index.php" class="nav-link text-success" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="../../ejercicios/variables/index.php" class="nav-link text-success">Variables</a></li>
                <li class="nav-item"><a href="#" class="nav-link active bg-success text-white">Arrays</a></li>
                <li class="nav-item"><a href="../../ejercicios/estructuras/index.php" class="nav-link text-success">Estructuras de Control</a></li>
                <li class="nav-item"><a href="../../ejercicios/funciones/index.php" class="nav-link text-success">Funciones</a></li>
                <li class="nav-item"><a href="../../ejercicios/formularios/index.php" class="nav-link text-success">Formularios</a></li>
                <li class="nav-item"><a href="../../ejercicios/sesiones/index.php" class="nav-link text-success">Sesiones y Cookies</a></li>
            </ul>
        </header>
        <!-- Fin Cabecera -->


        <div class="row row-cols-1 row-cols-md-2 g-4">

            <!-- Ejercicio 1 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 1</h5>
                        <p class="card-text">Crea un array con cinco nombres de persona e imprímelo posteriormente en pantalla mostrando el texto “Conozco a alguien llamado”.</p>
                        <a href="1/repaso1.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 1 -->

            <!-- Ejercicio 2 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 2</h5>
                        <p class="card-text">Leer 10 enteros harcodeados en un array y mostrar la media de los valores negativos y la de los
                        positivos. </p>
                        <a href="2/repaso2.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 2 -->

            <!-- Ejercicio 3 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 3</h5>
                        <p class="card-text">Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una fila. </p>
                        <a href="3/repaso3.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 3 -->
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>