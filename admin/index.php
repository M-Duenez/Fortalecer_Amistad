<?php
    include '../includes/app.php';
    include '../includes/templates/header.php';
    require '../includes/funciones.php';
    //$auth = estaAutenticado();
    
    if(!$auth) {
        header('Location: /');
    }
    $db = conectaDB();
    $query = "SELECT * FROM users WHERE username <> 'admin'";
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
<body>
    <main>
        <div class="container">
            <h1>Lista de Usuarios</h1>
            
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">Nombre Completo</th>
                                    
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th scope="col">Nombre Completo</th>
                                    
                                </tr>
                            </tfoot>
                            <tbody>
                            <?php while( $usuarios = mysqli_fetch_assoc($resultado)): ?>
                                <tr>
                                    <td><?php echo $usuarios['fullname']; ?></td>
                                    <td>
                                        <a  class="btn btn-outline-primary">EDITAR</a>
                                    </td>
                                    <td>
                                        <a  class="btn btn-outline-danger">ELIMINAR</a>
                                    </td>
                                    <td>
                                        <a href="/admin/user_info.php?id=<?php echo $usuarios['id'] ?>" class="btn btn-outline-success">Ver Información</a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>                                         
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>    
</body>