<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $auth = $_SESSION['login'] ?? false;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="/build/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid ">
        <div class="row flex-nowrap">
            <div class="col-sm-auto bg-light sticky-top ">
                <div class="d-flex flex-sm-column flex-row flex-nowrap bg-light align-items-center sticky-top ">
                <h1 class="pt-2  d-none d-sm-inline txt3">MENU</h1>
                    <ul class=" pt-2 nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap mb-auto mx-auto text-center justify-content-between w-100 px-3 align-items-center">
                        <li class="nav-item">
                            <a href="/" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Home">
                                <div align="center">
                                    <img class="icono" src="img/house.svg" alt="" >
                                    <!--<span class="ps-2 align-items-center">INICIO</span>-->
                                </div>
                            </a>
                        </li>
                        <li class="mx-auto d-block">
                            <a href="/admin" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <div align="center">
                                    <img class="icono" src="img/area.svg" alt="" >
                                    <!--<span class="ps-2 align-items-center">INICIO</span>-->
                                </div>
                            </a>
                        </li>
                    </ul>
                    <br>
                    <div class="dropdown float-end mx-auto">
                        <a href="#" class="d-flex align-items-center justify-content-center p-4 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <div align="center">
                                <img class="icono" src="img/perfil.svg" alt="" >
                                <!--<span class="ps-2 align-items-center">INICIO</span>-->
                            </div>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <li><a class="dropdown-item"  href="cerrar-sesion.php">Cerrar Sesion</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>