<?php
    $conexion=mysqli_connect("localhost","root","mysql","Posgrado");
    if (!$conexion) {
      die("Error de conexión: " . mysqli_connect_error());
  }
?>