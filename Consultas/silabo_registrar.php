<?php
  include 'connection.php';
  $facultad = $_POST["facultad"];
  $nombrea = $_POST["nombrea"];
  $docente = $_POST["docente"];
  $semestre = $_POST["semestre"];
  $duracion = $_POST["duracion"];
  $fechaini = $_POST["fechaini"];
  $fechafin = $_POST["fechafin"];
  $locaul = $_POST["locaul"];
  $horario = $_POST["horario"];
  $sumilla = $_POST["sumilla"];
  $compgen = $_POST["compgen"];
  $compesp = $_POST["compesp"];
  $und1 = $_POST["und1"];
  $semana1 = $_POST["semana1"];
  $semana2 = $_POST["semana2"];
  $semana3 = $_POST["semana3"];
  $semana4 = $_POST["semana4"];
  $und2 = $_POST["und2"];
  $semana5 = $_POST["semana5"];
  $semana6 = $_POST["semana6"];
  $semana7 = $_POST["semana7"];
  $semana8 = $_POST["semana8"];
  $und3 = $_POST["und3"];
  $semana9 = $_POST["semana9"];
  $semana10 = $_POST["semana10"];
  $semana11 = $_POST["semana11"];
  $semana12 = $_POST["semana12"];
  $und4 = $_POST["und4"];
  $semana13 = $_POST["semana13"];
  $semana14 = $_POST["semana14"];
  $semana15 = $_POST["semana15"];
  $semana16 = $_POST["semana16"];
  $referencias = $_POST["referencias"];
  $recursesp = $_POST["recursesp"];
  $estramet = $_POST["estramet"];
  $estrametau = $_POST["estrametau"];
  $modae = $_POST["modae"];
  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];
  $promf = $_POST["promf"];
  $requisitos = $_POST["requisitos"];
  
  $sql_get_idfacultad = "SELECT IdFacultad FROM Facultad WHERE NombreFacultad='".$facultad."'";
  $resultado_sql_get_idfacultad = mysqli_query($conexion, $sql_get_idfacultad);
  $row_idfacultad = mysqli_fetch_assoc($resultado_sql_get_idfacultad);
  $idfacultad = $row_idfacultad['IdFacultad'];

  $sql_get_idasignatura = "SELECT IdAsignatura FROM Asignatura WHERE Nombre='".$nombrea."'";
  $resultado_sql_get_idasignatura = mysqli_query($conexion, $sql_get_idasignatura);
  $row_idasignatura = mysqli_fetch_assoc($resultado_sql_get_idasignatura);
  $idasignatura = $row_idasignatura['IdAsignatura'];

  $sql_get_iddocente = "SELECT IdDocente FROM Docente WHERE Nombre='".$docente."'";
  $resultado_sql_get_iddocente = mysqli_query($conexion, $sql_get_iddocente);
  $row_iddocente = mysqli_fetch_assoc($resultado_sql_get_iddocente);
  $iddocente = $row_iddocente['IdDocente'];

  $sql_registro_silabo = "INSERT INTO Silabo(IdFacultad, IdAsignatura, IdDocente, Semestre, Duracion, FechaInicio, 
  FechaFin, LocAul, Horario, Sumilla, CompetenciaGeneral, CompetenciasEspecificas, Unidad1, Semana1, Semana2, Semana3, Semana4, 
  Unidad2, Semana5, Semana6, Semana7, Semana8, Unidad3, Semana9, Semana10, Semana11, Semana12, Unidad4, Semana13, Semana14, 
  Semana15, Semana16, Referencias, RecursosElectronicos, EstrategiasMetologias, EstrategiasMetologiasUtil, ModaliEvaluacion, 
  Nota1, Nota2, Nota3, PromFin, Requisitos) 
  VALUES ('$idfacultad', '$idasignatura', '$iddocente', '$semestre', '$duracion', '$fechaini', 
  '$fechafin', '$locaul', '$horario', '$sumilla', '$compgen', '$compesp', '$und1', 
  '$semana1', '$semana2', '$semana3', '$semana4', '$und2', '$semana5', '$semana6', 
  '$semana7', '$semana8', '$und3','$semana9', '$semana10', '$semana11', '$semana12',
  '$und4', '$semana13', '$semana14', '$semana15', '$semana16', '$referencias', 
  '$recursesp', '$estramet', '$estrametau', '$modae', '$nota1', '$nota2', '$nota3', '$promf', '$requisitos')";

  if ($conexion->query($sql_registro_silabo) === TRUE) {
    echo "<script language='JavaScript'>
          alert('Los datos se registraron correctamente');
          location.assign('../silabo.php');
          </script>";
  } else {
    echo "Error: " . $sql_registro_silabo . "<br>" . $conexion->error;
  }

  $conexion->close();
?>
