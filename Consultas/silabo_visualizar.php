<?php
include('connection.php');
$id=$_GET['id'];

$sql = "SELECT * FROM Silabo WHERE IdSilabo = '".$id."'";
$result = $conexion->query($sql);

$sql_datos_asignatura = "SELECT * FROM Silabo S JOIN Asignatura A ON A.IdAsignatura = '".$id."'";
$resultado_sql_datos_asignatura = $conexion->query($sql_datos_asignatura);

$sql_dato_docente = "SELECT * FROM Silabo S JOIN Docente D ON D.IdDocente = '".$id."'";
$resultado_sql_dato_docente = $conexion->query($sql_dato_docente);

if ($result->num_rows > 0) {
    $dato_asignatura = $resultado_sql_datos_asignatura->fetch_assoc();
    $programa = $dato_asignatura["Programa"];
    $mencion = $dato_asignatura["Mencion"];
    $nom_asig = $dato_asignatura["Nombre"];
    $tipo_asig = $dato_asignatura["Tipo"];
    $cod_asig = $dato_asignatura["Codigo"];
    $credt_Asig = $dato_asignatura["Credito"];
    $tmp_asig = $dato_asignatura["Tiempo"];
    $tmp_asig_numerico = intval($tmp_asig);
    $tmp_sem = $tmp_asig_numerico * 16;

    $dato_docente = $resultado_sql_dato_docente->fetch_assoc();
    $nom_doc = $dato_docente["Nombre"];
    $ape_doc = $dato_docente["Apellido"];
    $correo = $dato_docente["Correo"];

    $dato_silabo = $result ->fetch_assoc();
    $semestre = $dato_silabo["Semestre"];
    $duracion = $dato_silabo["Duracion"];
    $fech_ini = $dato_silabo["FechaInicio"];
    $fech_fin = $dato_silabo["FechaFin"];
    $locaul = $dato_silabo["LocAul"];
    $horario = $dato_silabo["LocAul"];
    $sumilla = $dato_silabo["Sumilla"];
    $comp_gen = $dato_silabo["CompetenciaGeneral"];
    $comp_esp = $dato_silabo["CompetenciasEspecificas"];
    $items_comp_esp = preg_split('/\R/', $comp_esp);
    $und1 = $dato_silabo["Unidad1"];

    // Generar el código LaTeX con los datos obtenidos
    echo "\\documentclass{article}\n";
    echo "\\usepackage{graphicx}\n";
    echo "\\begin{document}\n";
    echo "\\begin{titlepage}\n";

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
    echo "\\end{titlepage}\n";

    echo "\\section{INFORMACION GENERAL}\n";
        echo "1.1. Nombre de la asignatura :$nom_asig \\\ \n";
        echo "1.2. Tipo de asignatura : $tipo_asig \\\ \n";
        echo "1.3. Profesor(a) : $nom_doc  \\\ \n";
        echo "1.4. Programa : $programa \\\ \n";
        echo "1.5. Mención : $mencion \\\ \n";
        echo "1.6. Código de asignatura : $cod_asig \\\ \n";
        echo "1.7. Créditos : $credt_Asig  \\\ \n";
        echo "1.8. N° de horas semanales : $tmp_asig \\\ \n";
        echo "1.9. N° de horas por semestre : $tmp_sem horas \\\ \n";
        echo "1.10. Semestre académico : $semestre \\\ \n";
        echo "1.11. Duración : $duracion semanas \\\ \n";
        echo "1.12. Fecha de inicio : $fech_ini \\\ \n";
        echo "1.13. Fecha de finalización : $fech_fin \\\ \n";
        echo "1.14. Local y aula : $locaul \\\ \n";
        echo "1.15. Horario : $horario \\\ \n";

    echo "\\section{FUNDAMENTOS DE LA ASIGNATURA}\n";
        echo "\\subsection{Sumilla}\n";
            echo "$sumilla\n";
        echo "\\subsection{Competencia General}\n";
            echo "$comp_gen\n";
        echo "\\subsection{Competencias Especificas}\n";
            echo "\\begin{itemize}\n";
            foreach ($items_comp_esp as $item_comp_esp) {
                $item_comp_esp = trim($item_comp_esp); 
                echo "\\item " . $item_comp_esp . "\n";
            }  
            echo "\\end{itemize}\n"; 

    echo "\\begin{flushleft}\n";
            echo "ASIGNATURA \\\ \n";
    echo "\\end{flushleft}\n";

    echo "\\section{CONTENIDO TEMÁTICO}\n";
    echo "\\subsection{Unidad de aprendizaje I:(\"$und1\")}\n";

    echo "\\end{document}\n";
} else {
    echo "No se encontraron resultados.";
}

$conexion->close();
?>
