-- MySQL dump 10.13  Distrib 5.7.10, for Linux (x86_64)
--
-- Host: localhost    Database: projecttest
-- ------------------------------------------------------
-- Server version	5.7.10

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_content` text COLLATE utf8_unicode_ci,
  `category_description` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Landscaping','We can help you create the landscape of your dreams. Bring us your landscaping ideas and we can help you transform your yard into a beautiful and functional outdoor living space. We can enhance your landscaping project with patios and walkways, retaining walls, fire pits and other hardscaping elements.','Ciminelli');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clients`
--

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;
INSERT INTO `clients` VALUES (1,'0000-00-00 00:00:00','0000-00-00 00:00:00','Government','111 University Dr.','Fairfax','22031','8888888888');
/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Sanitized file name',
  `file_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The actual url where the file is stored',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Where the file is stored. S3 / Local',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Whether the file is being used',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` VALUES (5,'image/jpeg','167152','571e76939004c.jpeg','https://s3.amazonaws.com/project491/gallery_1/main/571e76939004c.jpeg','s3',1,'2016-04-25 19:57:08','2016-04-25 19:57:08');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'This is the first gallery',1,'2016-04-25 19:52:35','2016-04-25 19:52:35');
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries_images`
--

DROP TABLE IF EXISTS `galleries_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_ID` int(10) unsigned DEFAULT NULL,
  `file_ID` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries_images`
--

LOCK TABLES `galleries_images` WRITE;
/*!40000 ALTER TABLE `galleries_images` DISABLE KEYS */;
INSERT INTO `galleries_images` VALUES (5,1,5);
/*!40000 ALTER TABLE `galleries_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `filename` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `images_gallery_id_foreign` (`gallery_id`),
  CONSTRAINT `images_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2016_03_05_173730_create_pages_table',1),('2016_03_23_161050_create_categories_table',1),('2016_03_23_173455_create_services_table',1),('2016_03_23_173655_create_clients_table',1),('2016_03_23_180536_add_categoryID_in_services_table',1),('2016_04_15_060652_create_galleries_table',1),('2016_04_20_000926_create_submissions_table',1),('2016_04_23_005922_create_images_table',1),('2016_04_23_041413_create_files_table',1),('2016_04_24_200958_create_galleries_images_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `headline` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `page_label` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,NULL,NULL,'About Us','Dinosaurs are extinct today because they lacked opposable thumbs and the brainpower to build a space program.\n<br><br>\nNASA is not about the ‘Adventure of Human Space Exploration’…We won’t be doing it just to get out there in space – we’ll be doing it because the things we learn out there will be making life better for a lot of people who won’t be able to go.\n<br><br>\nAcross the sea of space, the stars are other suns.\n<br><br>\n','about'),(2,NULL,NULL,'Our full services will satisfy all your need and want','Dinosaurs are extinct today because they lacked opposable thumbs and the brainpower to build a space program.\n<br><br>\nNASA is not about the ‘Adventure of Human Space Exploration’…We won’t be doing it just to get out there in space – we’ll be doing it because the things we learn out there will be making life better for a lot of people who won’t be able to go.\n<br><br>\nAcross the sea of space, the stars are other suns.\n<br><br>\n','home');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `categoryID` int(10) unsigned NOT NULL,
  `clientID` int(10) unsigned NOT NULL,
  `service_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_content` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `prices` double(8,2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_service_name_unique` (`service_name`),
  KEY `services_categoryid_foreign` (`categoryID`),
  KEY `services_clientid_foreign` (`clientID`),
  CONSTRAINT `services_categoryid_foreign` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `services_clientid_foreign` FOREIGN KEY (`clientID`) REFERENCES `clients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'Mowing, Trimming, and Edging','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.',1000.00),(2,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'Stone and Brick Work','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.',1000.00),(3,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'Landscaping and Design','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.',1000.00),(4,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'Lawn Fertilization Packages','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.',1000.00),(5,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,1,'Monthly Maintenance','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi luctus lectus quis leo lacinia, vitae egestas enim mattis. Cras sollicitudin justo nec libero vulputate, ac varius turpis tristique. Suspendisse potenti. Phasellus lectus elit, consectetur at vulputate ac, consectetur sed tortor. Etiam egestas placerat viverra. Sed ut elit ultricies lectus rutrum rutrum at vitae justo. Quisque non tempor neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi ac placerat elit. Vestibulum pulvinar eu libero eget tristique. Nulla non arcu semper, ultricies nisl ac, faucibus nisl. Quisque faucibus quis tortor in bibendum.',1000.00);
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `submissions`
--

DROP TABLE IF EXISTS `submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `submissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `submissions`
--

LOCK TABLES `submissions` WRITE;
/*!40000 ALTER TABLE `submissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'David Richard','dricha20@gmu.edu','$2y$10$2zymofGOQYXciMxk48iLdu98W9K/oXYRm7XahQiLQEj4L6DPzwWVm',NULL,'2016-04-25 19:52:10','2016-04-25 19:52:10');
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

-- Dump completed on 2016-04-25 20:51:30
