-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: dbsystem
-- ------------------------------------------------------
-- Server version	8.0.36

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
-- Table structure for table `peticions`
--

DROP TABLE IF EXISTS `peticions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peticions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje_c` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_p` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peticions`
--

LOCK TABLES `peticions` WRITE;
/*!40000 ALTER TABLE `peticions` DISABLE KEYS */;
INSERT INTO `peticions` VALUES (20,'Jhon Maicol Paucar Chiguano','0982487322','Información General','Hola me gustaria poder tener una conversación acerca de los productos que ustedes ofrecen de la manera mas rapida posible.','Cancelada','2024-04-27 01:47:45','2024-04-30 11:45:19'),(21,'Raul Paucar','0985635241','Servicios','Hola me gustaría saber información mas relevante acerca de los servicios que ofrecen.','Cancelada','2024-04-27 02:24:05','2024-04-29 22:02:55'),(22,'Jhon Maicol Paucar Chiguano','0982487322','Información General','Hola este es un mensaje de prueba','Cancelada','2024-04-27 03:32:29','2024-04-29 22:02:54'),(23,'Jhon Maicol Paucar Chiguano','0982487322','Servicios','Quiero saber acerca de que contiene el servicio del cambio de aceite.','Aceptada','2024-04-28 20:16:16','2024-04-29 22:02:48'),(24,'Jhon Maicol Paucar Chiguano','0982487322','Información General','Buenas tardes, me gustaria tener el conocimiento acerca de los servicios que ofrece la empresa.','Aceptada','2024-04-30 11:15:39','2024-04-30 15:01:15'),(25,'Jhon Maicol Paucar Chiguano','0982487322','Información General','Se solicita informacion de productos.','Cancelada','2024-04-30 15:00:18','2024-04-30 15:01:27');
/*!40000 ALTER TABLE `peticions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11 10:50:00
