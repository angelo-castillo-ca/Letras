<!DOCTYPE html>
<?php
    include('connection.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous"
    />    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            $IdDocente = $_POST['IdDocente'];
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $dni = $_POST['dni'];
            $tipo = $_POST['tipo'];

            $sql_actualizar_docente = "UPDATE Docente SET Nombre='".$nombre."', Apellido='".$apellido."', Correo='".$correo."',DNI='".$dni."', Tipo='".$tipo."' WHERE IdDocente='".$IdDocente."'";

            $resultado_sql_actualizar_docente=mysqli_query($conexion,$sql_actualizar_docente);

            if($resultado_sql_actualizar_docente){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('../docente.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos se no actualizaron correctamente');
                        location.assign('../docente.php');
                        </script>";
            }

            mysqli_close($conexion);

            }else{
            $id=$_GET['id'];
            $sql_consulta_doc_edit="SELECT * FROM Docente WHERE IdDocente = '".$id."'";
            $resultado_sql_consulta_doc_edit=mysqli_query($conexion,$sql_consulta_doc_edit);
            if ($f_dato=mysqli_fetch_assoc($resultado_sql_consulta_doc_edit)) {
                $IdDocente=$f_dato["IdDocente"];
                $nombre=$f_dato["Nombre"];
                $apellido=$f_dato["Apellido"];  
                $dni=$f_dato["DNI"];
                $correo=$f_dato["Correo"];
                $tipo=$f_dato["Tipo"];
            } else {
                echo "Error en la consulta: " . mysqli_error($conexion);
            }
            mysqli_close($conexion);
    ?>
    
    <div class="container-sm nb-3">
        <h1>Editar Docentes</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="IdDocente" value="<?php echo $IdDocente; ?>">
            <div class="nb-3">
                <label class="form-label" for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>"><br>

            </div>
            <div class="nb-3">
                <label  class="form-label"for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="dni">DNI:</label>
                <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $dni; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="correo">Correo:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="tipo">Tipo:</label>
                <select id="tipo" class="form-select" multiple aria-label="multiple select example" name="tipo">
                <option value="Contratado" <?php if ($tipo == "Contratado") echo "selected"; ?>>Contratado</option>
                <option value="Nombrado" <?php if ($tipo == "Nombrado") echo "selected"; ?>>Nombrado</option>
                </select>
            </div>
            <input type="submit" name="enviar" value="Actualizar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c">
        </form> 
    </div>
    <?php
        }
    ?>
</form>
</body>
</html>