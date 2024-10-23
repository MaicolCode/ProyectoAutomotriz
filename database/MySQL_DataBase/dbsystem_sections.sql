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
-- Table structure for table `sections`
--

DROP TABLE IF EXISTS `sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `subtitle` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sections_post_id` (`post_id`),
  CONSTRAINT `sections_post_id` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sections`
--

LOCK TABLES `sections` WRITE;
/*!40000 ALTER TABLE `sections` DISABLE KEYS */;
INSERT INTO `sections` VALUES (15,1001,'¿Cada cuánto debo cambiarlo?','<h2>&iquest;Cada cu&aacute;nto debo cambiarlo?</h2>\r\n\r\n<p>Es necesario revisarlo con frecuencia, tanto en invierno como en verano, su nivel, ya que no se puede optimizar (siempre tiene una duraci&oacute;n exacta). El cambio se realizar&aacute;&nbsp;<strong>cada dos a&ntilde;os o pasados 40.000 kil&oacute;metro</strong>s&nbsp;(lo que llegue primero), lo que permite garantizar sus propiedades en perfecto estado. Lo bueno es que no es necesario acudir al taller, sino que&nbsp;<a href=\"https://decamino.firststop.es/blog/qu%C3%A9-puedo-hacer-en-mi-coche-y-qu%C3%A9-debo-dejar-al-taller\">puedes hacerlo t&uacute; mismo</a>.</p>\r\n\r\n<p>Eso s&iacute;, tambi&eacute;n&nbsp;<strong>se debe revisar cada 20.000 kil&oacute;metros</strong>&nbsp;ya que si el anticongelante no est&aacute; trabajando en sus condiciones &oacute;ptimas, algo que se nota si la temperatura sube muy r&aacute;pido, se tendr&aacute; que cambiar antes de la fecha prevista.</p>\r\n\r\n<p>El propio manual de servicio del veh&iacute;culo indica qu&eacute; anticongelante se debe usar seg&uacute;n un modelo y marca concretos. Aunque tambi&eacute;n es importante tener en cuenta la temperatura de la zona por la que el coche circular&aacute; a diario, para elegir el anticongelante adecuado y&nbsp;<strong>nunca mezclar dos tipos diferentes</strong>. Son cuatro las opciones, dependiendo del grado de efectividad.</p>\r\n\r\n<ul>\r\n	<li>El l&iacute;quido refrigerante del 10% es efectivo hasta los menos 5 grados cent&iacute;grados.</li>\r\n	<li>El del 20%, hasta los menos 11 grados cent&iacute;grados.</li>\r\n	<li>El antincongelante del 30%, hasta los menos 18&ordm;C</li>\r\n	<li>El l&iacute;quido refrigerante del 50%, tambi&eacute;n denominado en algunos casos de larga duraci&oacute;n, es adecuado hasta los -37 grados.</li>\r\n</ul>\r\n\r\n<p><img alt=\"imagen refrigerante\" src=\"https://www.nitro.pe/images/2015/junio/como_cambiar_liquido_refrigerante.jpg\" style=\"height:400px; width:780px\" /></p>','https://www.nitro.pe/images/2015/junio/como_cambiar_liquido_refrigerante.jpg','2024-03-21 08:38:11','2024-03-21 08:38:11'),(20,1003,'ABC DE MOTOR','<h2>ABC DE MOTOR</h2>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Involucra varios procesos de diagn&oacute;stico, reparaci&oacute;n, cambio y reglaje de cada uno de los mecanismos que componen los diferentes sistemas que intervienen en el funcionamiento correcto de un motor.<br />\r\nEl procedimiento se debe realizar cada dos a&ntilde;os o luego de 20.000 kil&oacute;metros de recorrido en los carros con sistema de inyecci&oacute;n. Si el suyo es un &lsquo;viejito&rsquo; bien cuidado y tiene carburador, este tiempo y recorrido se reduce a la mitad.<br />\r\nPara realizar una sincronizaci&oacute;n correcta se deben revisar, ajustar o cambiar de ser necesario, los siguientes elementos: Carburador, bobina, el timer o distribuidor (delco), los platinos, el condensador, las buj&iacute;as y los cables de alta tensi&oacute;n.</p>\r\n\r\n<p><img alt=\"\" src=\"https://disauto.ec/wp-content/uploads/2022/08/Disauto-ABC-DE-MOTOR.jpeg\" style=\"height:450px; width:900px\" /></p>','https://disauto.ec/wp-content/uploads/2022/08/Disauto-ABC-DE-MOTOR.jpeg','2024-04-30 12:15:24','2024-04-30 12:15:24');
/*!40000 ALTER TABLE `sections` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-11 10:50:01
