-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tallerphp
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `grade_points`
--

DROP TABLE IF EXISTS `grade_points`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grade_points` (
  `id` int NOT NULL AUTO_INCREMENT,
  `grade_point_1` double DEFAULT NULL,
  `grade_point_2` double DEFAULT NULL,
  `grade_point_3` double DEFAULT NULL,
  `grade_point_average` double DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notes_users_idx` (`id_user`),
  CONSTRAINT `fk_notes_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade_points`
--

LOCK TABLES `grade_points` WRITE;
/*!40000 ALTER TABLE `grade_points` DISABLE KEYS */;
INSERT INTO `grade_points` VALUES (15,10,9,5,8,3),(16,5,5,5,5,4),(17,5,5,5,5,5),(18,4,5,5,4.6666666666667,6),(19,5,5,5,5,7),(20,5,5,5,5,8),(22,5,5,5,5,10),(23,5,5,5,5,11),(24,5,5,5,5,12),(25,9,8,2,6.3333333333333,15),(27,9,8,9,8.6666666666667,17);
/*!40000 ALTER TABLE `grade_points` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Cordinador Jhon','cordinador@gmail.com','12345','cordinador'),(2,'Profesor Jhon','profesor@gmail.com','12345','profesor'),(3,'Estudiante Jhon2','estudiante@gmail.com','12345','estudiante'),(4,'Estudiante Maria','estudiantemaria6@gmail.com','12345','estudiante'),(5,'Estudiante Maria','estudiantemaria7@gmail.com','12345','estudiante'),(6,'Estudiante Maria','estudiantemaria8@gmail.com','12345','estudiante'),(7,'Estudiante Maria','estudiantemaria9@gmail.com','12345','estudiante'),(8,'Estudiante Maria','estudiantemaria10@gmail.com','12345','estudiante'),(10,'Estudiante Maria','estudiantemaria11@gmail.com','12345','estudiante'),(11,'Estudiante Maria','estudiantemaria12@gmail.com','12345','estudiante'),(12,'Estudiante Maria','estudiantemaria13@gmail.com','12345','estudiante'),(15,'Estudiante Juan','juan@gmail.com','12345','estudiante'),(17,'Perro','perro@gmail.com','12345','estudiante');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-02 14:09:24
