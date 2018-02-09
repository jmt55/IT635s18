-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: ComputerInventory
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
  `serial_num` varchar(45) NOT NULL,
  `hostname` varchar(45) DEFAULT NULL,
  `model` varchar(25) DEFAULT NULL,
  `processor` varchar(25) DEFAULT NULL,
  `ram` varchar(8) DEFAULT NULL,
  `HDD_size_type` varchar(20) DEFAULT NULL,
  `office_site` varchar(25) DEFAULT NULL,
  `custodian` varchar(25) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `purchase_date` date DEFAULT NULL,
  `refresh_date` date DEFAULT NULL,
  `warranty_exp` date DEFAULT NULL,
  PRIMARY KEY (`serial_num`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wksinv`
--

LOCK TABLES `wksinv` WRITE;
/*!40000 ALTER TABLE `wksinv` DISABLE KEYS */;
INSERT INTO `wksinv` VALUES ('B0KB0K1','PRNL-B0KB0K1','Latitude E7250','i5-2600','8GB','SSD-256','Princeton','Emma.Stone','actve','2018-01-01','2021-06-01','2022-01-01');
/*!40000 ALTER TABLE `wksinv` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-09 16:32:45
