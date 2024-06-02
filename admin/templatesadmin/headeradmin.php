<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="../assets/librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i&amp;display=swap">
    <link rel="stylesheet" href="../assets/librerias/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="../assets/librerias/css/vanilla-zoom.min.css">
    <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="indexadmin.php"><img src="../assets/img/logo.svg"></a>
<button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="indexadmin.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="catalogoadmin.php">Catálogo</a></li>
                    <li class="nav-item"> <a  class="btn btn-outline-primary" role="button" aria-disabled="false"><?php 
                     $partes=explode("@", $_SESSION['correo']);
                     echo ($partes[0]);?></a></li>
                    <li  class="nav-item"><a  href="../publico/index.php" class="btn btn-primary"><span class="fa-solid fa-right-from-bracket"></span> Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>