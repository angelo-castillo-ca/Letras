<?php
// Conexión a la base de datos MySQL
include 'connection.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$dni = $_POST["dni"];
$tipo = $_POST["tipo"];

$sql_registro_docente = "INSERT INTO Docente(Nombre,Apellido,Correo,DNI,Tipo) VALUES ('$nombre', '$apellido', '$correo', '$dni','$tipo')";

if ($conexion->query($sql_registro_docente) == TRUE) {
  echo "<script language='JavaScript'>
        alert('Los datos se guardaron correctamente');
        location.assign('../docente.php');
        </script>";
} else {
  echo "Error: " . $sql_registro_docente . "<br>" . $conexion->error;
}
$conexion->close();
?>