
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
                        <br>
                        <li class="mx-auto d-block">
                            <a href="/admin" class="nav-link py-3 px-2" title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Dashboard">
                                <?php if($auth): ?>
                                    <div align="center">
                                        <img class="icono" src="img/area.svg" alt="" >
                                    </div>    
                                    
                                    <!--<span class="ps-2 align-items-center">INICIO</span>-->
                                <?php endif; ?>
                            </a>
                        </li>
                    </ul>
                    <br>
                    <br>
                    <div class="dropdown float-end mx-auto">
                        <a href="#" class="d-flex align-items-center justify-content-center p-4 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                            <div align="center">
                                <img class="icono" src="img/perfil.svg" alt="" >
                                <!--<span class="ps-2 align-items-center">INICIO</span>-->
                            </div>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                            <?php if($auth): ?>
                                <li><a class="dropdown-item"  href="cerrar-sesion.php">Cerrar Sesion</a></li>
                                <?php else: ?>
                                    <li><a class="dropdown-item"  href="login.php">Iniciar Sesion</a></li>
                                <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
            
            <?php  require 'includes/templates/admin/index.php'; ?>
        </div>
    </div>

    

    