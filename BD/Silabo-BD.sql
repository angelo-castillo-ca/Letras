-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: posgrado
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `asignatura`
--

DROP TABLE IF EXISTS `asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asignatura` (
  `IdAsignatura` mediumint NOT NULL AUTO_INCREMENT,
  `Codigo` varchar(10) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Credito` varchar(2) NOT NULL,
  `Ciclo` varchar(5) NOT NULL,
  `Tiempo` varchar(8) NOT NULL,
  `IdFacultad` mediumint NOT NULL,
  `Grado` varchar(10) NOT NULL,
  `Tipo` varchar(60) NOT NULL,
  `Programa` varchar(50) NOT NULL,
  `Mencion` varchar(50) NOT NULL,
  PRIMARY KEY (`IdAsignatura`),
  KEY `IdFacultad` (`IdFacultad`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asignatura`
--

LOCK TABLES `asignatura` WRITE;
/*!40000 ALTER TABLE `asignatura` DISABLE KEYS */;
INSERT INTO `asignatura` (`IdAsignatura`, `Codigo`, `Nombre`, `Credito`, `Ciclo`, `Tiempo`, `IdFacultad`, `Grado`, `Tipo`, `Programa`, `Mencion`) VALUES (1,'L76110','Seminarito de Literatura Latinoamericana I','4','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(2,'L76113','Seminarito de Literatura Peruana I','4','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(3,'L76115','Seminario de Tesis I','6','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(4,'L76120','Seminarito de Literatura Latinoamericana II','4','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(5,'L76123','Seminarito de Literatura Peruana II','4','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(6,'L202A121','Seminario de Tesis II','8','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(7,'L2021131','Seminarito de los problema contemporaneos de los estudios literarios','4','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(8,'L76131','Seminarito de Literatura Peruana III','4','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(9,'L2021132','Seminario de Tesis III','12','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(10,'L2021142','Seminarito de Literatura Latinoamericana III','4','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(11,'L2021141','Seminarito de Temas Emergentes de los Temas Literarios','4','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(12,'L2021143','Seminario de Tesis IV','14','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),(13,'L202B111','Teorias Culturales de America Latina','4','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(14,'L202B112','Introduccion a los Estudios Culturales','4','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(15,'L76214','Seminario de Tesis I','6','I','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(16,'L76220','Teorias Culturales del Perú','4','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(17,'L202B121','Teorias Poscoloniales','4','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(18,'L76125','Seminario de Tesis II','8','II','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(19,'L202B131','Seminario de Tesis III','12','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(20,'L76234','Seminarito de Literatura e Historia en Latino America','4','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(21,'L202B132','Culturas Tradicionales y Contextos Contemporaneos','4','III','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(22,'L202B141','Seminarito sobre Memoria e Identidades en America Latina','4','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(23,'L202B142','Seminario de Tesis IV','14','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),(24,'L202B143','Seminario de TLiteratura e Historia en el Peru','4','IV','3 horas',1,'Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales');
/*!40000 ALTER TABLE `asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `docente`
--

DROP TABLE IF EXISTS `docente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `docente` (
  `IdDocente` mediumint NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Apellido` varchar(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `DNI` varchar(8) NOT NULL,
  `Tipo` varchar(15) NOT NULL,
  PRIMARY KEY (`IdDocente`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `docente`
--

LOCK TABLES `docente` WRITE;
/*!40000 ALTER TABLE `docente` DISABLE KEYS */;
INSERT INTO `docente` (`IdDocente`, `Nombre`, `Apellido`, `Correo`, `DNI`, `Tipo`) VALUES (1,'Helton','Honores','ehonoresv@unmsm.edu.pe','74589658','Nombrado'),(2,'Emma Patricia','Victorio Cánobas','evictorioc@unmsm.edu.pe','12546358','Nombrado'),(3,'Elizabeth','Huisa Veria','ehuisav@unmsm.edu.pe','02365898','Nombrado'),(4,'Carlos Manuel','Vilchez Roman','cvilchez@unmsm.edu.pe','88752648','Nombrado'),(5,'Janet','Villegas Arteaga','jvillegasa@unmsm.edu.pe','98546523','Nombrado'),(6,'Gloria Olivia','Rodriguez Garay','grodrigu@uacj.mx','89654126','Nombrado'),(7,'Carlos Enrique','Fernandez Garcia','carlosenrique.fernandez@unmsm.edu.pe','98546523','Nombrado'),(8,'Amelia','Puga Hoyos','AmeliaP@unmsm.edu.pe','84554236','Nombrado'),(9,'Dan','Amador Andrés','DanA@unmsm.edu.pe','89659865','Contratado'),(10,'Joel','Menéndez Matas','JoelM@unmsm.edu.pe','2133589','Contratado'),(11,'Aristides','Segarra Ballester','AristidesS@unmsm.edu.pe','36985426','Contratado'),(12,'Eric','de Escamilla','Ericd@unmsm.edu.pe','12365899','Contratado'),(13,'Emma','de Donaire','Emmad@unmsm.edu.pe','84563259','Contratado'),(14,'Pepe','Navas Palomares','PepeN@unmsm.edu.pe','98563254','Contratado'),(15,'Román','Barco Mas','RománB@unmsm.edu.pe','01201035','Contratado'),(16,'Marco','Peláez Uría','MarcoP@unmsm.edu.pe','21321565','Contratado'),(17,'Tania','Agullo Rovira','TaniaA@unmsm.edu.pe','65023158','Contratado'),(18,'Leire','Villena Ariza','LeireV@unmsm.edu.pe','54513216','Contratado'),(19,'Teodora','Oliveras Roca','TeodoraO@unmsm.edu.pe','23132416','Nombrado'),(20,'Serafina','Roma-Ayuso','SerafinaR@unmsm.edu.pe','22314858','Nombrado'),(21,'Paulina','Costa Albero','PaulinaC@unmsm.edu.pe','58965489','Nombrado'),(22,'Felicia','Corominas Almansa','FeliciaC@unmsm.edu.pe','54879321','Nombrado'),(23,'Armida','Adán Galván','ArmidaA@unmsm.edu.pe','21585489','Nombrado');
/*!40000 ALTER TABLE `docente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctorado`
--

DROP TABLE IF EXISTS `doctorado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctorado` (
  `IdDoctorado` mediumint NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdDoctorado`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctorado`
--

LOCK TABLES `doctorado` WRITE;
/*!40000 ALTER TABLE `doctorado` DISABLE KEYS */;
INSERT INTO `doctorado` (`IdDoctorado`, `Nombre`) VALUES (1,'Doctorado en Literatura'),(2,'Doctorado en Filosofia');
/*!40000 ALTER TABLE `doctorado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `facultad`
--

DROP TABLE IF EXISTS `facultad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `facultad` (
  `IdFacultad` mediumint NOT NULL AUTO_INCREMENT,
  `NombreFacultad` varchar(50) NOT NULL,
  PRIMARY KEY (`IdFacultad`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `facultad`
--

LOCK TABLES `facultad` WRITE;
/*!40000 ALTER TABLE `facultad` DISABLE KEYS */;
INSERT INTO `facultad` (`IdFacultad`, `NombreFacultad`) VALUES (1,'Facultad de Letras');
/*!40000 ALTER TABLE `facultad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestria`
--

DROP TABLE IF EXISTS `maestria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestria` (
  `IdMaestria` mediumint NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`IdMaestria`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestria`
--

LOCK TABLES `maestria` WRITE;
/*!40000 ALTER TABLE `maestria` DISABLE KEYS */;
INSERT INTO `maestria` (`IdMaestria`, `Nombre`) VALUES (1,'Maestria en Literatura'),(2,'Maestria en Filosofia');
/*!40000 ALTER TABLE `maestria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `silabo`
--

DROP TABLE IF EXISTS `silabo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `silabo` (
  `IdSilabo` mediumint NOT NULL AUTO_INCREMENT,
  `IdFacultad` mediumint NOT NULL,
  `IdAsignatura` mediumint NOT NULL,
  `IdDocente` mediumint NOT NULL,
  `Semestre` varchar(8) NOT NULL,
  `Duracion` varchar(2) NOT NULL,
  `FechaInicio` varchar(20) NOT NULL,
  `FechaFin` varchar(20) NOT NULL,
  `LocAul` varchar(30) NOT NULL,
  `Horario` varchar(30) NOT NULL,
  `Sumilla` varchar(1100) NOT NULL,
  `CompetenciaGeneral` varchar(100) NOT NULL,
  `CompetenciasEspecificas` varchar(200) NOT NULL,
  `Unidad1` varchar(100) NOT NULL,
  `Semana1` varchar(300) NOT NULL,
  `Semana2` varchar(300) NOT NULL,
  `Semana3` varchar(300) NOT NULL,
  `Semana4` varchar(300) NOT NULL,
  `Unidad2` varchar(100) NOT NULL,
  `Semana5` varchar(300) NOT NULL,
  `Semana6` varchar(300) NOT NULL,
  `Semana7` varchar(300) NOT NULL,
  `Semana8` varchar(300) NOT NULL,
  `Unidad3` varchar(100) NOT NULL,
  `Semana9` varchar(300) NOT NULL,
  `Semana10` varchar(300) NOT NULL,
  `Semana11` varchar(300) NOT NULL,
  `Semana12` varchar(300) NOT NULL,
  `Unidad4` varchar(100) NOT NULL,
  `Semana13` varchar(300) NOT NULL,
  `Semana14` varchar(300) NOT NULL,
  `Semana15` varchar(300) NOT NULL,
  `Semana16` varchar(300) NOT NULL,
  `Referencias` varchar(5000) NOT NULL,
  `RecursosElectronicos` varchar(100) NOT NULL,
  `EstrategiasMetologias` varchar(500) NOT NULL,
  `EstrategiasMetologiasUtil` varchar(500) NOT NULL,
  `ModaliEvaluacion` varchar(500) NOT NULL,
  `Nota1` varchar(10) NOT NULL,
  `Nota2` varchar(10) NOT NULL,
  `Nota3` varchar(10) NOT NULL,
  `PromFin` varchar(100) NOT NULL,
  `Requisitos` varchar(200) NOT NULL,
  PRIMARY KEY (`IdSilabo`),
  KEY `IdFacultad` (`IdFacultad`),
  KEY `IdAsignatura` (`IdAsignatura`),
  KEY `IdDocente` (`IdDocente`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `silabo`
--

LOCK TABLES `silabo` WRITE;
/*!40000 ALTER TABLE `silabo` DISABLE KEYS */;
INSERT INTO `silabo` (`IdSilabo`, `IdFacultad`, `IdAsignatura`, `IdDocente`, `Semestre`, `Duracion`, `FechaInicio`, `FechaFin`, `LocAul`, `Horario`, `Sumilla`, `CompetenciaGeneral`, `CompetenciasEspecificas`, `Unidad1`, `Semana1`, `Semana2`, `Semana3`, `Semana4`, `Unidad2`, `Semana5`, `Semana6`, `Semana7`, `Semana8`, `Unidad3`, `Semana9`, `Semana10`, `Semana11`, `Semana12`, `Unidad4`, `Semana13`, `Semana14`, `Semana15`, `Semana16`, `Referencias`, `RecursosElectronicos`, `EstrategiasMetologias`, `EstrategiasMetologiasUtil`, `ModaliEvaluacion`, `Nota1`, `Nota2`, `Nota3`, `PromFin`, `Requisitos`) VALUES (9,1,4,14,'2022-I','15','2023-12-29','2024-12-12','asdfsad','xxczxc','El estudiante con  de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.\r\nEl estudiante con 30de inasistencias no será evaluado.\r\nEl estudiante con 30de inasistencias no será evaluado.\r\nEl estudiante con 30de inasistencias no será evalu\r\nEl estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudiante con 30de inasistencias no será evaluado.','El estudia','25','50','25','El estudiante con 30de inasistencias no será evaluado.');
/*!40000 ALTER TABLE `silabo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `IdUser` mediumint NOT NULL AUTO_INCREMENT,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(15) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`IdUser`, `Correo`, `Contraseña`) VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-23  5:02:02
