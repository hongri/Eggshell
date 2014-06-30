-- MySQL dump 10.13  Distrib 5.5.25a, for osx10.7 (i386)
--
-- Host: localhost    Database: itweb
-- ------------------------------------------------------
-- Server version	5.5.25a

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','eggshell123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `assessment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `result` text,
  `time` datetime DEFAULT NULL,
  `company` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
INSERT INTO `assessment` VALUES (1,'hongri','hongri@gmail.com','1:always,2:always,3:always,4:always,11:always','2012-10-16 15:00:08','snda'),(2,'test','test@test.test','1:always,2:never,3:sometimes,4:sometimes,11:never','2012-10-16 15:02:34','test'),(3,'hello','hongri1987@gmail.com','1:always,2:sometimes,3:sometimes,4:never,11:always','2012-10-16 16:43:36','hello'),(4,'hongri','hongri@yahoo.com.cn','1:sometimes,2:sometimes,3:always,4:never,11:sometimes','2012-10-30 07:44:30','snda');
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand_assessment`
--

DROP TABLE IF EXISTS `brand_assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_assessment` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `content` text,
  `never` int(10) DEFAULT '0',
  `sometimes` int(10) DEFAULT '0',
  `always` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_assessment`
--

LOCK TABLES `brand_assessment` WRITE;
/*!40000 ALTER TABLE `brand_assessment` DISABLE KEYS */;
INSERT INTO `brand_assessment` VALUES (1,'Employees and customers know the one word that your brand occupies in consumers\' minds.',3,4,1),(2,'Customers know what to expect from your brand.',2,6,0),(3,'Employees can clearly articulate your brand statement.',0,7,1),(4,'Your employees and customers know where your brand is positioned in the marketplace.',4,1,3),(11,'Your brand is clearly differentialed from the competition and employees and customers can articulate what that differece is.',1,4,3);
/*!40000 ALTER TABLE `brand_assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brand_shop`
--

DROP TABLE IF EXISTS `brand_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brand_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `subtitle` varchar(30) DEFAULT NULL,
  `content` text,
  `style` varchar(100) DEFAULT NULL,
  `photos` varchar(100) DEFAULT NULL,
  `buy` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brand_shop`
--

LOCK TABLES `brand_shop` WRITE;
/*!40000 ALTER TABLE `brand_shop` DISABLE KEYS */;
INSERT INTO `brand_shop` VALUES (5,'20121016202718.jpg','Concept Eyewear','Cockrale','Fun, and playful concept Eyewear, feel the summer breeze from the nearby beach, and sweet flavor of cocktail.','young lady, summer, beach','avaliable upon request','please contact us'),(6,'20121016202728.jpg','dsadas','dsada','dsadas','hello','hello','hello'),(7,'20121017101718.jpg','test','test','test','test','test','test');
/*!40000 ALTER TABLE `brand_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `case`
--

DROP TABLE IF EXISTS `case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail` text NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `video` text,
  `type` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case`
--

LOCK TABLES `case` WRITE;
/*!40000 ALTER TABLE `case` DISABLE KEYS */;
INSERT INTO `case` VALUES (1,'hello world, I just test the website. Thanks!','2012103103530489.gif','Play Limited','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Experience'),(2,'hello world, I just test the website. Thanks!','20121018151527.gif','fdsfsd','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Experience,Management'),(3,'hello world, I just test the website. Thanks!','20121018151610.gif','test1','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Experience,Strategic,Management,Retain'),(4,'hello world, I just test the website. Thanks!fsdfsd','20121018152633.gif','test2','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Experience,Strategic'),(6,'test','20121018152714.gif','test3','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Strategic,Retain'),(7,'test2','20121018152731.gif','test4','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Experience,Management'),(8,'test3','20121018152753.gif','test5','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Strategic,Management'),(9,'test4','20121018152813.gif','tett6','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Experience,Management,Retain'),(10,'test5','20121018152836.gif','test6','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Strategic,Management,Retain'),(11,'test6','20121018152928.gif','haha','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Experience,Management'),(12,'test7','20121018154143.gif','hello','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Experience,Retain'),(13,'test8','20121018154204.gif','hongri1','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Experience,Strategic,Management'),(14,'test9','20121018154323.gif','World','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Experience,Strategic,Management'),(15,'test10','2012103008515347.gif','hello world','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Experience,Strategic'),(16,'test11','2012103008530445.gif','eggshell','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Audit,Identity,Strategic,Management'),(17,'test12','2012103104031486.gif','good','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\r\n                                                        <param value=\"transparent\" name=\"wmode\">\r\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\r\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','Identity,Strategic');
/*!40000 ALTER TABLE `case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `case_client`
--

