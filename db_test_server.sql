/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.5.5-10.1.38-MariaDB : Database - ulabcbyg_ts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `ulabcbyg_ts`;

USE `ulabcbyg_ts`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admins` */

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`),
  UNIQUE KEY `admins_contact_unique` (`contact`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admins` */

insert  into `admins`(`id`,`fullname`,`email`,`password`,`email_verified_at`,`contact`,`country`,`status`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values (1,'Menshao','pao@pa.com','$2y$10$gy4pR22WfG1svi432rIISemu8votXKqQ0Z0bCbPNchNzdBFdEh4C2',NULL,'0208165625','233','0',NULL,'2020-02-10 08:58:05','2020-02-10 08:58:05',NULL),(2,'Oliver Mensah','oliver@agridigichain.com','$2y$10$4pnHbERHkJAoqSXcCPZug.wkLxH4Cw3BzmCjYWbHFxozYBcm/366W',NULL,'0209877654','233','0',NULL,'2020-03-13 00:16:15','2020-03-13 00:16:15',NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `farm_fertilizer_application` */

DROP TABLE IF EXISTS `farm_fertilizer_application`;

CREATE TABLE `farm_fertilizer_application` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_cost` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_of_vendor` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `farm_fertilizer_application_user_id_foreign` (`user_id`),
  KEY `farm_fertilizer_application_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `farm_fertilizer_application_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_fertilizer_application_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_fertilizer_application` */

insert  into `farm_fertilizer_application`(`id`,`user_id`,`farmer_id`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`labour_cost`,`source_of_vendor`,`name_of_item`,`cost_of_item`,`quantity_of_item`,`weight_of_item`,`unit_of_item`,`notes`,`receipt_url`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`) values (1,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:48:17','2020-03-14 04:48:17',NULL,'0','coffee'),(2,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:50','2020-03-14 04:49:50',NULL,'0','coffee'),(3,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:51','2020-03-14 04:49:51',NULL,'0','coffee'),(4,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:52','2020-03-14 04:49:52',NULL,'0','coffee'),(5,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:53','2020-03-14 04:49:53',NULL,'0','coffee'),(6,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:54','2020-03-14 04:49:54',NULL,'0','coffee'),(7,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:56','2020-03-14 04:49:56',NULL,'0','coffee'),(8,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:49:56','2020-03-14 04:49:56',NULL,'0','coffee'),(9,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:57:20','2020-03-14 04:57:20',NULL,'0','cotton');

/*Table structure for table `farm_harvesting` */

DROP TABLE IF EXISTS `farm_harvesting`;

CREATE TABLE `farm_harvesting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_cost` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_type` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `farm_harvesting_user_id_foreign` (`user_id`),
  KEY `farm_harvesting_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `farm_harvesting_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_harvesting_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_harvesting` */

insert  into `farm_harvesting`(`id`,`user_id`,`farmer_id`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`labour_cost`,`package_type`,`quantity`,`weight`,`unit`,`notes`,`image_url`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`) values (1,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:58:10','2020-03-14 04:58:10',NULL,'0','cotton'),(2,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:58:15','2020-03-14 04:58:15',NULL,'0','cotton');

/*Table structure for table `farm_nursery` */

DROP TABLE IF EXISTS `farm_nursery`;

CREATE TABLE `farm_nursery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_of_nursery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_of_seedling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `farm_nursery_user_id_foreign` (`user_id`),
  KEY `farm_nursery_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `farm_nursery_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_nursery_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_nursery` */

insert  into `farm_nursery`(`id`,`user_id`,`farmer_id`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`size_of_nursery`,`source_of_seedling`,`cost`,`notes`,`receipt_url`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`) values (1,2,1,'2019-03-03','jan','2015','23','source_of_seedling',4500,'notes','No-image.png','2020-03-14 04:19:48','2020-03-14 04:19:48',NULL,'0','cocoa'),(2,2,1,'2019-03-03','jan','2015','23','source_of_seedling',4500,'notes','No-image.png','2020-03-14 04:20:13','2020-03-14 04:20:13',NULL,'0','cocoa'),(3,2,1,'2019-03-03','jan','2015','23','source_of_seedling',4500,'notes','No-image.png','2020-03-14 04:20:14','2020-03-14 04:20:14',NULL,'0','cocoa');

/*Table structure for table `farm_produce_sales` */

DROP TABLE IF EXISTS `farm_produce_sales`;

CREATE TABLE `farm_produce_sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `farm_harvesting_id` int(10) unsigned NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `buyer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_driver` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `registration_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `way_bill_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `farm_produce_sales_user_id_foreign` (`user_id`),
  KEY `farm_produce_sales_farmer_id_foreign` (`farmer_id`),
  KEY `farm_produce_sales_farm_harvesting_id_foreign` (`farm_harvesting_id`),
  CONSTRAINT `farm_produce_sales_farm_harvesting_id_foreign` FOREIGN KEY (`farm_harvesting_id`) REFERENCES `farm_harvesting` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_produce_sales_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_produce_sales_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_produce_sales` */

insert  into `farm_produce_sales`(`id`,`user_id`,`farmer_id`,`farm_harvesting_id`,`quantity`,`price`,`buyer`,`name_of_driver`,`vehicle_type`,`registration_number`,`way_bill_number`,`notes`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`image_url`) values (2,2,1,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2020-03-14 05:20:33','2020-03-14 05:20:33',NULL,'0','cocoa',NULL,NULL,NULL,'No-image.png');

/*Table structure for table `farm_spraying_weeding` */

DROP TABLE IF EXISTS `farm_spraying_weeding`;

CREATE TABLE `farm_spraying_weeding` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `labour_cost` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity_type` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source_of_vendor` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_of_item` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_infestation` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_of_catchment` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_infestation` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `farm_spraying_weeding_user_id_foreign` (`user_id`),
  KEY `farm_spraying_weeding_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `farm_spraying_weeding_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_spraying_weeding_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_spraying_weeding` */

insert  into `farm_spraying_weeding`(`id`,`user_id`,`farmer_id`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`labour_cost`,`activity_type`,`source_of_vendor`,`name_of_item`,`cost_of_item`,`quantity_of_item`,`weight_of_item`,`unit_of_item`,`type_infestation`,`size_of_catchment`,`rate_infestation`,`notes`,`incident_url`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`) values (1,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:37:35','2020-03-14 04:37:35',NULL,'0','cocoa'),(2,2,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'No-image.png','2020-03-14 04:37:48','2020-03-14 04:37:48',NULL,'0','cocoa');

/*Table structure for table `farm_visit` */

DROP TABLE IF EXISTS `farm_visit`;

CREATE TABLE `farm_visit` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `farmer_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `date_time_visit` datetime DEFAULT NULL,
  `date_visit` date DEFAULT NULL,
  `comments` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `farm_visit_user_id_foreign` (`user_id`),
  KEY `farm_visit_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `farm_visit_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `farm_visit_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farm_visit` */

/*Table structure for table `farmers` */

DROP TABLE IF EXISTS `farmers`;

CREATE TABLE `farmers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `gender` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_level` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_occupation` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minor_occupation` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependants` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `farm_acres` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_crop` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_scan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_scan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_scan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ring_scan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `little_scan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `type_of_soil` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_of_soil` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `texture_of_soil` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `farmers_username_unique` (`username`),
  UNIQUE KEY `farmers_email_unique` (`email`),
  UNIQUE KEY `farmers_contact_unique` (`contact`),
  KEY `farmers_user_id_foreign` (`user_id`),
  CONSTRAINT `farmers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farmers` */

insert  into `farmers`(`id`,`user_id`,`fullname`,`username`,`email`,`password`,`gender`,`contact`,`location`,`age`,`marital_status`,`educational_level`,`main_occupation`,`minor_occupation`,`dependants`,`farm_acres`,`main_crop`,`image_url`,`thumb_scan`,`index_scan`,`middle_scan`,`ring_scan`,`little_scan`,`status`,`created_at`,`updated_at`,`deleted_at`,`type_of_soil`,`color_of_soil`,`texture_of_soil`) values (1,2,'OHEOIHWOI','HAHFEH','odi@ijoi.ijoi','123456','male','0300000000','jojoi','88','hho','hoih','ihoh','ihio','7','88','hiohio','hioih','ihoih','hoihoiho','hiohoih','hihoih','ihoi','0',NULL,NULL,NULL,'hoihoi','ihio','ihioh');

/*Table structure for table `fbos` */

DROP TABLE IF EXISTS `fbos`;

CREATE TABLE `fbos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browselogo` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fbos_contact_unique` (`contact`),
  UNIQUE KEY `fbos_email_unique` (`email`),
  KEY `fbos_admin_id_foreign` (`admin_id`),
  CONSTRAINT `fbos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fbos` */

insert  into `fbos`(`id`,`admin_id`,`name`,`state`,`location`,`contact`,`email`,`browselogo`,`status`,`created_at`,`updated_at`,`deleted_at`) values (1,2,'Oliver Mensah Cooperative','Eastern Region','Sunyani',NULL,NULL,NULL,0,'2020-03-13 00:17:14','2020-03-13 00:17:14',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2016_06_01_000001_create_oauth_auth_codes_table',1),(2,'2016_06_01_000002_create_oauth_access_tokens_table',1),(3,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(4,'2016_06_01_000004_create_oauth_clients_table',1),(5,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(6,'2019_08_19_000000_create_failed_jobs_table',1),(7,'2019_12_28_023613_create_admin_table',1),(8,'2019_12_28_025310_create_fbos_table',1),(9,'2019_12_28_025311_create_users_table',1),(10,'2019_12_28_025446_create_farmers_table',1),(11,'2019_12_28_025710_create_money_in_table',1),(12,'2019_12_28_025733_create_money_out_table',1),(13,'2020_01_15_224132_create_farm_visit_table',1),(14,'2020_03_12_022241_update_farmers_table_with_soil_details',2),(15,'2020_03_12_024259_change_column_types_of_update_farmers_table_with_soil_details',3),(16,'2020_03_12_025150_create_prepare_land_table',4),(17,'2020_03_12_032218_create_farm_nursery_table',5),(18,'2020_03_12_033724_create_farm_spraying_weeding_table',6),(19,'2020_03_12_035942_create_farm_fertilizer_application_table',7),(20,'2020_03_12_045545_create_farm_harvesting_table',8),(21,'2020_03_12_050847_create_farm_produce_sales_table',9),(22,'2020_03_14_033807_add_type_of_crop_to_all_tbl_for_easy_metrics',10),(23,'2020_03_14_050812_add_date_image_to_tbl_farm_produce_sale',11);

/*Table structure for table `money_in` */

DROP TABLE IF EXISTS `money_in`;

CREATE TABLE `money_in` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `farmerId` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `itemName` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitPrice` double DEFAULT NULL,
  `totalPrice` double DEFAULT NULL,
  `dateAdded` datetime DEFAULT NULL,
  `description` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crop` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_in_month` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_in_year` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `money_in_user_id_foreign` (`user_id`),
  KEY `money_in_farmerid_foreign` (`farmerId`),
  KEY `money_in_totalprice_index` (`totalPrice`),
  CONSTRAINT `money_in_farmerid_foreign` FOREIGN KEY (`farmerId`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `money_in_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `money_in` */

/*Table structure for table `money_out` */

DROP TABLE IF EXISTS `money_out`;

CREATE TABLE `money_out` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `farmer_id` int(10) unsigned NOT NULL,
  `itemName` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unitPrice` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalPrice` int(10) unsigned DEFAULT NULL,
  `dateAdded` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `crop` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_out_month` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `money_year_year` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `money_out_user_id_foreign` (`user_id`),
  KEY `money_out_farmer_id_foreign` (`farmer_id`),
  KEY `money_out_totalprice_index` (`totalPrice`),
  CONSTRAINT `money_out_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `money_out_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `money_out` */

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

insert  into `oauth_access_tokens`(`id`,`user_id`,`client_id`,`name`,`scopes`,`revoked`,`created_at`,`updated_at`,`expires_at`) values ('ec56431cd7b4025936da7327246e497f757c618ed329398aeb192118ded2bbad35580562febe1c5c',2,1,'authToken','[]',0,'2020-03-13 00:22:35','2020-03-13 00:22:35','2021-03-13 00:22:35');

/*Table structure for table `oauth_auth_codes` */

DROP TABLE IF EXISTS `oauth_auth_codes`;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_auth_codes` */

/*Table structure for table `oauth_clients` */

DROP TABLE IF EXISTS `oauth_clients`;

CREATE TABLE `oauth_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

insert  into `oauth_clients`(`id`,`user_id`,`name`,`secret`,`redirect`,`personal_access_client`,`password_client`,`revoked`,`created_at`,`updated_at`) values (1,NULL,'Laravel Personal Access Client','T2ouQCjq0iBSL3i7k3QcVK0fKIndpDoOizjfF4uP','http://localhost',1,0,0,'2020-03-13 00:22:05','2020-03-13 00:22:05'),(2,NULL,'Laravel Password Grant Client','im87iCMV4YyuTOrFY0CzdLUg7aTAAPbxezaYPsMA','http://localhost',0,1,0,'2020-03-13 00:22:05','2020-03-13 00:22:05');

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

insert  into `oauth_personal_access_clients`(`id`,`client_id`,`created_at`,`updated_at`) values (1,1,'2020-03-13 00:22:05','2020-03-13 00:22:05');

/*Table structure for table `oauth_refresh_tokens` */

DROP TABLE IF EXISTS `oauth_refresh_tokens`;

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_refresh_tokens` */

/*Table structure for table `prepare_land` */

DROP TABLE IF EXISTS `prepare_land`;

CREATE TABLE `prepare_land` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `farmer_id` int(10) unsigned DEFAULT NULL,
  `date_of_activity` date DEFAULT NULL,
  `month_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_of_activity` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `mechanized_vendor` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `main_crop` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `prepare_land_user_id_foreign` (`user_id`),
  KEY `prepare_land_farmer_id_foreign` (`farmer_id`),
  CONSTRAINT `prepare_land_farmer_id_foreign` FOREIGN KEY (`farmer_id`) REFERENCES `farmers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `prepare_land_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `prepare_land` */

insert  into `prepare_land`(`id`,`user_id`,`farmer_id`,`date_of_activity`,`month_of_activity`,`year_of_activity`,`cost`,`mechanized_vendor`,`notes`,`receipt_url`,`created_at`,`updated_at`,`deleted_at`,`status`,`main_crop`) values (1,NULL,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-13 00:23:48','2020-03-13 00:23:48',NULL,'0',''),(2,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-13 00:24:57','2020-03-13 00:24:57',NULL,'0',''),(3,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-13 00:25:58','2020-03-13 00:25:58',NULL,'0',''),(4,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-13 00:26:15','2020-03-13 00:26:15',NULL,'0',''),(5,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-14 02:52:39','2020-03-14 02:52:39',NULL,'0',''),(6,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-14 03:54:01','2020-03-14 03:54:01',NULL,'0','cocoa'),(7,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-14 04:13:02','2020-03-14 04:13:02',NULL,'0','cocoa'),(8,2,NULL,'2019-09-09','Jan','2019',49900,'Kofi Asamoah','cool land preaparint','No-image.png','2020-03-14 04:13:06','2020-03-14 04:13:06',NULL,'0','cocoa');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned NOT NULL,
  `fbo_id` int(10) unsigned DEFAULT NULL,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_contact_unique` (`contact`),
  KEY `users_admin_id_foreign` (`admin_id`),
  KEY `users_fbo_id_foreign` (`fbo_id`),
  CONSTRAINT `users_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_fbo_id_foreign` FOREIGN KEY (`fbo_id`) REFERENCES `fbos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`admin_id`,`fbo_id`,`fullname`,`email`,`password`,`email_verified_at`,`contact`,`image_url`,`role`,`status`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values (1,2,1,'MICHAEL ASIEDU','patrick.ofosu.agyemang@gmail.com','$2y$10$8seq5pVZEB6pTUKYmNhYxusrbwIHXdOy2EceYIB41Yhb.lIJ2LIJe',NULL,'02011334455',NULL,NULL,'0',NULL,'2020-03-13 00:18:14','2020-03-13 00:18:14',NULL),(2,2,1,'House A','patrick.ofosu.agyemang@gmail.comm','$2y$10$omdAn84l5riew94Xqj2y/ez.4DGHjU.UUMmHBuy6Ku2Z0zNb6Hjd6',NULL,'0204455678',NULL,NULL,'0',NULL,'2020-03-13 00:20:19','2020-03-13 00:20:19',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
