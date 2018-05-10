-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: ComputerInventory
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wksinv`
--

DROP TABLE IF EXISTS `wksinv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wksinv` (
  `sn` varchar(12) NOT NULL,
  `hostname` varchar(25) NOT NULL,
  `model` varchar(25) NOT NULL,
  `type` varchar(10) NOT NULL,
  `cpu` varchar(15) NOT NULL,
  `ram` varchar(12) NOT NULL,
  `hdd_type` varchar(12) NOT NULL,
  `user` varchar(55) NOT NULL,
  `status` varchar(15) NOT NULL,
  `refresh_date` date NOT NULL,
  PRIMARY KEY (`sn`),
  KEY `empname` (`user`),
  CONSTRAINT `wksinv_ibfk_1` FOREIGN KEY (`user`) REFERENCES `members` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wksinv`
--

LOCK TABLES `wksinv` WRITE;
/*!40000 ALTER TABLE `wksinv` DISABLE KEYS */;
INSERT INTO `wksinv` VALUES ('4CUSBR5','EHAL-4CUSBR5','Optiplex O7050','Desktop','i7-2600','16GB','SATA-500','boo-admin','requested','2021-09-19'),('81BOK26','TLSL-81BOK26','Latitude E7270','Laptop','i5-2600','8GB','SSD-256','boo-admin','available','2018-09-05'),('ABC78D1','REDD-ABC78D1','Optiplex O7020','Desktop','i7-2900','8GB','SSD-256','adminuser','available','2020-06-01'),('ABCDE98','PRNL-ABCDE98','E6400','laptop','i5-6600','8GB','SSD-256','boo','available','2018-04-11'),('ABCDE99','TLSL-ABCDE99','Latitude E7480','Laptop','i5-2700','8GB','SSD-256','adminuser','available','2018-04-11'),('B0KB0K1','PRNL-B0KB0K1','Latitude E7250','Laptop','i5-2600','8GB','SSD-256','boo','active','2021-06-01'),('RTH76G1','NYCL-RTH76G1','Latitude E5480','Laptop','i5-2600','8GB','SATA-500','Klaus.Bowen','active','2021-06-01'),('XTYXTY1','BOSL-XTYXTY1','Latitude E7280','Laptop','i5-2600','8GB','SSD-256','boo-admin','available','2021-05-07');
/*!40000 ALTER TABLE `wksinv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(55) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `accessType` varchar(16) DEFAULT NULL,
  `location` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`user`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'adminuser','97531','admin','cloud'),(8,'boo','10a8e6aa11f5ce70918faf1c046b5087','standard','Bulgaria'),(9,'boo-admin','10a8e6aa11f5ce70918faf1c046b5087','admin','Nintendo'),(5,'Dean.Glow','daggerplusthree','standard','Boston'),(3,'Emma.Stone','daggerplusone','standard','Princeton'),(6,'hashman','ab03379ce3de90bb6364ee46739c7c5f','admin','Augusta'),(7,'hashman2','dc3b471e73bd965788de13c262b82d25','standard','Bulgaria'),(4,'Klaus.Bowen','daggerplustwo','standard','New York'),(2,'root','123456','admin','cloud');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wksrequest`
--

DROP TABLE IF EXISTS `wksrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wksrequest` (
  `req_no` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(55) DEFAULT NULL,
  `sn` varchar(12) DEFAULT NULL,
  `request_time` datetime DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `req_no` (`req_no`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wksrequest`
--

LOCK TABLES `wksrequest` WRITE;
/*!40000 ALTER TABLE `wksrequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `wksrequest` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-10  3:20:57
