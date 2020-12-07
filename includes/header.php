<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP CRUD MYSQL</title>
    <link rel="stylesheet" href="estilos.css">

    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body style="">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <!-- <a class="navbar-brand" href="index_2.php">CRUD TAREAS</a>
        <a class="navbar-brand" href="estudiante.php">CRUD ESTUDIANTES</a>
        <a class="navbar-brand" href="index.php">CERRAR SESION</a> -->
            <ul class="nav justify-content-center">

                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="pagina_inicio.php">Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="index_2.php">Tareas</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link navbar-brand" href="estudiante.php">Estudiantes</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link navbar-brand" href="cursos_obtener.php">Cursos</a>
                </li>
                <!-- <ul class="nav justify-content-end">
              <li class="nav-item">
                <a class="nav-link navbar-brand" href="index.php">Cerrar sesion</a>
              </li>
            <ul> -->

            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                <div class="dropdown">
                    <a class="dropdown-toggle nav-link navbar-brand"  id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hugo Valmos
                    </a>
                    <div class="dropdown-menu " aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Mis Datos</a>
                        <a class="dropdown-item" href="cursos_mostrar.php">Mis cursos</a>
                        <a class="dropdown-item" href="index.php?cerrar_sesion=1">Cerrar sesion</a>
                    </div>
                </div>
                </li>
            <ul>
        </div>
    </nav>