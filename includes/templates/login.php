
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/styles.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <div class="container-fluid ">
        <div class="row">
          <div class="col"></div>
          <div id="card" class="col-md-6 col-sm-10 col-xs-12 shadow-lg p-5 mt-5 bg-body rounded">
            <div class="mb-3 row text-center">
                <h1>Inicio de Sesión</h1>
            </div>
            <div class="mb-3 mt-5 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="staticEmail" placeholder="email@example.com">
                </div>
              </div>
              <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="inputPassword">
                </div>
              </div>
          </div>
          <div class="col"></div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>