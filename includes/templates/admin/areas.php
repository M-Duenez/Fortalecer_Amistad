<?php
    $db = conectaDB();
    $query = "SELECT * FROM users RIGHT JOIN areas ON users.id = areas.id";
    $resultado = mysqli_query($db, $query);
?>
<div class="container body">
    <div class="row m-3">
        <div class="d-grid d-md-flex justify-content-md-end">
            <a href="/areas/addArea" class="btn btn-primary" type="button">AGREGAR AREA</a>
        </div>
    </div>
    <div class="row">
        <?php while ($areas = mysqli_fetch_assoc($resultado)) : ?>
            <div class="col-md-4 mt-3">
                <div class="card text-center">
                    <div class="card-body">
                        <?php if ($areas['area'] === 'DESARROLLO'):  ?>
                            <img  class="imagen" src="img/logo_desarrollo.png" alt="">
                        <?php elseif ($areas['area']  === 'REDES') : ?>
                            <img  class="imagen" src="img/logo_redes.png" alt="">
                        <?php else :?>
                            <img  class="imagen" src="img/logo_soporten.png" alt="">
                        <?php endif; ?>
                        
                        <div class="card-title text-uppercase">
                            <?php echo $areas['area'] ?>
                        </div>
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $areas['id']; ?>" href="#">ver listado</a>
                        <a href="/areas/delete/{{id}}" class="btn btn-outline-danger btn-block m-2">eliminar</a>
                    </div>
                    <div class="modal fade" id="staticBackdrop<?php echo $areas['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                                <div>
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel"> Area: <?php echo $areas['area']; ?></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <tbody>
                                            <thead>
                                                <td>Nombre</td>
                                            </thead>
                                            <tr>
                                                <td><?php echo $areas['fullname']; ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>