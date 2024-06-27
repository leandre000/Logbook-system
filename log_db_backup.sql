-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: log_db
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `logbook_entries`
--

DROP TABLE IF EXISTS `logbook_entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logbook_entries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_date` date NOT NULL,
  `entry_time` time NOT NULL,
  `days` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `activity_description` text NOT NULL,
  `working_hour` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logbook_entries`
--

LOCK TABLES `logbook_entries` WRITE;
/*!40000 ALTER TABLE `logbook_entries` DISABLE KEYS */;
INSERT INTO `logbook_entries` VALUES (1,'2024-05-25','09:00:00',1,21,'Attended a meeting',4.50,'2024-05-30 07:13:18'),(2,'2024-05-26','10:30:00',2,21,'Worked on a project',6.00,'2024-05-30 07:13:18'),(4,'2024-05-28','08:45:00',4,21,'Continued work on the project',5.25,'2024-05-30 07:13:18'),(5,'2024-05-29','11:15:00',5,21,'Attended a training session',3.50,'2024-05-30 07:13:18'),(7,'2024-05-01','12:05:00',24,7,'lent a syllabus and book',12.00,'2024-05-30 07:30:42');
/*!40000 ALTER TABLE `logbook_entries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_student`
--

DROP TABLE IF EXISTS `user_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_student`
--

LOCK TABLES `user_student` WRITE;
/*!40000 ALTER TABLE `user_student` DISABLE KEYS */;
INSERT INTO `user_student` VALUES (1,'leandre','86d1cdc4874d14c21351cad53ac6f3e4','leandre@gmail.com','2024-05-30 07:15:35'),(2,'shema','ae1af2977cde68bac177603d87f3338e','shema@gmail.com','2024-05-30 07:22:07'),(3,'izere ','f2cf6831a5be623a7d04f21fe52ff76b','izere@gmail.com','2024-05-30 07:52:17');
/*!40000 ALTER TABLE `user_student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-05-30  9:56:35
