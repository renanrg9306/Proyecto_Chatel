-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: basededatos
-- ------------------------------------------------------
-- Server version	5.7.22-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `idEstudiantes` int(11) NOT NULL AUTO_INCREMENT,
  `NombresEstudiante` varchar(50) NOT NULL,
  `ApellidosEstudiante` varchar(50) NOT NULL,
  `CarnetEstudiante` varchar(45) NOT NULL,
  `CedulaEstudiante` varchar(16) NOT NULL,
  `CelularEstudiante` varchar(8) NOT NULL,
  `TelefonoEstudiante` varchar(8) NOT NULL,
  `DireccionEstudiante` varchar(250) NOT NULL,
  `Foto` varchar(100) DEFAULT NULL,
  `Nota` int(11) DEFAULT NULL,
  `Grupo_idGrupo` int(11) NOT NULL,
  `CorreoEstudiante` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEstudiantes`),
  KEY `fk_Estudiantes_Grupo1_idx` (`Grupo_idGrupo`),
  CONSTRAINT `fk_Estudiantes_Grupo1` FOREIGN KEY (`Grupo_idGrupo`) REFERENCES `grupo` (`idGrupo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (1,'Alejandro Gabriel','Aguilar Tellez','2011-37379','001-0209910027k','89995359','22891201','Rto Schick III',NULL,NULL,1,'aguilar0991@hotmail.com'),(2,'Carlos Renato','Hernandez Rivas','2011-37373','001-040890-0044g','12345678','22891202','Las colinas',NULL,NULL,1,'rnato@hotmail.com'),(3,'Yasser Edsel','Lopez Herrera','2011-34357','001-020592-0035g','12345678','22891203','Los brasiles',NULL,NULL,1,'yedsel@hotmail.com'),(4,'Jose Antonio','Urbina Gutierrez','2011-35241','001-010190-0024l','12345678','22891204','Bo Cuba',NULL,NULL,1,'antonio@hotmail.com'),(5,'Ricardo Jose','Bird Lopez','2011-38854','001-020304-0024h','12345678','22891205','Carretera Masaya',NULL,NULL,2,'Bird@gmail.com'),(6,'Jorge Luis','Carballo Lacayo','2011-39987','001-121291-0021h','12345678','22891206','Malecon de managua',NULL,NULL,2,'jluis@gmail.com'),(7,'Maria Alejandra','Taleno Maltez','2011-39944','001-051090-0023h','12345678','22891207','Primero de mayo',NULL,NULL,2,'mataleno@gmail.com'),(8,'Luis Alberto','Morales Silva','2011-39521','001-010285-0023h','12345678','22891208','Boaco ciudad de dos pisos',NULL,NULL,2,'lmorales@gmail.com');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-29 13:00:04
