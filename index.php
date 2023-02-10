<?php
include './includes/app.php';
require './includes/funciones.php';
// include './includes/templates/login.php';
//include 'includes/templates/header.php';
//include 'body.php';
if (!isset($_SESSION)) {
    session_start();
}
$auth = $_SESSION['login'] ?? false;


$resultado = $_GET['resultado'] ?? null;


?>


<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

    <div class="container-fluid ">
        <div class="row flex-nowrap">
            <!--?php include 'includes/templates/header.php'; ?>-->
            <div class="col-sm-auto bg-light sticky-top ">
    <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top ">
        <h1 class="pt-2  d-none d-sm-inline txt3"><b>MENU</b></h1>
        <ul class=" pt-2 nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
            <li class="nav-item">
                <a href="/?resultado=1" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                    <div align="center">
                        <img class="icono" src="img/house.svg" alt="">
                        <!--<span class="ps-2 align-items-center">INICIO</span>-->
                        <?php $eleccion = 'inicio'; ?>
                    </div>
                </a>
            </li>
            <br>
            <li class="mx-auto d-block">
                <a href="/?resultado=2" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                        <div align="center">
                            <img class="icono" src="img/area.svg" alt="">
                        </div>
                        <!--<span class="ps-2 align-items-center">INICIO</span>-->
                </a>
            </li>
        </ul>
        <br>
        <br>
        <div class="dropdown float-end mx-auto">
            <a href="#" class="d-flex align-items-center justify-content-center p-4 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <div align="center">
                    <img class="icono" src="img/perfil.svg" alt="">
                    <!--<span class="ps-2 align-items-center">INICIO</span>-->
                </div>
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <?php if ($auth) : ?>
                    <li><a class="dropdown-item" href="cerrar-sesion.php">Cerrar Sesion</a></li>
                <?php else : ?>
                    <li><a class="dropdown-item" href="login.php">Iniciar Sesion</a></li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</div>      <?php if(intval($resultado) === 1): ?>
                <?php include 'includes/templates/admin/index.php'; ?>
            <?php elseif(intval($resultado) === 2): ?>
                <?php include 'includes/templates/admin/areas.php'; ?>
        </div>
            <?php endif; ?>
        </div>
    </div>


    <footer class="text-center pt-5" align="button">
        <p>Author: Hege Refsnes</p>
        <p><a href="mailto:hege@example.com">hege@example.com</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>