<?php
include('connection.php');

// Consulta a la base de datos
$sql = "SELECT * FROM Silabo";
$result = $conexion->query($sql);

$sql_datos_asignatura = "SELECT * FROM Silabo S JOIN Asignatura A ON S.IdAsignatura = A.IdAsignatura";
$resultado_sql_datos_asignatura = $conexion->query($sql_datos_asignatura);

$sql_dato_docente = "SELECT * FROM Silabo S JOIN Docente D ON S.IdDocente = D.IdDocente";
$resultado_sql_dato_docente = $conexion->query($sql_dato_docente);

if ($result->num_rows > 0) {
    $dato_asignatura = $resultado_sql_datos_asignatura->fetch_assoc();
    $programa = $dato_asignatura["Programa"];
    $mencion = $dato_asignatura["Mencion"];
    $nom_asig = $dato_asignatura["Nombre"];

    $dato_docente = $resultado_sql_dato_docente->fetch_assoc();
    $nom_doc = $dato_docente["Nombre"];
    $ape_doc = $dato_docente["Apellido"];
    $correo = $dato_docente["Correo"];

    $dato_silabo = $result ->fetch_assoc();
    $semestre= $dato_silabo["Semestre"];

    // Generar el código LaTeX con los datos obtenidos
    echo "\\documentclass{article}\n";
    echo "\\usepackage{graphicx}\n";
    echo "\\begin{document}\n";

        echo "\\begin{center}\n";
            echo "\\includegraphics[width=0.2\\textwidth]{logo UNMSM.png}\n";
        echo "\\end{center}\n";
        
        echo "\\begin{center}\n";
            echo "{\huge \bf Universidad Nacional Mayor de San Marcos}\\\[0.3cm]\n";
            echo "{\large \bf Universidad del Perú. Decana de América}\\\[0.5cm]\n";
        echo "\\end{center}\n";

        echo "\\vspace{0.5cm}\n";
        echo "\\begin{center}\n";
            echo"\\large{FACULTAD DE LETRAS Y CIENCIAS HUMANAS}\n";
            echo"\\large{UNIDAD DE POSGRADO}\n";
        echo "\\end{center}\n";

        echo "\\vspace{0.5cm}\n";
        echo "\\begin{center}\n";
            echo "{\large $programa con mencion en $mencion}\\\[0.3cm]\n";
        echo "\\end{center}\n";

        echo "\\vspace{0.8cm}\n";
        echo "\\begin{center}\n";
            echo "{\huge \bf SILABO}\\\[0.3cm]\n";
        echo "\\end{center}\n";

        echo "\\begin{flushleft}\n";
            echo "Nombre de la asignatura: $nom_asig \\\ \n";
            echo "Profesor responsable: $nom_doc $ape_doc \\\ \n";
            echo "Correo Electronico: $correo \\\ \n";
        echo "\\end{flushleft}\n";

        echo "\\vspace{2cm}\n";
        echo "\\begin{center}\n";
            echo "{\large $semestre}\\\[0.3cm]\n";
        echo "\\end{center}\n";
    
    echo "\\end{document}\n";
} else {
    echo "No se encontraron resultados.";
}

$conexion->close();
?>
