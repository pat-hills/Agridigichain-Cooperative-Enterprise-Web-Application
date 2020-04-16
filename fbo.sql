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

insert  into `fbos`(`id`,`admin_id`,`name`,`state`,`location`,`contact`,`email`,`browselogo`,`status`,`created_at`,`updated_at`,`deleted_at`) values (1,1,'Nkoransa FBO Cooperative','Accra','East Legon','0544853383','kowusu2012@yahoo.com',NULL,1,NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
