/*
SQLyog Enterprise - MySQL GUI v6.13
MySQL - 5.5.5-10.1.38-MariaDB : Database - ulabcbyg_fbsdigichain
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

create database if not exists `ulabcbyg_fbsdigichain`;

USE `ulabcbyg_fbsdigichain`;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`),
  UNIQUE KEY `admin_contact_unique` (`contact`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `admin` */

insert  into `admin`(`id`,`fullname`,`email`,`password`,`email_verified_at`,`contact`,`country`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values (1,'Desmond Kooney','desmond@completefarmer.com','$2y$10$xv1fSmpaULcc2aKNGSRGm.gJrrpZk4p0BSXvxekNrmp.t5nvpiL2e',NULL,'0201234567','233',NULL,'2020-01-04 07:39:12','2020-01-04 07:39:12',NULL);

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

/*Table structure for table `farmers` */

DROP TABLE IF EXISTS `farmers`;

CREATE TABLE `farmers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `gender` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_level` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_occupation` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor_occupation` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dependants` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `farm_acres` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_scan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index_scan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_scan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ring_scan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `little_scan` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `farmers_username_unique` (`username`),
  UNIQUE KEY `farmers_email_unique` (`email`),
  UNIQUE KEY `farmers_contact_unique` (`contact`),
  KEY `farmers_user_id_foreign` (`user_id`),
  CONSTRAINT `farmers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `farmers` */

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
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fbos_contact_unique` (`contact`),
  UNIQUE KEY `fbos_email_unique` (`email`),
  KEY `fbos_admin_id_foreign` (`admin_id`),
  CONSTRAINT `fbos_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `fbos` */

insert  into `fbos`(`id`,`admin_id`,`name`,`state`,`location`,`contact`,`email`,`browselogo`,`status`,`created_at`,`updated_at`,`deleted_at`) values (1,1,'Complete Farmer','Accra','East Legon','0201234567','desmond@completefarmer.com',NULL,1,NULL,NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2016_06_01_000001_create_oauth_auth_codes_table',1),(2,'2016_06_01_000002_create_oauth_access_tokens_table',1),(3,'2016_06_01_000003_create_oauth_refresh_tokens_table',1),(4,'2016_06_01_000004_create_oauth_clients_table',1),(5,'2016_06_01_000005_create_oauth_personal_access_clients_table',1),(6,'2019_08_19_000000_create_failed_jobs_table',1),(7,'2019_12_28_023613_create_admin_table',1),(8,'2019_12_28_025310_create_fbos_table',1),(9,'2019_12_28_025311_create_users_table',1),(10,'2019_12_28_025446_create_farmers_table',1),(11,'2019_12_28_025710_create_money_in_table',1),(12,'2019_12_28_025733_create_money_out_table',1);

/*Table structure for table `money_in` */

DROP TABLE IF EXISTS `money_in`;

CREATE TABLE `money_in` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `farmerId` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
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
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `money_in_user_id_foreign` (`user_id`),
  KEY `money_in_totalprice_index` (`totalPrice`),
  CONSTRAINT `money_in_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `money_in` */

/*Table structure for table `money_out` */

DROP TABLE IF EXISTS `money_out`;

CREATE TABLE `money_out` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
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
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `money_out_user_id_foreign` (`user_id`),
  KEY `money_out_totalprice_index` (`totalPrice`),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_clients` */

/*Table structure for table `oauth_personal_access_clients` */

DROP TABLE IF EXISTS `oauth_personal_access_clients`;

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_personal_access_clients_client_id_index` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_personal_access_clients` */

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

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_id` int(10) unsigned DEFAULT NULL,
  `fbo_id` int(10) unsigned DEFAULT NULL,
  `fullname` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_contact_unique` (`contact`),
  KEY `users_admin_id_foreign` (`admin_id`),
  KEY `users_fbo_id_foreign` (`fbo_id`),
  CONSTRAINT `users_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `users_fbo_id_foreign` FOREIGN KEY (`fbo_id`) REFERENCES `fbos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`admin_id`,`fbo_id`,`fullname`,`email`,`password`,`email_verified_at`,`contact`,`image_url`,`role`,`status`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values (1,1,1,'Kevin K','kev1@completefarmer.com','$2y$10$xv1fSmpaULcc2aKNGSRGm.gJrrpZk4p0BSXvxekNrmp.t5nvpiL2e',NULL,'0201234567',NULL,NULL,'1',NULL,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
