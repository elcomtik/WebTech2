CREATE DATABASE  IF NOT EXISTS `zaverecny_projekt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `zaverecny_projekt`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: zaverecny_projekt
-- ------------------------------------------------------
-- Server version	5.7.17-0ubuntu0.16.04.1

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
-- Table structure for table `BUSINESS_ATTACHMENTS`
--

DROP TABLE IF EXISTS `BUSINESS_ATTACHMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BUSINESS_ATTACHMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ATTACHMENT` varchar(150) NOT NULL,
  `ATTACHMENT_LINK` varchar(50) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DOCUMENT_ID` (`DOCUMENT_ID`),
  KEY `DOCUMENT_ID_2` (`DOCUMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BUSINESS_ATTACHMENTS`
--

LOCK TABLES `BUSINESS_ATTACHMENTS` WRITE;
/*!40000 ALTER TABLE `BUSINESS_ATTACHMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `BUSINESS_ATTACHMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BUSINESS_DOCUMENTS`
--

DROP TABLE IF EXISTS `BUSINESS_DOCUMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BUSINESS_DOCUMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENT` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DOCUMENT` (`DOCUMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BUSINESS_DOCUMENTS`
--

LOCK TABLES `BUSINESS_DOCUMENTS` WRITE;
/*!40000 ALTER TABLE `BUSINESS_DOCUMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `BUSINESS_DOCUMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `BUSINESS_LINKS`
--

DROP TABLE IF EXISTS `BUSINESS_LINKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `BUSINESS_LINKS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `LINK` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `BUSINESS_LINKS`
--

LOCK TABLES `BUSINESS_LINKS` WRITE;
/*!40000 ALTER TABLE `BUSINESS_LINKS` DISABLE KEYS */;
/*!40000 ALTER TABLE `BUSINESS_LINKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GALERY`
--

DROP TABLE IF EXISTS `GALERY`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GALERY` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `title_sk` varchar(45) DEFAULT NULL,
  `title_en` varchar(45) DEFAULT NULL,
  `folder` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GALERY`
--

LOCK TABLES `GALERY` WRITE;
/*!40000 ALTER TABLE `GALERY` DISABLE KEYS */;
INSERT INTO `GALERY` VALUES (1,'2017-02-07','Deň otvorených dverí na ÚAMT FEI STU','Open day at UAMT FEI STU','event001'),(2,'2015-09-25','Noc výskumníkov','Night of researchers','event002');
/*!40000 ALTER TABLE `GALERY` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `INCEPTORS_ATTACHMENTS`
--

DROP TABLE IF EXISTS `INCEPTORS_ATTACHMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INCEPTORS_ATTACHMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ATTACHMENT` varchar(150) NOT NULL,
  `ATTACHMENT_LINK` varchar(50) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DOCUMENT_ID` (`DOCUMENT_ID`),
  KEY `DOCUMENT_ID_2` (`DOCUMENT_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INCEPTORS_ATTACHMENTS`
--

LOCK TABLES `INCEPTORS_ATTACHMENTS` WRITE;
/*!40000 ALTER TABLE `INCEPTORS_ATTACHMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `INCEPTORS_ATTACHMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `INCEPTORS_DOCUMENTS`
--

DROP TABLE IF EXISTS `INCEPTORS_DOCUMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INCEPTORS_DOCUMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENT` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DOCUMENT` (`DOCUMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INCEPTORS_DOCUMENTS`
--

LOCK TABLES `INCEPTORS_DOCUMENTS` WRITE;
/*!40000 ALTER TABLE `INCEPTORS_DOCUMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `INCEPTORS_DOCUMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `INCEPTORS_LINKS`
--

DROP TABLE IF EXISTS `INCEPTORS_LINKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `INCEPTORS_LINKS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `LINK` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `INCEPTORS_LINKS`
--

LOCK TABLES `INCEPTORS_LINKS` WRITE;
/*!40000 ALTER TABLE `INCEPTORS_LINKS` DISABLE KEYS */;
/*!40000 ALTER TABLE `INCEPTORS_LINKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `MEDIA`
--

DROP TABLE IF EXISTS `MEDIA`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MEDIA` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `media` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `filename` varchar(45) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MEDIA`
--

LOCK TABLES `MEDIA` WRITE;
/*!40000 ALTER TABLE `MEDIA` DISABLE KEYS */;
INSERT INTO `MEDIA` VALUES (1,'Študenti z Bratislavy vyvinuli u nás prvú elektrickú motokáru','Hospodárske noviny','2014-10-14',NULL,'http://dennik.hnonline.sk/ekonomika-a-firmy/591621-studenti-z-bratislavy-vyvinuli-u-nas-prvu-elektricku-motokaru#.VETnmBjntpk.facebook'),(2,'Prvá elektrická motokára na Slovensku vznikla v škole','Pravda','2014-10-20',NULL,'http://spravy.pravda.sk/ekonomika/clanok/333718-prva-elektricka-motokara-na-slovensku-vznikla-v-skole/'),(3,'Poodkryl tajomstvo','Šarm','2015-06-04','sarm201546.pdf',''),(4,'Mladí vedci navrhli snímač akupunktúrnych bodov','Rádio Regina','2016-01-19',NULL,'http://reginazapad.rtvs.sk/clanky/deti/98134/mladi-vedci-navrhli-snimac-akupunkturnych-bodov'),(5,'Vďaka biomechatronikom z STU sa už akupunktúrne body neskryjú','Dennik N','2016-03-29','science20162903.pdf','http://science.dennikn.sk/clankyarozhovory/'),(6,'Automobilová mechatronika (od 6:35 min)','VAT RTVS','2017-01-12',NULL,'https://www.rtvs.sk/televizia/archiv/11767/115433'),(7,'Prvý slovenský elektrický skúter (od 7:50 min)','VAT RTVS','2017-01-19',NULL,'https://www.rtvs.sk/televizia/archiv/11767/117377'),(8,'',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `MEDIA` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PEDAGOGY_ATTACHMENTS`
--

DROP TABLE IF EXISTS `PEDAGOGY_ATTACHMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PEDAGOGY_ATTACHMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ATTACHMENT` varchar(150) NOT NULL,
  `ATTACHMENT_LINK` varchar(50) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DOCUMENT_ID` (`DOCUMENT_ID`),
  CONSTRAINT `PEDAGOGY_ATTACHMENTS_ibfk_1` FOREIGN KEY (`DOCUMENT_ID`) REFERENCES `PEDAGOGY_DOCUMENTS` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PEDAGOGY_ATTACHMENTS`
--

LOCK TABLES `PEDAGOGY_ATTACHMENTS` WRITE;
/*!40000 ALTER TABLE `PEDAGOGY_ATTACHMENTS` DISABLE KEYS */;
INSERT INTO `PEDAGOGY_ATTACHMENTS` VALUES (1,'a   nieco ','uploads/pedagogy/test.pdf',1),(4,'a ','uploads/pedagogy/test.pdf',1);
/*!40000 ALTER TABLE `PEDAGOGY_ATTACHMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PEDAGOGY_DOCUMENTS`
--

DROP TABLE IF EXISTS `PEDAGOGY_DOCUMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PEDAGOGY_DOCUMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENT` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DOCUMENT` (`DOCUMENT`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PEDAGOGY_DOCUMENTS`
--

LOCK TABLES `PEDAGOGY_DOCUMENTS` WRITE;
/*!40000 ALTER TABLE `PEDAGOGY_DOCUMENTS` DISABLE KEYS */;
INSERT INTO `PEDAGOGY_DOCUMENTS` VALUES (1,'document<br><br>');
/*!40000 ALTER TABLE `PEDAGOGY_DOCUMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PEDAGOGY_LINKS`
--

DROP TABLE IF EXISTS `PEDAGOGY_LINKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PEDAGOGY_LINKS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `LINK` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PEDAGOGY_LINKS`
--

LOCK TABLES `PEDAGOGY_LINKS` WRITE;
/*!40000 ALTER TABLE `PEDAGOGY_LINKS` DISABLE KEYS */;
INSERT INTO `PEDAGOGY_LINKS` VALUES (1,'few','https://www.google.sk/'),(2,'test','tafe'),(3,'link','cscsdc');
/*!40000 ALTER TABLE `PEDAGOGY_LINKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PUBLICATIONS_ATTACHMENTS`
--

DROP TABLE IF EXISTS `PUBLICATIONS_ATTACHMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PUBLICATIONS_ATTACHMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ATTACHMENT` varchar(150) NOT NULL,
  `ATTACHMENT_LINK` varchar(50) NOT NULL,
  `DOCUMENT_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `DOCUMENT_ID` (`DOCUMENT_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATIONS_ATTACHMENTS`
--

LOCK TABLES `PUBLICATIONS_ATTACHMENTS` WRITE;
/*!40000 ALTER TABLE `PUBLICATIONS_ATTACHMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `PUBLICATIONS_ATTACHMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PUBLICATIONS_DOCUMENTS`
--

DROP TABLE IF EXISTS `PUBLICATIONS_DOCUMENTS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PUBLICATIONS_DOCUMENTS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DOCUMENT` varchar(150) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `DOCUMENT` (`DOCUMENT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATIONS_DOCUMENTS`
--

LOCK TABLES `PUBLICATIONS_DOCUMENTS` WRITE;
/*!40000 ALTER TABLE `PUBLICATIONS_DOCUMENTS` DISABLE KEYS */;
/*!40000 ALTER TABLE `PUBLICATIONS_DOCUMENTS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PUBLICATIONS_LINKS`
--

DROP TABLE IF EXISTS `PUBLICATIONS_LINKS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PUBLICATIONS_LINKS` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `LINK` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `NAME` (`NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PUBLICATIONS_LINKS`
--

LOCK TABLES `PUBLICATIONS_LINKS` WRITE;
/*!40000 ALTER TABLE `PUBLICATIONS_LINKS` DISABLE KEYS */;
/*!40000 ALTER TABLE `PUBLICATIONS_LINKS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PURCHASES`
--

DROP TABLE IF EXISTS `PURCHASES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PURCHASES` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TEXT` varchar(1000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PURCHASES`
--

LOCK TABLES `PURCHASES` WRITE;
/*!40000 ALTER TABLE `PURCHASES` DISABLE KEYS */;
INSERT INTO `PURCHASES` VALUES (1,'testovacitextfewfwefwefcacs<br>efefewfwbgfdgdfgdfgdfgdfg<div><br></div><div>yhukhjkh</div>');
/*!40000 ALTER TABLE `PURCHASES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `STAFF`
--

DROP TABLE IF EXISTS `STAFF`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `STAFF` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(40) NOT NULL,
  `ROOM` varchar(20) NOT NULL,
  `NUMBER` varchar(20) NOT NULL,
  `DEPARTMENT` varchar(60) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `CLASSIFICATION` varchar(20) NOT NULL,
  `FUNCTION` varchar(40) CHARACTER SET utf8 COLLATE utf8_slovak_ci NOT NULL,
  `AIS_ID` int(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `STAFF`
--

LOCK TABLES `STAFF` WRITE;
/*!40000 ALTER TABLE `STAFF` DISABLE KEYS */;
INSERT INTO `STAFF` VALUES (1,'Prof. Ing. Štefan Kozák, PhD.','D 115','281','Oddelenie elektroniky, mikropočítačov a PLC systémov','neviem','Vedúci oddelenia OEMP',1954),(2,'Prof. Ing. Justín Murín, DrSc.','A 704','611','Oddelenie aplikovanej mechaniky a mechatroniky','','Vedúci oddelenia OEMP',1830),(3,'prof. Ing. Mikuláš Huba, PhD.','D 112','771','Oddelenie E-mobility, automatizácie a pohonov','','Riaditeľ ústavu, vedúci oddelenia OEAP',2076),(4,'Doc. Ing. Peter Drahoš, PhD.','D 118','669','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',3709),(5,'Doc. Ing. Danica Rosinová, PhD.','D 111','563','Oddelenie informačných, komunikačných a riadiacich systémov','','Vedúca oddelenia OIKR',4938),(6,'Doc. Ing. Alena Kozáková, PhD.','D 111','563','Oddelenie informačných, komunikačných a riadiacich systémov','','',4939),(7,'Ing. Štefan Chamraz, PhD.','D 107','848','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',3711),(10,'Ing. Oto Haffner, PhD.','D 125','315','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',56107),(11,'Ing. Pavol Bisták, PhD.','D 120','695','Oddelenie E-mobility, automatizácie a pohonov','','',3708),(14,'Ing. Igor Jakubicka','T 005','264','Oddelenie elektroniky, mikropočítačov a PLC systémov','','Doktorand',0),(15,'Ing. Peter Tapák, PhD.','D 121','569','Oddelenie E-mobility, automatizácie a pohonov','','',3715),(16,'Ing. Ivan Klimo','D 101','509','Oddelenie elektroniky, mikropočítačov a PLC systémov','','Doktorand',8561),(17,'Ing. Dmitrii Borkin','D 102','395','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand',87894),(18,'doc. Ing. Peter Podhoranský, PhD.','E 008','898','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',0),(19,'Ing. Juraj Paulech, PhD.','A 707','452','Oddelenie aplikovanej mechaniky a mechatroniky','','',12290),(22,'Ing. Jakub Osuský, PhD.','D 123','356','Oddelenie informačných, komunikačných a riadiacich systémov','','',24492),(23,'Ing. Vladislav Baca','T 005','264','Oddelenie elektroniky, mikropočítačov a PLC systémov','','Doktorand',5559),(24,'Ing. Peter Balko','D 102','395','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand',56112),(25,'Ing. Alojz Gomola','','','Oddelenie E-mobility, automatizácie a pohonov','','Doktorand',47823),(26,'Ing. Štefan Bucz, PhD.','','','Oddelenie E-mobility, automatizácie a pohonov','','',0),(27,'Ing. Richard Balogh, PhD.','D 110','411','Oddelenie elektroniky, mikropočítačov a PLC systémov','','Zástupca vedúceho oddelenia OEMP',3706),(30,'doc. Ing. Vladimír Kutiš, PhD.','A 701','562','Oddelenie aplikovanej mechaniky a mechatroniky','','Zástupca vedúceho oddelenia OAMM',1879),(31,'Ing. Marek Kukucka, PhD.','','','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',0),(34,'Ing. Alek Lichtman','D 101','509','Oddelenie elektroniky, mikropočítačov a PLC systémov','','Doktorand',8565),(35,'Ing. Erik Kucera, PhD.','D 125','315','Oddelenie informačných, komunikačných a riadiacich systémov','','administrátor web stránky',55901),(36,'Ing. Michal Kocúr, PhD.','D 104','686','Oddelenie E-mobility, automatizácie a pohonov','','',55800),(37,'Ing. Matej Rábek','D 103','628','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand',8855),(38,'Ing. Erich Stark','C 014','','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand, erich.stark(a)stuba.sk',6041),(39,'Ing. Tomáš Paciga','A 710','573','Oddelenie aplikovanej mechaniky a mechatroniky','','Doktorand',87895),(40,'Ing. Jakub Jakubec','A 707','452','Oddelenie aplikovanej mechaniky a mechatroniky','','Doktorand',36067),(41,'Ing. Tomáš Huba','D 101','509','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand',70083),(42,'Ing. Juraj Hrabovský, PhD.','A 706','559','Oddelenie aplikovanej mechaniky a mechatroniky','','',27795),(43,'Doc. Ing. Vladimír Goga, PhD.','A 702','687','Oddelenie aplikovanej mechaniky a mechatroniky','','',10291),(44,'Ing. Gabriel Gálik','A 706','559','Oddelenie aplikovanej mechaniky a mechatroniky','','Doktorand',55772),(45,'Doc. Ing. Peter Fuchs, PhD.','E 007, B S05','775','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',1898),(46,'prof. Ing. Alfonz Smola, PhD.','A 710','573','Oddelenie aplikovanej mechaniky a mechatroniky','','',0),(47,'Ing. Miroslav Gula','D 103','628','Oddelenie informačných, komunikačných a riadiacich systémov','','Doktorand',17491),(48,'Prof. Ing. Viktor Ferencey, PhD.','A 802','438','Oddelenie E-mobility, automatizácie a pohonov','','Zástupca vedúceho oddelenia OEAP',2209),(49,'Ing. Ján Cigánek, PhD.','D 104','686','Oddelenie informačných, komunikačných a riadiacich systémov','','',10327),(50,'Ing. Martin Bugár, PhD.','A 708','579','Oddelenie E-mobility, automatizácie a pohonov','','',14157),(51,'Ing. Igor Bélai, PhD.','D 126','478','Oddelenie elektroniky, mikropočítačov a PLC systémov','','',4947),(52,'Ing. Tibor Sedlár','A 803','399','Oddelenie aplikovanej mechaniky a mechatroniky','','',48475),(53,'Doc. Ing. Katarína Žáková, PhD.','D 119','742','Oddelenie informačných, komunikačných a riadiacich systémov','','Zástupkyňa vedúcej oddelenia OIKR',4948),(54,'Ing. Mária Hypiusová, PhD.','D 122','193','Oddelenie informačných, komunikačných a riadiacich systémov','','',4949),(55,'Katarína Kermietová','D 116','598','Administratívno - hospodársky úsek','','vedúca oddelenia AHU',45169),(56,'František Erdödy','A 539','818','Administratívno - hospodársky úsek','','',2156),(57,'Katarína Beringerová','A 705','672','Administratívno - hospodársky úsek','','',2049);
/*!40000 ALTER TABLE `STAFF` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evidence`
--

DROP TABLE IF EXISTS `evidence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evidence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=168 DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evidence`
--

LOCK TABLES `evidence` WRITE;
/*!40000 ALTER TABLE `evidence` DISABLE KEYS */;
INSERT INTO `evidence` VALUES (100,'2017-03-04','2017-03-20',3,2),(101,'2017-03-05','2017-03-28',5,4),(102,'2017-03-08','2017-03-08',1,5),(103,'2017-03-20','2017-03-20',1,5),(104,'2017-03-24','2017-03-24',1,5),(105,'2017-03-10','2017-03-16',3,5),(106,'2017-03-26','2017-03-26',3,5),(107,'2017-03-09','2017-03-27',4,5),(108,'2017-03-26','2017-03-26',1,5),(109,'2017-03-15','2017-03-19',5,5),(110,'2017-03-15','2017-03-15',6,5),(111,'2017-03-25','2017-03-25',6,5),(112,'2017-03-21','2017-03-21',6,5),(113,'2017-03-13','2017-03-13',5,5),(114,'2017-03-04','2017-03-15',3,0),(115,'2017-03-17','2017-03-17',3,0),(116,'2017-03-21','2017-03-21',3,0),(117,'2017-03-23','2017-03-25',3,0),(118,'2017-03-13','2017-03-22',4,0),(119,'2017-03-17','2017-03-25',5,0),(120,'2017-04-10','2017-04-13',3,2),(121,'2017-04-10','2017-04-27',5,2),(122,'2017-04-15','2017-04-15',3,2),(123,'2017-04-17','2017-04-21',3,2),(124,'2017-05-01','2017-05-28',3,4),(125,'2017-03-04','2017-03-17',1,4),(126,'2017-03-19','2017-03-26',1,4),(127,'2017-03-01','2017-03-31',6,3),(128,'2017-03-03','2017-03-05',3,2),(129,'2017-03-08','2017-03-08',3,2),(130,'2017-03-11','2017-03-14',3,2),(131,'2017-03-17','2017-03-18',3,2),(132,'2017-03-01','2017-03-01',3,2),(133,'2017-03-20','2017-03-22',3,2),(134,'2017-03-27','2017-03-31',3,2),(135,'2017-05-06','2017-05-28',5,3),(136,'2017-05-16','2017-05-27',6,3),(137,'2017-05-01','2017-05-31',3,5),(138,'2017-05-01','2017-05-31',1,5),(139,'2017-05-01','2017-05-31',4,5),(140,'2017-05-01','2017-05-31',5,5),(141,'2017-05-01','2017-05-31',6,5),(142,'2017-05-01','2017-05-31',1,0),(143,'2017-03-02','2017-03-28',3,3),(144,'2017-03-15','2017-03-27',3,0),(145,'2017-03-05','2017-03-11',3,0),(146,'2017-01-02','2017-01-10',1,2),(147,'2017-01-14','2017-01-30',1,2),(148,'2017-03-05','2017-03-08',1,0),(149,'2017-03-21','2017-03-23',1,0),(150,'2017-03-12','2017-03-14',1,0),(151,'2018-02-08','2018-02-14',6,4),(152,'2018-02-01','2018-02-07',1,4),(153,'2018-02-15','2018-02-20',5,4),(154,'2018-02-25','2018-02-28',3,4),(155,'2018-02-21','2018-02-24',4,4),(156,'2018-02-01','2018-02-07',1,2),(157,'2017-04-14','2017-04-14',5,3),(158,'2017-04-03','2017-04-16',1,3),(159,'2017-04-20','2017-04-26',5,3),(160,'2017-04-18','2017-04-18',4,3),(161,'2017-04-04','2017-04-16',3,3),(162,'2017-04-21','2017-04-21',4,3),(163,'2017-04-13','2017-04-13',6,3),(164,'2018-07-01','2018-07-01',1,4),(165,'2018-07-04','2018-07-11',1,4),(166,'2018-07-07','2018-07-08',1,1),(167,'2018-07-07','2018-07-08',1,0);
/*!40000 ALTER TABLE `evidence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intranet_user`
--

DROP TABLE IF EXISTS `intranet_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intranet_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(9) DEFAULT NULL,
  `surname` varchar(11) DEFAULT NULL,
  `title1` varchar(10) DEFAULT NULL,
  `title2` varchar(6) DEFAULT NULL,
  `ldapLogin` varchar(20) DEFAULT NULL,
  `photo` varchar(13) DEFAULT NULL,
  `room` varchar(5) DEFAULT NULL,
  `phone` varchar(3) DEFAULT NULL,
  `department` varchar(5) DEFAULT NULL,
  `staffRole` varchar(10) DEFAULT NULL,
  `function` varchar(78) DEFAULT NULL,
  `user` tinyint(1) NOT NULL DEFAULT '0',
  `hr` tinyint(1) NOT NULL DEFAULT '0',
  `reporter` tinyint(1) NOT NULL DEFAULT '0',
  `editor` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intranet_user`
--

LOCK TABLES `intranet_user` WRITE;
/*!40000 ALTER TABLE `intranet_user` DISABLE KEYS */;
INSERT INTO `intranet_user` VALUES (1,'Vladislav','Bača','Ing.','','','baca.jpg','T005','264','OEMP','doktorand','',0,0,0,0,0),(2,'Peter','Balko','Ing.','','','','D 102','395','OIKR','doktorand','',0,0,0,0,0),(3,'Richard','Balogh','Ing.',' PhD.','','balogh.jpg','D 110','411','OEMP','teacher','zástupca vedúceho oddelenia',0,0,0,0,0),(4,'Igor','Bélai','Ing.',' PhD.','','','D 126','478','OEMP','teacher','',0,0,0,0,0),(5,'Katarína','Beringerová','','','','','A 705','672','AHU','teacher','',0,0,0,0,0),(6,'Pavol','Bisták','Ing.',' PhD.','bistak','bistak.jpg','D 120','695','OEAP','teacher','',0,0,0,0,0),(7,'Dmitrii','Borkin','Ing.','','','','D 102','395','OIKR','doktorand','',0,0,0,0,0),(8,'Martin','Bugár','Ing.',' PhD.','','','A 708','579','OEAP','teacher','',0,0,0,0,0),(9,'Ján','Cigánek','Ing.',' PhD.','','','D 104','686','OIKR','teacher','',0,0,0,0,0),(10,'Peter','Drahoš','doc. Ing.',' PhD.','','','D 118','669','OEMP','teacher','',0,0,0,0,0),(11,'František','Erdödy','','','','erdody.jpg','A S39','818','AHU','teacher','',0,0,0,0,0),(12,'Viktor','Ferencey','prof. Ing.',' PhD.','','ferencey.jpg','A 802','438','OEAP','teacher','zástupca vedúceho oddelenia',0,0,0,0,0),(13,'Peter','Fuchs','doc. Ing.',' PhD.','','','B S05','826','OEMP','researcher','',0,0,0,0,0),(14,'Gabriel','Gálik','Ing.','','','','A 706','559','OAMM','researcher','',0,0,0,0,0),(15,'Vladimír','Goga','doc. Ing.',' PhD.','','','A 702','687','OAMM','teacher','',0,0,0,0,0),(16,'Miroslav','Gula','Ing.','','xgulam','gula.jpg','D 103','628','OIKR','doktorand','',0,0,0,0,0),(17,'Oto','Haffner','Ing.',' PhD.','','haffner.jpg','D 125','315','OIKR ','teacher','',0,0,0,0,0),(18,'Juraj','Hrabovský','Ing.',' PhD.','','','A 706','559','OAMM','teacher','',0,0,0,0,0),(19,'Mikuláš','Huba','prof. Ing.',' PhD.','','huba.jpg','D 112','771','OEAP','teacher','riaditeľ ústavu; vedúci oddelenia',0,0,0,0,0),(20,'Mária','Hypiusová','Ing.',' PhD.','','','D 122','193','OIKR','teacher','',0,0,0,0,0),(21,'Štefan','Chamraz','Ing.',' PhD.','','','D 107','848','OEMP','teacher','',0,0,0,0,0),(22,'Jakub','Jakubec','Ing.',' PhD.','','','A 707','452','OAMM ','researcher','',0,0,0,0,0),(23,'Igor','Jakubička','Ing.','','','jakubicka.jpg','T005','264','OEMP','doktorand','',0,0,0,0,0),(24,'Katarína','Kermietová','','','','','D 116','598','AHU','teacher','zástupca vedúceho oddelenia',0,0,0,0,0),(25,'Ivan','Klimo','Ing.','','','','D 101','509','OEMP','doktorand','',0,0,0,0,0),(26,'Michal','Kocúr','Ing.',' PhD.','xkocurm2','kocur.jpg','D 104','686','OIKR ','teacher','',0,0,0,0,0),(27,'Štefan','Kozák','prof. Ing.',' PhD.','','kozak.jpg','D 115','281','OEMP','teacher','zástupca riaditeľa ústavu pre rozvoj ústavu; vedúci oddelenia',0,0,0,0,0),(28,'Alena','Kozáková','doc. Ing.',' PhD.','','','D 111','563','OIKR','teacher','',0,0,0,0,0),(29,'Erik','Kučera','Ing.',' PhD.','','','D 125','315','OIKR ','teacher','',0,0,0,0,0),(30,'Vladimír','Kutiš','doc. Ing.',' PhD.','','kutis.jpg','A 701','562','OAMM ','teacher','zástupca vedúceho oddelenia',0,0,0,0,0),(31,'Alek','Lichtman','Ing.','','','','D 101','509','OEMP','doktorand','',0,0,0,0,0),(32,'Justín','Murín','prof. Ing.',' DrSc.','','murin.jpg','A 704','611','OAMM','teacher','zástupca riaditeľa ústavu pre vedeckú činnosť; vedúci oddelenia',0,0,0,0,0),(33,'Jakub','Osuský','Ing.',' PhD.','','osusky.jpg','D 123','356','OIKR ','teacher','',0,0,0,0,0),(34,'Tomáš','Paciga','Ing.','','','','A 707','452','OAMM','doktorand','',0,0,0,0,0),(35,'Juraj','Paulech','Ing.',' PhD.','','paulech.jpg','A 701','562','OAMM','teacher','',0,0,0,0,0),(36,'Matej','Rábek','Ing.','','xrabek','rabek.jpg','D 103','628','OIKR','doktorand','',0,0,0,0,0),(37,'Danica','Rosinová','doc. Ing.',' PhD.','','rosinova.jpg','D 111','563','OIKR','teacher','vedúci oddelenia',0,0,0,0,0),(38,'Tibor','Sedlár','Ing. ','','','','A 803','399','OAMM','teacher','',0,0,0,0,0),(39,'Erich','Stark','Ing.','','','stark.jpg','C 014','','OIKR','doktorand','',0,0,0,0,0),(40,'Peter','Ťapák','Ing.',' PhD.','','','D 121','569','OEAP','teacher','',0,0,0,0,0),(41,'Katarína','Žáková','doc. Ing.',' PhD.','zakova','zakova.jpg','D 119','742','OIKR','teacher','zástupca riaditeľa ústavu pre pedagogickú činnosť; zástupca vedúceho oddelenia',0,0,0,0,0),(42,'Erik','Pribula',NULL,NULL,'xpribula',NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1,1),(43,'Adam','Podhradský',NULL,NULL,'xpodhradskya',NULL,NULL,NULL,NULL,NULL,NULL,0,0,0,0,0),(44,'Roman','Danko',NULL,NULL,'xdankor',NULL,NULL,NULL,NULL,NULL,NULL,1,1,0,1,0),(45,'Sabina','Franova',NULL,NULL,'xfranovas',NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1,1);
/*!40000 ALTER TABLE `intranet_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'PN'),(2,'OCR'),(3,'Služobná cesta'),(4,'Dovolenka'),(5,'Plán dovolenky');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(40) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Prof. Ing. Štefan Kozák, PhD.'),(2,'Prof. Ing. Justín Murín, DrSc.'),(3,'prof. Ing. Mikuláš Huba, PhD.'),(4,'Doc. Ing. Peter Drahoš, PhD.'),(5,'Doc. Ing. Danica Rosinová, PhD.'),(6,'Doc. Ing. Alena Kozáková, PhD.'),(7,'Ing. Štefan Chamraz, PhD.'),(10,'Ing. Oto Haffner, PhD.'),(11,'Ing. Pavol Bisták, PhD.'),(14,'Ing. Igor Jakubicka'),(15,'Ing. Peter Tapák, PhD.'),(16,'Ing. Ivan Klimo'),(17,'Ing. Dmitrii Borkin'),(18,'doc. Ing. Peter Podhoranský, PhD.'),(19,'Ing. Juraj Paulech, PhD.'),(22,'Ing. Jakub Osuský, PhD.'),(23,'Ing. Vladislav Baca'),(24,'Ing. Peter Balko'),(25,'Ing. Alojz Gomola'),(26,'Ing. Štefan Bucz, PhD.'),(27,'Ing. Richard Balogh, PhD.'),(30,'doc. Ing. Vladimír Kutiš, PhD.'),(31,'Ing. Marek Kukucka, PhD.'),(34,'Ing. Alek Lichtman'),(35,'Ing. Erik Kucera, PhD.'),(36,'Ing. Michal Kocúr, PhD.'),(37,'Ing. Matej Rábek'),(38,'Ing. Erich Stark'),(39,'Ing. Tomáš Paciga'),(40,'Ing. Jakub Jakubec'),(41,'Ing. Tomáš Huba'),(42,'Ing. Juraj Hrabovský, PhD.'),(43,'Doc. Ing. Vladimír Goga, PhD.'),(44,'Ing. Gabriel Gálik'),(45,'Doc. Ing. Peter Fuchs, PhD.'),(46,'prof. Ing. Alfonz Smola, PhD.'),(47,'Ing. Miroslav Gula'),(48,'Prof. Ing. Viktor Ferencey, PhD.'),(49,'Ing. Ján Cigánek, PhD.'),(50,'Ing. Martin Bugár, PhD.'),(51,'Ing. Igor Bélai, PhD.'),(52,'Ing. Tibor Sedlár'),(53,'Doc. Ing. Katarína Žáková, PhD.'),(54,'Ing. Mária Hypiusová, PhD.'),(55,'Katarína Kermietová'),(56,'František Erdödy'),(57,'Katarína Beringerová');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) CHARACTER SET latin1 NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users2`
--

LOCK TABLES `users2` WRITE;
/*!40000 ALTER TABLE `users2` DISABLE KEYS */;
INSERT INTO `users2` VALUES (1,'Adam','Nový'),(3,'Peter','Dobrý'),(4,'Milan','Rovný'),(5,'Jozef','Python'),(6,'Adam','Strím');
/*!40000 ALTER TABLE `users2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video_list`
--

DROP TABLE IF EXISTS `video_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video_list` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name_sk` varchar(100) CHARACTER SET latin1 NOT NULL,
  `url` varchar(60) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_slovak_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video_list`
--

LOCK TABLES `video_list` WRITE;
/*!40000 ALTER TABLE `video_list` DISABLE KEYS */;
INSERT INTO `video_list` VALUES (2,'Našou prioritou sú úspešní študenti - Automobilová mechatronika FEI STU','XTjNQoEZmbk'),(3,'Kam na vysokú školu ?','lFaF0hKrFaM'),(4,'Exkurzia - Microstep (Bratislava)','K3i9DgrK4Ro'),(5,'ELO SYS 2014 - elektrická motokára, elektromobilita','0qnpBOZY3Ys'),(6,'Aplikovaná Mechatronika- Meranie akupunktúrnych bodov\r\n','3E4PJI08_2Q');
/*!40000 ALTER TABLE `video_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-26 22:29:42
