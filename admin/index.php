<?php
    include './includes/app.php';
    include '../includes/templates/header.php';
    require '../includes/funciones.php';
    $auth = estaAutenticado();

    if(!$auth) {
        header('Location: /');
    }

    $db = conectaDB();
    //QUery
    $query = "SELECT * FROM users";
    
?>

<main>
    <h1>Lista de Usuarios</h1>

    <table>
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</main>