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
