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

  <form action="Consultas/consulta-silabo.php"></form>
    <div class="container">
      <div class="row"> 
        <div class="col">
          <label>
            <select name="" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <?php
                include 'Consultas/connection.php';
                $consulta_asiganatura="SELECT Nombre FROM Asignatura";
                $ejecutar_consulta_asignatura=mysqli_query($conexion,$consulta_asiganatura) or die(mysqli_error($conexion));
              ?>
              <?php foreach($ejecutar_consulta_asignatura as $opciones_ejecutar_consulta_asigantura):?>
                <option>
                  <?php echo $opciones_ejecutar_consulta_asigantura['Nombre']?>
                </option>
              <?php endforeach ?>
            </select>
          </label>
        </div>
        <div class="col">
          <label>
            <select name="" id="" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <option value="value1">2018-I</option>
              <option value="value2">2018-II</option>
              <option value="value3">2019-I</option>
              <option value="value4">2019-II</option>
              <option value="value5">2020-I</option>
              <option value="value5">2020-II</option>
              <option value="value6">2021-I</option>
              <option value="value7">2021-II</option>
              <option value="value8">2022-I</option>
              <option value="value9">2022-II</option>
              <option value="value10" selected>2023-I</option>
              <option value="value11">2023-II</option>
            </select>
          </label>
        </div>
        <div class="col">
          <button type="submit" class="btn btn-primary">Consultar</button>
        </div>
      </div>
    </div>
  </form>
</body>
</html>