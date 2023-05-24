<?php
    $id=$_GET['id'];
    include('connection.php');
    $sql_eliminar_docente = "DELETE FROM Docente WHERE IdDocente='".$id."'";
    $resultado_sql_eliminar_docente = mysqli_query($conexion, $sql_eliminar_docente);

    if($resultado_sql_eliminar_docente){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente');
                location.assign('../docente.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se actualizaron correctamente');
                location.assign('../docente.php');
                </script>";
    }
?>