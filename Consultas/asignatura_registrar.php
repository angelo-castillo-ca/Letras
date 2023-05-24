<?php
  include 'connection.php';

  $codigo = $_POST["codigo"];
  $nombre = $_POST["nombre"];
  $credito = $_POST["credito"];
  $ciclo = $_POST["ciclo"];
  $tiempo = $_POST["tiempo"];
  $grado = $_POST["grado"];
  $tipo = $_POST["tipo"];
  $programa = $_POST["programa"];
  $mencion = $_POST["mencion"];

  $sql_registro_asignatura = "INSERT INTO Asignatura(Codigo,Nombre,Credito,Ciclo,Tiempo,IdFacultad,Grado,Tipo,Programa,Mencion) 
  VALUES ('$codigo', '$nombre', '$credito', '$ciclo','$tiempo','1','$grado','$tipo','$programa','$mencion')";

  if ($conexion->query($sql_registro_asignatura) == TRUE) {
    echo "<script language='JavaScript'>
          alert('Los datos se Registraron correctamente');
          location.assign('../asignatura.php');
          </script>";
  } else {
    echo "Error: " . $sql_registro_asignatura . "<br>" . $conexion->error;
  }

  $conexion->close();
?>