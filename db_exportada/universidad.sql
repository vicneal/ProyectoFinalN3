CREATE DATABASE  IF NOT EXISTS `universidad` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `universidad`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: universidad
-- ------------------------------------------------------
-- Server version	8.0.35

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `alumnos` (
  `id_alumno` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` text,
  PRIMARY KEY (`id_alumno`),
  KEY `fk_alumnos_usuarios` (`id_usuario`),
  CONSTRAINT `fk_alumnos_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos`
--

LOCK TABLES `alumnos` WRITE;
/*!40000 ALTER TABLE `alumnos` DISABLE KEYS */;
INSERT INTO `alumnos` VALUES (4,11,'2004-10-25','210 Cedar St'),(5,12,'2008-01-15','303 Pine St'),(21,25,'2000-02-20',''),(23,40,'1996-05-12','av.Tambopata');
/*!40000 ALTER TABLE `alumnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clases` (
  `id_clase` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `cupo_maximo` int DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_clase`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases`
--

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` VALUES (1,'Matemática Básica',20,1),(2,'Historia',25,1),(3,'Ciencias Naturales',18,0),(4,'Inglés Básico',22,1),(5,'Programación',15,0),(6,'Sin Asignación',0,1),(8,'scrum',20,1),(9,'algebra',20,1);
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maestros`
--

DROP TABLE IF EXISTS `maestros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maestros` (
  `id_maestro` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` text,
  PRIMARY KEY (`id_maestro`),
  KEY `maestros_ibfk_1` (`id_usuario`),
  CONSTRAINT `maestros_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maestros`
--

LOCK TABLES `maestros` WRITE;
/*!40000 ALTER TABLE `maestros` DISABLE KEYS */;
INSERT INTO `maestros` VALUES (33,5,'2005-02-20',''),(38,16,'1980-05-15','---'),(49,7,'2005-02-20',''),(50,4,'2005-02-20',''),(51,41,'1995-06-17','');
/*!40000 ALTER TABLE `maestros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matricula_alumnos_clases`
--

DROP TABLE IF EXISTS `matricula_alumnos_clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matricula_alumnos_clases` (
  `id_matricula` int NOT NULL AUTO_INCREMENT,
  `id_alumno` int DEFAULT NULL,
  `id_clase` int DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  PRIMARY KEY (`id_matricula`),
  KEY `id_alumno` (`id_alumno`),
  KEY `id_clase` (`id_clase`),
  CONSTRAINT `matricula_alumnos_clases_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `alumnos` (`id_alumno`),
  CONSTRAINT `matricula_alumnos_clases_ibfk_2` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id_clase`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matricula_alumnos_clases`
--

LOCK TABLES `matricula_alumnos_clases` WRITE;
/*!40000 ALTER TABLE `matricula_alumnos_clases` DISABLE KEYS */;
INSERT INTO `matricula_alumnos_clases` VALUES (4,4,4,NULL),(5,5,5,NULL),(14,21,6,NULL),(16,23,6,NULL);
/*!40000 ALTER TABLE `matricula_alumnos_clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacion_maestros_clases`
--

DROP TABLE IF EXISTS `relacion_maestros_clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relacion_maestros_clases` (
  `id_relacion` int NOT NULL AUTO_INCREMENT,
  `id_maestro` int DEFAULT NULL,
  `id_clase` int DEFAULT NULL,
  PRIMARY KEY (`id_relacion`),
  KEY `id_maestro` (`id_maestro`),
  KEY `id_clase` (`id_clase`),
  CONSTRAINT `relacion_maestros_clases_ibfk_1` FOREIGN KEY (`id_maestro`) REFERENCES `maestros` (`id_maestro`),
  CONSTRAINT `relacion_maestros_clases_ibfk_2` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id_clase`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacion_maestros_clases`
--

LOCK TABLES `relacion_maestros_clases` WRITE;
/*!40000 ALTER TABLE `relacion_maestros_clases` DISABLE KEYS */;
INSERT INTO `relacion_maestros_clases` VALUES (20,33,3),(26,38,8),(27,38,9),(30,38,1),(35,38,6),(41,49,4),(42,50,6),(43,51,5);
/*!40000 ALTER TABLE `relacion_maestros_clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `dni` varchar(15) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `rol` enum('ADMIN','MAESTRO','ALUMNO') DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `dni` (`dni`),
  UNIQUE KEY `correo_electronico` (`correo_electronico`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'123456789','John','Doea','john.doe@example.pe','contrasena_admin1','ADMIN',1),(2,'987654321','Jane','Smith','jane.smith@example.com','contrasena_admin2','ADMIN',1),(3,'111111111','Michaele','Johnsone','michael.jhonson@example.pe','contrasena_maestro1','ADMIN',1),(4,'222222222','Emily','Williams','emily.williams@example.com','contrasena_maestro2','MAESTRO',1),(5,'333333333','Daniela','Brown','daniel.brown@example.com','contrasena_maestro3','MAESTRO',1),(7,'555555555','David','Davis','david.davis@example.com','contrasena_maestro5','MAESTRO',1),(11,'999999999','Mason','Taylor','mason.taylor@example.com','contrasena_alumno4','ALUMNO',1),(12,'101010101','Ava','Anderson','ava.anderson@example.com','contrasena_alumno5','ALUMNO',1),(16,'---','Sin Asignacion','','--','--','MAESTRO',1),(25,'758466844','VICTOR','Johnson','victor@gmail.com','758466844','ALUMNO',1),(40,'24597814','Alberto','Peña','alumno@alumno','$2y$10$9VsBIQO442bmjBj4nm1vquHukQq11c4DL64YZgnUwozjw/iXhuwiu','ALUMNO',1),(41,'32548796','Nick','Macedo','maestro@maestro','$2y$10$Q2f6RsNRQIjCMUMjhqU6muC204i997URgupK5XNVLEsYU0cCWJ3g.','MAESTRO',1),(42,'34562311','VICTOR','RAMIREZ BELTRAN','admin@admin','$2y$10$ue02LKs.Ar6P1/Fl6UVbfO6LunmfXXdo3fR7BqNQ.t9GLuBz72bnO','ADMIN',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 14:24:53
