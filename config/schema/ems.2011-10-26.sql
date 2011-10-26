-- MySQL dump 10.13  Distrib 5.1.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ems
-- ------------------------------------------------------
-- Server version	5.1.58-1ubuntu1

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
-- Table structure for table `acos`
--

DROP TABLE IF EXISTS `acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acos`
--

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;
INSERT INTO `acos` VALUES (1,NULL,NULL,NULL,'controllers',1,2),(2,NULL,NULL,NULL,'controllers',3,4),(3,NULL,NULL,NULL,'controllers',5,6),(4,NULL,NULL,NULL,'controllers',7,8),(5,NULL,NULL,NULL,'controllers',9,202),(6,5,NULL,NULL,'Pages',10,23),(7,6,NULL,NULL,'display',11,12),(8,6,NULL,NULL,'add',13,14),(9,6,NULL,NULL,'edit',15,16),(10,6,NULL,NULL,'index',17,18),(11,6,NULL,NULL,'view',19,20),(12,6,NULL,NULL,'delete',21,22),(13,5,NULL,NULL,'Announcements',24,35),(14,13,NULL,NULL,'index',25,26),(15,13,NULL,NULL,'view',27,28),(16,13,NULL,NULL,'add',29,30),(17,13,NULL,NULL,'edit',31,32),(18,13,NULL,NULL,'delete',33,34),(19,5,NULL,NULL,'Rates',36,47),(20,19,NULL,NULL,'index',37,38),(21,19,NULL,NULL,'view',39,40),(22,19,NULL,NULL,'add',41,42),(23,19,NULL,NULL,'edit',43,44),(24,19,NULL,NULL,'delete',45,46),(25,5,NULL,NULL,'MiscellaneousFees',48,59),(26,25,NULL,NULL,'index',49,50),(27,25,NULL,NULL,'view',51,52),(28,25,NULL,NULL,'add',53,54),(29,25,NULL,NULL,'edit',55,56),(30,25,NULL,NULL,'delete',57,58),(31,5,NULL,NULL,'Liquidations',60,73),(32,31,NULL,NULL,'index',61,62),(33,31,NULL,NULL,'view',63,64),(34,31,NULL,NULL,'add',65,66),(35,31,NULL,NULL,'edit',67,68),(36,31,NULL,NULL,'delete',69,70),(37,5,NULL,NULL,'Notifications',74,85),(38,37,NULL,NULL,'index',75,76),(39,37,NULL,NULL,'view',77,78),(40,37,NULL,NULL,'add',79,80),(41,37,NULL,NULL,'edit',81,82),(42,37,NULL,NULL,'delete',83,84),(43,5,NULL,NULL,'AnnouncementsTags',86,97),(44,43,NULL,NULL,'index',87,88),(45,43,NULL,NULL,'view',89,90),(46,43,NULL,NULL,'add',91,92),(47,43,NULL,NULL,'edit',93,94),(48,43,NULL,NULL,'delete',95,96),(49,5,NULL,NULL,'Reports',98,109),(50,49,NULL,NULL,'index',99,100),(51,49,NULL,NULL,'view',101,102),(52,49,NULL,NULL,'add',103,104),(53,49,NULL,NULL,'edit',105,106),(54,49,NULL,NULL,'delete',107,108),(55,5,NULL,NULL,'Groups',110,121),(56,55,NULL,NULL,'index',111,112),(57,55,NULL,NULL,'view',113,114),(58,55,NULL,NULL,'add',115,116),(59,55,NULL,NULL,'edit',117,118),(60,55,NULL,NULL,'delete',119,120),(61,5,NULL,NULL,'Locations',122,133),(62,61,NULL,NULL,'index',123,124),(63,61,NULL,NULL,'view',125,126),(64,61,NULL,NULL,'add',127,128),(65,61,NULL,NULL,'edit',129,130),(66,61,NULL,NULL,'delete',131,132),(67,5,NULL,NULL,'Tags',134,145),(68,67,NULL,NULL,'index',135,136),(69,67,NULL,NULL,'view',137,138),(70,67,NULL,NULL,'add',139,140),(71,67,NULL,NULL,'edit',141,142),(72,67,NULL,NULL,'delete',143,144),(73,5,NULL,NULL,'Transportations',146,157),(74,73,NULL,NULL,'index',147,148),(75,73,NULL,NULL,'view',149,150),(76,73,NULL,NULL,'add',151,152),(77,73,NULL,NULL,'edit',153,154),(78,73,NULL,NULL,'delete',155,156),(79,5,NULL,NULL,'Positions',158,169),(80,79,NULL,NULL,'index',159,160),(81,79,NULL,NULL,'view',161,162),(82,79,NULL,NULL,'add',163,164),(83,79,NULL,NULL,'edit',165,166),(84,79,NULL,NULL,'delete',167,168),(85,5,NULL,NULL,'Departments',170,181),(86,85,NULL,NULL,'index',171,172),(87,85,NULL,NULL,'view',173,174),(88,85,NULL,NULL,'add',175,176),(89,85,NULL,NULL,'edit',177,178),(90,85,NULL,NULL,'delete',179,180),(91,5,NULL,NULL,'Users',182,201),(92,91,NULL,NULL,'login',183,184),(93,91,NULL,NULL,'logout',185,186),(94,91,NULL,NULL,'index',187,188),(95,91,NULL,NULL,'view',189,190),(96,91,NULL,NULL,'add',191,192),(97,91,NULL,NULL,'edit',193,194),(98,91,NULL,NULL,'delete',195,196),(99,91,NULL,NULL,'profile',197,198),(101,31,NULL,NULL,'date',71,72);
/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements` (
  `id` char(36) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` char(36) NOT NULL,
  `image` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements`
--

LOCK TABLES `announcements` WRITE;
/*!40000 ALTER TABLE `announcements` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `announcements_tags`
--

DROP TABLE IF EXISTS `announcements_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `announcements_tags` (
  `id` char(36) NOT NULL,
  `announcement_id` char(36) NOT NULL,
  `tag_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `announcements_tags`
--

LOCK TABLES `announcements_tags` WRITE;
/*!40000 ALTER TABLE `announcements_tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `announcements_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros`
--

DROP TABLE IF EXISTS `aros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` char(36) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros`
--

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;
INSERT INTO `aros` VALUES (1,NULL,'Group','4ea17a9c-41f4-4ac5-85e4-04db7f000101',NULL,1,4),(2,NULL,'Group','4ea17b88-a70c-4712-b451-27e17f000101',NULL,5,8),(3,NULL,'Group','4ea17b8c-fbfc-4825-a424-27e17f000101',NULL,9,12),(4,1,'User','4ea17d4f-179c-41c6-b212-04d77f000101',NULL,2,3),(5,3,'User','4ea60be2-3c70-430c-afc1-0eb87f000101',NULL,10,11),(6,2,'User','4ea60c1e-4f80-41a9-94b9-04e17f000101',NULL,6,7);
/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aros_acos`
--

DROP TABLE IF EXISTS `aros_acos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aros_acos`
--

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;
INSERT INTO `aros_acos` VALUES (1,1,5,'1','1','1','1'),(2,2,5,'-1','-1','-1','-1'),(3,2,34,'-1','-1','-1','-1'),(4,2,31,'1','1','1','1'),(5,2,13,'1','1','1','1'),(6,2,99,'1','1','1','1'),(7,2,38,'1','1','1','1'),(8,3,5,'-1','-1','-1','-1'),(9,3,31,'1','1','1','1'),(10,3,99,'1','1','1','1'),(11,3,15,'1','1','1','1'),(12,3,38,'1','1','1','1');
/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` char(36) NOT NULL,
  `department` varchar(29) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES ('4ea027ed-c574-4980-bbbf-04d57f000101','IT');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` char(36) NOT NULL,
  `group` varchar(14) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES ('4ea17a9c-41f4-4ac5-85e4-04db7f000101','Administrator','2011-10-21 21:58:52','2011-10-21 21:58:52'),('4ea17b88-a70c-4712-b451-27e17f000101','Accounting','2011-10-21 22:02:48','2011-10-21 22:02:48'),('4ea17b8c-fbfc-4825-a424-27e17f000101','Regular','2011-10-21 22:02:52','2011-10-21 22:02:52');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liquidations`
--

DROP TABLE IF EXISTS `liquidations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liquidations` (
  `id` char(36) NOT NULL,
  `lodging` decimal(6,2) NOT NULL,
  `total` decimal(7,2) NOT NULL,
  `isAccepted` tinyint(1) DEFAULT NULL,
  `user_id` char(36) NOT NULL,
  `location_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liquidations`
--

LOCK TABLES `liquidations` WRITE;
/*!40000 ALTER TABLE `liquidations` DISABLE KEYS */;
/*!40000 ALTER TABLE `liquidations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` char(36) NOT NULL,
  `location` varchar(32) NOT NULL,
  `class` char(1) NOT NULL,
  `region` varchar(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES ('4ea6480d-d174-42c8-be4a-0ede7f000101','Muntinlupa Plant','M','Luzon');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `miscellaneous_fees`
--

DROP TABLE IF EXISTS `miscellaneous_fees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `miscellaneous_fees` (
  `id` char(36) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` decimal(5,2) NOT NULL,
  `report_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `miscellaneous_fees`
--

LOCK TABLES `miscellaneous_fees` WRITE;
/*!40000 ALTER TABLE `miscellaneous_fees` DISABLE KEYS */;
/*!40000 ALTER TABLE `miscellaneous_fees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` char(36) DEFAULT NULL,
  `group_id` char(36) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` char(36) NOT NULL,
  `position` varchar(24) NOT NULL,
  `class` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES ('4ea027e3-e448-458e-a51b-04d57f000101','Developer','SO');
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `id` char(36) NOT NULL,
  `expense` varchar(15) NOT NULL,
  `location_class` char(1) NOT NULL,
  `position_class` char(2) NOT NULL,
  `rate` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reports`
--

DROP TABLE IF EXISTS `reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reports` (
  `id` char(36) NOT NULL,
  `day` varchar(9) NOT NULL,
  `date` date NOT NULL,
  `breakfast` decimal(5,2) NOT NULL,
  `lunch` decimal(5,2) NOT NULL,
  `dinner` decimal(5,2) NOT NULL,
  `user_id` char(36) NOT NULL,
  `liquidation_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reports`
--

LOCK TABLES `reports` WRITE;
/*!40000 ALTER TABLE `reports` DISABLE KEYS */;
/*!40000 ALTER TABLE `reports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` char(36) NOT NULL,
  `tag` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transportations`
--

DROP TABLE IF EXISTS `transportations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transportations` (
  `id` char(36) NOT NULL,
  `description` varchar(100) NOT NULL,
  `amount` decimal(5,2) NOT NULL,
  `report_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transportations`
--

LOCK TABLES `transportations` WRITE;
/*!40000 ALTER TABLE `transportations` DISABLE KEYS */;
/*!40000 ALTER TABLE `transportations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(40) NOT NULL,
  `first_name` varchar(18) NOT NULL,
  `middle_name` varchar(16) NOT NULL,
  `last_name` varchar(28) NOT NULL,
  `email` varchar(117) NOT NULL,
  `address` varchar(67) NOT NULL,
  `city` varchar(16) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `home` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `position_id` char(36) NOT NULL,
  `department_id` char(36) NOT NULL,
  `group_id` char(36) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `dirname` varchar(255) DEFAULT NULL,
  `basename` varchar(255) DEFAULT NULL,
  `checksum` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('4ea17d4f-179c-41c6-b212-04d77f000101','jaggygauran','1b3d6eb484667caaa2b632944fe037244b1a4367','Jose Andres','Cruz','Gauran','jaggygauran@gmail.com','3933 Marigold St. Sun Valley','Paranaque','09189004125','823-6793','2011-10-21 22:10:23','4ea027e3-e448-458e-a51b-04d57f000101','4ea027ed-c574-4980-bbbf-04d57f000101','4ea17a9c-41f4-4ac5-85e4-04db7f000101','/home/jaggy/web/ems/webroot/media/transfer/img/269588_216844938356744_100000937182202_601475_2610081_n.jpg','transfer/img','269588_216844938356744_100000937182202_601475_2610081_n.jpg','131f51410a28e4329042fd1a3833caee'),('4ea60be2-3c70-430c-afc1-0eb87f000101','aatabucol','1b3d6eb484667caaa2b632944fe037244b1a4367','James Mervin','Aguilar','Tabucol','aatabucol@apc.edu.ph','Malibay','Pasay','09177112470','8231111','2011-10-25 09:07:46','4ea027e3-e448-458e-a51b-04d57f000101','4ea027ed-c574-4980-bbbf-04d57f000101','4ea17b8c-fbfc-4825-a424-27e17f000101','/home/jaggy/web/ems/webroot/media/transfer/img/300122_269292459747896_100000014324071_1229849_6247779_n.jpg','transfer/img','300122_269292459747896_100000014324071_1229849_6247779_n.jpg','071b872b2bb5866011739b8b47129e9e'),('4ea60c1e-4f80-41a9-94b9-04e17f000101','alronquillo','1b3d6eb484667caaa2b632944fe037244b1a4367','Randel','Laurente','Ronquillo','alronquillo@apc.edu.ph','Kawit','Cavite','09171111111','8231112','2011-10-25 09:08:46','4ea027e3-e448-458e-a51b-04d57f000101','4ea027ed-c574-4980-bbbf-04d57f000101','4ea17b88-a70c-4712-b451-27e17f000101','/home/jaggy/web/ems/webroot/media/transfer/img/28930_1232584349016_1661395093_480386_3921062_n.jpg','transfer/img','28930_1232584349016_1661395093_480386_3921062_n.jpg','a43b0204f03de3abebab7c3f3fb635f6');
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

-- Dump completed on 2011-10-27  0:17:38
