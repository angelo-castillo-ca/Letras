<?php
    $id=$_GET['id'];
    include('connection.php');
    $sql_eliminar_silabo = "DELETE FROM Silabo WHERE IdSilabo='".$id."'";
    $resultado_sql_eliminar_silabo = mysqli_query($conexion, $sql_eliminar_silabo);

    if($resultado_sql_eliminar_silabo){
        echo "<script language='JavaScript'>
                alert('Los datos se eliminaron correctamente');
                location.assign('../silabo.php');
                </script>";
    }else{
        echo "<script language='JavaScript'>
                alert('Los datos NO se actualizaron correctamente');
                location.assign('../silabo.php');
                </script>";
    }
?>