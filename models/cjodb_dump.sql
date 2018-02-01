-- MySQL dump 10.13  Distrib 5.7.18, for Win64 (x86_64)
--
-- Host: localhost    Database: cjodb
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `areaposition`
--

DROP TABLE IF EXISTS `areaposition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areaposition` (
  `AreaPositionID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Area` varchar(132) NOT NULL,
  `Position` varchar(80) NOT NULL,
  `Salary_low` float DEFAULT NULL,
  `Salary_high` float DEFAULT NULL,
  `Salary_avg` float DEFAULT NULL,
  PRIMARY KEY (`AreaPositionID`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areaposition`
--

LOCK TABLES `areaposition` WRITE;
/*!40000 ALTER TABLE `areaposition` DISABLE KEYS */;
INSERT INTO `areaposition` VALUES (1,'Administration','Chief Information Officer (CIO)',175000,279000,227000),(2,'Administration','Chief Technology Officer (CTO)',149000,240000,194500),(3,'Administration','Chief Security Officer',145250,236750,191000),(4,'Administration','Vice President of Information Technology',143250,234250,188750),(5,'Administration','Director of Technology',124500,193500,159000),(6,'Administration','Information Technology Manager',108000,164750,136375),(7,'Applications Development','Manager',107750,167250,137500),(8,'Applications Development','Project Manager',97250,151750,124500),(9,'Applications Development','Systems Analyst',84500,125000,104750),(10,'Applications Development','Applications Architect',124500,178750,151625),(11,'Applications Development','Business Systems Analyst',86250,127000,106625),(12,'Applications Development','CRM Business Analyst',89500,132250,110875),(13,'Applications Development','CRM Technical Developer',100000,146000,123000),(14,'Applications Development','Developer/Programmer Analyst',83000,143250,113125),(15,'Applications Development','ERP Business Analyst',95000,137750,116375),(16,'Applications Development','ERP Technical/Functional Analyst',100000,146250,123125),(17,'Applications Development','ERP Technical Developer',102750,154250,128500),(18,'Applications Development','Lead Applications Developer',115000,167000,141000),(19,'Applications Development','Mobile Applications Developer',118750,182250,150500),(20,'Applications Development','Technical Writer',56500,89250,72875),(21,'Consulting & Systems Integration','Director',126750,198000,162375),(22,'Consulting & Systems Integration','Practice Manager',127750,180000,153875),(23,'Consulting & Systems Integration','Project Manager/Senior Consultant',103750,160500,132125),(24,'Consulting & Systems Integration','Staff Consultant',81250,121500,101375),(25,'Consulting & Systems Integration','Senior IT Auditor',121000,173500,147250),(26,'Consulting & Systems Integration','IT Auditor',98500,153000,125750),(27,'Data/Database Administration','Big Data Engineer',135000,196000,165500),(28,'Data/Database Administration','Database Manager',122250,177000,149625),(29,'Data/Database Administration','Database Developer',108000,161500,134750),(30,'Data/Database Administration','Database Administrator',98500,148500,123500),(31,'Data/Database Administration','Data Analyst/Report Writer',77500,118750,98125),(32,'Data/Database Administration','Data Architect',131250,184000,157625),(33,'Data/Database Administration','Data Modeler',111000,161500,136250),(34,'Data/Database Administration','Data Scientist',116000,163500,139750),(35,'Data/Database Administration','Data Warehouse Manager',129000,179000,154000),(36,'Data/Database Administration','Data Warehouse Analyst',107500,155750,131625),(37,'Data/Database Administration','Business Intelligence Analyst',118000,171750,144875),(38,'Data/Database Administration','Electronic Data Interchange (EDI) Specialist',77500,118750,98125),(39,'Data/Database Administration','Portal Administrator',96000,138750,117375),(40,'Quality Assurance (Qa) & Testing','QA Engineer ? Manual',66250,94500,80375),(41,'Quality Assurance (Qa) & Testing','QA Engineer ? Automated',76750,112750,94750),(42,'Quality Assurance (Qa) & Testing','QA/Testing Manager',95750,132000,113875),(43,'Quality Assurance (Qa) & Testing','QA Associate/Analyst',67000,102750,84875),(44,'Web Development','Senior Web Developer',116250,161500,138875),(45,'Web Development','Web Developer',82750,135500,109125),(46,'Web Development','Front-End Web Developer',83250,119500,101375),(47,'Web Development','Web Administrator',70750,111500,91125),(48,'Web Development','Web Designer',70500,118000,94250),(49,'Web Development','E-Commerce Analyst',92000,135000,113500),(50,'Networking/Telecommunications','Network Architect',125000,183000,154000),(51,'Networking/Telecommunications','Network Manager',102250,153000,127625),(52,'Networking/Telecommunications','Network Engineer',99000,146250,122625),(53,'Networking/Telecommunications','Wireless Network Engineer',113250,158000,135625),(54,'Networking/Telecommunications','Network Administrator',78000,117750,97875),(55,'Networking/Telecommunications','Pre-Sales Engineer/Technical Engineer',92250,140000,116125),(56,'Networking/Telecommunications','Telecommunications Manager',90000,130000,110000),(57,'Networking/Telecommunications','Telecommunications Specialist',63000,98000,80500),(58,'Operations','Manager',68000,99000,83500),(59,'Operations','Computer Operator',36000,50000,43000),(60,'Operations','Mainframe Systems Programmer',64000,89500,76750),(61,'Security','Data Security Analyst',118250,169000,143625),(62,'Security','Systems Security Administrator',110500,157500,134000),(63,'Security','Network Security Administrator',107750,155250,131500),(64,'Security','Network Security Engineer',115500,162500,139000),(65,'Security','Information Systems Security Manager',136000,191750,163875),(66,'Software Development','Product Manager',107750,159000,133375),(67,'Software Development','Software Engineer',108250,164500,136375),(68,'Software Development','Software Developer',93000,155000,124000),(69,'Technical Services Help Desk & Technical Support','Manager',86000,125500,105750),(70,'Technical Services Help Desk & Technical Support','Desktop Support Analyst',55250,82500,68875),(71,'Technical Services Help Desk & Technical Support','Systems Administrator',69000,112000,90500),(72,'Technical Services Help Desk & Technical Support','Systems Engineer',86500,130000,108250),(73,'Technical Services Help Desk & Technical Support','Messaging Administrator',76000,116000,96000),(74,'Technical Services Help Desk & Technical Support','Help Desk Tier 3',61000,80500,70750),(75,'Technical Services Help Desk & Technical Support','Help Desk Tier 2',46250,64000,55125),(76,'Technical Services Help Desk & Technical Support','Help Desk Tier 1',36000,51750,43875),(77,'Technical Services Help Desk & Technical Support','Instructor/Trainer',57250,92250,74750),(78,'Technical Services Help Desk & Technical Support','PC Technician',37000,53500,45250),(79,'Technical Services Help Desk & Technical Support','Business Continuity Analyst',99000,148000,123500);
/*!40000 ALTER TABLE `areaposition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `col`
--

DROP TABLE IF EXISTS `col`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `col` (
  `ColID` smallint(6) NOT NULL AUTO_INCREMENT,
  `City` varchar(45) NOT NULL,
  `State` varchar(2) NOT NULL,
  `StateTax` varchar(3) NOT NULL,
  `ColIndex` float DEFAULT NULL,
  `Grocery` float DEFAULT NULL,
  `Housing` float DEFAULT NULL,
  `Utilities` float DEFAULT NULL,
  `Transport` float DEFAULT NULL,
  `HealthCare` float DEFAULT NULL,
  `MiscGoodServices` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ColID`)
) ENGINE=InnoDB AUTO_INCREMENT=326 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `col`
--

LOCK TABLES `col` WRITE;
/*!40000 ALTER TABLE `col` DISABLE KEYS */;
INSERT INTO `col` VALUES (1,'Akron','OH','Yes',100.2,105.1,99.7,107.9,107.1,86.8,'96'),(2,'Albany','GA','Yes',90.1,108.7,74.8,82,96.6,89.8,'96.8'),(3,'Albany','NY','Yes',108.1,105,112.6,101,102.8,111.7,'108.6'),(4,'Alexandria','LA','Yes',95.1,96,92.7,89.9,97.2,92.9,'98.2'),(5,'Amarillo','TX','No',89.5,89.9,89.4,80.4,92.1,95.2,'90.8'),(6,'Americus','GA','Yes',88.3,105.5,71,88.2,99.8,103.7,'91.3'),(7,'Ames','IA','Yes',96.8,93.7,104.8,82.3,101.8,98.4,'93.7'),(8,'Anchorage','AK','Yes',128.4,134.5,142.9,94.1,122,135.7,'124.8'),(9,'Anderson','SC','Yes',91.8,103.4,77,101.6,92.3,99.7,'95.9'),(10,'Anniston-Calhoun','AL','No',91.2,101.2,74.8,111.2,88.8,89.3,'96.6'),(11,'Appleton','WI','Yes',93.3,93,81.8,102.3,104.4,104.7,'96'),(12,'Ardmore','OK','Yes',87.3,92.9,77.3,84.8,101.3,93.7,'89.8'),(13,'Arlington','TX','No',99.3,94.4,89.4,109.9,98.3,105.4,'106.4'),(14,'Asheville','NC','Yes',101.1,104.6,97.8,113.1,94.2,104.7,'100.6'),(15,'Ashland','OH','Yes',88.5,100.7,72.1,92.1,98.2,88.8,'94.2'),(16,'Atlanta','GA','Yes',95.6,96.2,90.7,86.3,99.3,103.3,'100.3'),(17,'Auburn-Opelika','AL','Yes',98.9,104.6,90.2,101.3,92.9,88.4,'106.5'),(18,'Augusta','GA','Yes',93.2,106,79.4,92.1,93.9,101.4,'99.4'),(19,'Austin','TX','No',95.5,89.3,85.1,110.7,100.2,100.3,'100.4'),(20,'Bakersfield','CA','Yes',103.4,107.6,98.4,104.3,111.3,107.2,'103.1'),(21,'Baltimore','MD','Yes',119.4,110.8,155.4,112.5,105.3,97.9,'100'),(22,'Baton Rouge','LA','Yes',96.1,100.4,102.2,78.2,90.4,97.7,'95.8'),(23,'Beaufort','SC','Yes',105.2,106.9,103.5,114.3,99.6,95.7,'106'),(24,'Beaumont','TX','No',95.7,87.1,95.9,92.5,100.4,98.7,'98.1'),(25,'Bellingham','WA','Yes',113,114.9,135.9,83.8,113.2,115.3,'100.8'),(26,'Bergen-Passaic','NJ','Yes',131.3,112.1,174,128.9,102.4,106.3,'113.8'),(27,'Bethesda-Gaithersburg-Frederick','MD','Yes',130.5,108.5,184.2,120.6,110.1,104,'104.4'),(28,'Binghamton','NY','Yes',98.4,92.4,92.6,112.8,104.4,114.3,'97.7'),(29,'Birmingham','AL','Yes',90.8,93.5,73.2,105.7,93.5,87.9,'100.3'),(30,'Bismarck-Mandan','ND','Yes',95.3,105.9,91.5,70.1,102.6,100.5,'99.4'),(31,'Blacksburg','VA','Yes',95,91.5,94.9,102.3,91.1,97.5,'95.1'),(32,'Boise','ID','Yes',97.2,98.5,84,99.6,108,106.6,'103.3'),(33,'Boston','MA','Yes',132.5,116.7,152.7,138.6,104.5,123.5,'128.6'),(34,'Bowling Green','CO','Yes',90.7,93.3,78.2,104.3,96.7,95.8,'94'),(35,'Bozeman','MT','Yes',102,107.3,101.8,89.1,101.6,102.4,'104'),(36,'Bradenton','FL','No',95.8,106.6,90.2,90.4,101.3,98.8,'96.1'),(37,'Brazoria County','TX','No',89.3,87.9,75.8,100.8,96,95.6,'95.6'),(38,'Brownsville','TX','No',85.8,88.6,71,93.1,95,96.5,'91.4'),(39,'Buffalo','NY','Yes',95.8,91.8,97.4,115.6,104.8,92,'87.6'),(40,'Burlington','IA','Yes',97,93.8,94.6,108.6,98.6,89.9,'97.1'),(41,'Burlington','NC','Yes',94.6,98.6,86,82.3,97.5,102.5,'102.5'),(42,'Burlington-Chittenden','Co','Yes',120.5,112.9,138.7,122.2,102.5,104.6,'114.2'),(43,'Camden','SC','Yes',97.4,103.4,87.8,107.5,86,93.1,'104.3'),(44,'Cape Coral-Fort Myers','FL','No',95.6,107.9,87.5,83.7,103,98.7,'98.9'),(45,'Carlsbad','NM','Yes',95.4,102.6,86.6,99.3,95.3,96,'98.9'),(46,'Cedar City','UT','Yes',88.7,102.5,73.9,83.7,97.8,85.5,'95.5'),(47,'Cedar Falls','IA','Yes',91.7,89.5,89.6,88.2,99.4,95.9,'92.8'),(48,'Cedar Rapids','IA','Yes',92,94.8,79.1,101.6,97.1,94.4,'97.5'),(49,'Champaign-Urbana','IL','Yes',96.9,98.5,90.8,97.1,98.2,100.5,'100.7'),(50,'Chapel Hill','NC','Yes',113,100.9,127,85.7,122.8,105.8,'112.1'),(51,'Charleston','SC','Yes',98.3,105.7,92.6,96.6,93.9,104.4,'101.5'),(52,'Charleston','WV','Yes',92.7,88.8,89.3,96.7,102.9,93.9,'92.9'),(53,'Charlotte','NC','Yes',93.2,97.1,79.5,91.2,95.7,110.3,'101.4'),(54,'Charlottesville','VA','Yes',107,101.2,122.6,100.8,90.6,94.5,'104'),(55,'Chattanooga','TN','Yes',91.1,97.4,84,82.5,96.4,93.3,'95.7'),(56,'Cheyenne','WY','Yes',100.5,101.7,107.9,96.3,95,98.3,'96.5'),(57,'Chicago','IL','Yes',116.9,111.2,134.8,117.3,116.5,108.5,'104.4'),(58,'Cincinnati','OH','Yes',93.8,96.4,81.9,103.8,98,95.8,'98.7'),(59,'Clarksburg','WV','Yes',95,95.2,93.1,92.2,103.8,89.5,'95.5'),(60,'Clarksville','TN','Yes',93,87.9,86,86.5,93.9,98.7,'102.3'),(61,'Cleveland','OH','Yes',101,108.1,93.3,109,101.4,104.3,'102.1'),(62,'Cleveland','TN','Yes',93.4,101.6,87.7,103.4,91.9,91.3,'92.9'),(63,'Colorado Springs','CO','Yes',92.8,95.4,92,86.8,96.2,102.3,'92.1'),(64,'Columbia','MO','Yes',91.8,92.6,81.4,90.4,96.3,96.4,'99.1'),(65,'Columbia','SC','Yes',100.4,105.2,82.3,109,102,106.2,'110.6'),(66,'Columbus','OH','Yes',92,91.6,86.2,100.2,99.1,107.7,'90.6'),(67,'Conroe','TX','No',91.4,89.4,80.1,96.1,93.8,95,'99.7'),(68,'Conway','AR','Yes',86.6,97.9,78.8,92,96.6,89.8,'84'),(69,'Cookeville','TN','Yes',85.7,86.7,71.4,82.9,87.5,87.1,'98.2'),(70,'Corpus Christi','TX','No',90.8,82.4,79.6,113.5,93.3,92.8,'96'),(71,'Covington','KY','Yes',87.8,86,76.8,100.2,99.9,90.6,'90.3'),(72,'Dallas','TX','No',91.9,96.2,70.7,105.5,100.9,103.8,'100.4'),(73,'Danville','IL','Yes',91.1,94.6,74.2,116.4,109.3,95.8,'90.7'),(74,'Dare County','NC','Yes',107.3,111.7,116.7,92.9,110.2,111.7,'100.4'),(75,'Davenport','IA','Yes',96.8,98.7,98.7,81.4,104.3,97.9,'96.8'),(76,'Dayton','OH','Yes',91.4,89.2,74.5,106.1,103.1,93.2,'99'),(77,'Decatur','IL','Yes',91.4,89.1,88.2,92.2,96.7,91.9,'93.3'),(78,'Decatur-Hartselle','AL','Yes',89.2,98.5,74.2,90.6,96.7,85.5,'96.6'),(79,'Denver','CO','Yes',103.2,101,107.5,101.9,95.4,105.9,'102.7'),(80,'Des Moines','IA','Yes',90.9,90.9,89.6,90.2,95.9,90.8,'90.9'),(81,'Detroit','MI','Yes',99.4,92.7,95.2,129.5,101.3,94.2,'96.6'),(82,'Dodge City','KS','Yes',89.3,90,77.6,85.5,95.6,89.9,'98.5'),(83,'Dothan','AL','Yes',89.8,100.3,80.1,79.7,91.8,81.7,'97.9'),(84,'Douglas','GA','Yes',88.6,104.1,68.5,97.9,89.3,91.3,'96.6'),(85,'Dover','DE','Yes',99.7,110.4,90.9,108.8,97.5,103,'100.7'),(86,'Dubuque','IA','Yes',95.9,98.1,86.5,105.2,99.5,96.5,'99.5'),(87,'Durham','NC','Yes',96.6,97.9,86.8,96.3,105.5,108.5,'100.6'),(88,'Dutchess County','NY','Yes',120.4,109.8,141.3,118.8,109.3,110.4,'111.1'),(89,'Dyersburg','TN','Yes',88.6,93.4,73.8,95.2,92.9,86.3,'96.7'),(90,'Eau Claire','WI','Yes',93.7,97.6,90.5,84.8,103.1,105.5,'93.5'),(91,'Edmond','OK','Yes',91.6,88.7,82.8,90.2,97.7,94.3,'98.9'),(92,'El Paso','TX','No',90.4,99.9,86,88.1,97,95.4,'88.5'),(93,'Elkhart-Goshen','IN','Yes',94,91.4,92.7,84.5,99.7,92.8,'97.5'),(94,'Enid','OK','Yes',93.6,103.5,77.4,96.1,99.5,99.5,'100.7'),(95,'Erie','PA','Yes',92.1,96.4,91.1,96,98.4,91.2,'88.4'),(96,'Eugene','OR','No',109.8,93.8,132.3,85.3,110,118.2,'102.9'),(97,'Evansville','IN','Yes',96.2,97.9,86.3,120,97.1,97.4,'96.4'),(98,'Everett','WA','Yes',111.3,112,128.1,85.4,110.4,129.1,'102.1'),(99,'Fairbanks','AK','Yes',137.4,127.9,148.5,193.1,118.7,144.9,'118.8'),(100,'Fargo','ND','Yes',92.7,99.8,87.4,78.7,95.8,102.4,'96.6'),(101,'Farmington','NM','Yes',97,101.8,97.1,87.1,96.4,98.6,'98.2'),(102,'Fayetteville','AR','Yes',92.1,95.3,77.3,99.8,95.2,92.7,'100.6'),(103,'Fayetteville','NC','Yes',95.2,105.1,82.5,92.8,96,117.9,'100.1'),(104,'Findlay','OH','Yes',94.3,102.3,77,95.8,100.6,91.2,'104.3'),(105,'Fitchburg-Leominster','MA','Yes',103.3,99.3,97.1,140.6,99.9,112.3,'98.6'),(106,'Flagstaff','AZ','Yes',114.9,106.6,149.3,92.5,105.5,100,'99.5'),(107,'Florence','AL','Yes',90.2,96.6,79.6,91,94.5,84.1,'96.3'),(108,'Fort Lauderdale','FL','No',115.7,112.5,144,92.5,106.3,102.4,'103.7'),(109,'Fort Smith','AR','Yes',86.1,92.5,74.5,90.5,87.9,87.5,'91.7'),(110,'Fort Wayne','IN','Yes',94.4,93.3,89.3,87.3,106.9,93.4,'98'),(111,'Fort Worth','TX','No',91.1,89.8,78,106.2,97.6,93.8,'96.1'),(112,'Framingham-Natick','MA','Yes',134.5,109.4,177.2,131.9,105,116.1,'118.8'),(113,'Fresno','CA','Yes',117.3,115.8,131.2,123.6,114.5,106.8,'105.9'),(114,'Gainesville','FL','No',99.8,106.3,101.8,99.2,103.3,92.7,'95.5'),(115,'Galesburg','IL','Yes',93,99.7,80,103.1,96.1,97.3,'97.2'),(116,'Garden City','KS','Yes',89.7,91.2,79.9,86.5,94,89.6,'97.5'),(117,'Glens Falls','NY','Yes',112.3,105.4,105.9,128,107,97.3,'119.3'),(118,'Glenwood Springs','CO','Yes',124,103.3,169,89,110.9,112,'108.7'),(119,'Grand Junction','CO','Yes',98.3,101.9,105.4,86.4,99.1,103.8,'93.1'),(120,'Grand Rapids','MI','Yes',90.7,102.7,77.6,100.6,103.7,94.4,'90'),(121,'Green Bay','WI','Yes',95.1,88.8,83.5,118.6,100.2,105.9,'97.7'),(122,'Greenville','NC','Yes',98.5,105.9,84.4,108.5,97.6,113.5,'103.3'),(123,'Greenville','SC','Yes',90.3,102.7,72.9,90.1,97.1,98.2,'97.7'),(124,'Gunnison','CO','Yes',110,110.6,134.5,85.7,99,97.3,'100.6'),(125,'Hammond','LA','Yes',95.9,99,95.8,84.8,93,97.4,'98.9'),(126,'Hampton','VA','Yes',111.7,106.6,121.9,108.4,104.1,109.6,'108.4'),(127,'Harlingen','TX','No',82.8,81.5,75.8,105.6,88.7,95.2,'79.1'),(128,'Harrisburg','PA','Yes',99.7,97.8,91.5,110.5,100.2,93.8,'105.1'),(129,'Harrisonburg','VA','Yes',97,97.5,96.8,96.8,90.4,100.8,'98.6'),(130,'Hartford','CT','Yes',121.8,120.7,137.8,120.7,109,113,'113.5'),(131,'Hastings','NE','Yes',93.4,103.7,89.1,94,87.6,85.8,'95.6'),(132,'Hattiesburg','MS','Yes',91.9,100.5,74.6,110.3,96.9,95.4,'96.2'),(133,'Hays','KS','Yes',89.4,92,78.8,92.4,97.5,90.7,'94.2'),(134,'Hickory','NC','Yes',92.9,101.1,91.3,92.3,86.5,93.8,'93'),(135,'Hilton Head Island','SC','Yes',114.1,111.4,119.8,100.4,101.6,110.7,'118.5'),(136,'Honolulu','HI','Yes',165.7,160.1,249,146.6,126.2,120,'117.9'),(137,'Hot Springs','AR','Yes',93.8,97.3,85.3,95.7,85.6,84.8,'102.9'),(138,'Houston','TX','No',92.2,85.1,82,97.7,99.2,94.6,'99.9'),(139,'Huntsville','AL','Yes',91.2,94.9,78.7,86.1,99.7,92,'99.8'),(140,'Hutchinson','KS','Yes',94,89,92.3,84.4,96.5,94.2,'99.6'),(141,'Idaho Falls','ID','Yes',90.6,99.5,78,84.9,102.1,93.2,'96.3'),(142,'Indiana County','PA','Yes',93.3,99.7,84.2,97.7,97.7,91.1,'96.4'),(143,'Indianapolis','IN','Yes',87.2,91.4,73.4,86.7,100.5,93.6,'93.1'),(144,'Iowa City','IA','Yes',96.2,94.9,97.3,80.1,102.8,95.4,'99'),(145,'Ithaca','NY','Yes',102.8,102.9,104.4,110.4,104.7,106.6,'98.1'),(146,'Jackson','MS','Yes',96.9,93,94,118.1,92,95.7,'96.1'),(147,'Jackson-Madison County','TN','Yes',90.2,91.1,74.2,98.9,100,91.5,'98.1'),(148,'Jacksonville','FL','No',92.9,102.8,80,91.9,103.6,94.5,'97.3'),(149,'Jacksonville','NC','Yes',96.5,103.2,88,99.2,97.8,101.2,'99.6'),(150,'Janesville','WI','Yes',96.2,95,91.3,99.3,99.3,103.1,'98.2'),(151,'Jefferson City','MO','Yes',92.9,93.9,78.5,97.6,93.3,95,'103.4'),(152,'Johnson City','TN','Yes',86.7,92.3,74.4,89.1,91.7,91.5,'92.6'),(153,'Johnstown','PA','Yes',92.9,97.7,79.4,101,101.6,90.4,'98.1'),(154,'Joliet-Will County','IL','Yes',102.2,100.9,102.3,116.1,111.3,106.5,'95.2'),(155,'Jonesboro','AR','Yes',88.9,97.5,75.1,91.1,88.8,85.9,'97.3'),(156,'Joplin','MO','Yes',88.8,92.2,75.9,108.1,91.8,89.5,'92'),(157,'Juneau','AK','Yes',136.5,133.1,165.7,135.1,121.2,144.4,'116.1'),(158,'Kalamazoo','MI','Yes',91.2,95.6,81.3,101.8,99.4,92.5,'92.4'),(159,'Kalispell','MT','Yes',98.8,116.3,95.5,82,103.6,104.8,'97.8'),(160,'Kansas City','MO','Yes',97.8,94.8,89.2,99.8,100.8,97.2,'105.1'),(161,'Kennewick-Richland-Pasco','WA','Yes',92.6,90.9,85.9,85.1,106.1,109.9,'95.2'),(162,'Kinston','NC','Yes',93.8,102.5,76.1,108.8,96.7,102.9,'99.3'),(163,'Knoxville','TN','Yes',89.4,91.4,82,95.1,84.2,88.4,'95.1'),(164,'Kodiak','AK','Yes',128.7,149.4,127.8,131.9,143.4,130.7,'115.4'),(165,'Lafayette','IN','Yes',98.2,95.6,82.4,116.5,106.2,116.3,'102.7'),(166,'Lafayette','LA','Yes',99.2,93.5,110.1,81.2,104,88.8,'97.3'),(167,'Lake Charles','LA','Yes',97.4,99.8,103.4,89.5,97.1,84.4,'95.4'),(168,'Lake Havasu City','AZ','Yes',111.8,107,139.3,95.9,93.5,98,'101.7'),(169,'Lancaster','PA','Yes',106.8,101.3,118.4,111,99.7,95.1,'100.9'),(170,'Laramie','WY','Yes',97,105.1,102.3,90.5,91.6,97.5,'92.7'),(171,'Las Cruces','NM','Yes',100.6,103.7,104.4,93.7,99,96.5,'99.1'),(172,'Las Vegas','NV','Yes',101.9,106.8,94.1,97.7,104.9,109,'106.2'),(173,'Lawrence','KS','Yes',94.6,89.1,96,91.9,96.2,97.5,'95.6'),(174,'Lawton','OK','Yes',93.8,96.3,87,87.5,106.9,96.2,'96.6'),(175,'Lexington','KY','Yes',92.8,86.9,88.7,93.9,97.6,93.7,'97.1'),(176,'Lexington','VA','Yes',93.7,92.1,97.8,94.3,91.2,90.7,'91.7'),(177,'Lima','OH','Yes',93.1,101.9,69.8,102.5,100.7,107.7,'103.2'),(178,'Little Rock','AR','Yes',96.5,92.9,92.2,104.1,94,93.5,'100.4'),(179,'Logan','UT','Yes',95.6,104.7,68.4,85.3,113.6,97.2,'113.7'),(180,'Los Alamos','NM','Yes',109.7,97.1,128.1,91.2,110.7,102.6,'104.7'),(181,'Los Angeles-Long Beach','CA','Yes',136.4,106,207.1,101.7,113.6,109.1,'107'),(182,'Louisville','KY','Yes',87.7,81.6,78.7,99.1,96.9,87.2,'91.9'),(183,'Loveland','CO','Yes',91,102.7,79.3,89.6,91.4,100.3,'95.7'),(184,'Lubbock','TX','No',89.1,90,80.4,74.8,97.6,98.3,'97.1'),(185,'Lufkin','TX','No',92.4,87.8,83.4,98.7,94,105.5,'98.3'),(186,'Lynchburg','VA','Yes',95.1,90.7,92.7,109.7,88.8,100.1,'95.8'),(187,'Manchester','NH','Yes',116.8,102.3,117,124.5,100.1,116.1,'125'),(188,'Manhattan','KS','Yes',95,92.5,98.7,86.9,99,91.6,'94.4'),(189,'Mankato','MN','Yes',93,93.8,76.5,113.5,103.1,104.3,'96.4'),(190,'Marietta','GA','Yes',94.8,96.8,84.7,90.3,97.1,107.9,'101.9'),(191,'Marion-McDowell County','NC','Yes',92.1,103.1,87.9,94,89.5,96.3,'90.9'),(192,'Marshfield','WI','Yes',94.2,95.3,92.2,99.9,96.8,103.6,'91.7'),(193,'Martinsburg-Berkeley County','WV','Yes',89.6,91.5,82.7,85.9,103.9,99.9,'90.6'),(194,'Martinsville-Henry County','VA','Yes',87.1,94,77.6,89.1,82.9,87.6,'93.2'),(195,'Mason City','IA','Yes',89.1,89.4,73.1,105.6,99.5,94.8,'94.2'),(196,'McAllen','TX','No',85,79.8,77.6,103.1,92.4,97.9,'84.3'),(197,'Memphis','TN','Yes',88.2,92.7,76.2,86.9,91.5,98.6,'95.2'),(198,'Miami','FL','No',106,110.9,107.7,91.9,108.8,105.7,'106.2'),(199,'Miami','OH','Yes',95.4,96.4,83.9,123.3,99.2,89.2,'96.2'),(200,'Midland','TX','No',93.2,89.7,89.2,93.4,95.7,98.7,'96.6'),(201,'Milwaukee','WI','Yes',101.9,98.1,112.7,98.6,99.2,108.1,'94.8'),(202,'Minneapolis','MN','Yes',111,111.6,116.8,104.7,103.7,105.4,'110.4'),(203,'Minot','ND','Yes',99.9,99.3,95.9,73.5,98.2,91,'113.6'),(204,'Missoula','MT','Yes',99.4,110.2,92.2,98.3,102.2,107.2,'100.1'),(205,'Mobile','AL','Yes',92.7,102.7,80.4,104.4,93,86.5,'96.7'),(206,'Monmouth','NJ','Yes',124.8,108.9,154.1,128.6,103.9,108.9,'112.2'),(207,'Monroe','LA','Yes',92.7,95.8,83,89.1,97.5,96,'99.3'),(208,'Montgomery','AL','Yes',99.2,102.9,96,108.4,99.6,88,'99.1'),(209,'Morgantown','WV','Yes',100.6,93.9,111.9,89.9,100.7,96.1,'97.1'),(210,'Morristown','TN','Yes',90.9,91.6,81.5,80.5,93.9,90.1,'101.4'),(211,'Muncie','IN','Yes',91,91,80.3,98.5,94.5,87.4,'97.6'),(212,'Murfreesboro-Smyrna','TN','Yes',88.2,94.3,76.2,81,92.7,95.8,'96.2'),(213,'Muskogee','OK','Yes',86,98,68.3,97.5,80.8,96.7,'93.5'),(214,'Myrtle Beach','SC','Yes',95.2,105.7,78.4,104.5,94.7,100.4,'102.4'),(215,'Nacogdoches','TX','No',92.5,91,83.3,97.7,93.8,102.6,'98'),(216,'Nashville-Franklin','TN','Yes',88.9,91.7,71.3,82.6,92.5,87.3,'104.5'),(217,'Nassau County','NY','Yes',145.7,123,206.7,140.7,113.1,119.7,'115.3'),(218,'New Haven','CT','Yes',122.1,117.9,134.9,123.5,106.3,112.7,'117.9'),(219,'New York (Brooklyn)','NY','Yes',181.7,130.6,317.8,165,103,111.5,'119.5'),(220,'New York (Manhattan)','NY','Yes',216.7,154.3,386.7,169.6,120.3,130.2,'145.7'),(221,'New York (Queens)','NY','Yes',159,128.3,230.8,172,108.8,118,'123.9'),(222,'Newark-Elizabeth','NJ','Yes',129.7,111.6,168.5,129.2,103.9,103.1,'113.9'),(223,'Norman','OK','Yes',94.4,95.3,88.7,91.6,104,96.6,'96.8'),(224,'Oakland','CA','Yes',139.1,116.8,198.8,94.7,113.6,119.9,'119'),(225,'Odessa','TX','No',90.9,91.2,88.1,88.8,93.6,96.6,'92.4'),(226,'Oklahoma City','OK','Yes',91.7,92.9,86,88.1,92.6,99.4,'96.2'),(227,'Olympia','WA','Yes',104.1,107.4,102.2,82.1,114.9,120.5,'106'),(228,'Omaha','NE','Yes',88.3,92,79.3,89.9,100,96.8,'89.7'),(229,'Orange County','CA','Yes',146.4,104.5,242.8,103.2,114.6,111.6,'105.2'),(230,'Orlando','FL','No',97.8,97.8,85.4,108.5,101.8,95.5,'104.5'),(231,'Paducah','KY','Yes',87.3,94.8,75.8,96.5,86.6,90.3,'91.3'),(232,'Palm Springs','CA','Yes',121.8,111.5,154.2,112.7,110.2,100.8,'106.1'),(233,'Panama City','FL','No',99.4,93.7,101.5,99.7,108.8,94.5,'97.6'),(234,'Paris','TX','No',88.9,93.6,80,87.4,94.1,94,'93'),(235,'Pascagoula','MS','Yes',92.3,101,84.3,91.4,97.4,91.6,'94.6'),(236,'Peoria','IL','Yes',96.3,93.4,95,97.2,101.4,95.8,'96.8'),(237,'Philadelphia','PA','Yes',126.5,124.9,141.3,135.9,105.8,108.2,'119.6'),(238,'Phoenix','AZ','Yes',100.7,108.1,90.4,96.6,108.9,108.8,'104.6'),(239,'Pittsburgh','PA','Yes',91.5,104.1,74.4,97,105.9,90.1,'95.8'),(240,'Pittsfield','MA','Yes',110.6,115,96.2,161.9,98.9,105,'110'),(241,'Plano','TX','No',97.4,101.3,85.2,103.9,101.8,102.9,'102.6'),(242,'Plattsburgh','NY','Yes',100.1,98.9,95.1,119.4,105.5,113,'95.9'),(243,'Ponca City','OK','Yes',90,94.8,76.6,93,94.4,94.4,'97'),(244,'Portland','ME','Yes',116.5,101.8,143,102.9,111.8,109.7,'105.5'),(245,'Portland','OR','No',111.3,105.8,130.8,87.1,105.8,113.6,'105.1'),(246,'Prescott Valley','AZ','Yes',103.7,95.2,118.1,91.8,100.3,97.8,'99.7'),(247,'Providence','RI','Yes',123.3,113.4,129,129,102.5,113.2,'128.1'),(248,'Pryor Creek','OK','Yes',84.5,95,71.5,82.7,86.6,86,'91.5'),(249,'Pueblo','CO','Yes',85.6,100.5,71.5,80.1,93.8,94.1,'90.1'),(250,'Quincy','IL','Yes',95.5,97.4,94.5,95.5,94.2,99.8,'95.5'),(251,'Raleigh','NC','Yes',98.2,104.2,88.8,105.6,96.7,101,'101.9'),(252,'Reno','NV','Yes',101.1,105.4,101.5,91.2,107.3,101.8,'100'),(253,'Richmond','IN','Yes',90.8,83.3,84.6,106.4,98.4,95.1,'91.7'),(254,'Richmond','VA','Yes',104.5,103.6,103.2,113.9,100.8,112.6,'103.2'),(255,'Rio Rancho','NM','Yes',95.1,92,90.5,88.6,94.7,100.2,'101.8'),(256,'Riverside','CA','Yes',112.5,104.9,136.3,99.9,113.4,104.4,'99.1'),(257,'Roanoke','VA','Yes',94.1,89.7,92.2,104.1,91.1,97.9,'94.8'),(258,'Rochester','MN','Yes',99.2,89.6,91.1,104.8,106.3,109.5,'105'),(259,'Rochester','NY','Yes',100,94.6,94.2,114.4,108.7,99.7,'100.2'),(260,'Rockford','IL','Yes',92.4,92.6,74.7,111.2,105.8,103.3,'96.8'),(261,'Roswell','NM','Yes',95.9,105.6,82.9,104.3,97.5,101.2,'99.9'),(262,'Round Rock','TX','No',89.7,81.9,78,107,87.6,96.6,'97.6'),(263,'Sacramento','CA','Yes',116.2,114.7,135.7,109.6,114.4,110.8,'102.8'),(264,'Salina','KS','Yes',86.9,86.9,76,87,94.7,94.9,'93.1'),(265,'Salt Lake City','UT','Yes',100.6,100.1,108,72.5,102.1,98.8,'102.9'),(266,'San Angelo','TX','No',92.4,89.3,84,106,97.6,96.7,'94.9'),(267,'San Antonio','TX','No',95.7,84.9,95.3,82.8,100.7,99.9,'102.2'),(268,'San Diego','CA','Yes',132.3,105.5,194.4,101.9,113.1,111.5,'105.8'),(269,'San Francisco','CA','Yes',164,111.9,281,94.5,113,117,'124.3'),(270,'San Jose','CA','Yes',156.1,115.3,260.3,137.2,114,119,'103.6'),(271,'San Marcos','TX','No',94.8,88.7,100.1,86.8,90.1,92.6,'96.8'),(272,'Sarasota','FL','No',101.5,107.7,102.9,97.4,102.5,105.2,'98.1'),(273,'Savannah','GA','Yes',93.5,94.7,84,94,98.4,99,'99.1'),(274,'Seattle','WA','Yes',121.4,115.1,140.3,85.7,118.8,119.9,'119.1'),(275,'Seguin','TX','No',90.7,90.7,78.5,103.8,95.6,96.9,'95.1'),(276,'Sheboygan','WI','Yes',101.4,94.3,97.5,117.3,105.9,105.5,'100.8'),(277,'Shreveport','LA','Yes',95.3,95.2,93.5,89.4,93.4,93.1,'99.6'),(278,'Sierra Vista','AZ','Yes',97.9,96.5,99.7,97.2,104,96.1,'95.5'),(279,'Sioux Falls','SD','Yes',94.1,91.5,86.6,101.6,86.9,102.2,'100.6'),(280,'Slidell','LA','Yes',97,95.1,101,82.2,96.2,93.4,'99.4'),(281,'South Bend','IN','Yes',91.9,91.3,84.2,92.3,95.4,96.3,'97.3'),(282,'Spokane','WA','Yes',93.9,92.4,85.7,89.5,109.1,110,'96.5'),(283,'Springfield','IL','Yes',85.8,89.7,70.1,79.8,104.5,106.5,'91.7'),(284,'Springfield','MO','Yes',88,93.2,76.8,83.2,96.8,95.3,'93.8'),(285,'St Cloud','MN','Yes',98.3,101.7,80.7,117.2,99.9,102,'105.8'),(286,'St George','UT','Yes',95.9,99.9,94.2,85.9,100.4,87.8,'98.4'),(287,'St Joseph','MO','Yes',92.3,95.4,86.5,93.7,90.1,94.9,'96'),(288,'St Louis','MO','Yes',90.4,98.4,74.6,92.9,99,100.8,'96.5'),(289,'St Paul','MN','Yes',110,107,112.9,106.8,103.4,106.7,'112.2'),(290,'Stamford','CT','Yes',146.9,121.8,212.6,121.3,110,113.3,'122.1'),(291,'Staunton-Augusta County','VA','Yes',96.2,98.3,93.7,100,94.5,98.1,'96.6'),(292,'Stillwater','OK','Yes',90.1,95.5,81.2,97.9,88.8,95.7,'93.1'),(293,'Sumter','SC','Yes',96.3,103.4,90.2,108.4,97.8,91.3,'95.3'),(294,'Syracuse','NY','Yes',101.5,98.6,91.4,118.4,108.3,97.8,'104.8'),(295,'Tacoma','WA','Yes',109.5,111.3,116.6,83.1,109,115.1,'110.2'),(296,'Tampa','FL','No',92.4,96.3,84.7,93.8,103.3,98.4,'93.4'),(297,'Temple','TX','No',87.4,83.7,71.8,107.6,97.9,91.2,'92.8'),(298,'Thomasville-Lexington','NC','Yes',89.2,105.5,77.2,80.7,88.8,109.1,'93.5'),(299,'Topeka','KS','Yes',91.8,92.9,84,85.8,97.4,93.2,'98.1'),(300,'Truckee-Nevada County','CA','Yes',146.9,132.2,208.3,114.3,121.5,112,'120.5'),(301,'Tucson','AZ','Yes',96.5,97.2,91.9,86.7,104.6,99.2,'100.5'),(302,'Tulsa','OK','Yes',88.4,91.9,66.5,95.2,99.1,94.6,'100.5'),(303,'Tupelo','MS','Yes',88.1,91.1,72.3,110.1,93.8,86.6,'92.7'),(304,'Tuscaloosa','AL','Yes',94.6,104.9,80.6,105.9,102.8,90.2,'97.4'),(305,'Twin Falls','ID','Yes',91.5,95.5,81.4,97,99.2,93.3,'94.6'),(306,'Tyler','TX','No',96.3,92.7,91.5,102.1,100.2,93.1,'99.3'),(307,'Valdosta','GA','Yes',94.1,111.8,85.3,89,96.7,102.2,'94.5'),(308,'Vancouver','WA','Yes',94.8,96.9,82.2,91.8,106.1,114.3,'100.1'),(309,'Vero','FL','No',97.4,109.1,83.5,104.5,97.8,97.7,'102.5'),(310,'Waco','TX','No',88.9,81.8,88.5,85.3,97.6,90.9,'90.5'),(311,'Washington','DC','Yes',140.1,107.9,226.4,97.3,109.3,103.4,'103.7'),(312,'Wausau','WI','Yes',96.5,100,89.6,98.4,97.5,101.3,'99.7'),(313,'Weatherford','TX','No',91.4,95.9,79.7,107.4,96.2,93.1,'93.3'),(314,'Wichita','KS','Yes',91.8,90.5,83.6,89.7,100.6,96.7,'97.1'),(315,'Wichita Falls','TX','No',86.5,91.9,84,84.4,82.5,94.5,'87.4'),(316,'Williamsport-Lycoming Co','PA','Yes',100.7,103.5,96.3,127.7,91.8,92.6,'98.9'),(317,'Wilmington','DE','Yes',105.2,108.1,102,115.4,98.6,108.7,'105.2'),(318,'Wilmington','NC','Yes',98.8,108,89.7,108.5,97.6,100.1,'100.3'),(319,'Winchester','VA','Yes',102.3,104.6,94.5,98.2,96.8,105,'110.9'),(320,'Winston-Salem','NC','Yes',92.4,98.5,82.9,88.5,83.3,99.3,'101.5'),(321,'Wooster','OH','Yes',92.6,99.5,72.1,123.4,103,94.6,'95.2'),(322,'Yakima','WA','Yes',95.8,99.8,86.9,86.8,105.5,117.1,'99.2'),(323,'York County','PA','Yes',102.1,98.4,106,102.6,97.7,96.8,'102'),(324,'Youngstown','OH','Yes',90.4,92.6,77.7,110.2,92.4,86.9,'94.4'),(325,'Yuma','AZ','Yes',101.2,107.4,96.4,112.2,104.6,107.8,'97.6');
/*!40000 ALTER TABLE `col` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `CompanyID` smallint(6) NOT NULL AUTO_INCREMENT,
  `IndustryID` varchar(80) DEFAULT NULL,
  `Company` varchar(80) NOT NULL,
  PRIMARY KEY (`CompanyID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `industry`
--

DROP TABLE IF EXISTS `industry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `industry` (
  `IndustryID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Industry` varchar(80) DEFAULT NULL,
  `SectorID` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`IndustryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industry`
--

LOCK TABLES `industry` WRITE;
/*!40000 ALTER TABLE `industry` DISABLE KEYS */;
/*!40000 ALTER TABLE `industry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `major`
--

DROP TABLE IF EXISTS `major`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `major` (
  `MajorID` int(11) NOT NULL,
  `MajorName` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`MajorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `major`
--

LOCK TABLES `major` WRITE;
/*!40000 ALTER TABLE `major` DISABLE KEYS */;
/*!40000 ALTER TABLE `major` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer`
--

DROP TABLE IF EXISTS `offer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `offer` (
  `OfferID` smallint(6) NOT NULL AUTO_INCREMENT,
  `UserID` smallint(6) NOT NULL,
  `ColID` smallint(6) NOT NULL,
  `OfferType` varchar(3) NOT NULL,
  `Company` varchar(80) NOT NULL,
  `Position` varchar(80) NOT NULL,
  `Salary` float DEFAULT NULL,
  `Hourly` float DEFAULT NULL,
  `Normalworkhours` smallint(6) NOT NULL,
  `Signbonus` decimal(10,2) DEFAULT NULL,
  `Yearendbonus` varchar(3) DEFAULT NULL,
  `Stocks` varchar(3) DEFAULT NULL,
  `401k` decimal(5,2) DEFAULT NULL,
  `Pension` varchar(3) DEFAULT NULL,
  `Pto` smallint(6) NOT NULL,
  `Medicaloffered` varchar(3) DEFAULT NULL,
  `PromotionOpt` varchar(3) DEFAULT NULL,
  `ReimburseExp` float DEFAULT NULL,
  `Relocate` varchar(3) DEFAULT NULL,
  `PaidRelocate` varchar(3) DEFAULT NULL,
  `Active` smallint(6) NOT NULL,
  `State` varchar(3) DEFAULT NULL,
  `City` varchar(80) DEFAULT NULL,
  `Area` varchar(132) DEFAULT NULL,
  PRIMARY KEY (`OfferID`),
  UNIQUE KEY `OfferID_UNIQUE` (`OfferID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer`
--

LOCK TABLES `offer` WRITE;
/*!40000 ALTER TABLE `offer` DISABLE KEYS */;
INSERT INTO `offer` VALUES (1,2,263,'FT','Intel Corp','Lead Software Engineer',100000,0,40,10000.00,'No','Yes',5.50,'Yes',3,'Yes','Yes',0,'No','No',1,'CA','Sacramento',NULL),(2,2,269,'FT','IBM Corp','Software Engineer',90000,0,40,5000.00,'No','Yes',6.00,'Yes',3,'No','No',0,'No','No',1,'CA','San Francisco',NULL),(3,2,190,'FT','Home Deopt','Lead Software Engineer',125000,0,40,15000.00,'Yes','Yes',5.50,'Yes',3,'Yes','Yes',0,'No','No',1,'GA','Atlanta',NULL);
/*!40000 ALTER TABLE `offer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile` (
  `ProfileID` smallint(6) NOT NULL AUTO_INCREMENT,
  `UserID` smallint(6) NOT NULL,
  `Firstname` varchar(45) NOT NULL,
  `Lastname` varchar(45) NOT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Employed` varchar(3) NOT NULL,
  `EduLevel` varchar(45) DEFAULT NULL,
  `Infield` smallint(6) DEFAULT NULL,
  `Yearsinfield` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`ProfileID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile`
--

LOCK TABLES `profile` WRITE;
/*!40000 ALTER TABLE `profile` DISABLE KEYS */;
INSERT INTO `profile` VALUES (2,2,'Tyrone','Russ','Male','No',NULL,NULL,NULL),(3,3,'Terry','Russ','Female','Yes',NULL,NULL,NULL),(4,4,'Thomas','Neilson','','Yes','1',NULL,NULL),(5,5,'Tyrone ','Russ','Female','Yes','1',NULL,NULL),(6,6,'Michael','Russ','Male','Yes','2',NULL,NULL),(7,7,'Jonia','Milburn','Female','No','1',NULL,NULL),(11,17,'Michael','Chukes','','Yes','BA/BS Degree',7,11);
/*!40000 ALTER TABLE `profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `RoleID` smallint(6) NOT NULL AUTO_INCREMENT,
  `Title` varchar(64) NOT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`RoleID`)
) ENGINE=InnoDB AUTO_INCREMENT=3001 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1000,'Empoyee',NULL),(2000,'Empoyer',NULL),(3000,'Admin',NULL);
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sector`
--

DROP TABLE IF EXISTS `sector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sector` (
  `SectorID` int(11) NOT NULL,
  `SectorName` varchar(80) DEFAULT NULL,
  `Damand` float DEFAULT NULL,
  PRIMARY KEY (`SectorID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sector`
--

LOCK TABLES `sector` WRITE;
/*!40000 ALTER TABLE `sector` DISABLE KEYS */;
/*!40000 ALTER TABLE `sector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skill`
--

DROP TABLE IF EXISTS `skill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skill` (
  `SkillID` int(11) NOT NULL,
  `SectorID` int(11) NOT NULL,
  `SkillName` varchar(64) NOT NULL,
  `Sector_SectorID` int(11) NOT NULL,
  `User_UserID` int(11) NOT NULL,
  PRIMARY KEY (`SkillID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skill`
--

LOCK TABLES `skill` WRITE;
/*!40000 ALTER TABLE `skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `skill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `UserID` smallint(6) NOT NULL AUTO_INCREMENT,
  `RoleID` smallint(6) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Active` smallint(6) NOT NULL,
  PRIMARY KEY (`UserID`),
  UNIQUE KEY `UserID_UNIQUE` (`UserID`),
  UNIQUE KEY `Username_UNIQUE` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,5000,'tyroneruss','rhouse11','tyroneruss@outlook.com',1),(3,1000,'terryruss','rhouse11','terryruss@outlook.com',1),(4,1000,'tpruss','rhouse11','tyruss@outlook.com',1),(5,1000,'pruss','pruss11','pwilliams@gmail.com',1),(6,1000,'mikeruss','test101','mruss@outlook.com',1),(7,1000,'jomiamilburn','test101','jomiamilburn@gmail.com',1),(17,1000,'mikechukes','test101','mikechukes@gmail.com',1);
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

-- Dump completed on 2018-01-30 17:44:54
