<?php
    include 'Consultas/connection.php';
    $consulta="SELECT Nombre FROM Asignatura";
    $sql_consulta=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
    if (!$sql_consulta) {
        die("Error al consultar la base de datos: " . mysqli_error($conexion));
    }
?>