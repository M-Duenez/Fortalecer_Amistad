<?php
// Valicion por URL
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if (!$id) {
    header('Location: /admin');
}

include '../includes/app.php';

$db = conectaDB();

$alerta = '<script>alert("HOAL");</script>';

$query = "SELECT * FROM reporte_mobiliario RIGHT JOIN users ON 
users.id = reporte_mobiliario.id JOIN tipo_mobiliario ON tipo_mobiliario.id = 
reporte_mobiliario.id JOIN estado ON estado.id = tipo_mobiliario.id
WHERE users.id = '{$id}'";
$resultado = mysqli_query($db, $query);


if (!$resultado->num_rows) {
    echo $alerta;
    header('Location: /admin');
    
}


$usuario_info = mysqli_fetch_assoc($resultado);

?>

<body>
    <main>
        <div class="container">
            <h1>Informacion del usuario: <?php echo $usuario_info['fullname']; ?></h1>
            <form action="">
                <input type="text" value="<?php echo $usuario_info['modelo']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['color']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['no_serie']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['observaciones']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['estado']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['descripcion']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['descripcion']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['descripcion']; ?>" readonly>
                <input type="text" value="<?php echo $usuario_info['descripcion']; ?>" readonly>
                
            </form>
        </div>
    </main>    
</body>