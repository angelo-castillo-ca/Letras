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
        echo "1.1. Nombre de la asignatura :Seminario de Tesis I \\\ \n";
        echo "1.2. Tipo de asignatura : Profundización o investigación \\\ \n";
        echo "1.3. Profesor(a) :Elton Honores \\\ \n";
        echo "1.4. Programa :Maestría en Arte Peruano y Latinoamericano \\\ \n";
        echo "1.5. Mención :Historia del arte \\\ \n";
        echo "1.6. Código de asignatura :L72217 \\\ \n";
        echo "1.7. Créditos :06 \\\ \n";
        echo "1.8. N° de horas semanales :3 \\\ \n";
        echo "1.9. N° de horas por semestre :48 \\\ \n";
        echo "1.10. Semestre académico : 2022-I \\\ \n";
        echo "1.11. Duración : 16 semanas \\\ \n";
        echo "1.12. Fecha de inicio :11 de abril \\\ \n";
        echo "1.13. Fecha de finalización :25 de julio \\\ \n";
        echo "1.14. Local y aula :Aula virtual \\\ \n";
        echo "1.15. Horario :Lunes de 6:00-9:00 pm \\\ \n";
    echo "\\section{FUNDAMENTOS DE LA ASIGNATURA}\n";
        echo "\\subsection{Sumilla}\n";
        echo "Es un seminario de investigación interdisciplinar. Reelabora el anteproyecto de tesis de
        postulante a la Maestría. Reflexiona y discute las epistemes de las humanidades para el
        desarrollo disciplinar. Conoce la metodología de investigación científica y de las humanidades.
        Identifica y profundiza el tema-problema central de la tesis en una perspectiva de proyecto de
        investigación teórico metodológico y de sustento académico. Indaga y sustenta los principales
        antecedentes, las teorías y categorías que implica la investigación de tesis con una visión crítica
        y académica. Redefine y planifica el proyecto de tesis de Maestría. Redacta, discute, defiende y
        aprueba la versión final del proyecto de tesis e inscribe en el Registro de Proyectos de Tesis de la
        UPG. Entregable: (1) Proyecto de Tesis de Maestría; (2) Resumen de primera ponencia sobre su
        tesis a presentar en un evento académico nacional o internacional (de presentar ponencia esta
        se valida con el entregable (3) del Seminario de Tesis II).)\n";

    echo "\\end{document}\n";
} else {
    echo "No se encontraron resultados.";
}

$conexion->close();
?>
