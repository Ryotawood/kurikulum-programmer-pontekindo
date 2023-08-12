-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: MyMedSos
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.4

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `profil`
--

DROP TABLE IF EXISTS `profil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nickname` varchar(255) DEFAULT NULL,
  `id_user` int DEFAULT NULL,
  `id_profil_detail` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userid` (`id_user`),
  KEY `fk_profil_detail` (`id_profil_detail`),
  CONSTRAINT `fk_profil_detail` FOREIGN KEY (`id_profil_detail`) REFERENCES `profil_detail` (`id`),
  CONSTRAINT `fk_userid` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil`
--

LOCK TABLES `profil` WRITE;
/*!40000 ALTER TABLE `profil` DISABLE KEYS */;
INSERT INTO `profil` VALUES (1,'yta',1,1),(2,'ryo',2,2),(3,'rukt',3,3),(4,'sukt',4,4),(5,'doktor',5,5),(6,'dieta',6,6),(7,'yohan',7,7),(8,'long',8,8),(9,'noner',9,9),(10,'mile',10,10);
/*!40000 ALTER TABLE `profil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profil_detail`
--

DROP TABLE IF EXISTS `profil_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profil_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) DEFAULT NULL,
  `address` text,
  `phone_number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profil_detail`
--

LOCK TABLES `profil_detail` WRITE;
/*!40000 ALTER TABLE `profil_detail` DISABLE KEYS */;
INSERT INTO `profil_detail` VALUES (1,'Monkey D Royta','Foosha Village','09365308457'),(2,'Portgas D Ryota','Baterilla Island','0846793455'),(3,'Kurty Kurt','DressRosa','045869769234'),(4,'Kusty Kust','DressuRosa','08536093256'),(5,'Kenzo Tenma','Dusseldorf','06854763495'),(6,'Dieteeeer','Kinderheim','0684365050'),(7,'Johan Liebert','Kinderheim','05684568439'),(8,'Heinrich Lunge','Keisatsu','911'),(9,'Nina Fortner','KinderHeim','065853657'),(10,'Trafalgar D Faqih Law','North Blue','0832472346');
/*!40000 ALTER TABLE `profil_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'royta','ryota@gmail.com','royto'),(2,'ryota','royta@gmail.com','rayta'),(3,'kurt','kurt@gmail.com','kurto'),(4,'kust','kust@gmail.com','kustu'),(5,'tenma','tenma@hotmail.com','temna'),(6,'dieter','dieter@gmail.com','diotoar'),(7,'johan','johan@gmail.com','yohan'),(8,'lunge','lunge@gmail.com','longue'),(9,'nina','nina@gmail.com','none'),(10,'faqih','fadkey@gmail.com','qitgas');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-12 11:02:08
