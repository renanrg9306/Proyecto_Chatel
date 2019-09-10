DROP TABLE IF EXISTS asignaciones;

CREATE TABLE `asignaciones` (
  `idAsignaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(300) NOT NULL,
  `Estado` varchar(45) DEFAULT NULL,
  `Asignaciones` varchar(45) DEFAULT NULL,
  `NumeroAsignacion` int(11) NOT NULL,
  `Profesor_idProfesor` int(11) NOT NULL,
  `Grupo_idGrupo` int(11) NOT NULL,
  PRIMARY KEY (`idAsignaciones`),
  KEY `fk_Asignaciones_Profesor1_idx` (`Profesor_idProfesor`),
  KEY `fk_Asignaciones_Grupo1_idx` (`Grupo_idGrupo`),
  CONSTRAINT `fk_Asignaciones_Grupo1` FOREIGN KEY (`Grupo_idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Asignaciones_Profesor1` FOREIGN KEY (`Profesor_idProfesor`) REFERENCES `profesor` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS entregatarea;

CREATE TABLE `entregatarea` (
  `idEntregaTarea` int(11) NOT NULL AUTO_INCREMENT,
  `Estudiantes_idEstudiantes` int(11) NOT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `CodigoTareaProfesor` int(11) NOT NULL,
  `CodigoEnvioTarea` int(11) NOT NULL,
  `Archivo` varchar(200) DEFAULT NULL,
  `FechaEntrega` date DEFAULT NULL,
  PRIMARY KEY (`idEntregaTarea`),
  KEY `fk_EntregaTarea_Estudiantes1_idx` (`Estudiantes_idEstudiantes`),
  CONSTRAINT `fk_EntregaTarea_Estudiantes1` FOREIGN KEY (`Estudiantes_idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS estudiantes;

CREATE TABLE `estudiantes` (
  `idEstudiantes` int(11) NOT NULL AUTO_INCREMENT,
  `NombresEstudiante` varchar(50) NOT NULL,
  `ApellidosEstudiante` varchar(50) NOT NULL,
  `CarnetEstudiante` varchar(45) NOT NULL,
  `CedulaEstudiante` varchar(16) NOT NULL,
  `CelularEstudiante` varchar(8) NOT NULL,
  `TelefonoEstudiante` varchar(8) NOT NULL,
  `DireccionEstudiante` varchar(250) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Nota` int(11) DEFAULT NULL,
  `Grupo_idGrupo` int(11) NOT NULL,
  `CorreoEstudiante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEstudiantes`),
  KEY `fk_Estudiantes_Grupo1_idx` (`Grupo_idGrupo`),
  CONSTRAINT `fk_Estudiantes_Grupo1` FOREIGN KEY (`Grupo_idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO estudiantes VALUES("1","Alejandrito Gabriel","Aguilar Tellez","2011-37379","001-0209910027k","89995359","22891201","Rto Schick III","1","","","1","aguilar0991@hotmail.com");
INSERT INTO estudiantes VALUES("2","Carlos Renato","Hernandez Rivas","2011-37373","001-040890-0044g","12345678","22891202","Las colinas","1","","","1","rnato@hotmail.com");
INSERT INTO estudiantes VALUES("3","Yasser Edsel","Lopez Herrera","2011-34357","001-020592-0035g","12345678","22891203","Los brasiles","1","","","1","yedsel@hotmail.com");
INSERT INTO estudiantes VALUES("4","Jose Antonio","Urbina Gutierrez","2011-35241","001-010190-0024l","12345678","22891204","Bo Cuba","1","","","1","antonio@hotmail.com");
INSERT INTO estudiantes VALUES("5","Ricardo Jose","Bird Lopez","2011-38854","001-020304-0024h","12345678","22891205","Carretera Masaya","1","","","2","Bird@gmail.com");
INSERT INTO estudiantes VALUES("6","Jorge Luis","Carballo Lacayo","2011-39987","001-121291-0021h","12345678","22891206","Malecon de managua","1","","","2","jluis@gmail.com");
INSERT INTO estudiantes VALUES("7","Maria Alejandra","Taleno Maltez","2011-39944","001-051090-0023h","12345678","22891207","Primero de mayo","1","","","2","mataleno@gmail.com");
INSERT INTO estudiantes VALUES("8","Luis Alberto","Morales Silva","2011-39521","001-010285-0023h","12345678","22891208","Boaco ciudad de dos pisos","1","","","2","lmorales@gmail.com");
INSERT INTO estudiantes VALUES("9","Zadira Roca","roca","50003504","001-0209910027k","89995389","22478222","tola rivas","1","images/fotos_perfil/perfil.jpg","","3","zado@gmail.com");
INSERT INTO estudiantes VALUES("10","Juan Pablo","Aguilar Tellez","50003504","362-040489-0000w","23455","22891201","fgbmdkfgnmhkdf","1","images/fotos_perfil/perfil.jpg","","1","elier.aries@gmail.com");


DROP TABLE IF EXISTS evaluaciones;

CREATE TABLE `evaluaciones` (
  `idEvaluaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(300) NOT NULL,
  `idEstudiantes` int(11) NOT NULL,
  `Unidad` varchar(50) DEFAULT NULL,
  `Tarea` varchar(45) DEFAULT NULL,
  `Puntaje` int(11) NOT NULL,
  `FechaEvaluacion` date NOT NULL,
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idEvaluaciones`),
  KEY `idEstudiantes_idx` (`idEstudiantes`),
  KEY `idProfesor_idx` (`idProfesor`),
  CONSTRAINT `idEstudiantes` FOREIGN KEY (`idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS examenes;

CREATE TABLE `examenes` (
  `idExamenes` int(11) NOT NULL AUTO_INCREMENT,
  `NombreExamenes` varchar(100) NOT NULL,
  `NotaExamen` int(11) NOT NULL,
  `Estudiantes_idEstudiantes` int(11) NOT NULL,
  `Evaluaciones_idEvaluaciones` int(11) NOT NULL,
  PRIMARY KEY (`idExamenes`),
  KEY `fk_Examenes_Estudiantes1_idx` (`Estudiantes_idEstudiantes`),
  KEY `fk_Examenes_Evaluaciones1_idx` (`Evaluaciones_idEvaluaciones`),
  CONSTRAINT `fk_Examenes_Estudiantes1` FOREIGN KEY (`Estudiantes_idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Examenes_Evaluaciones1` FOREIGN KEY (`Evaluaciones_idEvaluaciones`) REFERENCES `evaluaciones` (`idEvaluaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS grupo;

CREATE TABLE `grupo` (
  `idGrupo` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroGrupo` varchar(60) NOT NULL,
  `NombreGrupo` varchar(100) NOT NULL,
  PRIMARY KEY (`idGrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO grupo VALUES("1","1","G1");
INSERT INTO grupo VALUES("2","2","G2");
INSERT INTO grupo VALUES("3","3","G3");
INSERT INTO grupo VALUES("4","4","G4");
INSERT INTO grupo VALUES("5","4","G4");


DROP TABLE IF EXISTS laboratorios;

CREATE TABLE `laboratorios` (
  `idLaboratorios` int(11) NOT NULL AUTO_INCREMENT,
  `NombreLaboratorio` varchar(45) NOT NULL,
  `NotaLaboratorio` int(11) NOT NULL,
  `Estudiantes_idEstudiantes` int(11) NOT NULL,
  `Evaluaciones_idEvaluaciones` int(11) NOT NULL,
  PRIMARY KEY (`idLaboratorios`),
  KEY `fk_Laboratorios_Estudiantes1_idx` (`Estudiantes_idEstudiantes`),
  KEY `fk_Laboratorios_Evaluaciones1_idx` (`Evaluaciones_idEvaluaciones`),
  CONSTRAINT `fk_Laboratorios_Estudiantes1` FOREIGN KEY (`Estudiantes_idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Laboratorios_Evaluaciones1` FOREIGN KEY (`Evaluaciones_idEvaluaciones`) REFERENCES `evaluaciones` (`idEvaluaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS mensajes;

CREATE TABLE `mensajes` (
  `idMensajes` int(11) NOT NULL AUTO_INCREMENT,
  `Remitente` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Mensaje` varchar(500) NOT NULL,
  `FechaEnvio` date NOT NULL,
  PRIMARY KEY (`idMensajes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS niveles;

CREATE TABLE `niveles` (
  `idNiveles` int(11) NOT NULL AUTO_INCREMENT,
  `NombreNivel` varchar(50) NOT NULL,
  PRIMARY KEY (`idNiveles`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO niveles VALUES("1","Administrador");
INSERT INTO niveles VALUES("2","Profesor");
INSERT INTO niveles VALUES("3","Estudiante");
INSERT INTO niveles VALUES("4","Estudiante");


DROP TABLE IF EXISTS profesor;

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `NombresProfesor` varchar(50) NOT NULL,
  `ApellidosProfesor` varchar(50) NOT NULL,
  `CedulaProfesor` varchar(16) NOT NULL,
  `CorreoProfesor` varchar(45) NOT NULL,
  `CelularProfesor` varchar(8) NOT NULL,
  `TelefonoProfesor` varchar(8) NOT NULL,
  `DireccionProfesor` varchar(250) NOT NULL,
  `Estado` int(2) DEFAULT NULL,
  `Foto` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO profesor VALUES("1","Jorge ","Prado Delgadillo","001-090280-0024h","prado@hotmail.com","83514221","22741424","Managua Nicaragua uni","1","");
INSERT INTO profesor VALUES("3","Alejandrito Gabriel","aguilar Tellez","0010902910027k","zado@gmail.com","89995389","22478222","rto schick ss","1","images/fotos_perfil/perfil.jpg");


DROP TABLE IF EXISTS pruebas;

CREATE TABLE `pruebas` (
  `idPruebas` int(11) NOT NULL AUTO_INCREMENT,
  `NombrePrueba` varchar(100) NOT NULL,
  `NotaPrueba` int(11) NOT NULL,
  `Estudiantes_idEstudiantes` int(11) NOT NULL,
  `Evaluaciones_idEvaluaciones` int(11) NOT NULL,
  PRIMARY KEY (`idPruebas`),
  KEY `fk_Pruebas_Estudiantes1_idx` (`Estudiantes_idEstudiantes`),
  KEY `fk_Pruebas_Evaluaciones1_idx` (`Evaluaciones_idEvaluaciones`),
  CONSTRAINT `fk_Pruebas_Estudiantes1` FOREIGN KEY (`Estudiantes_idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pruebas_Evaluaciones1` FOREIGN KEY (`Evaluaciones_idEvaluaciones`) REFERENCES `evaluaciones` (`idEvaluaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `NombreUsuario` varchar(50) NOT NULL,
  `ContUsuario` varchar(100) NOT NULL,
  `idNiveles` int(11) NOT NULL,
  `Codigo` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_Usuarios_Niveles1_idx` (`idNiveles`),
  CONSTRAINT `idNiveles` FOREIGN KEY (`idNiveles`) REFERENCES `niveles` (`idNiveles`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("1","Alejandro","uni2018","1","1991","https:/Esperando enlace");
INSERT INTO usuarios VALUES("2","JorgePrado","doc2018","2","1980","https:/Esperando enlace");
INSERT INTO usuarios VALUES("3","KevinVillegas","kev2018","3","1992","https:/Esperando enlace");
INSERT INTO usuarios VALUES("5","Zadira Roca","holaquehace","1","1993","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("6","Alejandra Chacon","Margaret","2","1985","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("8","Rosa Roca","123456","1","12345","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("9","rosa Ortega","Tola","1","2018","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("10","zado@gmail.com","0010902910027k","3","0","");
INSERT INTO usuarios VALUES("11","zado@gmail.com","001-0209910027k","3","9","");
INSERT INTO usuarios VALUES("12","elier.aries@gmail.com","362-040489-0000w","3","10","");