DROP TABLE IF EXISTS `case_client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `case_client` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `images` varchar(30) DEFAULT NULL,
  `filed` varchar(10) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `case_client`
--

LOCK TABLES `case_client` WRITE;
/*!40000 ALTER TABLE `case_client` DISABLE KEYS */;
INSERT INTO `case_client` VALUES (1,'2012103009355654.gif','Clients','Client 1'),(2,'2012103009370861.gif','Cases','Case 1'),(3,'2012103009364365.gif','Clients','Client 2'),(4,'2012103009372260.gif','Cases','Case 2'),(5,'2012103009375290.gif','Cases','Case 3');
/*!40000 ALTER TABLE `case_client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES (1,'20121017180400.gif','http://www.eggshell.com.hk','client 1'),(3,'20121017180713.gif','http://www.eggshell.com.hk','client 2'),(4,'20121017180726.gif','http://www.eggshell.com.hk','client 3'),(5,'20121017180739.gif','http://www.eggshell.com.hk','client 4'),(6,'20121017180755.gif','http://www.eggshell.com.hk','1'),(7,'20121017180927.gif','http://www.eggshell.com.hk','2'),(8,'20121017180814.gif','http://www.eggshell.com.hk','adas'),(9,'20121017180823.gif','http://www.eggshell.com.hk',''),(10,'20121017180831.gif','http://www.eggshell.com.hk',''),(11,'20121017180838.gif','http://www.eggshell.com.hk',''),(12,'20121017180938.gif','http://www.eggshell.com.hk',''),(13,'20121017180945.gif','http://www.eggshell.com.hk',''),(14,'20121017180951.gif','http://www.eggshell.com.hk',''),(15,'20121017180958.gif','http://www.eggshell.com.hk',''),(16,'20121017181004.gif','http://www.eggshell.com.hk',''),(17,'20121017181027.gif','http://www.eggshell.com.hk',''),(18,'20121017181034.gif','http://www.eggshell.com.hk',''),(19,'20121017181040.gif','http://www.eggshell.com.hk',''),(20,'20121017181046.gif','http://www.eggshell.com.hk',''),(21,'20121017181053.gif','http://www.eggshell.com.hk',''),(22,'20121017181059.gif','http://www.eggshell.com.hk',''),(23,'20121017181104.gif','http://www.eggshell.com.hk',''),(24,'20121017181112.gif','http://www.eggshell.com.hk',''),(25,'20121017181203.gif','http://www.eggshell.com.hk',''),(26,'20121017181215.gif','http://www.eggshell.com.hk',''),(27,'20121017181150.gif','http://www.eggshell.com.hk',''),(28,'20121017181230.gif','http://www.eggshell.com.hk',''),(29,'20121017181237.gif','http://www.eggshell.com.hk',''),(30,'20121017181247.gif','http://www.eggshell.com.hk',''),(31,'20121017181253.gif','http://www.eggshell.com.hk',''),(32,'20121017181305.gif','http://www.eggshell.com.hk','test'),(33,'20121017181312.gif','http://www.eggshell.com.hk','');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `common_text`
--

