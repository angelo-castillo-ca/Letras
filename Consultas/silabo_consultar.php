<?php
session_start();
include 'connection.php';
$sql_consulta_silabo = "SELECT IdAsignatura,Codigo,Nombre,Credito,Ciclo,Tiempo,Grado,Tipo,Programa,Mencion FROM Asignatura";
$resultado_sql_consulta_asignatura = mysqli_query($conexion, $sql_consulta_asignatura);

if (!$resultado_sql_consulta_asignatura) {
    die("Error al consultar la base de datos: " . mysqli_error($conexion));
}
?>