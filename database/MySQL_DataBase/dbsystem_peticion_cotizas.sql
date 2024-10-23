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
-- Table structure for table `peticion_cotizas`
--

DROP TABLE IF EXISTS `peticion_cotizas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peticion_cotizas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Cedula` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nombres` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia_selec` date DEFAULT NULL,
  `Servicio` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Precio` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peticion_cotizas`
--

LOCK TABLES `peticion_cotizas` WRITE;
/*!40000 ALTER TABLE `peticion_cotizas` DISABLE KEYS */;
INSERT INTO `peticion_cotizas` VALUES (18,'1755440532','Jhon Maicol Paucar Chiguano','paucarjhon07@gmail.com','Amaguaña','0982487322','2024-04-29','Reparación del motor','Cancelado',50.00,'2024-04-27 01:35:48','2024-04-29 22:07:29'),(19,'1785452563','Jhon Maicol Paucar Chiguano','paucarjhon07@gmail.com','Amaguaña','0982487322','2024-04-30','Cambio de aceite y de filtro.','Cancelado',15.50,'2024-04-28 20:18:19','2024-04-28 20:19:06'),(20,'1785452563','Jhon Maicol Paucar Chiguano','pepitoFabricio@gmail.com','Uyumbicho-Mejia','0985741526','2024-04-29','Reparación del motor','Cancelado',50.00,'2024-04-29 22:51:26','2024-04-29 22:51:44'),(21,'1785452563','Jhon Maicol Paucar Chiguano','paucarjhon07@gmail.com','Uyumbicho-Mejia','0982487322','2024-05-03','Reparación del motor','Cancelado',50.00,'2024-04-30 11:16:10','2024-04-30 11:17:27'),(22,'1785452563','Jhon Maicol Paucar Chiguano','paucarjhon07@gmail.com','Uyumbicho-Mejia','0985741526','2024-05-02','ABC DE MOTOR','Aceptado',25.00,'2024-04-30 14:58:01','2024-04-30 14:58:57');
/*!40000 ALTER TABLE `peticion_cotizas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11 10:49:59
