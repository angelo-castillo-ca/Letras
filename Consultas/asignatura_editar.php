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
            $IdAsignatura = $_POST["IdAsignatura"];
            $codigo = $_POST["codigo"];
            $nombre = $_POST["nombre"];
            $credito = $_POST["credito"];
            $ciclo = $_POST["ciclo"];
            $tiempo = $_POST["tiempo"];
            $grado = $_POST["grado"];
            $tipo = $_POST["tipo"];
            $programa = $_POST["programa"];
            $mencion = $_POST["mencion"];

            $sql_actualizar_asignatura = "UPDATE Asignatura SET Codigo='".$codigo."',Nombre='".$nombre."',Credito='".$credito."',
            Ciclo='".$ciclo."',Tiempo='".$tiempo."',Grado='".$grado."',Tipo='".$tipo."',Programa='".$programa."',Mencion='".$mencion."' WHERE IdAsignatura = '".$IdAsignatura."'";

            $resultado_sql_actualizar_asignatura=mysqli_query($conexion,$sql_actualizar_asignatura);

            if($resultado_sql_actualizar_asignatura){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('../asignatura.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos se no actualizaron correctamente');
                        location.assign('../asignatura.php');
                        </script>";
            }

            mysqli_close($conexion);

            }else{
            $id=$_GET['id'];
            $sql_consulta_asg_edit="SELECT IdAsignatura,Codigo,Nombre,Credito,Ciclo,Tiempo,Grado,Tipo,Programa,Mencion FROM Asignatura WHERE IdAsignatura = '".$id."'";
            $resultado_sql_consulta_doc_edit=mysqli_query($conexion,$sql_consulta_asg_edit);
            if ($f_datoA=mysqli_fetch_assoc($resultado_sql_consulta_doc_edit)) {
                $IdAsignatura = $f_datoA["IdAsignatura"];
                $codigo = $f_datoA["Codigo"];
                $nombre = $f_datoA["Nombre"];
                $credito = $f_datoA["Credito"];
                $ciclo = $f_datoA["Ciclo"];
                $tiempo = $f_datoA["Tiempo"];
                $grado = $f_datoA["Grado"];
                $tipo = $f_datoA["Tipo"];
                $programa = $f_datoA["Programa"];
                $mencion = $f_datoA["Mencion"];
            } else {
                echo "Error en la consulta: " . mysqli_error($conexion);
            }
            mysqli_close($conexion);
    ?>
    
    <div class="container-sm nb-3">
        <h1>Registro de Asignaturas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <input type="hidden" name="IdAsignatura" value="<?php echo $IdAsignatura; ?>">
            <div class="nb-3">
                <label class="form-label" for="codigo">Codigo:</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $codigo; ?>"><br>
            </div>
            <div class="nb-3">
                <label  class="form-label"for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="credito">Credito:</label>
                <input type="text" class="form-control" id="credito" name="credito" value="<?php echo $credito; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="ciclo">Ciclo:</label>
                <select id="ciclo" class="form-select" multiple aria-label="multiple select example" name="ciclo">
                <option value="I" <?php if ($ciclo == "I") echo "selected"; ?>>I</option>
                <option value="II"<?php if ($ciclo == "II") echo "selected"; ?>>II</option>
                <option value="III"<?php if ($ciclo == "III") echo "selected"; ?>>III</option>
                <option value="IV" <?php if ($ciclo == "IV") echo "selected"; ?>>IV</option>
                <option value="V" <?php if ($ciclo == "V") echo "selected"; ?>>V</option>
                <option value="VI" <?php if ($ciclo == "VI") echo "selected"; ?>>VI</option>
                <option value="VII" <?php if ($ciclo == "VII") echo "selected"; ?>>VII</option>
                <option value="VIII" <?php if ($ciclo == "VIII") echo "selected"; ?>>VIII</option>
                <option value="IX" <?php if ($ciclo == "IX") echo "selected"; ?>>IX</option>
                <option value="X" <?php if ($ciclo == "X") echo "selected"; ?>>X</option>
                </select>
            </div>
            <div class="nb-3">
                <label class="form-label" for="tiempo">Tiempo:</label>
                <select id="tiempo" class="form-select" multiple aria-label="multiple select example" name="tiempo">
                <option value="1 hora" <?php if ($tiempo == "1 hora") echo "selected"; ?>>1 hora</option>
                <option value="2 horas" <?php if ($tiempo == "2 horas") echo "selected"; ?>>2 horas</option>
                <option value="3 horas" <?php if ($tiempo == "3 horas") echo "selected"; ?>>3 horas</option>
                <option value="4 horas" <?php if ($tiempo == "4 horas") echo "selected"; ?>>4 horas</option>
                <option value="5 horas" <?php if ($tiempo == "5 horas") echo "selected"; ?>>5 horas</option>
                </select>
            </div>
            <div class="nb-3">
                <label class="form-label" for="tiempo">Grado:</label>
                <select id="grado" class="form-select" multiple aria-label="multiple select example" name="grado">
                <option value="Maestria" <?php if ($grado == "Maestria") echo "selected"; ?> >Maestria</option>
                <option value="Doctorado" <?php if ($grado == "Doctorado") echo "selected"; ?>>Doctorado</option>
                </select>
            </div>
            <div class="nb-3">
                <label class="form-label" for="tipo">Tipo:</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="<?php echo $tipo; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="programa">Programa:</label>
                <input type="text" class="form-control" id="programa" name="programa" value="<?php echo $programa; ?>"><br>
            </div>
            <div class="nb-3">
                <label class="form-label" for="mencion">Mención:</label>
                <input type="mencion" class="form-control" id="mencion" name="mencion" value="<?php echo $mencion; ?>"><br>
            </div>
            <input type="submit" name="enviar" value="Registrar" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c">
        </form> 
    </div>
    <?php
        }
    ?>
</form>
</body>
</html>