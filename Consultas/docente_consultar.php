<?php
    session_start();
    include 'connection.php';
    $sql_consulta_docentes = "SELECT * FROM Docente";
    $resultado_sql_consulta_docentes = mysqli_query($conexion, $sql_consulta_docentes);

    if (!$resultado_sql_consulta_docentes) {
        die("Error al consultar la base de datos: " . mysqli_error($conexion));
    }
?>