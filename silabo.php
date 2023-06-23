<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silabo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
  <div class="container">
      <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>
  
        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
          <li><a href="silabo.php" class="nav-link px-2 link-dark">Silabo</a></li>
          <li><a href="docente.php" class="nav-link px-2 link-dark">Docentes</a></li>
          <li><a href="asignatura.php" class="nav-link px-2 link-dark">Asignaturas</a></li>
        </ul>
  
        <div class="col-md-3 text-end">
          <a href="index.php">
            <button type="button" class="btn btn-primary" style="background-color: #0a587c">SALIR</button>
          </a>
        </div>
      </header>
  </div>
  <div class="container">
    <a href="silabo_agregar.php">
      <input type="submit" value="Agregar Nuevo Silabo" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm" style="background-color: #0a587c"/>
    </a>
  </div>
  <div class="container-sm mt-3 table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>ID</th>
          <th>Silabo</th>
          <th>Opciones</th>     
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php include 'Consultas/silabo_consultar.php';?>
          <?php while ($f_silabo = mysqli_fetch_assoc($resultado_sql_consulta_silabo)) { ?>
            <tr>
                <td><?php echo $f_silabo['IdSilabo']; ?></td>
                <td><?php echo $f_silabo['Nombre']; ?></td>
                <td>
                  <a href="Consultas/silabo_visualizar.php?id=<?php echo $f_silabo['IdSilabo']; ?>"><i class="fas fa-eye"></i></a>
                  <a href="Consultas/silabo_editar.php?id=<?php echo $f_silabo['IdSilabo']; ?>"><i class="fas fa-edit"></i></a>
                  <a href="Consultas/silabo_eliminar.php?id=<?php echo $f_silabo['IdSilabo']; ?>"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
          <?php } ?>
      </tr>
      </tbody>
    </table>
  </div>
</body>
</html>