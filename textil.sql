/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `textil` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `textil`;

CREATE TABLE IF NOT EXISTS `ancho` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ancho` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `ancho`;
/*!40000 ALTER TABLE `ancho` DISABLE KEYS */;
INSERT INTO `ancho` (`id`, `ancho`, `created_at`, `updated_at`) VALUES
	(1, '60\'\'', NULL, NULL),
	(2, '40\'\'', NULL, NULL),
	(3, '90\'\'', NULL, NULL);
/*!40000 ALTER TABLE `ancho` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `calidad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `calidad`;
/*!40000 ALTER TABLE `calidad` DISABLE KEYS */;
INSERT INTO `calidad` (`id`, `codigo`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Q1', 'Primera Calidad', NULL, NULL),
	(2, 'Q2', 'Tela Sucia', NULL, NULL),
	(3, 'Q3', 'Tela con Agujero', NULL, '2021-10-25 01:57:15'),
	(4, 'Q4', 'Tela Mojada', NULL, '2021-10-25 01:57:28');
/*!40000 ALTER TABLE `calidad` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(13, '2014_10_12_100000_create_password_resets_table', 1),
	(14, '2021_10_02_035806_create_calidad_table', 1),
	(15, '2021_10_02_181001_create_sucursal_table', 1),
	(16, '2021_10_25_012749_create_roll_table', 1),
	(17, '2021_10_26_000000_create_users_table', 1),
	(18, '2021_10_25_014139_create_umedida_table', 2),
	(19, '2021_10_25_014410_create_ancho_table', 2),
	(20, '2021_10_25_014622_create_tela_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `roll` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `roll` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `roll`;
/*!40000 ALTER TABLE `roll` DISABLE KEYS */;
INSERT INTO `roll` (`id`, `roll`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador', NULL, NULL),
	(2, 'Usuario', NULL, NULL);
/*!40000 ALTER TABLE `roll` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `sucursal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `sucursal`;
/*!40000 ALTER TABLE `sucursal` DISABLE KEYS */;
INSERT INTO `sucursal` (`id`, `nombre`, `direccion`, `created_at`, `updated_at`) VALUES
	(1, 'Central', 'Primera calle poniente, Barrio el centro, San Salvador, El Salvador', NULL, NULL),
	(2, 'Sucursal - Santa Ana', 'Tercera Avenida Sur, Barrio San Anita, Santa Ana El Salvador', NULL, NULL),
	(3, 'Sucursal - Usulutan', 'Barrio C1, Jiquilisco, Usulutan', NULL, NULL);
/*!40000 ALTER TABLE `sucursal` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `tela` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `ancho_id` int(10) unsigned DEFAULT NULL,
  `umedida_id` int(10) unsigned DEFAULT NULL,
  `sucursal_id` int(10) unsigned DEFAULT NULL,
  `calidad_id` int(10) unsigned DEFAULT NULL,
  `costo_unitario` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tela_ancho_id_foreign` (`ancho_id`),
  KEY `tela_umedida_id_foreign` (`umedida_id`),
  KEY `tela_sucursal_id_foreign` (`sucursal_id`),
  KEY `tela_calidad_id_foreign` (`calidad_id`),
  CONSTRAINT `tela_ancho_id_foreign` FOREIGN KEY (`ancho_id`) REFERENCES `ancho` (`id`),
  CONSTRAINT `tela_calidad_id_foreign` FOREIGN KEY (`calidad_id`) REFERENCES `calidad` (`id`),
  CONSTRAINT `tela_sucursal_id_foreign` FOREIGN KEY (`sucursal_id`) REFERENCES `sucursal` (`id`),
  CONSTRAINT `tela_umedida_id_foreign` FOREIGN KEY (`umedida_id`) REFERENCES `umedida` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `tela`;
/*!40000 ALTER TABLE `tela` DISABLE KEYS */;
INSERT INTO `tela` (`id`, `item`, `cantidad`, `descripcion`, `ancho_id`, `umedida_id`, `sucursal_id`, `calidad_id`, `costo_unitario`, `created_at`, `updated_at`) VALUES
	(1, 'CK4005', 50, 'qwertr', 1, 1, 1, 1, 12, '2021-10-25 05:56:20', '2021-10-26 06:15:08'),
	(2, 'WA5002', 12, 'TELA DE ALGODON COLOR NEGRO', 2, 2, 2, 1, 12, '2021-10-26 01:43:12', '2021-10-26 01:43:12'),
	(3, 'WA5002', 234, '332wewdwd', 1, 1, 1, 1, 1, '2021-10-26 02:44:59', '2021-10-26 02:44:59'),
	(4, 'pr2114', 123, 'dwdwdw', 1, 2, 1, 1, 13, '2021-10-26 05:11:28', '2021-10-26 05:11:28');
/*!40000 ALTER TABLE `tela` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `umedida` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `medida` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `umedida`;
/*!40000 ALTER TABLE `umedida` DISABLE KEYS */;
INSERT INTO `umedida` (`id`, `medida`, `created_at`, `updated_at`) VALUES
	(1, 'LB', NULL, NULL),
	(2, 'YD', NULL, NULL);
/*!40000 ALTER TABLE `umedida` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_id` int(10) unsigned DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_roll_id_foreign` (`roll_id`),
  CONSTRAINT `users_roll_id_foreign` FOREIGN KEY (`roll_id`) REFERENCES `roll` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `roll_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Lesly', 'Leslyaguilar997@gmail.com', 1, '$2y$10$bZus06HpjCTW9ZwNsMuDXeLcFwoaXsB2gI7R3FaovxrjtUc8Hl/j6', NULL, '2021-10-25 02:21:44', '2021-10-25 03:36:59'),
	(2, 'henry', 'henryaguilar997@gmail.com', 1, '$2y$10$IK2Tefy2QMUD68sFBelDs.Af9iVWDcA9E2MLVMRelgxk6pQDNexce', NULL, '2021-10-25 02:23:04', '2021-10-25 04:20:08'),
	(3, 'henry', 'hen997@gmail.com', 2, '$2y$10$VLtlTGpXpRDRCibWY51MEOarwY1NDUKSl0N6c4ZjvWBapB8Ulj4MW', NULL, '2021-10-25 03:37:26', '2021-10-25 04:18:43');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
