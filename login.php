<?php
include 'includes/app.php';
    $db = conectaDB();

    $errores = [];


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

      $username = $_POST['username'];
      $password = $_POST['password'];

      if (!$username) {
        $errores[] = "Usuario Obligatori";
      }

      if (!$password) {
        $errores[] = "Contraseña incorrecta";
      }

      if (empty($errores)) {
          $query = "SELECT * FROM users WHERE username = '{$username}'";
          $resultado = mysqli_query($db, $query);
         

    
    
          if ($resultado->num_rows) {
            $username = mysqli_fetch_assoc($resultado);
            
    
            $auth = password_verify($password, $username['password']);
            var_dump($auth);
            if ($auth) {
              session_start();
    
              $_SESSION['username'] = $username['username'];
              $_SESSION['login'] = true;
              
              header('Location: /admin');
            }
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
  <body >
    <!-- Section: Design Block -->
    <section class="background-radial-gradient overflow-hidden">

      <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
          <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <div align="center">
                <img class="imagen" src="img/logo.png" alt="">
            </div>
          </div>

          <div class="col-lg-6 mb-3 mb-lg-0 position-relative">
            <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
            <div id="radius-shape-3" class="position-absolute rounded-circle shadow-5-strong"></div>
            <div id="radius-shape-4" class="position-absolute shadow-5-strong"></div>

            <div class="card bg-glass">
              <div class="card-body px-4 py-5 px-md-5">
                <form method="post" action="">
                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <div class="col-md-12 mb-3 text-center">
                      <div class="form-outline">
                        <h1>Inicio de Sesion</h1>
                      </div>
                    </div>

                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input  name="username" type="text" class="form-control" id="staticEmail" placeholder="user" />
                    <label class="form-label" for="staticEmail">USUARIO:</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input name="password" type="password" class="form-control" id="inputPassword" />
                    <label class="form-label" for="inputPassword">Password</label>
                  </div>

                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                    <label class="form-check-label" for="form2Example33">
                      Subscribe to our newsletter
                    </label>
                  </div>

                  <!-- Submit button -->
                  <button type="submit" class="btn btn-success btn-block mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-door-open" viewBox="0 0 20 20">
                        <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                        <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
                      </svg>
                    INGRESAR
                  </button>

                  <!-- Register buttons -->
                  <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                      <i class="fab fa-github"></i>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!-- Section: Design Block -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>