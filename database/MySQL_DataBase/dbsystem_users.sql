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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'MaicolCode','admin@miapp.com',NULL,'$2y$12$iRxE.RJciW9sqNC1yLQ1ce/r7vGV5k/zMmfGvmZ3aOPsnc3Um7mu6',NULL,'admin','2024-02-15 08:05:01','2024-02-15 08:05:01'),(7,'Maicol Paucar','maicol@gmail.com',NULL,'$2y$12$f86mZiTG5ZqkjhFlxGNLv.5IMtsui6F6XIWUoC8lq0AqyyQfMgpMq',NULL,'user','2024-04-25 07:11:46','2024-04-27 01:44:11'),(10,'Jhon Paucar','jhon@miapp.com',NULL,'$2y$12$QodS9hJi8af9YO4FdfzrJOZQ6/QMPK.BVYbg6DN5Cb04.HiafyA4.',NULL,'user','2024-04-27 00:59:06','2024-04-27 00:59:06'),(13,'Raul Paucar','raul1979@gmail.com',NULL,'$2y$12$SeseRE/rUN/.dYsjZ/EacOHxk3czz8hPP/CS565TC6gfDx84efW/O',NULL,'user','2024-04-27 01:07:38','2024-04-27 01:07:38'),(15,'Alfredo Tipan','alfretip@gmail.com',NULL,'$2y$12$KfJWc0q02ly63HBbhFzx2eU5xoP1nM4GBM0E8MIgXqBpvAzo50hmW',NULL,'admin','2024-04-30 11:48:18','2024-04-30 11:48:18'),(16,'Jhon Maicol Paucar','paucarjhon07@outlook.com',NULL,'$2y$12$CQ0hKSUw94lw8BVT25coteXWe7CMnnGF28PZlFg.zNhimf.zlCLwW',NULL,'user','2024-04-30 11:53:40','2024-04-30 11:53:40');
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

-- Dump completed on 2024-06-11 10:50:00
