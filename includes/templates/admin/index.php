<?php
//include '../includes/app.php';

//require '../includes/funciones.php';
//$auth = estaAutenticado();
//include '../includes/templates/header.php';
if (!$auth) {
    header('Location: /');
}
$db = conectaDB();

// '
// $query = "SELECT * FROM users join  WHERE username <> 'admin'";
$query = "SELECT users.id, users.fullname, areas.area, tipo_mobiliario.nombre as 'tipos',
reporte_mobiliario.marca as 'marca', reporte_mobiliario.modelo as 'modelo',
reporte_mobiliario.color as 'color' FROM users left join areas on areas.id = users.fk_area
left join reporte_mobiliario ON users.id = reporte_mobiliario.id left join tipo_mobiliario on 
tipo_mobiliario.id = reporte_mobiliario.id 
left join estado on estado.id = tipo_mobiliario.id WHERE username <> 'admin'";
$resultado = mysqli_query($db, $query);
// $resultado = $_GET['resultado'] ?? null;



// if ($_SERVER['REQUEST_METHIOD'] === 'POST') {
//     $id = $_POST['id'];
//     $id = filter_var($id, FILTER_VALIDATE_INT);

//     if ($id) {
//         $query
//     }
// }

?>
<!-- <link rel="stylesheet" href="./css/style.css"> -->


<div class="container pt-5">
    <h1>Lista de Usuarios</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-3">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" >
                    <thead>
                        <tr>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Area</th>
                            <th scope="col"></th>


                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th scope="col">Nombre Completo</th>
                            <th scope="col">Area</th>
                            <th scope="col"></th>


                        </tr>
                    </tfoot>
                    <tbody>
                        <?php while ($usuarios = mysqli_fetch_assoc($resultado)) : ?>
                            <tr>
                                <td><?php echo $usuarios['fullname']; ?></td>
                                <td><?php echo $usuarios['area']; ?></td>
                                <td>
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?php echo $usuarios['id']; ?>" href="#">Ver Información</a>
                                </td>
                                    <td>
                                                
                                        <div class="modal fade" id="staticBackdrop<?php echo $usuarios['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Informacion de <?php echo $usuarios['fullname']; ?></h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <thead>
                                                                    <td>Area</td>
                                                                    <td>Nombre</td>
                                                                    <td>Tipo Mobiliario</td>
                                                                    <td>Marca</td>
                                                                    <td>Modelo</td>
                                                                    <td>Color</td>
                                                                </thead>
                                                                <tr>
                                                                    <td><?php echo $usuarios['area']; ?></td>
                                                                    <td><?php echo $usuarios['fullname']; ?></td>
                                                                    <td><?php echo $usuarios['tipos']; ?></td>
                                                                    <td><?php echo $usuarios['marca']; ?></td>
                                                                    <td><?php echo $usuarios['modelo']; ?></td>
                                                                    <td><?php echo $usuarios['color']; ?></td>
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
                                    </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>