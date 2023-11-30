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

-- Dump completed on 2023-11-30 14:18:59
