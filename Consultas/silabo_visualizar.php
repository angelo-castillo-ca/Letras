<?php
setlocale(LC_TIME, 'es_ES.utf8');
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
    $semana1 = $dato_silabo["Semana1"];
    $items_semana1 = preg_split('/\R/', $semana1);
    $semana2 = $dato_silabo["Semana2"];
    $items_semana2 = preg_split('/\R/', $semana2);
    $semana3 = $dato_silabo["Semana3"];
    $items_semana3 = preg_split('/\R/', $semana3);
    $semana4 = $dato_silabo["Semana4"];
    $items_semana4 = preg_split('/\R/', $semana4);
    $fecha_semana1 = date('d-m',strtotime($fech_ini));
    $fecha_semana2 = date('d-m', strtotime($fech_ini. ' + 1 weeks'));
    $fecha_semana3 = date('d-m', strtotime($fech_ini. ' + 2 weeks'));
    $fecha_semana4 = date('d-m', strtotime($fech_ini. ' + 3 weeks'));
    $und2 = $dato_silabo["Unidad2"];
    $semana5 = $dato_silabo["Semana5"];
    $items_semana5 = preg_split('/\R/', $semana5);
    $semana6 = $dato_silabo["Semana6"];
    $items_semana6 = preg_split('/\R/', $semana6);
    $semana7 = $dato_silabo["Semana7"];
    $items_semana7 = preg_split('/\R/', $semana7);
    $semana8 = $dato_silabo["Semana8"];
    $items_semana8 = preg_split('/\R/', $semana8);
    $fecha_semana5 = date('d-m', strtotime($fech_ini. ' + 4 weeks'));
    $fecha_semana6 = date('d-m', strtotime($fech_ini. ' + 5 weeks'));
    $fecha_semana7 = date('d-m', strtotime($fech_ini. ' + 6 weeks'));
    $fecha_semana8 = date('d-m', strtotime($fech_ini. ' + 7 weeks'));
    $und3 = $dato_silabo["Unidad3"];
    $semana9 = $dato_silabo["Semana9"];
    $items_semana9 = preg_split('/\R/', $semana9);
    $semana10 = $dato_silabo["Semana10"];
    $items_semana10 = preg_split('/\R/', $semana10);
    $semana11 = $dato_silabo["Semana11"];
    $items_semana11 = preg_split('/\R/', $semana11);
    $semana12 = $dato_silabo["Semana12"];
    $items_semana12 = preg_split('/\R/', $semana12);
    $fecha_semana9 = date('d-m', strtotime($fech_ini. ' + 8 weeks'));
    $fecha_semana10 = date('d-m', strtotime($fech_ini. ' + 9 weeks'));
    $fecha_semana11 = date('d-m', strtotime($fech_ini. ' + 10 weeks'));
    $fecha_semana12 = date('d-m', strtotime($fech_ini. ' + 11 weeks'));
    $und4 = $dato_silabo["Unidad4"];
    $semana13 = $dato_silabo["Semana13"];
    $items_semana13 = preg_split('/\R/', $semana13);
    $semana14 = $dato_silabo["Semana14"];
    $items_semana14 = preg_split('/\R/', $semana14);
    $semana15 = $dato_silabo["Semana15"];
    $items_semana15 = preg_split('/\R/', $semana15);
    $semana16 = $dato_silabo["Semana16"];
    $items_semana16 = preg_split('/\R/', $semana16);
    $fecha_semana13 = date('d-m', strtotime($fech_ini. ' + 12 weeks'));
    $fecha_semana14 = date('d-m', strtotime($fech_ini. ' + 13 weeks'));
    $fecha_semana15 = date('d-m', strtotime($fech_ini. ' + 14 weeks'));
    $fecha_semana16 = date('d-m', strtotime($fech_ini. ' + 15 weeks'));
    $refrencias = $dato_silabo["Referencias"];
    $items_referencias = preg_split('/\R/', $refrencias);
    $recur_elc = $dato_silabo["RecursosElectronicos"];
    $items_rec_elc = preg_split('/\R/', $recur_elc);

    // Generar el código LaTeX con los datos obtenidos
    echo "\\documentclass[a4paper]{article}\n";
    echo "\\usepackage{hyperref}\n";
    echo "\\usepackage[left=3cm,right=3cm,top=2.5cm,bottom=2.5cm]{geometry}\n";
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

        echo "\\vspace{0.10cm}\n";
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
            echo "{\huge \bf $semestre}\\\[0.3cm]\n";
        echo "\\end{center}\n";
    echo "\\end{titlepage}\n";
    echo "\\newpage\n";

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
   
    echo "\\newpage\n";
    echo "\\begin{flushleft}\n";
        echo "{\huge \bf ASIGNATURA}\\\[0.3cm]\n";
    echo "\\end{flushleft}\n";

    echo "\\section{CONTENIDO TEMÁTICO}\n";

    echo "\\subsection{Unidad de aprendizaje I:(\"$und1\")}\n";
    echo "\\begin{table}[ht]\n";
        echo "\\centering\n";
        echo "\\begin{tabular}{|c|c|c|}\n";
            echo "\\hline\n";
                echo "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            echo "\\hline\n";
                echo "Primera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana1 as $item_semana1) {
                    $item_semana1 = trim($item_semana1); 
                    echo "\\item " . $item_semana1 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana1\\\ \n";
            echo "\\hline \n";
                echo "Segunda \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana2 as $item_semana2) {
                    $item_semana2 = trim($item_semana2); 
                    echo "\\item " . $item_semana2 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana2\\\ \n";
            echo "\\hline \n";
                echo "Tercera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana3 as $item_semana3) {
                    $item_semana2 = trim($item_semana3); 
                    echo "\\item " . $item_semana3 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana3 \\\ \n";
            echo "\\hline \n";
                echo "Cuarta \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana4 as $item_semana4) {
                    $item_semana4 = trim($item_semana4); 
                    echo "\\item " . $item_semana4 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana4 \\\ \n";
            echo "\\hline \n";
        echo "\\end{tabular}\n";
    echo "\\end{table} \n";

    echo "\\newpage\n";
    echo "\\subsection{Unidad de aprendizaje II:(\"$und2\")}\n";
    echo "\\begin{table}[ht]\n";
        echo "\\centering\n";
        echo "\\begin{tabular}{|c|c|c|}\n";
            echo "\\hline\n";
                echo "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            echo "\\hline\n";
                echo "Primera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana5 as $item_semana5) {
                    $item_semana5 = trim($item_semana5); 
                    echo "\\item " . $item_semana5 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana5\\\ \n";
            echo "\\hline \n";
                echo "Segunda \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana6 as $item_semana6) {
                    $item_semana6 = trim($item_semana6); 
                    echo "\\item " . $item_semana6 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana6\\\ \n";
            echo "\\hline \n";
                echo "Tercera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana7 as $item_semana7) {
                    $item_semana7 = trim($item_semana7); 
                    echo "\\item " . $item_semana7 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana7 \\\ \n";
            echo "\\hline \n";
                echo "Cuarta \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana8 as $item_semana8) {
                    $item_semana4 = trim($item_semana8); 
                    echo "\\item " . $item_semana8 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana8 \\\ \n";
            echo "\\hline \n";
        echo "\\end{tabular}\n";
    echo "\\end{table}\n";

    echo "\\newpage\n";
    echo "\\subsection{Unidad de aprendizaje III:(\"$und3\")}\n";
    echo "\\begin{table}[ht]\n";
        echo "\\centering\n";
        echo "\\begin{tabular}{|c|c|c|}\n";
            echo "\\hline\n";
                echo "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            echo "\\hline\n";
                echo "Primera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana9 as $item_semana9) {
                    $item_semana9 = trim($item_semana9); 
                    echo "\\item " . $item_semana9 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana9\\\ \n";
            echo "\\hline \n";
                echo "Segunda \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana10 as $item_semana10) {
                    $item_semana10 = trim($item_semana10); 
                    echo "\\item " . $item_semana10 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana10\\\ \n";
            echo "\\hline \n";
                echo "Tercera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana11 as $item_semana11) {
                    $item_semana11 = trim($item_semana11); 
                    echo "\\item " . $item_semana11 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana11 \\\ \n";
            echo "\\hline \n";
                echo "Cuarta \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana12 as $item_semana12) {
                    $item_semana12 = trim($item_semana12); 
                    echo "\\item " . $item_semana12 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana12 \\\ \n";
            echo "\\hline \n";
        echo "\\end{tabular}\n";
    echo "\\end{table}\n";

    echo "\\newpage\n";
    echo "\\subsection{Unidad de aprendizaje IV:(\"$und4\")}\n";
    echo "\\begin{table}[ht]\n";
        echo "\\centering\n";
        echo "\\begin{tabular}{|c|c|c|}\n";
            echo "\\hline\n";
                echo "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            echo "\\hline\n";
                echo "Primera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana13 as $item_semana13) {
                    $item_semana13 = trim($item_semana13); 
                    echo "\\item " . $item_semana13 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana13\\\ \n";
            echo "\\hline \n";
                echo "Segunda \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana14 as $item_semana14) {
                    $item_semana14 = trim($item_semana14); 
                    echo "\\item " . $item_semana14 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana14\\\ \n";
            echo "\\hline \n";
                echo "Tercera \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana15 as $item_semana15) {
                    $item_semana15 = trim($item_semana15); 
                    echo "\\item " . $item_semana15 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana15 \\\ \n";
            echo "\\hline \n";
                echo "Cuarta \n";
                echo "& \begin{minipage}[t]{10cm}\n";
                echo "\\begin{itemize}\n";
                foreach ($items_semana16 as $item_semana16) {
                    $item_semana16 = trim($item_semana16); 
                    echo "\\item " . $item_semana16 . "\n";
                }
                echo "\\end{itemize}\n";
                echo "\\end{minipage} & $fecha_semana16 \\\ \n";
            echo "\\hline \n";
        echo "\\end{tabular}\n";
    echo "\\end{table}\n";
    echo "{\huge \bf REFERENCIAS}\\\[0.3cm]\n";
    echo "\\begin{itemize}\n";
        foreach ($items_referencias as $item_referencia) {
            $item_referencia = trim($item_referencia);
            
            // Verifica si la cadena contiene una URL utilizando preg_match
            if (preg_match("#\bhttps?://\S+\b#i", $item_referencia, $matches)) {
                $url = $matches[0];
                
                // Agrega el prefijo "https://" si no está presente en la URL
                if (!preg_match("#^https?://#i", $url)) {
                    $url = "https://" . $url;
                }
                
                // Elimina la URL de la cadena original
                $texto_sin_url = str_replace($url, '', $item_referencia);
                
                // Escapa los caracteres especiales de LaTeX en el texto sin la URL
                $texto_sin_url = preg_replace('/([#_$%&{}])/i', '\\\\$1', $texto_sin_url);
                
                // Escapa los caracteres especiales de LaTeX en la URL
                $url = preg_replace('/([#_$%&{}])/i', '\\\\$1', $url);
                
                // Imprime el ítem de referencia con el texto sin la URL
                echo "\\item $texto_sin_url (\\url{{$url}})\n";
            } else {
                // Si no se encuentra una URL, simplemente imprime el ítem de referencia sin modificaciones
                echo "\\item $item_referencia\n";
            }
        }
    echo "\\end{itemize}\n";

    echo "{\huge \bf Recursos electrónicos:}\\\[0.3cm]\n";

    echo "\\begin{itemize}\n";
        foreach ($items_rec_elc as $item_rec_elc) {
            $item_rec_elc = trim($item_rec_elc);
            
            // Verifica si la cadena contiene una URL utilizando preg_match
            if (preg_match("#\bhttps?://\S+\b#i", $item_rec_elc, $matches)) {
                $url = $matches[0];
                
                // Agrega el prefijo "https://" si no está presente en la URL
                if (!preg_match("#^https?://#i", $url)) {
                    $url = "https://" . $url;
                }
                
                // Elimina la URL de la cadena original
                $texto_sin_url = str_replace($url, '', $item_rec_elc);
                
                // Escapa los caracteres especiales de LaTeX en el texto sin la URL
                $texto_sin_url = preg_replace('/([#_$%&{}])/i', '\\\\$1', $texto_sin_url);
                
                // Escapa los caracteres especiales de LaTeX en la URL
                $url = preg_replace('/([#_$%&{}])/i', '\\\\$1', $url);
                
                // Imprime el ítem de referencia con el texto sin la URL
                echo "\\item $texto_sin_url (\\url{{$url}})\n";
            } else {
                // Si no se encuentra una URL, simplemente imprime el ítem de referencia sin modificaciones
                echo "\\item $item_rec_elc\n";
            }
        }
    echo "\\end{itemize}\n";

    echo "\\section {ESTRATEGIAS METODOLÓGICAS}\n";
    echo "\\section {ESTRATEGIAS DE EVALUACIÓN}\n";
    echo "\\subsection {Modalidades de evaluación:}\n";
    echo "\\subsection {Criterios de evaluación:}\n";
    echo "\\subsection {Obtención del promedio final:}\n";
    echo "\\subsection {Requisitos para aprobar la asignatura:}\n";
    echo "\\end{document}\n";
    
} else {
    echo "No se encontraron resultados.";
}

$conexion->close();
?>
