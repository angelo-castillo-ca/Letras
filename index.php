<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silabo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
</head>
<body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 link-dark">Silabo</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="login.html">
            <button type="button" class="btn btn-primary" style="background-color: #0a587c">Login</button>
        </a>
      </div>
    </header>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <form action="Consultas/consulta-silabo.php" class="p-4 shadow rounded bg-light">
          <div class="row mb-3">
            <div class="col">
              <label for="selectAsignatura" class="form-label">Asignatura:</label>
              <select name="selectAsignatura" id="selectAsignatura" class="form-select form-select-lg" aria-label=".form-select-lg example">
                <?php
                  include 'Consultas/connection.php';
                  $consulta_asignatura = "SELECT A.Nombre FROM Silabo S JOIN Asignatura A ON S.IdAsignatura = A.IdAsignatura";
                  $ejecutar_consulta_asignatura = mysqli_query($conexion, $consulta_asignatura) or die(mysqli_error($conexion));
                ?>
                <?php foreach ($ejecutar_consulta_asignatura as $opciones_ejecutar_consulta_asignatura): ?>
                  <option value="<?php echo $opciones_ejecutar_consulta_asignatura['Nombre']; ?>">
                    <?php echo $opciones_ejecutar_consulta_asignatura['Nombre']; ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary w-100" style="background-color: #0a587c">Consultar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>