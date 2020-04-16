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

insert  into `admin`(`id`,`fullname`,`email`,`password`,`email_verified_at`,`contact`,`country`,`remember_token`,`created_at`,`updated_at`,`deleted_at`) values (1,'Robert Owusu','kowusu2012@yahoo.com','$2y$10$gy4pR22WfG1svi432rIISemu8votXKqQ0Z0bCbPNchNzdBFdEh4C2',NULL,'0544853383','233',NULL,'2020-01-04 07:39:12','2020-01-04 07:39:12',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
