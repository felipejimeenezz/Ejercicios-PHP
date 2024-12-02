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
                <li class="nav-item"><a href="../../ejercicios/arrays/index.php" class="nav-link text-success">Arrays</a></li>
                <li class="nav-item"><a href="#" class="nav-link active bg-success text-white">Estructuras de Control</a></li>
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
                        <p class="card-text">Determinar si una persona es mayor o menor de edad con if/else en php. En caso de ser
verdadero vamos a imprimir la cadena “Es mayor de edad”, en caso contrario imprimimos la cadena
“Es menor de edad”.</p>
                        <a href="1/ejercicio1.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 1 -->

            <!-- Ejercicio 2 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 2</h5>
                        <p class="card-text">Dada la calificación de un alumno en la materia de matemáticas, determina si aprobó o
                        reprobó la materia considerando que la calificación aprobatoria debe ser igual o mayor a 6.0</p>
                        <a href="2/ejercicio2.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 2 -->

            <!-- Ejercicio 3 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 3</h5>
                        <p class="card-text">De dos números dados saber si son iguales, mayor o menor</p>
                        <a href="3/ejercicio3.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 3 -->

             <!-- Ejercicio 4 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 4</h5>
                        <p class="card-text">Bucles anidados, muestra los números de piso y de puerta de un bloque. Por ejemplo:
                        Piso 1 – puerta 1 Piso 1 –puerta 2 … así hasta llegar al Piso 5 – puerta 4.</p>
                        <a href="4/ejercicio4.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 4 -->

            <!-- Ejercicio 5 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 5</h5>
                        <p class="card-text">Usando la función que genera un numero aleatorio realiza un script que controle si una
persona está en edad de trabajar o no, recuerda que la edad laboral es de los 16 a los 65 años.
Mostrará por pantalla “El usuario está en edad laboral” o por el contrario “El usuario NO está en
edad laboral”.</p>
                        <a href="5/ejercicio5.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 5 -->

            <!-- Ejercicio 6 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 6</h5>
                        <p class="card-text">Realiza un script que controle si el usuario es mayor de edad. (usa la función que genera
un numero aleatorio para conseguir la edad).
</p>
                        <a href="6/ejercicio6.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 6 -->

            <!-- Ejercicio 7 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 7</h5>
                        <p class="card-text">Controla la edad cada 10 años, desde los 0 hasta los 100. Muestra un mensaje indicando
                        en qué intervalo está el usuario. Utiliza la estructura de control correcta.</p>
                        <a href="7/ejercicio7.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 7 -->

            <!-- Ejercicio 8 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 8</h5>
                        <p class="card-text">Realizar un script que convierta pesetas en euros desde 50 hasta 1000 ambos incluidos,
saltando de 50 en 50. Usar un bucle FOR para realizar el ejercicio, el Ɵpo de cambio será 166,386.
</p>
                        <a href="8/ejercicio8.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 8 -->

            <!-- Ejercicio 9 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 9</h5>
                        <p class="card-text">Repetir el ejercicio anterior usando WHILE.</p>
                        <a href="9/ejercicio9.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 9 -->

            <!-- Ejercicio 10 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 10</h5>
                        <p class="card-text">Muestra por pantalla todos los números pares comprendidos entre el 1 y 1000, en filas
                        de 5 números, 10 números, 15 números...</p>
                        <a href="10/ejercicio10.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 10 -->
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>