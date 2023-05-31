DROP DATABASE IF EXISTS Posgrado;
CREATE DATABASE Posgrado;
USE Posgrado;

CREATE TABLE Usuario(
    IdUser MEDIUMINT NOT NULL AUTO_INCREMENT,
    Correo VARCHAR(50) NOT NULL,
    Contraseña VARCHAR(15) NOT NULL,
    PRIMARY KEY (IdUser)
);
CREATE TABLE Facultad(
	IdFacultad MEDIUMINT NOT NULL AUTO_INCREMENT,
	NombreFacultad VARCHAR(50) NOT NULL,
	PRIMARY KEY (IdFacultad)
);

CREATE TABLE Asignatura(
	IdAsignatura MEDIUMINT NOT NULL AUTO_INCREMENT,
    Codigo VARCHAR(10) NOT NULL,
	Nombre VARCHAR(100) NOT NULL,
	Credito	VARCHAR(2) NOT NULL,
    Ciclo VARCHAR(5) NOT NULL,
	Tiempo VARCHAR(10) NOT NULL,
    IdFacultad MEDIUMINT NOT NULL,
    Grado VARCHAR(10) NOT NULL,
	Tipo VARCHAR(60) NOT NULL,
    Programa VARCHAR(50) NOT NULL,
    Mencion VARCHAR(50) NOT NULL,
    PRIMARY KEY(IdAsignatura),
    FOREIGN KEY (IdFacultad) REFERENCES Facultad(IdFacultad)
);

CREATE TABLE Docente(
	IdDocente MEDIUMINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(30) NOT NULL,
    Apellido VARCHAR(30) NOT NULL,
    Correo VARCHAR(50) NOT NULL,
    DNI VARCHAR(8) NOT NULL,
    Tipo VARCHAR(15) NOT NULL,
    PRIMARY KEY(IdDocente)
);

CREATE TABLE Maestria(
    IdMaestria MEDIUMINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(50) NOT NULL,
    PRIMARY KEY (IdMaestria)
);

CREATE TABLE Doctorado(
    IdDoctorado MEDIUMINT NOT NULL AUTO_INCREMENT,
    Nombre VARCHAR(50) NOT NULL,
    PRIMARY KEY (IdDoctorado)
);

CREATE TABLE Silabo(
    IdSilabo MEDIUMINT NOT NULL AUTO_INCREMENT,
    IdFacultad MEDIUMINT NOT NULL,
    IdAsignatura MEDIUMINT NOT NULL,
    IdDocente MEDIUMINT NOT NULL,
    Semestre VARCHAR(8) NOT NULL,
    Duracion VARCHAR(2) NOT NULL,
    FechaInicio VARCHAR(20) NOT NULL,
    FechaFin VARCHAR(20) NOT NULL,
    LocAul VARCHAR(30) NOT NULL,
    Horario VARCHAR(30) NOT NULL,
    Sumilla VARCHAR(100) NOT NULL,
    CompetenciaGeneral VARCHAR(100) NOT NULL,
    CompetenciasEspecificas VARCHAR(200) NOT NULL,
    Unidad1 VARCHAR(50) NOT NULL,
    Semana1 VARCHAR(300) NOT NULL,
    Semana2 VARCHAR(300) NOT NULL,
    Semana3 VARCHAR(300) NOT NULL,
    Semana4 VARCHAR(300) NOT NULL,
    Unidad2 VARCHAR(50) NOT NULL,
    Semana5 VARCHAR(300) NOT NULL,
    Semana6 VARCHAR(300) NOT NULL,
    Semana7 VARCHAR(300) NOT NULL,
    Semana8 VARCHAR(300) NOT NULL,
    Unidad3 VARCHAR(50) NOT NULL,
    Semana9 VARCHAR(300) NOT NULL,
    Semana10 VARCHAR(300) NOT NULL,
    Semana11 VARCHAR(300) NOT NULL,
    Semana12 VARCHAR(300) NOT NULL,
    Unidad4 VARCHAR(50) NOT NULL,
    Semana13 VARCHAR(300) NOT NULL,
    Semana14 VARCHAR(300) NOT NULL,
    Semana15 VARCHAR(300) NOT NULL,
    Semana16 VARCHAR(300) NOT NULL,
    Referencias VARCHAR(1000) NOT NULL,
    RecursosElectronicos VARCHAR(100) NOT NULL,
    EstrategiasMetologias VARCHAR(100) NOT NULL,
    EstrategiasMetologiasUtil VARCHAR(100) NOT NULL,
    ModaliEvaluacion VARCHAR(100) NOT NULL,
    Nota1 VARCHAR(10) NOT NULL,
    Nota2 VARCHAR(10) NOT NULL,
    Nota3 VARCHAR(10) NOT NULL,
    PromFin VARCHAR(20) NOT NULL,
    Requisitos VARCHAR(50) NOT NULL,
    PRIMARY KEY(IdSilabo),
    FOREIGN KEY(IdFacultad) REFERENCES Facultad(IdFacultad),
    FOREIGN KEY(IdAsignatura) REFERENCES Asignatura(IdAsignatura),
    FOREIGN KEY(IdDocente) REFERENCES Docente(IdDocente)
);

