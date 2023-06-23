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
    $IdSilabo = $_POST['IdSilabo'];
    $facultad = $_POST["facultad"];
    $nombrea = $_POST["nombrea"];
    $docente = $_POST["docente"];
    $semestre = $_POST["semestre"];
    $duracion = $_POST["duracion"];
    $fechaini = $_POST["fechaini"];
    $fechafin = $_POST["fechafin"];
    $locaul = $_POST["locaul"];
    $horario = $_POST["horario"];
    $sumilla = $_POST["sumilla"];
    $compgen = $_POST["compgen"];
    $compesp = $_POST["compesp"];
    $und1 = $_POST["und1"];
    $semana1 = $_POST["semana1"];
    $semana2 = $_POST["semana2"];
    $semana3 = $_POST["semana3"];
    $semana4 = $_POST["semana4"];
    $und2 = $_POST["und2"];
    $semana5 = $_POST["semana5"];
    $semana6 = $_POST["semana6"];
    $semana7 = $_POST["semana7"];
    $semana8 = $_POST["semana8"];
    $und3 = $_POST["und3"];
    $semana9 = $_POST["semana9"];
    $semana10 = $_POST["semana10"];
    $semana11 = $_POST["semana11"];
    $semana12 = $_POST["semana12"];
    $und4 = $_POST["und4"];
    $semana13 = $_POST["semana13"];
    $semana14 = $_POST["semana14"];
    $semana15 = $_POST["semana15"];
    $semana16 = $_POST["semana16"];
    $referencias = $_POST["referencias"];
    $recursesp = $_POST["recursesp"];
    $estramet = $_POST["estramet"];
    $estrametau = $_POST["estrametau"];
    $modae = $_POST["modae"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $promf = $_POST["promf"];
    $requisitos = $_POST["requisitos"];

    $sql_get_idfacultad = "SELECT IdFacultad FROM Facultad WHERE NombreFacultad='".$facultad."'";
    $resultado_sql_get_idfacultad = mysqli_query($conexion, $sql_get_idfacultad);
    $row_idfacultad = mysqli_fetch_assoc($resultado_sql_get_idfacultad);
    $idfacultad = $row_idfacultad['IdFacultad'];
  
    $sql_get_idasignatura = "SELECT IdAsignatura FROM Asignatura WHERE Nombre='".$nombrea."'";
    $resultado_sql_get_idasignatura = mysqli_query($conexion, $sql_get_idasignatura);
    $row_idasignatura = mysqli_fetch_assoc($resultado_sql_get_idasignatura);
    $idasignatura = $row_idasignatura['IdAsignatura'];
  
    $sql_get_iddocente = "SELECT IdDocente FROM Docente WHERE CONCAT(Nombre, ' ', Apellido) = ?";
    $stmt_get_iddocente = mysqli_prepare($conexion, $sql_get_iddocente);
    mysqli_stmt_bind_param($stmt_get_iddocente, "s", $docente);
    mysqli_stmt_execute($stmt_get_iddocente);
    $resultado_sql_get_iddocente = mysqli_stmt_get_result($stmt_get_iddocente);
    $row_iddocente = mysqli_fetch_assoc($resultado_sql_get_iddocente);
    $iddocente = $row_iddocente['IdDocente'];

    $sql_actualizar_silabo = "UPDATE Silabo SET IdFacultad='".$idfacultad."', IdAsignatura='".$idasignatura."', IdDocente='".$iddocente."', Semestre='".$semestre."',
        Duracion='".$duracion."', FechaInicio='".$fechaini."', FechaFin='".$fechafin."', LocAul='".$locaul."', Horario='".$horario."',
        Sumilla='".$sumilla."', CompetenciaGeneral='".$compgen."', CompetenciasEspecificas='".$compesp."', Unidad1='".$und1."', Semana1='".$semana1."', 
        Semana2='".$semana2."', Semana3='".$semana3."', Semana4='".$semana4."', Unidad2='".$und2."', Semana5='".$semana5."', 
        Semana6='".$semana6."', Semana7='".$semana7."', Semana8='".$semana8."', Unidad3='".$und3."', Semana9='".$semana9."', 
        Semana10='".$semana10."', Semana11='".$semana11."', Semana12='".$semana12."', Unidad4='".$und4."', Semana13='".$semana13."', 
        Semana14='".$semana14."', Semana15='".$semana15."', Semana16='".$semana16."', Referencias='".$referencias."', 
        RecursosElectronicos='".$recursesp."', EstrategiasMetologias='".$estramet."', EstrategiasMetologiasUtil='".$estrametau."', ModaliEvaluacion='".$modae."', Nota1='".$nota1."', 
        Nota2='".$nota2."', Nota3='".$nota3."', PromFin='".$promf."', Requisitos='".$requisitos."' WHERE IdSilabo='".$IdSilabo."'";


            $resultado_sql_actualizar_silabo=mysqli_query($conexion,$sql_actualizar_silabo);

            if($resultado_sql_actualizar_silabo){
                echo "<script language='JavaScript'>
                        alert('Los datos se actualizaron correctamente');
                        location.assign('../silabo.php');
                        </script>";
            }else{
                echo "<script language='JavaScript'>
                        alert('Los datos se no actualizaron correctamente');
                        location.assign('../silabo.php');
                        </script>";
            }

            mysqli_close($conexion);

            }else{
            $id=$_GET['id'];
            $sql_consulta_silabo_edit="SELECT *FROM Silabo WHERE IdSilabo = '".$id."'";
            $resultado_sql_consulta_silabo_edit=mysqli_query($conexion,$sql_consulta_silabo_edit);
            if ($f_dato=mysqli_fetch_assoc($resultado_sql_consulta_silabo_edit)) {
                $IdSilabo = $f_dato['IdSilabo'];
                $facultad = $f_dato["IdFacultad"];
                $nombrea = $f_dato["IdAsignatura"];
                $docente = $f_dato["IdDocente"];
                $semestre = $f_dato["Semestre"];
                $duracion = $f_dato["Duracion"];
                $fechaini = $f_dato["FechaInicio"];
                $fechafin = $f_dato["FechaFin"];
                $locaul = $f_dato["LocAul"];
                $horario = $f_dato["Horario"];
                $sumilla = $f_dato["Sumilla"];
                $compgen = $f_dato["CompetenciaGeneral"];
                $compesp = $f_dato["CompetenciasEspecificas"];
                $und1 = $f_dato["Unidad1"];
                $semana1 = $f_dato["Semana1"];
                $semana2 = $f_dato["Semana2"];
                $semana3 = $f_dato["Semana3"];
                $semana4 = $f_dato["Semana4"];
                $und2 = $f_dato["Unidad2"];
                $semana5 = $f_dato["Semana5"];
                $semana6 = $f_dato["Semana6"];
                $semana7 = $f_dato["Semana7"];
                $semana8 = $f_dato["Semana8"];
                $und3 = $f_dato["Unidad3"];
                $semana9 = $f_dato["Semana9"];
                $semana10 = $f_dato["Semana10"];
                $semana11 = $f_dato["Semana11"];
                $semana12 = $f_dato["Semana12"];
                $und4 = $f_dato["Unidad4"];
                $semana13 = $f_dato["Semana13"];
                $semana14 = $f_dato["Semana14"];
                $semana15 = $f_dato["Semana15"];
                $semana16 = $f_dato["Semana16"];
                $referencias = $f_dato["Referencias"];
                $recursesp = $f_dato["RecursosElectronicos"];
                $estramet = $f_dato["EstrategiasMetologias"];
                $estrametau = $f_dato["EstrategiasMetologiasUtil"];
                $modae = $f_dato["ModaliEvaluacion"];
                $nota1 = $f_dato["Nota1"];
                $nota2 = $f_dato["Nota2"];
                $nota3 = $f_dato["Nota3"];
                $promf = $f_dato["PromFin"];
                $requisitos = $f_dato["Requisitos"];
            } else {
                echo "Error en la consulta: " . mysqli_error($conexion);
            }
            mysqli_close($conexion);
    ?>
    
    <div class="container-sm nb-3">
        <h1>Editar Silabo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="IdSilabo" value="<?php echo $IdSilabo; ?>">
        <div class="nb-3">
        <div class="nb-3">
        <label class="form-label" for="facultad">Facultad:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="facultad">
                <?php
                include 'connection.php';
                $consulta_facultad = "SELECT * FROM Facultad";
                $sql_consulta_facultad = mysqli_query($conexion, $consulta_facultad) or die(mysqli_error($conexion));
                while ($opciones = mysqli_fetch_assoc($sql_consulta_facultad)) {
                    ?>
                    <option <?php if ($facultad == $opciones['IdFacultad']) echo "selected"; ?>><?php echo $opciones['NombreFacultad']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="nombrea">Nombre Asignatura:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="nombrea">
                <?php
                include 'connection.php';
                $consulta = "SELECT IdAsignatura,Nombre FROM Asignatura";
                $sql_consulta = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                foreach ($sql_consulta as $opciones) {
                    ?>
                    <option <?php if ($nombrea == $opciones['IdAsignatura']) echo "selected"; ?>><?php echo $opciones['Nombre']; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="nb-3">
            <label class="form-label" for="docente">Docente:</label>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="docente">
                <?php
                include 'connection.php';
                $consulta = "SELECT IdDocente, Nombre, Apellido FROM Docente";
                $sql_consulta = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));
                foreach ($sql_consulta as $opciones) {
                    $nombreCompleto = $opciones['Nombre'] . ' ' . $opciones['Apellido'];
                    ?>
                    <option <?php if ($docente == $opciones['IdDocente']) echo "selected"; ?>><?php echo $nombreCompleto; ?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="nb-3">
          <label class="form-label" for="semestre">Semestre:</label>
          <input type="text" class="form-control" id="semestre" name="semestre" value="<?php echo $semestre; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="duracion">Duracion:</label>
          <input type="text" class="form-control" id="duracion" name="duracion" value="<?php echo $duracion; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="fechaini">Fecha de inicio:</label>
          <input type="date" class="form-control" id="fechaini" name="fechaini" value="<?php echo $fechaini; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="fechafin">Fecha de fin:</label>
          <input type="date" class="form-control" id="fechafin" name="fechafin" value="<?php echo $fechafin; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="locaul">Local y Aula:</label>
          <input type="text" class="form-control" id="locaul" name="locaul" value="<?php echo $locaul; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="horario">Horario:</label>
          <input type="text" class="form-control" id="horario" name="horario" value="<?php echo $horario; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="sumilla">Sumilla:</label>
          <textarea type="text" class="form-control" id="sumilla" name="sumilla" rows="4" cols="40"><?php echo $sumilla; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="compgen">Competencia General:</label>
          <textarea type="text" class="form-control" id="compgen" name="compgen" rows="4" cols="40"><?php echo $compgen; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="compesp">Competencias Especificas:</label>
          <textarea type="text" class="form-control" id="compesp" name="compesp" rows="4" cols="40"><?php echo $compesp; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und1">Unidad 1:</label>
          <input type="text" class="form-control" id="und1" name="und1" value="<?php echo $und1; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana1">Temas Semana 1:</label>
          <textarea type="text" class="form-control" id="semana1" name="semana1" rows="4" cols="40"><?php echo $semana1; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana2">Temas Semana 2:</label>
          <textarea type="text" class="form-control" id="semana2" name="semana2" rows="4" cols="40"><?php echo $semana2; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana3">Temas Semana 3:</label>
          <textarea type="text" class="form-control" id="semana3" name="semana3" rows="4" cols="40"><?php echo $semana3; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana4">Temas Semana 4:</label>
          <textarea type="text" class="form-control" id="semana4" name="semana4" rows="4" cols="40"><?php echo $semana4; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und2">Unidad 2:</label>
          <input type="text" class="form-control" id="und2" name="und2" value="<?php echo $und2; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana5">Temas Semana 5:</label>
          <textarea type="text" class="form-control" id="semana5" name="semana5" rows="4" cols="40"><?php echo $semana5; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana6">Temas Semana 6:</label>
          <textarea type="text" class="form-control" id="semana6" name="semana6" rows="4" cols="40"><?php echo $semana6; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana7">Temas Semana 7:</label>
          <textarea type="text" class="form-control" id="semana7" name="semana7" rows="4" cols="40"><?php echo $semana7; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana8">Temas Semana 8:</label>
          <textarea type="text" class="form-control" id="semana8" name="semana8" rows="4" cols="40"><?php echo $semana8; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und3">Unidad 3:</label>
          <input type="text" class="form-control" id="und3" name="und3" value="<?php echo $und3; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana9">Temas Semana 9:</label>
          <textarea type="text" class="form-control" id="semana9" name="semana9" rows="4" cols="40"><?php echo $semana9; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana10">Temas Semana 10:</label>
          <textarea type="text" class="form-control" id="semana10" name="semana10" rows="4" cols="40"><?php echo $semana10; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana11">Temas Semana 11:</label>
          <textarea type="text" class="form-control" id="semana11" name="semana11" rows="4" cols="40"><?php echo $semana11; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana12">Temas Semana 12:</label>
          <textarea type="text" class="form-control" id="semana12" name="semana12" rows="4" cols="40"><?php echo $semana12; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="und4">Unidad 4:</label>
          <input type="text" class="form-control" id="und4" name="und4" value="<?php echo $und4; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana13">Temas Semana 13:</label>
          <textarea type="text" class="form-control" id="semana13" name="semana13" rows="4" cols="40"><?php echo $semana13; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana14">Temas Semana 14:</label>
          <textarea type="text" class="form-control" id="semana14" name="semana14" rows="4" cols="40"><?php echo $semana14; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana15">Temas Semana 15:</label>
          <textarea type="text" class="form-control" id="semana15" name="semana15" rows="4" cols="40"><?php echo $semana15; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="semana16">Temas Semana 16:</label>
          <textarea type="text" class="form-control" id="semana16" name="semana16" rows="4" cols="40"><?php echo $semana16; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="referencias">Referencias Bibliograficas:</label>
          <textarea type="text" class="form-control" id="referencias" name="referencias" rows="10" cols="40"><?php echo $referencias; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="recursesp">Recursos electronicos:</label>
          <textarea type="text" class="form-control" id="recursesp" name="recursesp" rows="4" cols="40"><?php echo $recursesp; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="estramet">Estrategias Metodologicas :</label>
          <textarea type="text" class="form-control" id="estramet" name="estramet" rows="10" cols="40"><?php echo $estramet; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="estrametau">Estrategias Metodologicas a Utilizar:</label>
          <textarea type="text" class="form-control" id="estrametau" name="estrametau" rows="10" cols="40"><?php echo $estrametau; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="modae">Modalidades de Evaluacion:</label>
          <textarea type="text" class="form-control" id="modae" name="modae" rows="10" cols="40"><?php echo $modae; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota1">Nota 1:</label>
          <input type="text" class="form-control" id="nota1" name="nota1" value="<?php echo $nota1; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota2">Nota 2:</label>
          <input type="text" class="form-control" id="nota2" name="nota2" value="<?php echo $nota2; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="nota3">Nota 3:</label>
          <input type="text" class="form-control" id="nota3" name="nota3" value="<?php echo $nota3; ?>"><br>
        </div>
        <div class="nb-3">
          <label class="form-label" for="promf">Promedio final obtenido:</label>
          <textarea type="text" class="form-control" id="promf" name="promf"><?php echo $promf; ?></textarea>
        </div>
        <div class="nb-3">
          <label class="form-label" for="requisitos">Requisitos:</label>
          <textarea type="text" class="form-control" id="requisitos" name="requisitos" ><?php echo $requisitos; ?></textarea>
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