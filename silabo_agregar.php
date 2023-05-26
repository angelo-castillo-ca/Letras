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
    <form method="post" action="Consultas/silabo_registrar.php">
        <div class="nb-3">
          <label class="form-label" for="facultad">Facultad:</label>
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
          <label class="form-label" for="programa">Nombre Asignatura:</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <?php
                include 'Consultas/silabo_agregar.php'; 
                foreach($sql_consulta as $opciones):?>
                <option><?php echo $opciones['Nombre']?></option>
              <?php endforeach ?>
            </select>
        </div>
        <div class="nb-3">
          <label class="form-label" for="docente">Docente:</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
              <?php
                include 'Consultas/connection.php';
                $consulta="SELECT Nombre,Apellido FROM Docente";
                $sql_consulta=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
              ?>
              <?php foreach($sql_consulta as $opciones):?>
                <option><?php echo $opciones['Nombre'] . ' ' . $opciones['Apellido']; ?></option>
              <?php endforeach ?>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="semestre">Semestre:</label>
            <input type="text" class="form-control" id="semestre" name="semestre"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="duracion">Duracion:</label>
            <input type="text" class="form-control" id="duracion" name="duracion"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="fechini">Fecha de inicio:</label>
            <input type="text" class="form-control" id="fechini" name="fechini"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="fechfin">Fecha de fin:</label>
            <input type="text" class="form-control" id="fechfin" name="fechfin"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="locaul">Local y Aula:</label>
            <input type="text" class="form-control" id="locaul" name="locaul"><br>
        </div>
        <div class="nb-3">
            <label class="form-label" for="horario">Horario:</label>
            <input type="text" class="form-control" id="horario" name="horario"><br>
        </div>
        <input type="submit" value="Registrar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c">
    </form> 
  </div>
</body>
</html>