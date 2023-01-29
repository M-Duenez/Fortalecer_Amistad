<?php
    include '../includes/app.php';
    include '../includes/templates/header.php';
    require '../includes/funciones.php';
    $auth = estaAutenticado();
    
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
        <h1>Lista de Usuarios</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre Completo</th>
                    <th scope="col">Clave de Usuario</th>
                </tr>
            </thead>
            <tbody>
                <?php while( $usuarios = mysqli_fetch_assoc($resultado)): ?>
                    <tr>
                        <td><?php echo $usuarios['fullname']; ?></td>
                        <td><?php echo $usuarios['username']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        

    </main>    
</body>