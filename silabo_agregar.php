<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asignatura</title>
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
        <li><a href="silabo.php" class="nav-link px-2 link-dark">Silabo</a></li>
        <li><a href="docente.php" class="nav-link px-2 link-dark">Docentes</a></li>
        <li><a href="asignatura.php" class="nav-link px-2 link-dark">Asignaturas</a></li>
      </ul>

      <div class="col-md-3 text-end" >
        <a href="index.php">
          <button type="button" class="btn btn-primary" style="background-color: #0a587c">SALIR</button>
        </a>
      </div>
    </header>
  </div>
  <div class="container-sm nb-3">
    <h1>Registro de Silabo</h1>
    <form method="post" action="Consultas/asignatura_registrar.php">
        <div class="nb-3">
          <label class="form-label" for="codigo">Facultad:</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <?php
                include 'Consultas/connection.php';
                $consulta_facultad="SELECT NombreFacultad FROM Facultad";
                $sql_consulta_facultad=mysqli_query($conexion,$consulta_facultad) or die(mysqli_error($conexion));
              ?>
              <?php foreach($sql_consulta_facultad as $opciones_ejecutar_consulta_asigantura):?>
                <option><?php echo $opciones_ejecutar_consulta_asigantura['NombreFacultad']?></option>
              <?php endforeach ?>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="codigo">Codigo:</label>
            <input type="text" class="form-control" id="codigo" name="codigo"><br>
        </div>
        <div class="nb-3">
            <label  class="form-label"for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="credito">Credito:</label>
            <input type="text" class="form-control" id="credito" name="credito"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="ciclo">Ciclo:</label>
            <select id="ciclo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="ciclo">
            <option selected>Seleccione el ciclo de la Asignatura!!!!</option>
            <option value="I">I</option>
            <option value="II">II</option>
            <option value="III">III</option>
            <option value="IV">IV</option>
            <option value="V">V</option>
            <option value="VI">VI</option>
            <option value="VII">VII</option>
            <option value="VIII">VIII</option>
            <option value="IX">IX</option>
            <option value="X">X</option>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="tiempo">Tiempo:</label>
            <select id="tiempo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="tiempo">
            <option selected>Seleccione el tiempo del curso!!!!</option>
            <option value="1 hora">1 hora</option>
            <option value="2 horas">2 horas</option>
            <option value="3 horas">3 horas</option>
            <option value="4 horas">4 horas</option>
            <option value="5 horas">5 horas</option>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="tiempo">Grado:</label>
            <select id="grado" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="grado">
            <option selected>Seleccione el grado del curso!!!!</option>
            <option value="Maestria">Maestria</option>
            <option value="Doctorado">Doctorado</option>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="programa">Programa:</label>
            <input type="text" class="form-control" id="programa" name="programa"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="mencion">Mención:</label>
            <input type="mencion" class="form-control" id="mencion" name="mencion"><br>
        </div>
        <input type="submit" value="Registrar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c">
    </form> 
  </div>
</body>
</html>