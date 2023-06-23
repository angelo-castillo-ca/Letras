<?php
setlocale(LC_TIME, 'es_ES.utf8');
include('connection.php');
$id=$_GET['id'];

$sql = "SELECT * FROM Silabo WHERE IdSilabo = '".$id."'";
$result = $conexion->query($sql);

$sql_datos_asignatura = "SELECT * FROM Silabo S JOIN Asignatura A ON A.IdAsignatura = S.IdAsignatura WHERE S.IdSilabo = '".$id."'";
$resultado_sql_datos_asignatura = $conexion->query($sql_datos_asignatura);

$sql_dato_docente = "SELECT * FROM Silabo S JOIN Docente D ON D.IdDocente = S.IdDocente  WHERE S.IdSilabo = '".$id."'";
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
    $estr_met = $dato_silabo["EstrategiasMetologias"];
    $items_estr_met = preg_split('/\R/', $estr_met);
    $estr_met_util = $dato_silabo["EstrategiasMetologiasUtil"];
    $items_estr_met_util = preg_split('/\R/', $estr_met_util);
    $modali_eva = $dato_silabo["ModaliEvaluacion"];
    $items_modali_eva = preg_split('/\R/', $modali_eva);
    $nota1 = $dato_silabo["Nota1"];
    $nota2 = $dato_silabo["Nota2"];
    $nota3 = $dato_silabo["Nota3"];
    $prom_fin = str_replace('%', '\%',$dato_silabo["PromFin"]);
    $items_prom_fin = preg_split('/\R/', $prom_fin);
    $requisitos = str_replace('%', '\%',$dato_silabo["Requisitos"]);
    $items_requisitos = preg_split('/\R/', $requisitos);

    // Generar el código LaTeX con los datos obtenidos
    $codio_latex =  "\\documentclass[a4paper]{article}\n";
    $codio_latex .=  "\\usepackage{hyperref}\n";
    $codio_latex .=  "\\usepackage[left=3cm,right=3cm,top=2.5cm,bottom=2.5cm]{geometry}\n";
    $codio_latex .=  "\\usepackage{graphicx}\n";
    $codio_latex .=  "\\begin{document}\n";
    $codio_latex .=  "\\begin{titlepage}\n";

        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .=  "\\includegraphics[width=0.2\\textwidth]{logo UNMSM.png}\n";
        $codio_latex .=  "\\end{center}\n";
        
        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .=  "{\huge \bf Universidad Nacional Mayor de San Marcos}\\\[0.3cm]\n";
            $codio_latex .=  "{\large \bf Universidad del Perú. Decana de América}\\\[0.5cm]\n";
        $codio_latex .=  "\\end{center}\n";

        $codio_latex .=  "\\vspace{0.5cm}\n";
        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .= "\\large{FACULTAD DE LETRAS Y CIENCIAS HUMANAS}\n";
            $codio_latex .= "\\large{UNIDAD DE POSGRADO}\n";
        $codio_latex .=  "\\end{center}\n";

        $codio_latex .=  "\\vspace{0.5cm}\n";
        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .=  "{\large $programa con mencion en $mencion}\\\[0.3cm]\n";
        $codio_latex .=  "\\end{center}\n";

        $codio_latex .=  "\\vspace{0.10cm}\n";
        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .=  "{\huge \bf SILABO}\\\[0.3cm]\n";
        $codio_latex .=  "\\end{center}\n";
        
        $codio_latex .=  "\\vspace{2cm}\n";
        $codio_latex .=  "\\begin{flushleft}\n";
            $codio_latex .=  "Nombre de la asignatura: $nom_asig \\\ \n";
            $codio_latex .=  "Profesor responsable: $nom_doc $ape_doc \\\ \n";
            $codio_latex .=  "Correo Electronico: $correo \\\ \n";
        $codio_latex .=  "\\end{flushleft}\n";

        $codio_latex .=  "\\vspace{2cm}\n";
        $codio_latex .=  "\\begin{center}\n";
            $codio_latex .=  "{\huge \bf $semestre}\\\[0.3cm]\n";
        $codio_latex .=  "\\end{center}\n";
    $codio_latex .=  "\\end{titlepage}\n";
    $codio_latex .=  "\\newpage\n";

    $codio_latex .=  "\\section{INFORMACION GENERAL}\n";
        $codio_latex .=  "1.1. Nombre de la asignatura :$nom_asig \\\ \n";
        $codio_latex .=  "1.2. Tipo de asignatura : $tipo_asig \\\ \n";
        $codio_latex .=  "1.3. Profesor(a) : $nom_doc  \\\ \n";
        $codio_latex .=  "1.4. Programa : $programa \\\ \n";
        $codio_latex .=  "1.5. Mención : $mencion \\\ \n";
        $codio_latex .=  "1.6. Código de asignatura : $cod_asig \\\ \n";
        $codio_latex .=  "1.7. Créditos : $credt_Asig  \\\ \n";
        $codio_latex .=  "1.8. N° de horas semanales : $tmp_asig \\\ \n";
        $codio_latex .=  "1.9. N° de horas por semestre : $tmp_sem horas \\\ \n";
        $codio_latex .=  "1.10. Semestre académico : $semestre \\\ \n";
        $codio_latex .=  "1.11. Duración : $duracion semanas \\\ \n";
        $codio_latex .=  "1.12. Fecha de inicio : $fech_ini \\\ \n";
        $codio_latex .=  "1.13. Fecha de finalización : $fech_fin \\\ \n";
        $codio_latex .=  "1.14. Local y aula : $locaul \\\ \n";
        $codio_latex .=  "1.15. Horario : $horario \\\ \n";

    $codio_latex .=  "\\section{FUNDAMENTOS DE LA ASIGNATURA}\n";
        $codio_latex .=  "\\subsection{Sumilla}\n";
            $codio_latex .=  "$sumilla\n";
        $codio_latex .=  "\\subsection{Competencia General}\n";
            $codio_latex .=  "$comp_gen\n";
        $codio_latex .=  "\\subsection{Competencias Especificas}\n";
            $codio_latex .=  "\\begin{itemize}\n";
            foreach ($items_comp_esp as $item_comp_esp) {
                $item_comp_esp = trim($item_comp_esp); 
                $codio_latex .=  "\\item " . $item_comp_esp . "\n";
            }  
            $codio_latex .=  "\\end{itemize}\n"; 
   
    $codio_latex .=  "\\newpage\n";
    $codio_latex .=  "\\begin{flushleft}\n";
        $codio_latex .=  "{\huge \bf ASIGNATURA}\\\[0.3cm]\n";
    $codio_latex .=  "\\end{flushleft}\n";

    $codio_latex .=  "\\section{CONTENIDO TEMÁTICO}\n";

    $codio_latex .=  "\\subsection{Unidad de aprendizaje I:(\"$und1\")}\n";
    $codio_latex .=  "\\begin{table}[ht]\n";
        $codio_latex .=  "\\centering\n";
        $codio_latex .=  "\\begin{tabular}{|c|c|c|}\n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "Primera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana1 as $item_semana1) {
                    $item_semana1 = trim($item_semana1); 
                    $codio_latex .=  "\\item " . $item_semana1 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana1\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Segunda \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana2 as $item_semana2) {
                    $item_semana2 = trim($item_semana2); 
                    $codio_latex .=  "\\item " . $item_semana2 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana2\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Tercera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana3 as $item_semana3) {
                    $item_semana2 = trim($item_semana3); 
                    $codio_latex .=  "\\item " . $item_semana3 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana3 \\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Cuarta \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana4 as $item_semana4) {
                    $item_semana4 = trim($item_semana4); 
                    $codio_latex .=  "\\item " . $item_semana4 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana4 \\\ \n";
            $codio_latex .=  "\\hline \n";
        $codio_latex .=  "\\end{tabular}\n";
    $codio_latex .=  "\\end{table} \n";

    $codio_latex .=  "\\newpage\n";
    $codio_latex .=  "\\subsection{Unidad de aprendizaje II:(\"$und2\")}\n";
    $codio_latex .=  "\\begin{table}[ht]\n";
        $codio_latex .=  "\\centering\n";
        $codio_latex .=  "\\begin{tabular}{|c|c|c|}\n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "Primera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana5 as $item_semana5) {
                    $item_semana5 = trim($item_semana5); 
                    $codio_latex .=  "\\item " . $item_semana5 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana5\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Segunda \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana6 as $item_semana6) {
                    $item_semana6 = trim($item_semana6); 
                    $codio_latex .=  "\\item " . $item_semana6 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana6\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Tercera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana7 as $item_semana7) {
                    $item_semana7 = trim($item_semana7); 
                    $codio_latex .=  "\\item " . $item_semana7 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana7 \\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Cuarta \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana8 as $item_semana8) {
                    $item_semana4 = trim($item_semana8); 
                    $codio_latex .=  "\\item " . $item_semana8 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana8 \\\ \n";
            $codio_latex .=  "\\hline \n";
        $codio_latex .=  "\\end{tabular}\n";
    $codio_latex .=  "\\end{table}\n";

    $codio_latex .=  "\\newpage\n";
    $codio_latex .=  "\\subsection{Unidad de aprendizaje III:(\"$und3\")}\n";
    $codio_latex .=  "\\begin{table}[ht]\n";
        $codio_latex .=  "\\centering\n";
        $codio_latex .=  "\\begin{tabular}{|c|c|c|}\n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "Primera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana9 as $item_semana9) {
                    $item_semana9 = trim($item_semana9); 
                    $codio_latex .=  "\\item " . $item_semana9 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana9\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Segunda \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana10 as $item_semana10) {
                    $item_semana10 = trim($item_semana10); 
                    $codio_latex .=  "\\item " . $item_semana10 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana10\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Tercera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana11 as $item_semana11) {
                    $item_semana11 = trim($item_semana11); 
                    $codio_latex .=  "\\item " . $item_semana11 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana11 \\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Cuarta \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana12 as $item_semana12) {
                    $item_semana12 = trim($item_semana12); 
                    $codio_latex .=  "\\item " . $item_semana12 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana12 \\\ \n";
            $codio_latex .=  "\\hline \n";
        $codio_latex .=  "\\end{tabular}\n";
    $codio_latex .=  "\\end{table}\n";

    $codio_latex .=  "\\newpage\n";
    $codio_latex .=  "\\subsection{Unidad de aprendizaje IV:(\"$und4\")}\n";
    $codio_latex .=  "\\begin{table}[ht]\n";
        $codio_latex .=  "\\centering\n";
        $codio_latex .=  "\\begin{tabular}{|c|c|c|}\n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "\\textbf{Semana} & \\textbf{Temas} & \\textbf{Fecha} \\\ \n";
            $codio_latex .=  "\\hline\n";
                $codio_latex .=  "Primera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana13 as $item_semana13) {
                    $item_semana13 = trim($item_semana13); 
                    $codio_latex .=  "\\item " . $item_semana13 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana13\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Segunda \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana14 as $item_semana14) {
                    $item_semana14 = trim($item_semana14); 
                    $codio_latex .=  "\\item " . $item_semana14 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana14\\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Tercera \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana15 as $item_semana15) {
                    $item_semana15 = trim($item_semana15); 
                    $codio_latex .=  "\\item " . $item_semana15 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana15 \\\ \n";
            $codio_latex .=  "\\hline \n";
                $codio_latex .=  "Cuarta \n";
                $codio_latex .=  "& \begin{minipage}[t]{10cm}\n";
                $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_semana16 as $item_semana16) {
                    $item_semana16 = trim($item_semana16); 
                    $codio_latex .=  "\\item " . $item_semana16 . "\n";
                }
                $codio_latex .=  "\\end{itemize}\n";
                $codio_latex .=  "\\end{minipage} & $fecha_semana16 \\\ \n";
            $codio_latex .=  "\\hline \n";
        $codio_latex .=  "\\end{tabular}\n";
    $codio_latex .=  "\\end{table}\n";
    $codio_latex .=  "{\huge \bf REFERENCIAS}\\\[0.3cm]\n";
    $codio_latex .=  "\\begin{itemize}\n";
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
                $codio_latex .=  "\\item $texto_sin_url (\\url{{$url}})\n";
            } else {
                // Si no se encuentra una URL, simplemente imprime el ítem de referencia sin modificaciones
                $codio_latex .=  "\\item $item_referencia\n";
            }
        }
    $codio_latex .=  "\\end{itemize}\n";

    $codio_latex .=  "{\huge \bf Recursos electrónicos:}\\\[0.3cm]\n";

    $codio_latex .=  "\\begin{itemize}\n";
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
                $codio_latex .=  "\\item $texto_sin_url (\\url{{$url}})\n";
            } else {
                // Si no se encuentra una URL, simplemente imprime el ítem de referencia sin modificaciones
                $codio_latex .=  "\\item $item_rec_elc\n";
            }
        }
    $codio_latex .=  "\\end{itemize}\n";

    $codio_latex .=  "\\section {ESTRATEGIAS METODOLÓGICAS}\n";
        $codio_latex .=  "\\begin{itemize}\n";
            foreach ($items_estr_met as $item_estr_met) {
                $item_estr_met = trim($item_estr_met); 
                $codio_latex .=  "\\item " . $item_estr_met . "\n";
            }  
        $codio_latex .=  "\\end{itemize}\n";
        $codio_latex .=  "\\begin{itemize}\n";
            foreach ($items_estr_met_util as $item_estr_met_util) {
                $item_estr_met_util = trim($item_estr_met_util); 
                $codio_latex .=  "\\item " . $item_estr_met_util . "\n";
            }  
        $codio_latex .=  "\\end{itemize}\n";
    $codio_latex .=  "\\section {ESTRATEGIAS DE EVALUACIÓN}\n";
        $codio_latex .=  "\\subsection {Modalidades de evaluación:}\n";
            $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_modali_eva as $item_modali_eva) {
                    $item_modali_eva = trim($item_modali_eva); 
                    $codio_latex .=  "\\item " . $item_modali_eva . "\n";
                }  
            $codio_latex .=  "\\end{itemize}\n"; 
        $codio_latex .=  "\\subsection {Criterios de evaluación:}\n";
        $codio_latex .=  "\\begin{table}[ht]\n";
            $codio_latex .=  "\\centering\n";
                $codio_latex .=  "\\begin{tabular}{|c|c|}\n";
                    $codio_latex .=  "\\hline\n";
                        $codio_latex .=  "\\textbf{Modalidades} & \\textbf{Porcentaje} \\\ \n";
                    $codio_latex .=  "\\hline\n";
                        $codio_latex .=  "1. Asistencia a clases virtuales y participación en el debate semanal & $nota1\% \\\ \n";
                    $codio_latex .=  "\\hline\n";
                        $codio_latex .=  "2. Exposición de la lectura asignada & $nota2\% \\\ \n";
                    $codio_latex .=  "\\hline\n";
                        $codio_latex .=  "3. Reseñas & $nota3\% \\\ \n";
                    $codio_latex .=  "\\hline\n";
                        $codio_latex .=  "Total & 100\% \\\ \n";
                    $codio_latex .=  "\\hline \n";
                $codio_latex .=  "\\end{tabular}\n";
        $codio_latex .=  "\\end{table}\n";
        $codio_latex .=  "\\subsection {Obtención del promedio final:}\n";
            $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_prom_fin as $item_prom_fin) {
                    $item_prom_fin = trim($item_prom_fin); 
                    $codio_latex .=  "\\item " . $item_prom_fin . "\n";
                }  
                $codio_latex .=  "\\end{itemize}\n";
        $codio_latex .=  "\\subsection {Requisitos para aprobar la asignatura:}\n";
            $codio_latex .=  "\\begin{itemize}\n";
                foreach ($items_requisitos as $item_requisito) {
                    $item_requisito = trim($item_requisito); 
                    $codio_latex .=  "\\item " . $item_requisito . "\n";
                }  
                $codio_latex .=  "\\end{itemize}\n";
        $codio_latex .=  "\\begin{flushright}\n";
        $codio_latex .=  "Ciudad Universitaria, 06 de abril de 2022\n";
        $codio_latex .=  "\\end{flushright}\n";    
    $codio_latex .=  "\\end{document}\n";
    
} else {
    echo "No se encontraron resultados.";
}
$archivo_latex = fopen("../Documentos/codigo_latex_silabo.tex", "w");
fwrite($archivo_latex, $codio_latex);
fclose($archivo_latex);
$conexion->close();

$archivo_pdf = '../Documentos/build/codigo_latex_silabo.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $archivo_pdf . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');

@readfile($archivo_pdf);

?>
