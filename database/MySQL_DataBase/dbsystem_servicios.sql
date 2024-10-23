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
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servicios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `se_nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `se_descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `se_precio` double(8,2) NOT NULL,
  `se_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (4,'Reparación del motor','En automotriz Tipan nos encargamos de realizar la reparación de motores, desde los mas antiguos, hasta los más modernos.Este proceso es simplemente un remiendo temporal que no cura de fondo los daños.',50.00,'https://autolab.com.co/wp-content/uploads/2021/05/Reparacion-de-motor-foto.png','2024-03-21 02:58:04','2024-03-21 08:30:37'),(8,'ABC DE MOTOR','<p>Involucra varios procesos de diagn&oacute;stico, reparaci&oacute;n, cambio y reglaje de cada uno de los mecanismos que componen los diferentes sistemas que intervienen en el funcionamiento correcto de un motor.<br />\r\nEl procedimiento se debe realizar cada dos a&ntilde;os o luego de 20.000 kil&oacute;metros de recorrido en los carros con sistema de inyecci&oacute;n. Si el suyo es un &lsquo;viejito&rsquo; bien cuidado y tiene carburador, este tiempo y recorrido se reduce a la mitad.<br />\r\nPara realizar una sincronizaci&oacute;n correcta se deben revisar, ajustar o cambiar de ser necesario, los siguientes elementos: Carburador, bobina, el timer o distribuidor (delco), los platinos, el condensador, las buj&iacute;as y los cables de alta tensi&oacute;n.</p>',25.00,'https://disauto.ec/wp-content/uploads/2022/08/Disauto-ABC-DE-MOTOR.jpeg','2024-04-30 11:21:57','2024-04-30 11:21:57');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11 10:50:03
