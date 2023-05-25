<?php
session_start();
include 'connection.php';
$sql_consulta_silabo = "SELECT S.IdSilabo, A.Nombre FROM Silabo S JOIN Asignatura A ON S.IdAsignatura = A.IdAsignatura";
$resultado_sql_consulta_silabo = mysqli_query($conexion, $sql_consulta_silabo);

if (!$resultado_sql_consulta_silabo) {
    die("Error al consultar la base de datos: " . mysqli_error($conexion));
}
?>