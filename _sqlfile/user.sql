-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: userprofile
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` text NOT NULL,
  `user_lastname` text NOT NULL,
  `user_avatar` varchar(255) NOT NULL,
  `user_shortbio` text,
  `user_username` varchar(255) NOT NULL,
  `user_longbio` text,
  `user_facebook` varchar(255) DEFAULT NULL,
  `user_twitter` varchar(255) DEFAULT NULL,
  `user_linkedin` varchar(255) DEFAULT NULL,
  `user_stumbleupon` varchar(255) DEFAULT NULL,
  `user_pinterest` varchar(255) DEFAULT NULL,
  `user_googleplus` varchar(255) DEFAULT NULL,
  `user_website` varchar(255) DEFAULT NULL,
  `user_dob` date DEFAULT NULL,
  `user_profession` text,
  `user_gender` varchar(255) DEFAULT NULL,
  `user_maritialstatus` varchar(255) DEFAULT NULL,
  `user_address` text,
  `user_backgroundpicture` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `user_skype` varchar(255) DEFAULT NULL,
  `user_github` varchar(255) DEFAULT NULL,
  `user_youtube` varchar(255) DEFAULT NULL,
  `user_vimeo` varchar(255) DEFAULT NULL,
  `user_university` varchar(255) DEFAULT NULL,
  `user_course` varchar(255) DEFAULT NULL,
  `user_graduation_year` varchar(255) DEFAULT NULL,
  `user_cgpa` varchar(255) DEFAULT NULL,
  `user_course_field` varchar(255) DEFAULT NULL,
  `user_extra` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`),
  UNIQUE KEY `user_username` (`user_username`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (5,'firstuser@gmail.com','newuser','first','user','team-3092304631.png','Software Engineer in Delhi.','firstuser','','http://facebook.com/firstuser','http://twitter.com/firstuser','http://linkedin.com/firstuser',NULL,'','','firstuser.com','1996-12-11','Student','Male',NULL,'Random address','','2016-11-22','India','@first.user','http://github.com/firstuser','','','ggsipu','btech','2018','9.0','cse','dsads'),(6,'seconduser@gmail.com','newuser','second ','user','user-1893274406.png','Software developer','seconduser','','http://facebook.com/seconduser','http://twitter.com/seconduser','http://linkedin.com/seconduser',NULL,'','','seconduser.com','1996-12-11','student','Male',NULL,'Actual street, actual colony, actual city, actual country.','','2016-11-23','INdia','@second.user','http://github.com/seconduser','','',NULL,NULL,NULL,NULL,NULL,NULL),(8,'thirduser@gmail.com','newuser','third','user','sponsor-4707327294.png','Third user. Short description. Testing purposes.','thirduser',NULL,'http://facebook.com/thirduser',NULL,'http://linkedin.com/thirduser',NULL,NULL,NULL,'thirduser.com','2016-11-01','Web Developer','Male',NULL,'12/24 KAROL BAGH AA JAIYO.','','2016-11-23','India','@abc.xyz','http://github.com/thirduser',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'education@gmail.com','legendary','education ','test','1475961885_star-3086889581.png','ed test','educationtest',NULL,'fb.com/ed','tw.com/ed','li.com/ed',NULL,NULL,NULL,'ed.com','2016-11-24','ddd','Male',NULL,'ed add','','2016-11-26','India','@aa.ss','gh.com/ed',NULL,NULL,'ggsipu','btech','2018','9','cse','ss');
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

-- Dump completed on 2016-11-26 23:25:03
