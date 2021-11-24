-- MariaDB dump 10.19  Distrib 10.5.12-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u924338576_db
-- ------------------------------------------------------
-- Server version	10.5.12-MariaDB-cll-lve

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
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sort_by` int(11) DEFAULT NULL,
  `slug` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `view` int(11) DEFAULT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 50,
  `hot` int(11) DEFAULT NULL,
  `date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_up` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `robot` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_category`
--

/*!40000 ALTER TABLE `tbl_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_category` ENABLE KEYS */;

--
-- Table structure for table `tbl_home`
--

DROP TABLE IF EXISTS `tbl_home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading1` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_home`
--

/*!40000 ALTER TABLE `tbl_home` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_home` ENABLE KEYS */;

--
-- Table structure for table `tbl_img`
--

DROP TABLE IF EXISTS `tbl_img`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_img`
--

/*!40000 ALTER TABLE `tbl_img` DISABLE KEYS */;
INSERT INTO `tbl_img` VALUES (43,1,'2uPU_20-21.jpg',NULL),(44,1,'N7PK_baby-icon.png',NULL),(45,1,'zqqw_logo.png',NULL),(46,17,'2.jpg',NULL),(47,17,'3.jpg',NULL),(48,17,'4.jpg',NULL),(49,17,'5.jpg',NULL),(50,18,'26393219917_e7a45f862f_o.jpg',NULL),(51,18,'36494227305_5f7d2b1179_o.jpg',NULL),(52,18,'36097272040_b240cab863_o.jpg',NULL),(53,18,'37820758644_bb792093f2_o.jpg',NULL),(62,20,'20xx_1.jpg',NULL),(63,20,'44eU_2.jpg',NULL),(64,20,'4Tyz_3.jpg',NULL),(65,20,'dXNL_4.jpg',NULL),(66,20,'4Sw7_5.jpg',NULL),(67,20,'54rr_6.jpg',NULL),(68,20,'FKWa_7.jpg',NULL),(124,24,'8NPP_8.jpg',NULL),(125,24,'5JVw_9.png',NULL),(126,24,'rOXb_1.jpg',NULL),(127,24,'DQ9J_5.jpg',NULL),(134,24,'d1Qc_1.jpeg',NULL),(135,24,'8cNn_2.jpg',NULL),(136,24,'GKxd_3.jpg',NULL),(137,24,'SQto_4.jpg',NULL),(160,12,'lzfu_tien-ich 6.jpg',NULL);
/*!40000 ALTER TABLE `tbl_img` ENABLE KEYS */;

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` int(11) DEFAULT NULL,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hits` int(20) NOT NULL DEFAULT 50,
  `status` varchar(11) DEFAULT NULL,
  `hot` varchar(11) DEFAULT NULL,
  `tag` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc_size` int(11) DEFAULT NULL,
  `keywords` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `robot` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `date_up` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_news`
--

/*!40000 ALTER TABLE `tbl_news` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_news` ENABLE KEYS */;

--
-- Table structure for table `tbl_section`
--

DROP TABLE IF EXISTS `tbl_section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_section`
--

/*!40000 ALTER TABLE `tbl_section` DISABLE KEYS */;
INSERT INTO `tbl_section` VALUES (37,13,'Mã Căn CH01-CH11','MAU CAN 1 - CAN 11.jpg',NULL),(38,13,'Mã Căn CH02, CH04, CH10, CH12','MAU CAN 02 - 04 - 10 - 12.jpg',NULL),(39,13,'Mã Căn CH03, CH05, CH07, CH09','MAU CAN 03 - 05 - 07 - 09.jpg',NULL),(41,13,'Mã Căn CH06, CH08','MAU CAN 06 - 08 _TANG 39 DEN 45.jpg',NULL),(42,13,'Mã Căn Dukey','DUAL KEY.jpg',NULL),(43,13,'Mã Căn CH01, CH11','IW63_MAU CAN 1 - CAN 11.jpg',NULL);
/*!40000 ALTER TABLE `tbl_section` ENABLE KEYS */;

--
-- Table structure for table `tbl_setting`
--

DROP TABLE IF EXISTS `tbl_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotline1` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbapp` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `googleplus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sidebar` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `robot` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `analytics` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codeheader` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `codebody` text COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_setting`
--

/*!40000 ALTER TABLE `tbl_setting` DISABLE KEYS */;
INSERT INTO `tbl_setting` VALUES (1,'Trung tâm thương mại Golden Plaza','465 Hồng Bàng, Phường 14, Quận 5, Hồ Chí Minh','033.960.1213','033.960.1213','khudothiphongphu6@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,'Favicon','KHU ĐÔ THỊ PHONG PHÚ 6 BÌNH YÊN GIỮA LÒNG PHỐ THỊ',NULL,NULL,'index, follow',NULL,NULL,NULL);
/*!40000 ALTER TABLE `tbl_setting` ENABLE KEYS */;

--
-- Table structure for table `tbl_themes`
--

DROP TABLE IF EXISTS `tbl_themes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `note` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci DEFAULT NULL,
  `link` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_themes`
--

/*!40000 ALTER TABLE `tbl_themes` DISABLE KEYS */;
INSERT INTO `tbl_themes` VALUES (1,'3dic_logo.png','logo',NULL,NULL,'logo',NULL),(43,'P7jg_Phối cảnh 1.jpg','Slide',NULL,NULL,'slide',NULL),(2,'Y2ny_logo.png','logo',NULL,NULL,'logo',NULL);
/*!40000 ALTER TABLE `tbl_themes` ENABLE KEYS */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `your_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `robot` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'admin','$2y$10$pEOsOKAy9FvIBTjfRI1yxul85fjaD3WzeogzwDqSKBzhCO1KxVnrK',0,NULL,NULL,'admin@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,0,'2018-06-05 11:56:18','2018-06-05 11:56:18','2aVGhKdpFYHHz7LfkKoFSKSdHYXiLfs8ZpvGzWlE0641nGIE1r2GTCzhOxUx');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

--
-- Dumping routines for database 'u924338576_db'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-22 14:49:47