INSERT INTO Usuario(Correo, Contraseña)
VALUES
    ('admin','admin');
INSERT INTO Facultad(NombreFacultad)
VALUES
    ('Facultad de Letras');

INSERT INTO Asignatura(Codigo,Nombre,Credito,Ciclo,Tiempo,IdFacultad,Grado,Tipo,Programa,Mencion)
VALUES
    ('L76110','Seminarito de Literatura Latinoamericana I','4','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L76113','Seminarito de Literatura Peruana I','4','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L76115','Seminario de Tesis I','6','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L76120','Seminarito de Literatura Latinoamericana II','4','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L76123','Seminarito de Literatura Peruana II','4','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L202A121','Seminario de Tesis II','8','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L2021131','Seminarito de los problema contemporaneos de los estudios literarios','4','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L76131','Seminarito de Literatura Peruana III','4','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L2021132','Seminario de Tesis III','12','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L2021142','Seminarito de Literatura Latinoamericana III','4','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L2021141','Seminarito de Temas Emergentes de los Temas Literarios','4','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L2021143','Seminario de Tesis IV','14','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Literatura Peruana y LatinoAmericana'),
    ('L202B111','Teorias Culturales de America Latina','4','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B112','Introduccion a los Estudios Culturales','4','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L76214','Seminario de Tesis I','6','I','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L76220','Teorias Culturales del Perú','4','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B121','Teorias Poscoloniales','4','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L76125','Seminario de Tesis II','8','II','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B131','Seminario de Tesis III','12','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L76234','Seminarito de Literatura e Historia en Latino America','4','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B132','Culturas Tradicionales y Contextos Contemporaneos','4','III','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B141','Seminarito sobre Memoria e Identidades en America Latina','4','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B142','Seminario de Tesis IV','14','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales'),
    ('L202B143','Seminario de TLiteratura e Historia en el Peru','4','IV','3 horas','1','Maestria','Profundizacion o Investigacion','Maestria en Literatura','Estudio Culturales');

INSERT INTO Docente(Nombre,Apellido,Correo,DNI,Tipo)
VALUES
    ('Helton','Honores','ehonoresv@unmsm.edu.pe','74589658','Nombrado'),
    ('Emma Patricia','Victorio Cánobas','evictorioc@unmsm.edu.pe','12546358','Nombrado'),
    ('Elizabeth','Huisa Veria','ehuisav@unmsm.edu.pe','02365898','Nombrado'),
    ('Carlos Manuel','Vilchez Roman','cvilchez@unmsm.edu.pe','88752648','Nombrado'),
    ('Janet','Villegas Arteaga','jvillegasa@unmsm.edu.pe','98546523','Nombrado'),
    ('Gloria Olivia','Rodriguez Garay','grodrigu@uacj.mx','89654126','Nombrado'),
    ('Carlos Enrique','Fernandez Garcia','carlosenrique.fernandez@unmsm.edu.pe','98546523','Nombrado'),

    ('Amelia','Puga Hoyos','AmeliaP@unmsm.edu.pe','84554236','Nombrado'),
    ('Dan','Amador Andrés','DanA@unmsm.edu.pe','89659865','Contratado'),
    ('Joel','Menéndez Matas','JoelM@unmsm.edu.pe','2133589','Contratado'),
    ('Aristides','Segarra Ballester','AristidesS@unmsm.edu.pe','36985426','Contratado'),
    ('Eric','de Escamilla','Ericd@unmsm.edu.pe','12365899','Contratado'),
    ('Emma','de Donaire','Emmad@unmsm.edu.pe','84563259','Contratado'),
    ('Pepe','Navas Palomares','PepeN@unmsm.edu.pe','98563254','Contratado'),
    ('Román','Barco Mas','RománB@unmsm.edu.pe','01201035','Contratado'),

    ('Marco','Peláez Uría','MarcoP@unmsm.edu.pe','21321565','Contratado'),
    ('Tania','Agullo Rovira','TaniaA@unmsm.edu.pe','65023158','Contratado'),
    ('Leire','Villena Ariza','LeireV@unmsm.edu.pe','54513216','Contratado'),
    ('Teodora','Oliveras Roca','TeodoraO@unmsm.edu.pe','23132416','Nombrado'),
    ('Serafina','Roma-Ayuso','SerafinaR@unmsm.edu.pe','22314858','Nombrado'),
    ('Paulina','Costa Albero','PaulinaC@unmsm.edu.pe','58965489','Nombrado'),
    ('Felicia','Corominas Almansa','FeliciaC@unmsm.edu.pe','54879321','Nombrado'),
    ('Armida','Adán Galván','ArmidaA@unmsm.edu.pe','21585489','Nombrado');

INSERT INTO Maestria(Nombre)
VALUES
    ('Maestria en Literatura'),
    ('Maestria en Filosofia');

INSERT INTO Doctorado(Nombre)
VALUES
    ('Doctorado en Literatura'),
    ('Doctorado en Filosofia');

SELECT IdFacultad FROM Facultad WHERE NombreFacultad='Facultad de Letras';

