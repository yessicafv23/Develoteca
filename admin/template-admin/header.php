<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitio-web-php" ?>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Administrador del sitio web</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url?>/admin/inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url?>/admin/seccion/productos.php">Libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Cerrar sesión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $url; ?>">Ver sitio web</a>
            </li>
        </ul>
    </nav>
    <div class="container">
        <div class="row">