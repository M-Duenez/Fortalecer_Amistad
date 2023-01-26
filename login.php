<?php
include 'includes/app.php';
    $db = conectaDB();


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $username = $_POST['username'];
      $password = $_POST['password'];

      $query = "SELECT * FROM usuarios WHERE username = '{$username}'";
      $resultado = mysqli_query($db, $query);

      if ($resultado->num_rows) {
        $username = mysqli_fetch_assoc($resultado);

        $auth = password_verify($password, $username['password']);
        if ($auth) {
          session_start();

          $_SESSION['username'] = $username['username'];
          $_SESSION['login'] = true;
          header('Location: /');
        }
      }
    }


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div id="card" class="col-md-6 col-sm-10 col-xs-12 shadow-lg p-5 mt-5 bg-body rounded">
            <form method="post" action="">
              <div class="mb-3 row text-center">
                  <h1 id="txt1">Inicio de Sesión</h1>
              </div>
              <div class="mb-3 mt-5 row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input  name="username" type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
                  </div>
                </div>
                <div class="mb-3 row">
                  <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input name="password" type="password" class="form-control" id="inputPassword">
                  </div>
                </div>
                <div class="mb-3 mt-5 ms-3 me-3 row text-center">
                  <button id="btn-login" type="submit" class="btn btn-lg btn-danger"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                      <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                      <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                    </svg>
                    INGRESAR
                  </button>
                </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>