DROP TABLE IF EXISTS `common_text`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `common_text` (
  `id` varchar(20) DEFAULT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `common_text`
--

LOCK TABLES `common_text` WRITE;
/*!40000 ALTER TABLE `common_text` DISABLE KEYS */;
INSERT INTO `common_text` VALUES ('footer','<p><strong>Disclaimer</strong>: All content on our website is assembled and\n tested carefully. A liablility or guarantee of accuracy, completeness \nand timeliness will be declined. This also applies for all other \nhyperlinked sites. We are not respnonsible for the content of \nhyperlinked websites. We preserve the right to update, change or add \ninformation or data. <strong>Copyright</strong>: The structure and all \ncontent of this website is copyrighted by Eggshell Creative Consultancy.\n Reproduction of information or data, especially the use of text, \npictures or programming code in external documents or websites requires \nour affirmation.</p>'),('company_background','We are a Creative &amp; Strategic Branding Company founded in Hong Kong, 2005. <br>Equipped with multi-media design force and strategic force.<br>\n                                        We are highly collaborative with multidisciplinary experience.<br>\n                                        <br>\n                                        We move fast and break things. \nWe brings innovative and inspiring solution, and create authentic \nrelationship between brand and customer. We move fast and break things. \nWe brings innovative and inspiring solution, and create authentic \nrelationship between brand and customer.\n                                    <p class=\"content_left left font18 family_normal black lineHeight30\">\n                                        <br></p>'),('vision','We move fast and break things. We brings innovative and inspiring solution, and create authentic relationship between brand and customer. We move fast and break things. We brings innovative and inspiring solution, and create authentic relationship between brand and customer.');
/*!40000 ALTER TABLE `common_text` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_us` (
  `name` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `comments` text,
  `time` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_us`
--

LOCK TABLES `contact_us` WRITE;
/*!40000 ALTER TABLE `contact_us` DISABLE KEYS */;
INSERT INTO `contact_us` VALUES ('test','hello','hongri1987@gmail.com','15900686646','hello','2012-10-11 15:10:49',1),('test','hello','hongri1987@gmail.com','15900686646','hello','2012-10-11 15:38:43',2),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:04',3),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:07',4),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:09',5),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:11',6),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:13',7),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:15',8),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:17',9),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:19',10),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:22',11),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:25',12),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:28',13),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:29',14),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:30',15),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:31',16),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:31',17),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:32',18),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:32',19),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:33',20),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:33',21),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:33',22),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:33',23),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:34',24),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:34',25),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:34',26),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:35',27),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:35',28),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:35',29),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:35',30),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:36',31),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:36',32),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:36',33),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:37',34),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:37',35),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:37',36),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:38',37),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:38',38),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:38',39),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:39',40),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:39',41),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:39',42),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:40',43),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:40',44),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:41',45),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:41',46),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:41',47),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:42',48),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:42',49),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:43',50),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:43',51),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:44',52),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:44',53),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:45',54),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:45',55),('hongri','snda','hongri1987@gmail.com','15900686646','test','2012-10-11 17:12:45',56),('hongri','snda','hongri1987@gmail.com','15900686646','Send full resume to creative@eggshell.com.hk;\nExtra 5 pieces of selected portofolio for designer\napplicant to submit.test','2012-10-11 17:32:09',57),('hongri','test','test@test.com','15900686646','good!','2012-10-30 07:30:35',58);
/*!40000 ALTER TABLE `contact_us` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecards`
--

DROP TABLE IF EXISTS `ecards`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecards`
--

LOCK TABLES `ecards` WRITE;
/*!40000 ALTER TABLE `ecards` DISABLE KEYS */;
INSERT INTO `ecards` VALUES (1,'20121017115205.gif','2007 Lunar New Year'),(2,'20121017114830.gif','2006 New Year'),(3,'20121017114844.gif','2005 New Year'),(4,'20121017114852.gif','2006 New Year'),(5,'20121017114903.gif','2009 New Year'),(6,'20121017115215.gif','2006 New Year'),(7,'20121017115224.gif','2006 New Year'),(8,'20121017115236.gif','2006 New Year'),(9,'20121017115254.gif','2006 New Year'),(10,'20121017115304.gif','2006 New Year'),(11,'20121017115315.gif','2006 New Year'),(12,'20121017115321.gif','2006 New Year'),(13,'20121017115331.gif','2006 New Year'),(14,'20121017120016.gif','test'),(15,'20121017120026.gif','test 2'),(16,'20121017121933.gif','hello');
/*!40000 ALTER TABLE `ecards` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eggsheller`
--

DROP TABLE IF EXISTS `eggsheller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eggsheller` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL,
  `pinterest` varchar(100) DEFAULT NULL,
  `content` text,
  `email` varchar(40) DEFAULT NULL,
  `filed` varchar(20) DEFAULT NULL,
  `interview` text,
  `photo` varchar(30) DEFAULT NULL,
  `detail` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eggsheller`
--

LOCK TABLES `eggsheller` WRITE;
/*!40000 ALTER TABLE `eggsheller` DISABLE KEYS */;
INSERT INTO `eggsheller` VALUES (1,'Viota Pak','20121019164455.gif','http://www.facebook.com','Strategic Plan / Creative thinking<br />\r\nStory Telling','Creative & Branding Director','Strategic','HKPU / Bachelor of Arts degree<br />\r\nHKPU / Master of Design<br />\r\nFull member of HKDA','20121019170313.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic designer in a large - scaled multi-disciplinary cultural organization for nearly 10 years, Viola is now working passionately as a Creative Entrepreneur. She started her dream company in 2005. She is driving her strategic vision and leading the growth of Eggshell Creative substantively by ensuring her team to deliver prestige branding strategy and exceptional client experience on every single project. Her formula is: Creative + Possibility + Context = High-level branding strategy. This brings creditability to maintain her clients\' relationships. Her greatest satisfaction, other than manipulating her creative mind, is on delivering great employee experience by digging out the possibilities of them. Viola has achieved the Hong Kong Polytechnic University’s Bachelor of Arts degree (Graphic Design) and Master of Design (Design Strategy) degree, She is also a full member of The Hong Kong Designers Association. Recently, to keep up with the rising professional standards in the industry, she has expanded her scope of design expertise by obtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A proud mom of 3 cats, designed a house for her and her cats to live happily ever after. A typical night owl, work best at mid-night.'),(2,'test1','2012102009064047.gif','','Night Owls','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','20121019165754.gif',NULL),(3,'test2','20121019165945.gif','http://www.facebook.com','tetest fsdfsd','associate marketing & sales manager','Strategic','test fsdfsd','20121019165956.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.'),(5,'test','2012101917153379.gif','http://www.facebook.com','fdsfdsfsd','media researcher','Strategic','fdsfdsfds','2012101917153342.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.'),(6,'test3','2012102009045981.gif','http://www.facebook.com','dasdasdsad','Creative & Branding Director','Strategic','dsadasdasdasdsadas','2012102009045917.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.'),(7,'Advisor 3','2012102009055026.gif','http://www.facebook.com','rewrw ferwerewrew','Advisor','Advisors','dsfdsfsd','2012102009055046.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.'),(8,'Advisor 1','2012103104051950.gif','http://www.facebook.com','test','Advisor','Advisors','test','2012103104051979.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.\n<p>&nbsp;</p>'),(9,'Advisor 2','2012103106241315.gif','http://www.facebook.com','test','Advisor','Advisors','test','2012103106241390.gif','<b>Work</b><br>Growing up and being well-equipped as a strategic \ndesigner in a large - scaled multi-disciplinary cultural organization \nfor nearly 10 years, Viola is now working passionately as a Creative \nEntrepreneur. She started her dream company in 2005. She is driving her \nstrategic vision and leading the growth of Eggshell Creative \nsubstantively by ensuring her team to deliver prestige branding strategy\n and exceptional client experience on every single project. Her formula \nis: Creative + Possibility + Context = High-level branding strategy. \nThis brings creditability to maintain her clients\' relationships. Her \ngreatest satisfaction, other than manipulating her creative mind, is on \ndelivering great employee experience by digging out the possibilities of\n them. Viola has achieved the Hong Kong Polytechnic University’s \nBachelor of Arts degree (Graphic Design) and Master of Design (Design \nStrategy) degree, She is also a full member of The Hong Kong Designers \nAssociation. Recently, to keep up with the rising professional standards\n in the industry, she has expanded her scope of design expertise by \nobtaining a Diploma in Architecture and Interior Design.<br><br><b>Life</b><br>A\n proud mom of 3 cats, designed a house for her and her cats to live \nhappily ever after. A typical night owl, work best at mid-night.\n<p>&nbsp;</p>'),(10,'JOE LEE','2012110105141318.gif','','Musicians','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105141382.gif',NULL),(11,'Designer 3','201211010517054.gif','','Dancers','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif',NULL),(12,'Designer 4','201211010517054.gif','','Pet Owners','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif',NULL),(13,'Designer 6','201211010517054.gif','','HK','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif',NULL),(14,'Designer 7','201211010517054.gif','','PRC','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif',NULL),(15,'Designer 5','201211010517054.gif','','Dancers','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif','<br><p>&nbsp;</p>'),(16,'Designer 8','201211010517054.gif','','Overseas','Senior Designer','Designer','Good Design is obvious. Great design is transparent.','2012110105170564.gif',NULL);
/*!40000 ALTER TABLE `eggsheller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faq`
--

DROP TABLE IF EXISTS `faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faq` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(100) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faq`
--

LOCK TABLES `faq` WRITE;
/*!40000 ALTER TABLE `faq` DISABLE KEYS */;
INSERT INTO `faq` VALUES (3,'How much do you charge in a common level?','How much do you charge in a common level? dasdsadsa'),(4,'How much do you charge in a common level 2?','dasdas'),(5,'How much do you charge in a common level?','dasdsa'),(6,'How much do you charge in a common level?','dsadas'),(7,'How much do you charge in a common level?','dasdasdas'),(8,'How much do you charge in a common level?','dasdsadsad'),(9,'How much do you charge in a common level?','dsadsadasdsa'),(10,'How much do you charge in a common level?','dsadsadas'),(11,'How much do you charge in a common level?','dasdsadasdsad'),(12,'How much do you charge in a common level?','dsadsadsadsa'),(14,'How much do you charge in a common level?','dsadsdas'),(15,'test','haha'),(16,'dsadas','dasdas');
/*!40000 ALTER TABLE `faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `howwedo`
--

DROP TABLE IF EXISTS `howwedo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `howwedo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `filed` varchar(20) DEFAULT NULL,
  `video` text,
  `description` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `howwedo`
--

LOCK TABLES `howwedo` WRITE;
/*!40000 ALTER TABLE `howwedo` DISABLE KEYS */;
INSERT INTO `howwedo` VALUES (1,'20121017145042.gif','Audit','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(2,'20121017145339.gif','Strategic','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&VideoIDS=115718654&isAutoPlay=true&delayload=true&isShowRelatedVideo=false&imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test1'),(4,'20121017145409.gif','Identity','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(5,'20121017145518.gif','Management','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(6,'20121017145431.gif','Experience','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(7,'20121017145439.gif','Retain','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(8,'20121017145448.gif','Audit','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>','test'),(9,'20121018195025.gif','Strategy','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n','hello world');
/*!40000 ALTER TABLE `howwedo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `key_value`
--

DROP TABLE IF EXISTS `key_value`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `key_value` (
  `id` int(2) DEFAULT NULL,
  `value` varchar(400) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `page_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `key_value`
--

LOCK TABLES `key_value` WRITE;
/*!40000 ALTER TABLE `key_value` DISABLE KEYS */;
INSERT INTO `key_value` VALUES (1,'HOME','导航第一个名称','nav'),(2,'ABOUT US','导航第二个名称','nav'),(3,'HOW WE WORK','导航第三个名称','nav'),(4,'CASE','导航第四个名称','nav'),(5,'CLIENT','导航第五个名称','nav'),(6,'EXPOSURE','导航第六个名称','nav'),(7,'BRAND SHOP','导航第七个名称','nav'),(8,'CONTACT US','导航第八个名称','nav'),(9,'CLICK & UPDATE','向下滑动点击按钮','nav'),(1,'1 min tour','1分钟浏览','home'),(2,'Free Brand Assessment','Free Brand Assessment','home'),(3,'Free Download','Free Download','home'),(4,'We combine art and business to create<br> for you, infinite possibilites','Sub title','home'),(5,'founded in Hong Kong 2005','Sub sub title','home'),(6,'Project Management System','登陆1','home'),(7,'Invoicing System','登陆2','home'),(8,'Ftp Entrance','登陆3','home'),(9,'Customer Feedback','登陆4','home'),(1,'Company Background','About Us sub nav 1','aboutus'),(2,'Vision','About Us sub nav 2','aboutus'),(3,'Social Responsibility','About Us sub nav 3','aboutus'),(4,'Meet Eggshellers','About Us sub nav 4','aboutus'),(1,'Brand Audit','How We Do sub nav 1','howwedo'),(2,'Brand Strategic','How We Do sub nav 2','howwedo'),(3,'Brand Identity','How We Do sub nav 3','howwedo'),(4,'Brand Management','How We Do sub nav 4','howwedo'),(5,'Brand Experience','How We Do sub nav 5','howwedo'),(6,'Brand Retaining','How We Do sub nav 6','howwedo'),(1,'Video','Press sub nav 1','press'),(2,'Press','Press sub nav 2','press'),(3,'Events','Press sub nav 3','press'),(1,'E-cards','Possibility sub nav 1','possibility'),(2,'Download','Possibility sub nav 2','possibility'),(3,'Experiemental Product','Possibility sub nav 3','possibility'),(4,'Video','Possibility sub nav 4','possibility'),(5,'Things always seem to be impossible until <br>\nthey are done. I never think about tommorrow, <br>\nthey have come soon enough.','格言','aboutus'),(6,'Strategic Team','Social Responsibility sub title 1','aboutus'),(7,'All Eggshellers','Social Responsibility sub title 2','aboutus'),(8,'Advisors','Social Responsibility sub title 3','aboutus'),(1,'Leave a message, or come over say hi~~','contact us intro','contactus'),(2,'Name','contact us name','contactus'),(3,'Company','contact us company','contactus'),(4,'E-mail Address','contact us email','contactus'),(5,'Phone Number','contact us phone','contactus'),(6,'Enquiry / Comments','contact us comments','contactus'),(7,'Submit','contact us submit','contactus'),(8,'Cancel','contact us cancel','contactus'),(9,'T: 2699-8612','company phone 1','contactus'),(10,'T: 2699-3772','company phone 2','contactus'),(11,'A: Unit 313A, InnoCenter, <br>72 Tat Chee Avenue, <br>Kowloon Tong, HongKong','company address','contactus'),(12,'marketing@eggshell.com.hk','company email','contactus'),(13,'eggsheller','company facebook','contactus'),(14,'Send full resume to creative@eggshell.com.hk; <br>Extra 5 pieces of selected portofolio for designer <br>applicant to submit.','recruitment intro','contactus'),(10,'share','Share','home'),(11,'FAQ','FAQ','home'),(12,'news letter','Newsletter','home'),(13,'Newsletter Supsciption','newsletter text1','home'),(14,'Please enter your e-mail address to subscribe the newsletter:','newsletter text2','home'),(15,'Previous newsletter','newsletter text3','home'),(16,'more','newsletter text4','home'),(1,'We are pleased to present Eggshell\'s concept prodcuct here.','subtitle1','shop'),(2,'Feel free to contact us for further information or inquiry: +852 26998912','subtitle2','shop'),(1,'ASSESS YOUR OWN BRAND','title','assessment'),(2,'Assess your brand health here by finishing the following 5 question.','subtitle1','assessment'),(3,'Feel free to contact us for further consultancy: 852 - 26998912 ','subtitle2','assessment'),(4,'Respond to the 10 statements below using a tiered scale: ','subtitle3','assessment'),(5,'Never','choose1','assessment'),(6,'Sometimes ','choose2','assessment'),(7,' Always ','choose3','assessment'),(8,'Congratulation~ Your assessment is finished.','sucess title 1','assessment'),(9,'Now just take few seconds to get score and initial diagnoises for your brand. ','sucess title 2','assessment'),(10,'Please Submit your E-mail Address to get the result. ','submit title','assessment'),(11,'your name','name','assessment'),(12,'company name','company','assessment'),(13,'email address','email','assessment'),(14,'get score now','submit button text','assessment'),(3,'style','content nav 1','shop'),(4,'photos','content nav 2','shop'),(5,'buy','content nav 3','shop'),(5,'Things always seem to be impossible until <br>they are done. I never think about tommorrow, <br>they have come soon enough.','sentence','possibility'),(5,'Things always seem to be impossible until <br>they are done. I never think about tommorrow, <br>they have come soon enough.','sentence','press'),(6,'Events','title 1','press'),(7,'Date','title 2','press'),(8,'Description','title 3','press'),(1,'View the cases, and contact us if you are interested: 852 26998912','title','case'),(2,'Audit','type1','case'),(3,'Identity','type2','case'),(4,'Experience','type3','case'),(5,'Strategic','type4','case'),(6,'Management','type5','case'),(7,'Retain','type6','case'),(7,'Branding Blue Print','title','howwedo'),(8,'Deliverable','Deliverable','howwedo'),(9,'click to know more','click to know more','howwedo'),(10,'click to close','click to close','howwedo'),(11,'Company Background','Brand Audit  text1','howwedo'),(12,'Core Value & Aspiration','Brand Audit  text2','howwedo'),(13,'Internal Brand Awareness Audit','Brand Audit  text3','howwedo'),(14,'Touch Points Audit','Brand Audit  text4','howwedo'),(15,'System & Operation Audit','Brand Audit  text5','howwedo'),(16,'Current Business Model Audit','Brand Audit  text6','howwedo'),(17,'Audit Report','Brand Audit  text7','howwedo'),(18,'Scope of Future Project','Brand Audit  text8','howwedo'),(21,'Marketing Research','Brand Strategy text1','howwedo'),(22,'Brand Message','Brand Strategy text2','howwedo'),(23,'Brand Positioning','Brand Strategy text3','howwedo'),(24,'Brand Architecture','Brand Strategy text4','howwedo'),(25,'Research & Strategic Report','Brand Strategy text5','howwedo'),(28,'Brand Personality & Brand Story','Brand Identity text1','howwedo'),(29,'Brand Naming & Brand Line','Brand Identity text2','howwedo'),(30,'Brand Signature','Brand Identity text3','howwedo'),(31,'Brand Visual System','Brand Identity text4','howwedo'),(32,'Brand Manual','Brand Identity text5','howwedo'),(33,'Ready-to-use Electronic Files','Brand Identity text6','howwedo'),(34,'Future Business Model','Brand Management text1','howwedo'),(35,'Internal Brand Compliance','Brand Management text2','howwedo'),(36,'Brand Management Plan','Brand Management text3','howwedo'),(37,'Internal Service Guideline','Brand Management text4','howwedo'),(38,'Training Proposal','Brand Management text5','howwedo'),(39,'Service Design','Brand Experience text1','howwedo'),(40,'Product Strategy & Design','Brand Experience text2','howwedo'),(41,'Sales & Promotion Strategy','Brand Experience text3','howwedo'),(42,'Media Plan','Brand Experience text4','howwedo'),(43,'Visual design & Production','Brand Experience text5','howwedo'),(44,'Sales & Promotion Proposal','Brand Experience text6','howwedo'),(45,'Brand Audit Update','Brand Retaining text1','howwedo'),(46,'Review of Collateral Materials','Brand Retaining text2','howwedo'),(47,'Customer Resonance Research','Brand Retaining text3','howwedo'),(48,'Brand Consultation','Brand Retaining text4','howwedo'),(49,'Brand Assessment Report','Brand Retaining text5','howwedo'),(50,'Brand Manual Update','Brand Retaining text6','howwedo'),(53,'watch video and pictures behind scene','popup nav1','howwedo'),(54,'RELATED WORKS','popup nav2','howwedo'),(19,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant through XXXXX.','Brand Audit description','howwedo'),(20,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant through XXXXX.','Brand Strategy description','howwedo'),(51,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant through XXXXX.','Brand Identity description','howwedo'),(52,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant through X.','Brand Management descritpion','howwedo'),(55,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant through XXXXX.','Brand Experience description','howwedo'),(56,'Price with the changing needs and lives of consumers. Every brand owner seeks to grow their busness, innovating to increase its reach and keep XXXplace with the changing needs and lives of consumers.<br>We work with clients to create new brands and keep their existing brands fresh and relevant throu','Brand Retaining description','howwedo'),(57,'view the case','view the case','howwedo'),(1,'Founder','nav Founder','oneminute'),(2,'Cases','nav Cases','oneminute'),(3,'Movie / Videos','nav Movie','oneminute'),(4,'How we work','nav How we work','oneminute'),(5,'About Eggshell','nav About Eggshell','oneminute'),(6,'Brand Shop','nav Brand Shop','oneminute'),(7,'Strategic Team','nav Strategic Team','oneminute'),(8,'Advisor','nav Advisor','oneminute'),(9,'contact us for more imformation','contact more','oneminute'),(10,'ACTIVE & PASSIONATE <br />ENTREPRENEUR','Founder title','oneminute'),(11,'in HK\'s creative industry. ','Founder subtitle','oneminute'),(12,'growing up as a strategic designer.','Founder text 1','oneminute'),(13,'belives in infinite possibilities both in clients and her team mate. ','Founder text 2','oneminute'),(14,'STATEGIC <br>BRANDING CONSULTANCY','About Eggshell title','oneminute'),(15,'since 2005. ','About Eggshell subtitle','oneminute'),(16,'own a business strategic & multi-media design force','About Eggshell text 1','oneminute'),(17,'experienced in User experience & service design','About Eggshell text 2','oneminute'),(18,'advertising, design. ','About Eggshell text 3','oneminute'),(20,'\"Testimonial 1\" -client a','Client info 1','oneminute'),(21,' \"Testimonial 2\" -client b','Client info 2','oneminute'),(22,' \"Testimonial 3\" -client c','Client info 3','oneminute'),(17,' Eggshell Creative © 2012 All Rights Reserved.','footer版权','home'),(10,' Eggshell Creative © 2012 All Rights Reserved.','footer版权','home'),(15,'Eggshell Creative Ltd.','Eggshell Creative Ltd.','contactus'),(18,'Sitemap','site map','home'),(19,'Client testimonial','Client testimonial title','oneminute'),(23,'Strength','Strength','oneminute'),(24,'Experience','Experience','oneminute'),(9,'Date','Socoal Posibility Date','aboutus'),(10,'See my interview','See my interview','aboutus'),(11,'contact me','contact me','aboutus');
/*!40000 ALTER TABLE `key_value` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `news` varchar(100) DEFAULT NULL,
  `content` text,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (15,'New trend for lifestyle branding','New trend for lifestyle branding','2012-10-15 18:40:46'),(16,'New trend for lifestyle branding 2','New trend for lifestyle branding','2012-10-15 18:40:51'),(17,'New trend for lifestyle branding 3','New trend for lifestyle branding','2012-10-15 18:40:55'),(18,'New trend for lifestyle branding 4','New trend for lifestyle branding','2012-10-15 18:40:58'),(19,'test5','haha','2012-10-15 20:46:46');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `press`
--

DROP TABLE IF EXISTS `press`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `press` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filed` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `events` text,
  `date` varchar(20) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `press`
--

LOCK TABLES `press` WRITE;
/*!40000 ALTER TABLE `press` DISABLE KEYS */;
INSERT INTO `press` VALUES (1,'Press','20121018112032.jpg','HKDC','2012-05-17','We have students from UCCKE visit us in the office.'),(2,'Video','20121018112213.jpg','test1','2012-05-17','We have students from UCCKE visit us in the office.'),(3,'Video','201210310926286.jpg','test2','2012-05-17','We have students from UCCKE visit us in the office.'),(4,'Press','20121018112253.jpg','test3','2012-05-17','We have students from UCCKE visit us in the office.'),(5,'Press','20121019161849.jpg','test4','2012-05-17','We have students from UCCKE visit us in the office.'),(7,'Press','20121018112729.jpg','test','2012-05-17','We have students from UCCKE visit us in the office.'),(8,'Press','20121018114454.jpg','test5','2012-05-17','We have students from UCCKE visit us in the office.'),(9,'Events','20121018114512.jpg','test 6','2012-05-17','We have students from UCCKE visit us in the office. '),(10,'Press','2012110618503927.jpg','haha','2012-05-17','We have students from UCCKE visit us in the office. '),(11,'Press','2012110618505855.jpg','test123','2012-05-17','We have students from UCCKE visit us in the office. '),(12,'Video','2012110618511858.jpg','test45','2012-05-17','We have students from UCCKE visit us in the office. '),(13,'Press','2012110618513649.jpg','gdfs','2012-05-17','We have students from UCCKE visit us in the office. '),(14,'Press','2012110710204738.jpg','test','2012-05-17','hello world!'),(15,'Press','2012110810415373.jpg','test5','2012-05-17','ewqewqewqewqeewqe');
/*!40000 ALTER TABLE `press` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruitment`
--

DROP TABLE IF EXISTS `recruitment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recruitment` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment`
--

LOCK TABLES `recruitment` WRITE;
/*!40000 ALTER TABLE `recruitment` DISABLE KEYS */;
INSERT INTO `recruitment` VALUES (5,'Media Researcher','full time','requirements: <br>\n2 year relevant experience;<br>\naccept fress graduates.'),(6,'Mult-Media Designer','full time','requirements: <br>\nIdeally you will have at least 4 years post <br>\nqualification experience in multi-media related major.'),(7,'Administator','intern','Requirements: <br>\nBeing patient, and have excelent <br>\ncommunication skills.'),(8,'Administator','full time<br>intern','Requirements: <br>Being patient, and have excelent <br>communication skills.');
/*!40000 ALTER TABLE `recruitment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social_posibility`
--

DROP TABLE IF EXISTS `social_posibility`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social_posibility` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `image` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social_posibility`
--

LOCK TABLES `social_posibility` WRITE;
/*!40000 ALTER TABLE `social_posibility` DISABLE KEYS */;
INSERT INTO `social_posibility` VALUES (1,'20121031095053100.jpg','2012-10-01','Dicover Design, host by HKDC, the students visit Eggshell\'s office,<br />\r\nget to know how a creative company runs.'),(2,'2012103109514162.jpg','2012-11-11','test');
/*!40000 ALTER TABLE `social_posibility` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_email`
--

DROP TABLE IF EXISTS `user_email`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_email`
--

LOCK TABLES `user_email` WRITE;
/*!40000 ALTER TABLE `user_email` DISABLE KEYS */;
INSERT INTO `user_email` VALUES (1,'hongri1987@gmail.com','2012-10-16 10:16:35'),(2,'hongri1988@gmail.com','2012-10-16 10:11:29'),(3,'hongri1989@gmail.com','2012-10-16 10:11:29'),(4,'hongri1990@gmail.com','2012-10-16 10:11:29'),(5,'hongri1@gmail.com','2012-10-16 10:11:29'),(6,'hongri2@gmail.com','2012-10-16 10:11:29'),(7,'hongri3@gmail.com','2012-10-16 10:11:29'),(8,'hongri4@gmail.com','2012-10-16 10:11:29'),(9,'hongri5@gmail.com','2012-10-16 10:11:29'),(10,'hongri6@gmail.com','2012-10-16 10:11:29'),(11,'hongri7@gmail.com','2012-10-16 10:11:29'),(12,'hongri8@gmail.com','2012-10-16 10:11:29'),(13,'hongri9@gmail.com','2012-10-16 10:11:29'),(22,'hongri0615@yahoo.com.cn','2012-10-16 10:16:18'),(23,'hongri198@gmail.com','2012-10-18 18:12:56');
/*!40000 ALTER TABLE `user_email` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(100) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `video`
--

LOCK TABLES `video` WRITE;
/*!40000 ALTER TABLE `video` DISABLE KEYS */;
INSERT INTO `video` VALUES (1,'20121017145042.gif','One of the eggshellers use the video shows how we do the work.','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(2,'20121017145339.gif','dsadsa','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(4,'20121017145409.gif','dasdasd','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(5,'20121017145518.gif','dsadsa','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(6,'20121017145431.gif','dasdas','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(7,'20121017145439.gif','dsadsa','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>'),(8,'20121017145448.gif','dsadsadsa','<object width=\"100%\" height=\"100%\" data=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" type=\"application/x-shockwave-flash\">\n                                                        <param value=\"transparent\" name=\"wmode\">\n                                                        <param height=\"100%\" width=\"100%\" value=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\" name=\"movie\">\n                                                        <embed width=\"100%\" height=\"100%\" border=\"0\" align=\"middle\" wmode=\"transparent\" src=\"http://static.youku.com/v1.0.0223/v/swf/loader.swf?winType=adshow&amp;VideoIDS=115718654&amp;isAutoPlay=true&amp;delayload=true&amp;isShowRelatedVideo=false&amp;imglogo=http://static.atm.youku.com/Youku2012/201210/1017/19693/280-210.jpg\">                                   </object>');
/*!40000 ALTER TABLE `video` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-11-08 15:11:23
