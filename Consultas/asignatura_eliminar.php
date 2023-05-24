<?php
    $id=$_GET['id'];
    include('connection.php');
    $sql_eliminar_asignatura = "DELETE FROM Asignatura WHERE IdAsignatura='".$id."'";
    $resultado_sql_eliminar_asignatura = mysqli_query($conexion, $sql_eliminar_asignatura);

    if($resultado_sql_eliminar_asignatura){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente');
                location.assign('../asignatura.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se actualizaron correctamente');
                location.assign('../asignatura.php');
                </script>";
    }
?>