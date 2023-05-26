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
        <div class="nb-3">
          <label class="form-label" for="sumilla">Sumilla:</label>
          <textarea type="text" class="form-control" id="sumilla" name="sumilla" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="compgen">Competencia General:</label>
          <textarea type="text" class="form-control" id="compgen" name="compgen" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="compesp">Competencias Especificas:</label>
          <textarea type="text" class="form-control" id="compesp" name="compesp" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und1">Unidad 1:</label>
          <input type="text" class="form-control" id="und1" name="und1"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana1">Temas Semana 1:</label>
          <textarea type="text" class="form-control" id="semana1" name="semana1" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana2">Temas Semana 2:</label>
          <textarea type="text" class="form-control" id="semana2" name="semana2" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana3">Temas Semana 3:</label>
          <textarea type="text" class="form-control" id="semana3" name="semana3" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana4">Temas Semana 4:</label>
          <textarea type="text" class="form-control" id="semana4" name="semana4" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und2">Unidad 2:</label>
          <input type="text" class="form-control" id="und2" name="und2"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana5">Temas Semana 5:</label>
          <textarea type="text" class="form-control" id="semana5" name="semana5" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana2">Temas Semana 6:</label>
          <textarea type="text" class="form-control" id="semana6" name="semana6" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana2">Temas Semana 7:</label>
          <textarea type="text" class="form-control" id="semana7" name="semana7" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana8">Temas Semana 8:</label>
          <textarea type="text" class="form-control" id="semana8" name="semana8" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und3">Unidad 3:</label>
          <input type="text" class="form-control" id="und3" name="und3"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana9">Temas Semana 9:</label>
          <textarea type="text" class="form-control" id="semana9" name="semana9" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana10">Temas Semana 10:</label>
          <textarea type="text" class="form-control" id="semana10" name="semana10" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana11">Temas Semana 11:</label>
          <textarea type="text" class="form-control" id="semana11" name="semana11" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana12">Temas Semana 12:</label>
          <textarea type="text" class="form-control" id="semana12" name="semana12" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und4">Unidad 4:</label>
          <input type="text" class="form-control" id="und4" name="und4"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana13">Temas Semana 13:</label>
          <textarea type="text" class="form-control" id="semana13" name="semana13" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana14">Temas Semana 14:</label>
          <textarea type="text" class="form-control" id="semana14" name="semana14" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana15">Temas Semana 15:</label>
          <textarea type="text" class="form-control" id="semana15" name="semana15" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana16">Temas Semana 16:</label>
          <textarea type="text" class="form-control" id="semana16" name="semana16" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="referencias">Referencias Bibliograficas:</label>
          <textarea type="text" class="form-control" id="referencias" name="referencias" rows="10" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="recurspse">Recursos electronicos:</label>
          <textarea type="text" class="form-control" id="referencias" name="referencias" rows="4" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="referencias">Referencias Bibliograficas:</label>
          <textarea type="text" class="form-control" id="recurspse" name="recurspse" rows="10" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="estramet">Estrategias Metodologicas :</label>
          <textarea type="text" class="form-control" id="estramet" name="estramet" rows="10" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="estrametau">Estrategias Metodologicas a Utilizar:</label>
          <textarea type="text" class="form-control" id="estrametau" name="estrametau" rows="10" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="modae">Modalidades de Evaluacion:</label>
          <textarea type="text" class="form-control" id="modae" name="modae" rows="10" cols="40"></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota1">Nota 1:</label>
          <input type="text" class="form-control" id="nota1" name="nota1"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota2">Nota 2:</label>
          <input type="text" class="form-control" id="nota2" name="nota2"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota3">Nota 3:</label>
          <input type="text" class="form-control" id="nota3" name="nota3"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="promf">Promedio final obtenido:</label>
          <input type="text" class="form-control" id="promf" name="promf"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="requisitos">Requisitos:</label>
          <input type="text" class="form-control" id="requisitos" name="requisitos"><br>
        </div>
        <input type="submit" value="Registrar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c">
    </form> 
  </div>
</body>
</html>