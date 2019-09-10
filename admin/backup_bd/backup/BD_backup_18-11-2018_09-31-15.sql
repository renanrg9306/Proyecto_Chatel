DROP TABLE IF EXISTS asignaciones;

CREATE TABLE `asignaciones` (
  `idAsignacion` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(100) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `idGrupo` int(11) NOT NULL,
  `idHorario` int(11) NOT NULL,
  `Estado` int(11) NOT NULL,
  `NumeroAsignacion` int(11) NOT NULL,
  PRIMARY KEY (`idAsignacion`),
  KEY `idProfesor` (`idProfesor`),
  KEY `idAsignatura` (`idAsignatura`),
  KEY `idGrupo` (`idGrupo`),
  KEY `idHorario` (`idHorario`),
  CONSTRAINT `asignaciones_ibfk_1` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`),
  CONSTRAINT `asignaciones_ibfk_2` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`),
  CONSTRAINT `asignaciones_ibfk_3` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`),
  CONSTRAINT `asignaciones_ibfk_5` FOREIGN KEY (`idHorario`) REFERENCES `horarios` (`idHorario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO asignaciones VALUES("1","Prueba de Asignacion a docentes","1","1","1","1","1","1");


DROP TABLE IF EXISTS asignaturas;

CREATE TABLE `asignaturas` (
  `idAsignatura` int(11) NOT NULL AUTO_INCREMENT,
  `NombreAsignatura` varchar(50) NOT NULL,
  PRIMARY KEY (`idAsignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO asignaturas VALUES("1","Bases de Datos");


DROP TABLE IF EXISTS entregatarea;

CREATE TABLE `entregatarea` (
  `idEntregaTareas` int(11) NOT NULL AUTO_INCREMENT,
  `CodigoTareaProfesor` int(11) NOT NULL,
  `idEstudiantes` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `Descripcion` varchar(200) NOT NULL,
  `CodigoEnvioTarea` int(11) NOT NULL,
  `Archivo` varchar(200) NOT NULL,
  `FechaEntrega` date DEFAULT NULL,
  PRIMARY KEY (`idEntregaTareas`),
  KEY `idEstudiantes` (`idEstudiantes`),
  KEY `idAsignatura` (`idAsignatura`),
  CONSTRAINT `entrega_tareas_ibfk_1` FOREIGN KEY (`idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`),
  CONSTRAINT `entrega_tareas_ibfk_2` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO entregatarea VALUES("1","1","10","1","Primera tarea unidad 1","411581","Comprobante de pago.PDF","2018-11-03");


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
  `idGrupo` int(11) NOT NULL,
  `CorreoEstudiante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEstudiantes`),
  KEY `fk_Estudiantes_Grupo1_idx` (`idGrupo`),
  CONSTRAINT `fk_Estudiantes_Grupo1` FOREIGN KEY (`idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

INSERT INTO estudiantes VALUES("1","Alejandro Gabriel","Aguilar Tellez","2011-37379","001-0209910027k","89995359","22891201","Rto Schick III","1","images/fotos_perfil/perfil.jpg","1","aguilar0991@hotmail.com");
INSERT INTO estudiantes VALUES("2","Carlos Renato","Hernandez Rivas","2011-37373","001-040890-0044g","12345678","22891202","Las colinas","1","images/fotos_perfil/perfil.jpg","1","rnato@hotmail.com");
INSERT INTO estudiantes VALUES("3","Yasser Edsel","Lopez Herrera","2011-34357","001-020592-0035g","12345678","22891203","Los brasiles","1","images/fotos_perfil/perfil.jpg","1","yedsel@hotmail.com");
INSERT INTO estudiantes VALUES("4","Jose Antonio","Urbina Gutierrez","2011-35241","001-010190-0024l","12345678","22891204","Bo Cuba","1","images/fotos_perfil/perfil.jpg","1","antonio@hotmail.com");
INSERT INTO estudiantes VALUES("5","Ricardo Jose","Bird Lopez","2011-38854","001-020304-0024h","12345678","22891205","Carretera Masaya","1","images/fotos_perfil/perfil.jpg","1","Bird@gmail.com");
INSERT INTO estudiantes VALUES("6","Jorge Luis","Carballo Lacayo","2011-39987","001-121291-0021h","12345678","22891206","Malecon de managua","1","images/fotos_perfil/perfil.jpg","2","jluis@gmail.com");
INSERT INTO estudiantes VALUES("7","Maria Alejandra","Taleno Maltez","2011-39944","001-051090-0023h","12345678","22891207","Primero de mayo","1","images/fotos_perfil/perfil.jpg","2","mataleno@gmail.com");
INSERT INTO estudiantes VALUES("8","Luis Alberto","Morales Silva","2011-39521","001-010285-0023h","12345678","22891208","Boaco ciudad de dos pisos","1","images/fotos_perfil/perfil.jpg","2","lmorales@gmail.com");
INSERT INTO estudiantes VALUES("10","Renan","Rosales","2011-37379","001-000011-0000l","77777777","22222222","granada","1","images/fotos_perfil/21232082_10155749693205799_8744693330035705291_n.jpg","2","rena@gmail.com");
INSERT INTO estudiantes VALUES("11","Yara","Guido","20184452a","001-000000-0000k","77777777","22222222","bo 08 de mayo","1","images/fotos_perfil/maxresdefault.jpg","1","yara@gmail.com");
INSERT INTO estudiantes VALUES("12","Yara","Guido","20184452a","001-000000-0000k","77777777","22222222","asdfafaf","1","images/fotos_perfil/perfil.jpg","1","yara@gmail.com");


DROP TABLE IF EXISTS evaluaciones;

CREATE TABLE `evaluaciones` (
  `idEvaluaciones` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(300) NOT NULL,
  `idEstudiantes` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `Unidad` varchar(50) DEFAULT NULL,
  `Tarea` varchar(45) DEFAULT NULL,
  `Puntaje` int(11) NOT NULL,
  `FechaEvaluacion` date NOT NULL,
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idEvaluaciones`),
  KEY `idEstudiantes_idx` (`idEstudiantes`),
  KEY `idProfesor_idx` (`idProfesor`),
  KEY `idAsignatura` (`idAsignatura`),
  CONSTRAINT `evaluaciones_ibfk_1` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`),
  CONSTRAINT `idEstudiantes` FOREIGN KEY (`idEstudiantes`) REFERENCES `estudiantes` (`idEstudiantes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO evaluaciones VALUES("1","se porta bien","1","1","I","diagramas","100","2018-11-02","1");
INSERT INTO evaluaciones VALUES("2","p","10","1","I","diagramas","100","2018-11-03","1");


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


DROP TABLE IF EXISTS horarios;

CREATE TABLE `horarios` (
  `idHorario` int(11) NOT NULL AUTO_INCREMENT,
  `NombreHorario` varchar(50) NOT NULL,
  PRIMARY KEY (`idHorario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO horarios VALUES("1","4:10 pm - 05:50 pm.");
INSERT INTO horarios VALUES("2","6:00 pm -7:25 pm");
INSERT INTO horarios VALUES("3","7:30 pm - 8:45 pm");


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



DROP TABLE IF EXISTS material_didactico;

CREATE TABLE `material_didactico` (
  `idMaterialDidactico` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(200) NOT NULL,
  `Archivo` varchar(200) NOT NULL,
  `CodigoMaterial` int(11) NOT NULL,
  `Fecha_subida` date DEFAULT NULL,
  `idNumeroAsignacion` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idMaterialDidactico`),
  KEY `idNumeroAsignacion` (`idNumeroAsignacion`),
  KEY `idProfesor` (`idProfesor`),
  CONSTRAINT `material_didactico_ibfk_1` FOREIGN KEY (`idNumeroAsignacion`) REFERENCES `numeros_asignaciones` (`idNumeroAsignacion`),
  CONSTRAINT `material_didactico_ibfk_2` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO material_didactico VALUES("1","Primera prueba de materiald","121018.PDF","1","2018-11-04","1","1");


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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO niveles VALUES("1","Administrador");
INSERT INTO niveles VALUES("2","Profesor");
INSERT INTO niveles VALUES("3","Estudiante");


DROP TABLE IF EXISTS numeros_asignaciones;

CREATE TABLE `numeros_asignaciones` (
  `idNumeroAsignacion` int(11) NOT NULL AUTO_INCREMENT,
  `numeroAsignado` int(11) NOT NULL,
  `IdProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idNumeroAsignacion`),
  KEY `IdProfesor` (`IdProfesor`),
  CONSTRAINT `numeros_asignaciones_ibfk_1` FOREIGN KEY (`IdProfesor`) REFERENCES `profesor` (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO numeros_asignaciones VALUES("1","1","1");


DROP TABLE IF EXISTS planificacion_tareas;

CREATE TABLE `planificacion_tareas` (
  `idPlanificacion` int(11) NOT NULL AUTO_INCREMENT,
  `idProfesor` int(11) NOT NULL,
  `idNumeroAsignacion` int(11) NOT NULL,
  `idAsignatura` int(11) NOT NULL,
  `Unidad` varchar(50) NOT NULL,
  `DescripcionUnidad` varchar(200) NOT NULL,
  `Tarea` varchar(50) NOT NULL,
  `DescripcionTarea` varchar(200) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `FechaPresentacion` date NOT NULL,
  `CodigoTarea` int(11) NOT NULL,
  PRIMARY KEY (`idPlanificacion`),
  KEY `idProfesor` (`idProfesor`),
  KEY `idNumeroAsignacion` (`idNumeroAsignacion`),
  KEY `idAsignatura` (`idAsignatura`),
  CONSTRAINT `planificacion_tareas_ibfk_1` FOREIGN KEY (`idProfesor`) REFERENCES `profesor` (`idProfesor`),
  CONSTRAINT `planificacion_tareas_ibfk_2` FOREIGN KEY (`idNumeroAsignacion`) REFERENCES `numeros_asignaciones` (`idNumeroAsignacion`),
  CONSTRAINT `planificacion_tareas_ibfk_3` FOREIGN KEY (`idAsignatura`) REFERENCES `asignaturas` (`idAsignatura`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO planificacion_tareas VALUES("1","1","1","1","Unidad I","Unidad I introduccion a las bases de datos","conceptos","Conceptos basicos de las bases de datos","2018-12-07","2018-11-03","1");


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
  `Foto` varchar(80) DEFAULT NULL,
  `Estado` int(2) DEFAULT NULL,
  PRIMARY KEY (`idProfesor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO profesor VALUES("1","Jorge","Prado Delgadillo","001-000000-0000k","pdelgado@gmail.com","88888888","20222222","universidad nacional de ingenieria","images/fotos_perfil/21270797_10155749693270799_2506737365079217704_n.jpg","1");


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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO usuarios VALUES("1","Alejandro","uni2018","1","1","images/fotos_perfil/IMG-20181111-WA0014.jpg");
INSERT INTO usuarios VALUES("3","prado","prado","2","1","images/fotos_perfil/IMG-20181111-WA0014.jpg");
INSERT INTO usuarios VALUES("4","est","est","3","10","images/fotos_perfil/perfil.jpg");
INSERT INTO usuarios VALUES("5","yara@gmail.com","001-000000-0000k","3","11","");
INSERT INTO usuarios VALUES("6","yara@gmail.com","001-000000-0000k","3","12","");
INSERT INTO usuarios VALUES("7","yara@gmail.com","001-000000-0000k","3","13","");


