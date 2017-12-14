-- MySQL dump 10.13  Distrib 5.7.20, for osx10.11 (x86_64)
--
-- Host: localhost    Database: master
-- ------------------------------------------------------
-- Server version	5.7.20

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','z9fiJzaJM3BozZUdf5tPMQnYY-noVyOW','$2y$13$cC.SfZ08/hljlHwAIlEQgO1OucDcGWJ3D.KtNfJiMlxck9ySeYDkS',NULL,'liu.lipeng@newsnow.com.cn',10,1513137353,1513221869);
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_log`
--

DROP TABLE IF EXISTS `admin_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `route` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gets` text COLLATE utf8_unicode_ci,
  `posts` text COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_log`
--

LOCK TABLES `admin_log` WRITE;
/*!40000 ALTER TABLE `admin_log` DISABLE KEYS */;
INSERT INTO `admin_log` VALUES (1,'admin/permission/index','http://master.iwebxin.com/index.php?r=admin%2Fpermission%2Findex','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"r\":\"admin\\/permission\\/index\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141457,1513141457),(2,'admin/route/index','http://master.iwebxin.com/index.php?r=admin%2Froute%2Findex','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"r\":\"admin\\/route\\/index\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141458,1513141458),(3,'admin/rule/index','http://master.iwebxin.com/index.php?r=admin%2Frule%2Findex','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"r\":\"admin\\/rule\\/index\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141463,1513141463),(4,'admin/route/index','http://master.iwebxin.com/index.php?r=admin%2Froute%2Findex','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"r\":\"admin\\/route\\/index\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141464,1513141464),(5,'admin/route/index','http://master.iwebxin.com/admin/route/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141493,1513141493),(6,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141498,1513141498),(7,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"id\":\"0\"}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141498,1513141498),(8,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141499,1513141499),(9,'admin/rule/index','http://master.iwebxin.com/admin/rule/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141698,1513141698),(10,'admin/permission/index','http://master.iwebxin.com/admin/permission/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141699,1513141699),(11,'admin/permission/update','http://master.iwebxin.com/admin/permission/update?id=%E4%BF%AE%E6%94%B9%E7%94%A8%E6%88%B7','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"\\u4fee\\u6539\\u7528\\u6237\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141703,1513141703),(12,'admin/permission/index','http://master.iwebxin.com/admin/permission/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141707,1513141707),(13,'admin/permission/index','http://master.iwebxin.com/admin/permission/index?page=2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"page\":\"2\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141710,1513141710),(14,'admin/role/index','http://master.iwebxin.com/admin/role/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141715,1513141715),(15,'admin/route/index','http://master.iwebxin.com/admin/route/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141718,1513141718),(16,'admin/route/assign','http://master.iwebxin.com/admin/route/assign','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"action\":\"assign\",\"routes\":[\"\\/fight-single\\/index\",\"\\/fight-single\\/*\",\"\\/*\"]}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141721,1513141721),(17,'admin/assignment/index','http://master.iwebxin.com/admin/assignment/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141732,1513141732),(18,'admin/role/index','http://master.iwebxin.com/admin/role/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141734,1513141734),(19,'admin/permission/index','http://master.iwebxin.com/admin/permission/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141735,1513141735),(20,'admin/permission/index','http://master.iwebxin.com/admin/permission/index?page=2','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"page\":\"2\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141737,1513141737),(21,'admin/permission/create','http://master.iwebxin.com/admin/permission/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141741,1513141741),(22,'admin/permission/create','http://master.iwebxin.com/admin/permission/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141751,1513141751),(23,'admin/permission/create','http://master.iwebxin.com/admin/permission/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141773,1513141773),(24,'admin/permission/create','http://master.iwebxin.com/admin/permission/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141790,1513141790),(25,'admin/role/index','http://master.iwebxin.com/admin/role/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141813,1513141813),(26,'admin/role/update','http://master.iwebxin.com/admin/role/update?id=Admin','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"Admin\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141814,1513141814),(27,'admin/role/index','http://master.iwebxin.com/admin/role/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141821,1513141821),(28,'admin/role/view','http://master.iwebxin.com/admin/role/view?id=Admin','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"Admin\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141822,1513141822),(29,'admin/role/assign','http://master.iwebxin.com/admin/role/assign?id=Admin','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"Admin\"}','{\"action\":\"assign\",\"roles\":[\"\\/*\",\"\\/admin\\/*\",\"\\/admin\\/assignment\\/*\",\"\\/admin\\/assignment\\/assign\",\"\\/admin\\/assignment\\/create\",\"\\/admin\\/assignment\\/delete\",\"\\/admin\\/assignment\\/index\",\"\\/admin\\/assignment\\/search\",\"\\/admin\\/assignment\\/update\",\"\\/admin\\/assignment\\/view\",\"\\/admin\\/default\\/*\",\"\\/admin\\/default\\/index\",\"\\/admin\\/log\\/*\",\"\\/admin\\/log\\/index\",\"\\/admin\\/log\\/view\",\"\\/admin\\/menu\\/*\",\"\\/admin\\/menu\\/create\",\"\\/admin\\/menu\\/delete\",\"\\/admin\\/menu\\/index\",\"\\/admin\\/menu\\/update\",\"\\/admin\\/menu\\/view\",\"\\/admin\\/permission\\/*\",\"\\/admin\\/permission\\/assign\",\"\\/admin\\/permission\\/create\",\"\\/admin\\/permission\\/delete\",\"\\/admin\\/permission\\/index\",\"\\/admin\\/permission\\/search\",\"\\/admin\\/permission\\/update\",\"\\/admin\\/permission\\/view\",\"\\/admin\\/role\\/*\",\"\\/admin\\/role\\/assign\",\"\\/admin\\/role\\/create\",\"\\/admin\\/role\\/delete\",\"\\/admin\\/role\\/index\",\"\\/admin\\/role\\/search\",\"\\/admin\\/role\\/update\",\"\\/admin\\/role\\/view\",\"\\/admin\\/route\\/*\",\"\\/admin\\/route\\/assign\",\"\\/admin\\/route\\/create\",\"\\/admin\\/route\\/index\",\"\\/admin\\/route\\/refresh\",\"\\/admin\\/route\\/search\",\"\\/admin\\/rule\\/*\",\"\\/admin\\/rule\\/create\",\"\\/admin\\/rule\\/delete\",\"\\/admin\\/rule\\/index\",\"\\/admin\\/rule\\/update\",\"\\/admin\\/rule\\/view\",\"\\/debug\\/*\",\"\\/debug\\/default\\/*\",\"\\/debug\\/default\\/db-explain\",\"\\/debug\\/default\\/download-mail\",\"\\/debug\\/default\\/index\",\"\\/debug\\/default\\/toolbar\",\"\\/debug\\/default\\/view\",\"\\/fight-single\\/*\",\"\\/fight-single\\/index\",\"\\/gii\\/*\",\"\\/gii\\/default\\/*\",\"\\/gii\\/default\\/action\",\"\\/gii\\/default\\/diff\",\"\\/gii\\/default\\/index\",\"\\/gii\\/default\\/preview\",\"\\/gii\\/default\\/view\",\"\\/site\\/*\",\"\\/site\\/error\",\"\\/site\\/index\",\"\\/site\\/login\",\"\\/site\\/logout\"]}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141828,1513141828),(30,'admin/role/view','http://master.iwebxin.com/admin/role/view?id=Admin','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"Admin\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141831,1513141831),(31,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141834,1513141834),(32,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141835,1513141835),(33,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513141892,1513141892),(34,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142705,1513142705),(35,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142728,1513142728),(36,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142788,1513142788),(37,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142789,1513142789),(38,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142807,1513142807),(39,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142831,1513142831),(40,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142850,1513142850),(41,'fight-single/index','http://master.iwebxin.com/fight-single','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142865,1513142865),(42,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142869,1513142869),(43,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"id\":\"0\"}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142870,1513142870),(44,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142871,1513142871),(45,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"gAkASfjGIeJnqUrgP2_VGdim3IAYrj8GRSyfk3XkMsnnW2gOiZFrvRDIBpZbDLtjicuezFDCTTEzbcnFGr5HjQ==\",\"Menu\":{\"name\":\"\\u62fc\\u56e2\\u7ba1\\u7406\",\"parent_name\":\"\",\"route\":\"\\/fight-single\\/index\",\"order\":\"\",\"data\":\"\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142897,1513142897),(46,'admin/menu/view','http://master.iwebxin.com/admin/menu/view?id=9','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"9\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142897,1513142897),(47,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513142901,1513142901),(48,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143113,1513143113),(49,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143167,1513143167),(50,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143184,1513143184),(51,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143199,1513143199),(52,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143206,1513143206),(53,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"rKoSHTG5lvp-YMKa9FKV13u9nLwrzYkVz2n0aCc_kW_L-HpaQO7cpQkBjuyQMfutKtDe8GOh-yK5KKI-SGXkKw==\",\"FightSingleGoods\":{\"name\":\"\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g\",\"thumb\":\"https:\\/\\/ss1.bdstatic.com\\/70cFvXSh_Q1YnxGkpoWK1HF6hhy\\/it\\/u=27881697,1438243336&fm=27&gp=0.jpg\",\"price\":\"19900\",\"discount\":\"990\",\"member_count\":\"10\",\"content\":\"\\u518c\\u6570\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143266,1513143266),(54,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143550,1513143550),(55,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143551,1513143551),(56,'fight-single/create','http://master.iwebxin.com/fight-single/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"jCDO45K_Apmi_MOM-xKwCUvZyPPQdIbDVBP9p7521ATrcqak4-hIxtWdj_qfcd5zGrSKv5gY9PQiUqvx0SyhQA==\",\"FightSingleGoods\":{\"name\":\"\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g\",\"thumb\":\"https:\\/\\/ss1.bdstatic.com\\/70cFvXSh_Q1YnxGkpoWK1HF6hhy\\/it\\/u=27881697,1438243336&fm=27&gp=0.jpg\",\"price\":\"19900\",\"discount\":\"990\",\"member_count\":\"10\",\"content\":\"\\u518c\\u6570\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143559,1513143559),(57,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143560,1513143560),(58,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143568,1513143568),(59,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513143570,1513143570),(60,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221858,1513221858),(61,'admin/assignment/index','http://master.iwebxin.com/admin/assignment/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221863,1513221863),(62,'admin/assignment/update','http://master.iwebxin.com/admin/assignment/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221864,1513221864),(63,'admin/assignment/update','http://master.iwebxin.com/admin/assignment/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','{\"_csrf\":\"jyt5svuGQiC0LWkIIH1wQ82ua46TzPfSw5gBYqWjvw68dAnCkvIFGNBVHDtDMTU14NsP-8KEzqSE3k8y-sD8Pw==\",\"AdminModel\":{\"username\":\"admin\",\"email\":\"liu.lipeng@newsnow.com.cn\",\"password\":\"admin888\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221869,1513221869),(64,'admin/assignment/index','http://master.iwebxin.com/admin/assignment/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221869,1513221869),(65,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221871,1513221871),(66,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221875,1513221875),(67,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','{\"_csrf\":\"tfGPkSANQUmlRzDWdNc1kg6wpPLKm_ufMg0hcOomza6Grv_hSXkGccE_ReUXm3DkI8XAh5vTwul1S28gtUWOnw==\",\"FightSingleGoods\":{\"name\":\"\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g\",\"thumb\":\"https:\\/\\/ss1.bdstatic.com\\/70cFvXSh_Q1YnxGkpoWK1HF6hhy\\/it\\/u=27881697,1438243336&fm=27&gp=0.jpg\",\"price\":\"19900\",\"discount\":\"990\",\"member_count\":\"2\",\"content\":\"<img src=\\\".\\/\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g_files\\/20171025175308_28581.jpg\\\" alt=\\\"\\\"><img src=\\\".\\/\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g_files\\/20171025175315_69143.jpg\\\" alt=\\\"\\\">\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221931,1513221931),(68,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221931,1513221931),(69,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221960,1513221960),(70,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513221986,1513221986),(71,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','{\"_csrf\":\"26rMYNqmzscdrs1OK4ok_PNCptMeMJjq4Um47Zdr1sTo9bwQs9KJ_3nWuH1IxmGK3jfCpk94oZymD_a9yAiV9Q==\",\"FightSingleGoods\":{\"name\":\"\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g\",\"thumb\":\"https:\\/\\/ss1.bdstatic.com\\/70cFvXSh_Q1YnxGkpoWK1HF6hhy\\/it\\/u=27881697,1438243336&fm=27&gp=0.jpg\",\"price\":\"19900\",\"discount\":\"990\",\"member_count\":\"2\",\"content\":\"<img src=\\\"http:\\/\\/000.v-999.com\\/20171025175308_28581.jpg\\\" alt=\\\"\\\"><img src=\\\"http:\\/\\/000.v-999.com\\/20171025175315_69143.jpg\\\" alt=\\\"\\\">\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513222003,1513222003),(72,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513222003,1513222003),(73,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513222053,1513222053),(74,'fight-single/update','http://master.iwebxin.com/fight-single/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','{\"_csrf\":\"N7cqdXxV-k8ER4sRklHxXZhwimaBicEnMVcC2bQghfkE6FoFFSG9d2A__iLxHbQrtQXuE9DB-FF2EUyJ60PGyA==\",\"FightSingleGoods\":{\"name\":\"\\u30102017\\u5e74\\u65b0\\u8d27\\u3011\\u65b0\\u7092\\u575a\\u679c \\u5df4\\u65e6\\u6728 \\u78a7\\u6839\\u679c \\u5f00\\u5fc3\\u679c \\u590f\\u5a01\\u5937\\u679c \\u74dc\\u5b50 \\u575a\\u679c\\u7ec4\\u5408 240g_360g_480g\",\"thumb\":\"https:\\/\\/ss1.bdstatic.com\\/70cFvXSh_Q1YnxGkpoWK1HF6hhy\\/it\\/u=27881697,1438243336&fm=27&gp=0.jpg\",\"price\":\"19900\",\"discount\":\"990\",\"member_count\":\"2\",\"content\":\"<img src=\\\"\\/images\\/fight-single\\/20171025175308_28581.jpg\\\" alt=\\\"\\\"><img src=\\\"\\/images\\/fight-single\\/20171025175315_69143.jpg\\\" alt=\\\"\\\">\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513222068,1513222068),(75,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513222068,1513222068),(76,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513227981,1513227981),(77,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228382,1513228382),(78,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"id\":\"0\"}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228382,1513228382),(79,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228384,1513228384),(80,'admin/route/index','http://master.iwebxin.com/admin/route/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228401,1513228401),(81,'admin/route/assign','http://master.iwebxin.com/admin/route/assign','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"action\":\"assign\",\"routes\":[\"\\/domain\\/index\",\"\\/domain\\/create\",\"\\/domain\\/update\",\"\\/domain\\/delete\",\"\\/domain\\/*\",\"\\/fight-single\\/create\",\"\\/fight-single\\/update\",\"\\/fight-single\\/delete\"]}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228402,1513228402),(82,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228404,1513228404),(83,'admin/menu/index','http://master.iwebxin.com/admin/menu/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"id\":\"0\"}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228404,1513228404),(84,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228405,1513228405),(85,'admin/menu/create','http://master.iwebxin.com/admin/menu/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"zz7P_sVyAgDMe_mjh45KRN7QzB3hs1pux2KGAKjjh238Yb-OrAZFOKgDjJDkwg8y86WoaLD7YxiAJMhQ94DEXA==\",\"Menu\":{\"name\":\"\\u57df\\u540d\\u7ba1\\u7406\",\"parent_name\":\"\",\"route\":\"\\/domain\\/index\",\"order\":\"\",\"data\":\"\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228409,1513228409),(86,'admin/menu/view','http://master.iwebxin.com/admin/menu/view?id=10','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"10\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228409,1513228409),(87,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228410,1513228410),(88,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228467,1513228467),(89,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228467,1513228467),(90,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228482,1513228482),(91,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"jY_DrhmfpKNYt_lHoS3aifCp5nCVICXVjnUDNrCiFti-0LPecOvjmzzPjHTCYZ__3dyCBcRoHKPJM01m78FV6Q==\",\"Domain\":{\"domain\":\"123.com\\r\\n123.com\\r\\n123.com\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228733,1513228733),(92,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228733,1513228733),(93,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228735,1513228735),(94,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228736,1513228736),(95,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"ao1TZJFv1SNrReQMzcF_jJfffn4Hqxjuz6IqXbYw2lNZ0iMU-BuSGw89kT-ujTr6uqoaC1bjIZiI5GQN6VOZYg==\",\"Domain\":{\"domain\":\"123.com\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228739,1513228739),(96,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228739,1513228739),(97,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228743,1513228743),(98,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"xTadn6zKaiz7nw3JbTZZzqr4PAB6_GivlD2YLRBRTGP2ae3vxb4tFJ_nePoOehy4h41YdSu0UdnTe9Z9TzIPUg==\",\"Domain\":{\"domain\":\"123.com\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228765,1513228765),(99,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228765,1513228765),(100,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513228951,1513228951),(101,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229015,1513229015),(102,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229018,1513229018),(103,'domain/update','http://master.iwebxin.com/domain/update?id=1','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','{\"id\":\"1\"}','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229026,1513229026),(104,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229027,1513229027),(105,'fight-single/index','http://master.iwebxin.com/fight-single/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229028,1513229028),(106,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229036,1513229036),(107,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229041,1513229041),(108,'domain/create','http://master.iwebxin.com/domain/create','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','{\"_csrf\":\"_OJOTcmWtwto6NupEn0DcuRVzALsOOnjNA_cPmzXv9bPvT49oOLwMwyQrppxMUYEySCod71w0JVzSZJuM7T85w==\",\"Domain\":{\"domain\":\"456.com\\r\\n789.com\\r\\n1111.com\"}}',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229062,1513229062),(109,'domain/index','http://master.iwebxin.com/domain/index','Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36','[]','[]',1,'liu.lipeng@newsnow.com.cn','127.0.0.1',1513229063,1513229063);
/*!40000 ALTER TABLE `admin_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_assignment`
--

LOCK TABLES `auth_assignment` WRITE;
/*!40000 ALTER TABLE `auth_assignment` DISABLE KEYS */;
INSERT INTO `auth_assignment` VALUES ('Admin','1',1457092343);
/*!40000 ALTER TABLE `auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item`
--

LOCK TABLES `auth_item` WRITE;
/*!40000 ALTER TABLE `auth_item` DISABLE KEYS */;
INSERT INTO `auth_item` VALUES ('/*',2,NULL,NULL,NULL,1513141721,1513141721),('/admin/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/assignment/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/assignment/assign',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/assignment/create',2,NULL,NULL,NULL,1457521995,1457521995),('/admin/assignment/delete',2,NULL,NULL,NULL,1458010804,1458010804),('/admin/assignment/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/assignment/search',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/assignment/update',2,NULL,NULL,NULL,1458010804,1458010804),('/admin/assignment/view',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/default/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/default/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/log/*',2,NULL,NULL,NULL,1468288689,1468288689),('/admin/log/index',2,NULL,NULL,NULL,1468288689,1468288689),('/admin/log/view',2,NULL,NULL,NULL,1468288689,1468288689),('/admin/menu/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/menu/create',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/menu/delete',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/menu/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/menu/update',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/menu/view',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/*',2,NULL,NULL,NULL,1457948575,1457948575),('/admin/permission/assign',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/create',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/delete',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/search',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/update',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/permission/view',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/assign',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/create',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/delete',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/search',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/update',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/role/view',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/route/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/route/assign',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/route/create',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/route/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/route/refresh',2,NULL,NULL,NULL,1457947924,1457947924),('/admin/route/search',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/*',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/create',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/delete',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/index',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/update',2,NULL,NULL,NULL,1457330826,1457330826),('/admin/rule/view',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/*',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/*',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/db-explain',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/download-mail',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/index',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/toolbar',2,NULL,NULL,NULL,1457330826,1457330826),('/debug/default/view',2,NULL,NULL,NULL,1457330826,1457330826),('/domain/*',2,NULL,NULL,NULL,1513228402,1513228402),('/domain/create',2,NULL,NULL,NULL,1513228402,1513228402),('/domain/delete',2,NULL,NULL,NULL,1513228402,1513228402),('/domain/index',2,NULL,NULL,NULL,1513228402,1513228402),('/domain/update',2,NULL,NULL,NULL,1513228402,1513228402),('/fight-single/*',2,NULL,NULL,NULL,1513141721,1513141721),('/fight-single/create',2,NULL,NULL,NULL,1513228402,1513228402),('/fight-single/delete',2,NULL,NULL,NULL,1513228402,1513228402),('/fight-single/index',2,NULL,NULL,NULL,1513141721,1513141721),('/fight-single/update',2,NULL,NULL,NULL,1513228402,1513228402),('/gii/*',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/*',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/action',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/diff',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/index',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/preview',2,NULL,NULL,NULL,1457330826,1457330826),('/gii/default/view',2,NULL,NULL,NULL,1457330826,1457330826),('/site/*',2,NULL,NULL,NULL,1457330826,1457330826),('/site/error',2,NULL,NULL,NULL,1457330826,1457330826),('/site/index',2,NULL,NULL,NULL,1457330826,1457330826),('/site/login',2,NULL,NULL,NULL,1457330826,1457330826),('/site/logout',2,NULL,NULL,NULL,1457330826,1457330826),('Admin',1,'Administrators',NULL,NULL,1457084487,1457947508),('修改用户',2,NULL,NULL,NULL,1457522051,1457522051),('修改菜单',2,NULL,NULL,NULL,1457330464,1457405433),('删除权限',2,NULL,NULL,NULL,1457331320,1457331320),('删除菜单',2,NULL,NULL,NULL,1457330485,1457330485),('删除规则',2,NULL,NULL,NULL,1457331677,1457331677),('删除角色',2,NULL,NULL,NULL,1457331161,1457331161),('删除路由',2,NULL,NULL,NULL,1457331499,1457331499),('操作日志',2,NULL,NULL,NULL,1468288713,1468288713),('新增权限',2,NULL,NULL,NULL,1457331279,1457331279),('新增用户',2,NULL,NULL,NULL,1457433802,1457433802),('新增菜单',2,NULL,NULL,NULL,1457330445,1457330445),('新增规则',2,NULL,NULL,NULL,1457331552,1457331610),('新增角色',2,NULL,NULL,NULL,1457331075,1457331075),('新增路由',2,NULL,NULL,NULL,1457331386,1457331386),('更新权限',2,NULL,NULL,NULL,1457331303,1457331303),('更新规则',2,NULL,NULL,NULL,1457331647,1457331647),('更新角色',2,NULL,NULL,NULL,1457331126,1457331126),('更新路由',2,NULL,NULL,NULL,1457331492,1457331492),('权限分配',2,NULL,NULL,NULL,1457418746,1457418746),('权限管理',2,NULL,NULL,NULL,1457331258,1457331258),('查看操作日志',2,NULL,NULL,NULL,1468294314,1468294314),('查看权限',2,NULL,NULL,NULL,1457331342,1457331342),('查看用户权限',2,NULL,NULL,NULL,1457331965,1457331965),('查看菜单',2,NULL,NULL,NULL,1457330619,1457330619),('查看规则',2,NULL,NULL,NULL,1457331692,1457331692),('查看角色',2,NULL,NULL,NULL,1457331191,1457331191),('用户权限分配',2,NULL,NULL,NULL,1457333258,1457333258),('用户管理',2,NULL,NULL,NULL,1457079781,1457331877),('菜单管理',2,NULL,NULL,NULL,1457324314,1457324314),('规则管理',2,NULL,NULL,NULL,1457331529,1457331529),('角色权限分配',2,NULL,NULL,NULL,1457333688,1457333688),('角色管理',2,NULL,NULL,NULL,1457330790,1457330790),('路由分配',2,NULL,NULL,NULL,1457333742,1457333742),('路由管理',2,NULL,NULL,NULL,1457331368,1457331368);
/*!40000 ALTER TABLE `auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_item_child`
--

LOCK TABLES `auth_item_child` WRITE;
/*!40000 ALTER TABLE `auth_item_child` DISABLE KEYS */;
INSERT INTO `auth_item_child` VALUES ('Admin','/*'),('Admin','/admin/*'),('Admin','/admin/assignment/*'),('Admin','/admin/assignment/assign'),('用户权限分配','/admin/assignment/assign'),('Admin','/admin/assignment/create'),('新增用户','/admin/assignment/create'),('Admin','/admin/assignment/delete'),('Admin','/admin/assignment/index'),('用户管理','/admin/assignment/index'),('Admin','/admin/assignment/search'),('查看用户权限','/admin/assignment/search'),('Admin','/admin/assignment/update'),('修改用户','/admin/assignment/update'),('Admin','/admin/assignment/view'),('查看用户权限','/admin/assignment/view'),('Admin','/admin/default/*'),('Admin','/admin/default/index'),('Admin','/admin/log/*'),('Admin','/admin/log/index'),('操作日志','/admin/log/index'),('Admin','/admin/log/view'),('查看操作日志','/admin/log/view'),('Admin','/admin/menu/*'),('Admin','/admin/menu/create'),('新增菜单','/admin/menu/create'),('Admin','/admin/menu/delete'),('删除菜单','/admin/menu/delete'),('Admin','/admin/menu/index'),('菜单管理','/admin/menu/index'),('Admin','/admin/menu/update'),('修改菜单','/admin/menu/update'),('Admin','/admin/menu/view'),('查看菜单','/admin/menu/view'),('Admin','/admin/permission/*'),('Admin','/admin/permission/assign'),('权限分配','/admin/permission/assign'),('Admin','/admin/permission/create'),('新增权限','/admin/permission/create'),('Admin','/admin/permission/delete'),('删除权限','/admin/permission/delete'),('Admin','/admin/permission/index'),('权限管理','/admin/permission/index'),('Admin','/admin/permission/search'),('查看权限','/admin/permission/search'),('Admin','/admin/permission/update'),('更新权限','/admin/permission/update'),('Admin','/admin/permission/view'),('查看权限','/admin/permission/view'),('Admin','/admin/role/*'),('Admin','/admin/role/assign'),('角色权限分配','/admin/role/assign'),('Admin','/admin/role/create'),('新增角色','/admin/role/create'),('Admin','/admin/role/delete'),('删除角色','/admin/role/delete'),('Admin','/admin/role/index'),('角色管理','/admin/role/index'),('Admin','/admin/role/search'),('查看角色','/admin/role/search'),('Admin','/admin/role/update'),('更新角色','/admin/role/update'),('Admin','/admin/role/view'),('查看角色','/admin/role/view'),('Admin','/admin/route/*'),('Admin','/admin/route/assign'),('路由分配','/admin/route/assign'),('Admin','/admin/route/create'),('新增路由','/admin/route/create'),('Admin','/admin/route/index'),('查看规则','/admin/route/index'),('Admin','/admin/route/refresh'),('Admin','/admin/route/search'),('查看规则','/admin/route/search'),('Admin','/admin/rule/*'),('Admin','/admin/rule/create'),('新增规则','/admin/rule/create'),('Admin','/admin/rule/delete'),('删除规则','/admin/rule/delete'),('Admin','/admin/rule/index'),('规则管理','/admin/rule/index'),('路由管理','/admin/rule/index'),('Admin','/admin/rule/update'),('更新规则','/admin/rule/update'),('Admin','/admin/rule/view'),('Admin','/debug/*'),('Admin','/debug/default/*'),('Admin','/debug/default/db-explain'),('Admin','/debug/default/download-mail'),('Admin','/debug/default/index'),('Admin','/debug/default/toolbar'),('Admin','/debug/default/view'),('Admin','/fight-single/*'),('Admin','/fight-single/index'),('Admin','/gii/*'),('Admin','/gii/default/*'),('Admin','/gii/default/action'),('Admin','/gii/default/diff'),('Admin','/gii/default/index'),('Admin','/gii/default/preview'),('Admin','/gii/default/view'),('Admin','/site/*'),('Admin','/site/error'),('Admin','/site/index'),('Admin','/site/login'),('Admin','/site/logout'),('Admin','修改用户'),('Admin','修改菜单'),('Admin','删除权限'),('Admin','删除菜单'),('Admin','删除规则'),('Admin','删除角色'),('Admin','删除路由'),('Admin','操作日志'),('Admin','新增权限'),('Admin','新增用户'),('Admin','新增菜单'),('Admin','新增规则'),('Admin','新增角色'),('Admin','新增路由'),('Admin','更新权限'),('Admin','更新规则'),('Admin','更新角色'),('Admin','更新路由'),('Admin','权限分配'),('Admin','权限管理'),('Admin','查看操作日志'),('Admin','查看权限'),('Admin','查看用户权限'),('Admin','查看菜单'),('Admin','查看规则'),('Admin','查看角色'),('Admin','用户权限分配'),('Admin','用户管理'),('Admin','菜单管理'),('Admin','规则管理'),('Admin','角色权限分配'),('Admin','角色管理'),('Admin','路由分配'),('Admin','路由管理');
/*!40000 ALTER TABLE `auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `auth_rule`
--

LOCK TABLES `auth_rule` WRITE;
/*!40000 ALTER TABLE `auth_rule` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domain`
--

DROP TABLE IF EXISTS `domain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `closed_at` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domain`
--

LOCK TABLES `domain` WRITE;
/*!40000 ALTER TABLE `domain` DISABLE KEYS */;
INSERT INTO `domain` VALUES (1,'123.com',0,0,1513228765),(2,'456.com\r',0,0,1513229062),(3,'789.com\r',0,0,1513229062),(4,'1111.com',0,0,1513229062);
/*!40000 ALTER TABLE `domain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fight_single_goods`
--

DROP TABLE IF EXISTS `fight_single_goods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fight_single_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `thumb` varchar(255) NOT NULL DEFAULT '',
  `price` int(11) NOT NULL DEFAULT '0',
  `discount` int(11) NOT NULL DEFAULT '0',
  `member_count` tinyint(3) NOT NULL DEFAULT '0',
  `content` text,
  `created_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fight_single_goods`
--

LOCK TABLES `fight_single_goods` WRITE;
/*!40000 ALTER TABLE `fight_single_goods` DISABLE KEYS */;
INSERT INTO `fight_single_goods` VALUES (1,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(2,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(3,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(4,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(5,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(6,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(7,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(8,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0),(9,'【2017年新货】新炒坚果 巴旦木 碧根果 开心果 夏威夷果 瓜子 坚果组合 240g_360g_480g','https://ss1.bdstatic.com/70cFvXSh_Q1YnxGkpoWK1HF6hhy/it/u=27881697,1438243336&fm=27&gp=0.jpg',19900,990,2,'<img src=\"/images/fight-single/20171025175308_28581.jpg\" alt=\"\"><img src=\"/images/fight-single/20171025175315_69143.jpg\" alt=\"\">',0);
/*!40000 ALTER TABLE `fight_single_goods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fight_single_order`
--

DROP TABLE IF EXISTS `fight_single_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fight_single_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `good_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fight_single_order`
--

LOCK TABLES `fight_single_order` WRITE;
/*!40000 ALTER TABLE `fight_single_order` DISABLE KEYS */;
INSERT INTO `fight_single_order` VALUES (1,1,0),(2,1,0),(3,1,0),(4,1,0),(5,1,0),(6,1,0),(7,1,0),(8,1,0),(9,7,1513227729),(10,1,1513229736),(11,1,1513230933),(12,1,1513232677);
/*!40000 ALTER TABLE `fight_single_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fight_single_order_children`
--

DROP TABLE IF EXISTS `fight_single_order_children`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fight_single_order_children` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `tel` varchar(11) NOT NULL DEFAULT '0',
  `is_chief` tinyint(1) NOT NULL DEFAULT '0',
  `pid` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fight_single_order_children`
--

LOCK TABLES `fight_single_order_children` WRITE;
/*!40000 ALTER TABLE `fight_single_order_children` DISABLE KEYS */;
INSERT INTO `fight_single_order_children` VALUES (1,'耿鑫','18860562003',1,1,0),(2,'耿鑫','18860562003',1,2,0),(3,'耿鑫','18860562003',1,3,0),(4,'耿鑫','18860562003',1,4,0),(5,'耿鑫','18860562003',1,5,0),(6,'耿鑫','18860562003',1,6,0),(7,'十点多','18860562003',1,7,0),(8,'嘻嘻','18860562003',0,4,0),(9,'嘻嘻哈哈','18860562003',1,8,0),(10,'耿鑫','18860562003',0,8,0),(11,'黑社会','18860562003',0,1,1513222780),(12,'耿鑫','18860562003',1,9,1513227729),(13,'姓名','18860562003',1,10,1513229736),(14,'耿鑫','18860562003',1,11,1513230933),(15,'耿鑫','18860562003',1,12,1513232677);
/*!40000 ALTER TABLE `fight_single_order_children` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'系统管理',NULL,NULL,NULL,NULL),(2,'用户管理',1,'/admin/assignment/index',0,NULL),(3,'菜单管理',1,'/admin/menu/index',1,NULL),(4,'权限管理',1,'/admin/permission/index',NULL,NULL),(5,'角色管理',1,'/admin/role/index',NULL,NULL),(6,'路由管理',1,'/admin/route/index',NULL,NULL),(7,'规则管理',1,'/admin/rule/index',NULL,NULL),(8,'操作日志',1,'/admin/log/index',100,NULL),(9,'拼团管理',NULL,'/fight-single/index',NULL,NULL),(10,'域名管理',NULL,'/domain/index',NULL,NULL);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migration`
--

DROP TABLE IF EXISTS `migration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migration`
--

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;
INSERT INTO `migration` VALUES ('m000000_000000_base',1513137074),('m130524_201442_init',1513137199),('m140506_102106_rbac_init',1513137076),('m160608_050000_create_admin',1513137353),('m160712_034501_create_admin_log',1513137353),('m160712_111327_create_menu_table',1513137353),('m170907_052038_rbac_add_index_on_auth_assignment_user_id',1513137076),('m171213_051255_create_fight_single_goods',1513142272),('m171213_074359_create_fight_single_order',1513151266),('m171213_074405_create_fight_single_order_children',1513151266),('m171214_050645_create_domain',1513228111);
/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
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

-- Dump completed on 2017-12-14 15:03:49
