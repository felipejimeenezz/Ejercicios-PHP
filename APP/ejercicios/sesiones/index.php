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
                <li class="nav-item"><a href="../../ejercicios/estructuras/index.php" class="nav-link text-success">Estructuras de Control</a></li>
                <li class="nav-item"><a href="../../ejercicios/funciones/index.php" class="nav-link text-success">Funciones</a></li>
                <li class="nav-item"><a href="../../ejercicios/formularios/index.php" class="nav-link text-success">Formularios</a></li>
                <li class="nav-item"><a href="#" class="nav-link active bg-success text-white">Sesiones y Cookies</a></li>
            </ul>
        </header>
        <!-- Fin Cabecera -->


        <div class="row row-cols-1 row-cols-md-2 g-4">

            <!-- Ejercicio 1 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 1</h5>
                        <p class="card-text">Escribe un programa que calcule la media de un conjunto de números posiƟvos introducidos por teclado. A priori, el
programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos
cuando meta un número negativo. Utiliza sesiones.
</p>
                        <a href="1/index.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 1 -->

            <!-- Ejercicio 2 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 2</h5>
                        <p class="card-text">Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y nos diga cuantos
números se han introducido, la media de los impares y el mayor de los pares. El número negativo sólo se utiliza para
indicar el final de la introducción de datos, pero no se incluye en el cómputo. Utiliza sesiones.
</p>
                        <a href="2/index.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 2 -->

            <!-- Ejercicio 3 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 3</h5>
                        <p class="card-text">Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras su suma no supere
el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado, el contador de los números
introducidos y la media. Utiliza sesiones.</p>
                        <a href="3/index.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 3 -->

             <!-- Ejercicio 4 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 4</h5>
                        <p class="card-text">Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los programas de la
relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión con un nombre de usuario y
contraseña correctos, almacenados previamente en una cookie.
</p>
                        <a href="4/login.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 4 -->

            <!-- Ejercicio 5 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 5</h5>
                        <p class="card-text">Escribe un programa que guarde en una cookie el color de fondo (propiedad background-color) de una página. Esta
página debe tener únicamente algo de texto y un formulario para cambiar el color.

</p>
                        <a href="5/index.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 5 -->

            <!-- Ejercicio 6 -->
            <div class="col">
                <div class="card text-bg-success">
                    <div class="card-body">
                        <h5 class="card-title">Ejercicio 6</h5>
                        <p class="card-text">Realiza un programa que escoja al azar 5 palabras en inglés de un mini-diccionario. El programa pedirá que el usuario
teclee la traducción al español de cada una de las palabras y comprobará si son correctas. Al final, el programa deberá
mostrar cuántas respuestas son válidas y cuántas erróneas.
La aplicación debe tener una opción para introducir los pares de palabras (inglés - español) que se deben guardar en
cookies; de esta forma, si de vez en cuando se dan de alta nuevas palabras, la aplicación puede llegar a contar con un
número considerable de entradas en el mini-diccionario.

</p>
                        <a href="6/index.php" class="btn btn-light">Acceder</a>
                    </div>
                </div>
            </div>
            <!-- Fin Ejercicio 6 -->
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>