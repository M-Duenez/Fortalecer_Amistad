<?php
    $db = conectaDB();
    $query = "SELECT * FROM areas";
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
                        <a href="#" class="btn btn-outline-primary btn-block m-2">ver listado</a>
                        <a href="/areas/delete/{{id}}" class="btn btn-outline-danger btn-block m-2">eliminar</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>