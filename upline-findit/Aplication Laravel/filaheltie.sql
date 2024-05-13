-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2024 at 04:00 PM
-- Server version: 5.5.68-MariaDB
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filaheltie`
--
CREATE DATABASE IF NOT EXISTS `filaheltie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `filaheltie`;

-- --------------------------------------------------------

--
-- Table structure for table `bpases`
--

DROP TABLE IF EXISTS `bpases`;
CREATE TABLE IF NOT EXISTS `bpases` (
  `id` bigint(20) unsigned NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bmi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `goals` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ushid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpases`
--

INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(2, '300', '120', '0.0013333333333333', '0', '2024-05-08 14:10:50', 15, '2024-05-08 06:09:06', '2024-05-08 06:09:06');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(3, '88', '80', '0.010330578512397', '0', '2024-05-08 06:40:42', 9, '2024-05-08 06:40:42', '2024-05-08 06:40:42');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(4, '172', '97', '0.0032787993510005', '1', '2024-05-08 06:46:33', 16, '2024-05-08 06:46:33', '2024-05-08 06:46:33');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(5, '178', '80', '0.0025249337204898', '1', '2024-05-08 07:28:50', 17, '2024-05-08 07:28:50', '2024-05-08 07:28:50');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(6, '180', '85', '0.0026234567901235', '1', '2024-05-08 20:39:32', 18, '2024-05-08 20:39:32', '2024-05-08 20:39:32');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(7, '120', '100', '0.0069444444444444', '1', '2024-05-08 20:47:23', 19, '2024-05-08 20:47:23', '2024-05-08 20:47:23');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(8, '170', '150', '0.0051903114186851', '0', '2024-05-08 20:48:15', 19, '2024-05-08 20:48:15', '2024-05-08 20:48:15');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(9, '150', '64', '0.0028444444444444', '0', '2024-05-09 00:59:02', 20, '2024-05-09 00:59:02', '2024-05-09 00:59:02');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(10, '120', '1000', '0.069444444444444', '0', '2024-05-09 03:39:03', 21, '2024-05-09 03:39:03', '2024-05-09 03:39:03');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(11, '173', '70', '0.0023388686558188', '1', '2024-05-09 03:47:00', 22, '2024-05-09 03:47:00', '2024-05-09 03:47:00');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(12, '170', '75', '0.0025951557093426', '0', '2024-05-09 04:05:05', 23, '2024-05-09 04:05:05', '2024-05-09 04:05:05');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(13, '66', '33', '0.0075757575757576', '0', '2024-05-09 07:55:59', 25, '2024-05-09 07:55:59', '2024-05-09 07:55:59');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(14, '150', '80', '0.0035555555555556', '1', '2024-05-09 08:20:12', 27, '2024-05-09 08:20:12', '2024-05-09 08:20:12');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(15, '11', '12', '0.099173553719008', '0', '2024-05-09 08:20:26', 28, '2024-05-09 08:20:26', '2024-05-09 08:20:26');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(16, '180', '75', '0.0023148148148148', '1', '2024-05-09 08:50:29', 29, '2024-05-09 08:50:29', '2024-05-09 08:50:29');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(17, '180', '75', '0.0023148148148148', '1', '2024-05-09 09:05:41', 30, '2024-05-09 09:05:41', '2024-05-09 09:05:41');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(18, '180', '75', '0.0023148148148148', '1', '2024-05-09 09:22:42', 31, '2024-05-09 09:22:42', '2024-05-09 09:22:42');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(19, '180', '75', '0.0023148148148148', '1', '2024-05-09 09:28:22', 32, '2024-05-09 09:28:22', '2024-05-09 09:28:22');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(20, '180', '75', '0.0023148148148148', '1', '2024-05-09 20:13:21', 35, '2024-05-09 20:13:21', '2024-05-09 20:13:21');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(21, '182', '881', '0.026597029344282', '0', '2024-05-09 20:28:49', 36, '2024-05-09 20:28:49', '2024-05-09 20:28:49');
INSERT DELAYED IGNORE INTO `bpases` (`id`, `height`, `weight`, `bmi`, `goals`, `periode`, `ushid`, `created_at`, `updated_at`) VALUES(22, '182', '88', '0.0026566839753653', '0', '2024-05-10 05:16:44', 37, '2024-05-10 05:16:44', '2024-05-10 05:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('037bc085aa51ac928c0d2f352ca059e94048a82c', 'i:1;', 1715097221);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('037bc085aa51ac928c0d2f352ca059e94048a82c:timer', 'i:1715097221;', 1715097221);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('0bd15ba8f497e439938878d1999fc54ead037802', 'i:1;', 1715003540);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('0bd15ba8f497e439938878d1999fc54ead037802:timer', 'i:1715003539;', 1715003540);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('2748ff22a37cd92deedf26984504678c4411232c', 'i:1;', 1715139884);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('2748ff22a37cd92deedf26984504678c4411232c:timer', 'i:1715139884;', 1715139884);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('473d6197edb21fbfdcbbcb33652fa15e0f4069f6', 'i:1;', 1715138643);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('473d6197edb21fbfdcbbcb33652fa15e0f4069f6:timer', 'i:1715138643;', 1715138643);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('542d7eab8429f3aa25e67bc905a905af0da0fcf4', 'i:1;', 1715314324);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('542d7eab8429f3aa25e67bc905a905af0da0fcf4:timer', 'i:1715314323;', 1715314324);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('5c06e2a97e4c0e722734cf20f56815a2e6dbe6fc', 'i:1;', 1715271897);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('5c06e2a97e4c0e722734cf20f56815a2e6dbe6fc:timer', 'i:1715271897;', 1715271897);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('6720675fb53e08b190ecd040e2d9886ac298cf64', 'i:1;', 1715096185);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('6720675fb53e08b190ecd040e2d9886ac298cf64:timer', 'i:1715096185;', 1715096185);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('77de68daecd823babbb58edb1c8e14d7106e83bb', 'i:1;', 1715276195);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('77de68daecd823babbb58edb1c8e14d7106e83bb:timer', 'i:1715276194;', 1715276194);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('85a4ce2cf29379629dd5d5f453e5e935fac5e9f3', 'i:1;', 1715045659);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('85a4ce2cf29379629dd5d5f453e5e935fac5e9f3:timer', 'i:1715045659;', 1715045659);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1715088699);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1715088699;', 1715088699);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1715314688);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1715314688;', 1715314688);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('e6ee79e0785bd60e6611a9cf9c25659885d244e5', 'i:2;', 1715003506);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('e6ee79e0785bd60e6611a9cf9c25659885d244e5:timer', 'i:1715003506;', 1715003506);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('fc079caa2ad655b05d4c35cb48b19d3f3a29ae43', 'i:2;', 1715046451);
INSERT DELAYED IGNORE INTO `cache` (`key`, `value`, `expiration`) VALUES('fc079caa2ad655b05d4c35cb48b19d3f3a29ae43:timer', 'i:1715046451;', 1715046451);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dfoods`
--

DROP TABLE IF EXISTS `dfoods`;
CREATE TABLE IF NOT EXISTS `dfoods` (
  `id` bigint(20) unsigned NOT NULL,
  `barcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `natrium` int(11) NOT NULL,
  `fat` int(11) NOT NULL,
  `sugar` int(11) NOT NULL,
  `kcal` int(11) NOT NULL,
  `poster` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dfoods`
--

INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(4, '8997004301146', 'OISHI RIN BEE KEJU', 300, 7, 2, 150, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(5, '89686010015', 'INDOMIE AYAM BAWANG', 1480, 14, 3, 320, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(6, '89686010527', 'INDOMIE KARI AYAM', 1340, 12, 4, 320, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(7, '89686010343', 'INDOMIE SOTO MIE', 1380, 13, 3, 310, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(8, '89686010107', 'INDOMIE KALDU AYAM', 1320, 11, 3, 290, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(9, '89686043990', 'INDOMIE SOTO LAMONGAN', 1030, 14, 4, 360, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(10, 'b''8996001355237''', 'Superstar Triple Coklat 12 pcs', 0, 5, 5, 80, '01HXF6SMA743MGDSTY2Z7ESTMW.jpg', 'satuan gram', '2024-05-09 09:35:40', '2024-05-09 09:35:40');
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(11, '89686010947', 'INDOMIE GRG PLUS SPECIAL', 830, 17, 9, 390, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(12, '8992702005945', 'INDOMILK CHOCOLATE BTL', 75, 5, 17, 150, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(13, '8992702005976', 'INDOMILK STRAWBERRY BTL', 90, 5, 12, 140, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(14, '8993007000239', 'INDOMILK KIDS COKELAT', 45, 3, 7, 80, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(15, '8993007000253', 'INDOMILK KIDS STRAWBERRY', 45, 3, 7, 90, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(16, '8998009020179', 'BUAVITA ORANGE', 45, 0, 24, 110, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(17, '8998009020186', 'BUAVITA JAMBU', 55, 0, 20, 130, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(18, '8998009020193', 'BUAVITA MANGGA', 25, 0, 26, 110, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(19, '8998009020223', 'BUAVITA APPLE', 90, 0, 20, 120, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(20, '8992858527308', 'HYDRO COCO', 110, 0, 16, 70, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(21, '8992761164546', 'MINUTE MAID NUTRIBOOST STRAWBERRY', 180, 2, 31, 170, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(22, '8992761164539', 'MINUTE MAID NUTRIBOOST ORANGE', 180, 2, 31, 170, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(23, '8992761166038', 'MINUTE MAID PULPY ORANGE', 30, 0, 32, 164, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(24, '8992752119104', 'MIZONE LYCHEE LEMON', 65, 0, 11, 45, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(25, '8888166989634', 'MONDE BISCUIT SERENA GOLD', 65, 3, 2, 110, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(26, '8992388101023', 'NU GREEN TEA HONEY', 10, 0, 22, 100, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(27, '8997004301429', 'OISHI SNACK SPONGE CRUNCH CHOCOLATE', 40, 9, 5, 160, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(28, '8997004301245', 'OISHI SNACK PILLOWS UBI', 55, 6, 6, 140, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(29, '8997004301108', 'OISHI SNACK PILLOWS CHOCOLATE', 25, 5, 10, 140, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(30, '89686060065', 'POP MIE AYAM BAWANG', 1320, 13, 4, 330, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(31, '8998866200318', 'SEDAAP MIE AYAM BAWANG', 1260, 14, 2, 320, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(32, '8998866200301', 'SEDAAP MIE GORENG', 1040, 17, 3, 410, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(33, '8998866200578', 'SEDAAP MIE KARI SPESIAL', 1110, 16, 3, 360, '', '', NULL, NULL);
INSERT DELAYED IGNORE INTO `dfoods` (`id`, `barcode`, `name`, `natrium`, `fat`, `sugar`, `kcal`, `poster`, `etc`, `created_at`, `updated_at`) VALUES(34, 'b''8991002122000''', 'Abc coffe cholat', 0, 3, 16, 130, '01HXGBGFMQ6ZEW9495CE3Y3KSE.jpg', '-', '2024-05-09 20:17:18', '2024-05-09 20:17:18');

-- --------------------------------------------------------

--
-- Table structure for table `doquizzes`
--

DROP TABLE IF EXISTS `doquizzes`;
CREATE TABLE IF NOT EXISTS `doquizzes` (
  `id` bigint(20) unsigned NOT NULL,
  `ushid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food_rs`
--

DROP TABLE IF EXISTS `food_rs`;
CREATE TABLE IF NOT EXISTS `food_rs` (
  `id` bigint(20) unsigned NOT NULL,
  `poster` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `nutrisi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `produk` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food_rs`
--

INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(1, '01HX75C0VVTZYQ5RXPX3GFNJAN.jpg', 'Tinggi Protein', 'ini baik untuk demo', '<h2>&nbsp;</h2><h2><h1>Material</h1></h2><h2>&nbsp;<br>123<br>&nbsp;</h2><p><br></p>', '2024-05-06 06:36:50', '2024-05-07 20:17:24', 'Milkuat');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(2, '01HXB4MG0KR4KZKA0YT2FH4VDA.jpg', 'Low Carbs', '<h3>Materials</h3><ul><li>Green lettuce leaves</li><li>1 cucumber, diced</li><li>1 tomato, diced</li><li>1 green bell pepper, diced</li><li>1 carrot, grated</li><li>100 grams of broccoli, chopped</li><li>200 grams of grilled chicken breast, diced</li><li>2 tablespoons of olive oil</li><li>1 tablespoon of apple cider vinegar</li><li>1 teaspoon of honey</li><li>Salt and black pepper to taste</li></ul><h3>Instructions</h3><ol><li>Prepare the chicken breast and grill it with a little salt and black pepper until cooked through. Once done, let it cool down and dice it into small pieces.</li><li>Mix together the lettuce leaves, cucumber, tomato, green bell pepper, carrot, and broccoli in a large bowl.</li><li>In a small bowl, combine the olive oil, apple cider vinegar, honey, salt, and black pepper. Stir until well mixed.</li><li>Pour the prepared dressing into the large bowl with the salad ingredients. Toss until everything is evenly coated.</li><li>Arrange the diced grilled chicken breast on top of the salad as a topping.</li><li>Serve immediately as a refreshing main dish or appetizer. Enjoy your meal!</li></ol><p><br></p>', '300kcal', '2024-05-07 19:40:57', '2024-05-09 08:26:51', 'Green Vegetable Salad with Grilled Chicken Topping');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(3, '01HXB53DN9BGV3VH0S5A9GZ1HA.jpg', 'Low Carbs', 'Quickly boiled broccoli stir-fried with fresh shrimp, garlic, and a touch of olive oil', '150kcal', '2024-05-07 19:49:06', '2024-05-07 19:49:06', 'Stir-Fried Broccoli with Shrimp');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(4, '01HXB55Z9KAN9T3DBCTABXRVXB.jpg', 'Low Carbs', 'Fish (such as salmon or cod) grilled with species and served with crispy grilled asparagus', '250kcal', '2024-05-07 19:50:30', '2024-05-07 19:50:30', 'Grilled Fish with Shrimp');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(5, '01HXB597X3JVA3VYY40RAHWVZQ.jpg', 'Low Carbs', 'Tofu pieces fried in a little oil, served with a mix of vegetables like bell peppers, green beans, and carrots, stir-fried with a light low-fat sauce', '200kcal', '2024-05-07 19:52:17', '2024-05-07 19:52:17', 'Stir-Fed Tofu with Vegetables');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(6, '01HXB5BPFMFDSAQJVYZVNMBT3D.jpg', 'Low Carbs', 'An omelette mixed with vegetables such as spinach, mushrooms, and tomatoes, served with slices of avocado on top', '250kcal', '2024-05-07 19:53:38', '2024-05-07 19:53:38', 'Vegetable Omelette');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(7, '01HXB5PGZWP50ARQG63SFD1TEZ.jpg', 'Vegetarian', 'A refreshing salad made with cooked quinoa, protein-packed chickpeas, diced avocado, cherry tomatoes, and fresh herbs, dressed with a ligh vinaigrette', '350 kcal', '2024-05-07 19:59:32', '2024-05-07 19:59:32', 'Quinoa Salad with Chickpeas and Avocado');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(8, '01HXB5TJ1F42DSKPQANQK227DC.jpg', 'Vegetarian', 'Bell s stuffed with a filling made from sauteed spinach, mushrooms, onions, garlic, and quinoa, topped with melted cheese and baked until tender', '200 kcal', '2024-05-07 20:01:45', '2024-05-07 20:01:45', 'Spinach and Mushroom Stuffed Bell Peppers');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(9, '01HXB600QGP6EEF5ASCX9VS87H.jpg', 'Vegetarian', 'A hearty soup made with lentils, kale, carrots, celery, onions, and garlic, seasoned with herbs and spices for a comforting meal', '300 kcal', '2024-05-07 20:04:43', '2024-05-07 20:04:43', 'Lentil Soup with Kale');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(10, '01HXB633815VC5W0B6H8PH2K3G.jpg', 'Vegetarian', 'Whole wheat wrap filled with roasted vegetables (such as zucchini, bell peppers, and eggplant), creamy hummus, fresh greens, and a sprinkle of feta cheese', '350 kcal', '2024-05-07 20:06:24', '2024-05-07 20:06:50', 'Roasted Vegetable and Hummus Wrap');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(11, '01HXB7A6ZCCHTVK0AQVCDWZ7XV.jpg', 'Low Sodium', '<p>A hearty chili made with a variety of vegetables, beans (such as kidney beans and black beans), tomatoes, onions, and garlic, seasoned with chili powder and cumin</p>', '<p>250kcal</p>', '2024-05-07 20:27:46', '2024-05-07 20:27:46', 'Vegetable and Bean Chili');
INSERT DELAYED IGNORE INTO `food_rs` (`id`, `poster`, `target`, `desk`, `nutrisi`, `created_at`, `updated_at`, `produk`) VALUES(12, '01HXB7DRYRJPX6PJXZPKFWDRFC.jpg', 'Low Sodium', '<p>Tender turkey breast rubbed with a blend of herbs like rosemary, thyme, and sage, then roasted until golden brown and juicy</p>', '<p>200kcal</p>', '2024-05-07 20:29:43', '2024-05-07 20:29:43', 'Herb-Roasted Turkey Breast');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `Konsumsi`
--
DROP VIEW IF EXISTS `Konsumsi`;
CREATE TABLE IF NOT EXISTS `Konsumsi` (
`ushid` varchar(191)
,`paseline` varchar(191)
,`barcode` varchar(191)
,`name` varchar(191)
,`poster` varchar(191)
,`natrium` int(11)
,`fat` int(11)
,`sugar` int(11)
,`kcal` int(11)
,`etc` varchar(191)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `Member`
--
DROP VIEW IF EXISTS `Member`;
CREATE TABLE IF NOT EXISTS `Member` (
`alamat` varchar(191)
,`tanggal_lahir` date
,`tujuan` varchar(191)
,`profilepaat` varchar(191)
,`id` bigint(20) unsigned
,`name` varchar(191)
,`email` varchar(191)
,`email_verified_at` timestamp
,`password` varchar(191)
,`remember_token` varchar(100)
,`created_at` timestamp
,`updated_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(1, '0001_01_01_000000_create_users_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(2, '0001_01_01_000001_create_cache_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(3, '0001_01_01_000002_create_jobs_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(4, '2024_05_06_040704_create_ushes_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(5, '2024_05_06_040705_create_bpases_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(6, '2024_05_06_040706_create_dfoods_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(7, '2024_05_06_040707_create_trackpases_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(8, '2024_05_06_040708_create_food_rs_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(9, '2024_05_06_040709_create_notifies_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(10, '2024_05_06_040710_create_sleep_tracks_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(11, '2024_05_06_040711_create_waters_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(12, '2024_05_06_040712_create_quizzes_table', 1);
INSERT DELAYED IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES(13, '2024_05_06_040713_create_doquizzes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifies`
--

DROP TABLE IF EXISTS `notifies`;
CREATE TABLE IF NOT EXISTS `notifies` (
  `id` bigint(20) unsigned NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ushid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifies`
--

INSERT DELAYED IGNORE INTO `notifies` (`id`, `judul`, `desk`, `ushid`, `from_path`, `created_at`, `updated_at`) VALUES(1, 'demonotif123', 'dari notifikasi ini kamu berhak .....', '1', 'Admin Healtie', '2024-05-06 06:37:25', '2024-05-06 06:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

DROP TABLE IF EXISTS `quizzes`;
CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` bigint(20) unsigned NOT NULL,
  `soal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `score` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT DELAYED IGNORE INTO `quizzes` (`id`, `soal`, `opsi`, `score`, `created_at`, `updated_at`) VALUES(1, 'Seberapa sering Anda merasa sulit untuk tidur karena pikiran yang terus menerus berputar?', 'Sangat jarang, Jarang, Kadang-kadang, Sering, Sangat sering', '1,2,3,4,5', '2024-05-06 06:34:34', '2024-05-06 17:50:42');
INSERT DELAYED IGNORE INTO `quizzes` (`id`, `soal`, `opsi`, `score`, `created_at`, `updated_at`) VALUES(2, 'Seberapa sering Anda merasa gelisah atau cemas tanpa alasan yang jelas?', 'Sangat jarang, Jarang, Kadang-kadang, Sering, Sangat sering', '1,2,3,4,5', '2024-05-06 17:52:41', '2024-05-06 17:52:41');
INSERT DELAYED IGNORE INTO `quizzes` (`id`, `soal`, `opsi`, `score`, `created_at`, `updated_at`) VALUES(3, 'Seberapa sering Anda merasa lelah atau kelelahan meskipun tidak melakukan aktivitas fisik yang berat?', 'Sangat jarang, Jarang, Kadang-kadang, Sering, Sangat sering', '1,2,3,4,5', '2024-05-06 17:53:55', '2024-05-06 17:53:55');
INSERT DELAYED IGNORE INTO `quizzes` (`id`, `soal`, `opsi`, `score`, `created_at`, `updated_at`) VALUES(4, 'Seberapa sering Anda merasa kebingungan atau kehilangan arah dalam menjalani hidup ini?', 'Sangat jarang, Jarang, Kadang-kadang, Sering, Sangat sering', '1,2,3,4,5', '2024-05-06 17:54:35', '2024-05-06 17:54:35');
INSERT DELAYED IGNORE INTO `quizzes` (`id`, `soal`, `opsi`, `score`, `created_at`, `updated_at`) VALUES(5, 'Seberapa sering Anda merasa kesulitan untuk menikmati aktivitas yang biasanya menyenangkan bagi Anda?', 'Sangat jarang, Jarang, Kadang-kadang, Sering, Sangat sering', '1,2,3,4,5', '2024-05-06 17:55:06', '2024-05-06 17:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT DELAYED IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES('MDbMICYvLpppbEpK8zMdOv1jlVeynLnQ7Ctvhqmr', NULL, '172.16.30.47', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/15.0.0 Mobile/15A5370a Safari/602.1', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiV0YwcU56N3Vab2ZvNkl6TXVFeHRlUDdrYjBmU28yaWswbDhKdDVLUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xNzIuMTYuMzAuNDcvbmV3Zm9vZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NzoidXNlcl9pZCI7aTozNztzOjEwOiJ1c2VyX2VtYWlsIjtzOjk6ImIyMkBiLmNvbSI7czo5OiJ1c2VyX25hbWUiO3M6MTA6InVyaWthbWVuOTkiO30=', 1715347134);
INSERT DELAYED IGNORE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES('Z8blKMhepvlmAu3YDfMVudoPlxbt3CtRygceRDIB', NULL, '172.16.31.43', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/15.0.0 Mobile/15A5370a Safari/602.1', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiVjF1dVBQYnd3VnMxaEpHU2pCeURpbk83YUY1aXhtMmFaaEQ1MUxMSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xNzIuMTYuMzAuNDcvbmV3Zm9vZD9wYXQ9QnJlYWtmYXN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo3OiJ1c2VyX2lkIjtpOjI7czoxMDoidXNlcl9lbWFpbCI7czoxNToiYWRtaW5AYWRtaW4uY29tIjtzOjk6InVzZXJfbmFtZSI7czo5OiJhZ3VzdGludXMiO3M6MTE6InVzZXJfYWxhbWF0IjtzOjU6InRhanVyIjtzOjc6InVzZXJfcHAiO3M6MzA6IjAxSFg3NFFBTlBHUE5HSjhZWEdKNzcwWFpNLnBuZyI7fQ==', 1715351546);

-- --------------------------------------------------------

--
-- Table structure for table `sleep_tracks`
--

DROP TABLE IF EXISTS `sleep_tracks`;
CREATE TABLE IF NOT EXISTS `sleep_tracks` (
  `id` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `start` time NOT NULL,
  `wake` time NOT NULL,
  `esensi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskpoin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ushid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sleep_tracks`
--

INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(2, '2024-05-06', '21:37:38', '05:37:42', 'cukup', 'di jaga', '2024-05-06 06:38:18', '2024-05-06 06:38:18', 2);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(3, '2024-05-08', '22:56:00', '14:56:00', '-', '-', '2024-05-08 07:56:08', '2024-05-08 07:56:08', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(4, '2024-05-08', '22:56:00', '14:56:00', '-', '-', '2024-05-08 07:56:09', '2024-05-08 07:56:09', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(5, '2024-05-08', '22:55:00', '03:55:00', '-', '-', '2024-05-08 07:56:15', '2024-05-08 07:56:15', 16);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(6, '2024-05-08', '22:56:00', '14:56:00', '-', '-', '2024-05-08 08:03:06', '2024-05-08 08:03:06', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(7, '2024-05-08', '23:03:00', '15:03:00', '-', '-', '2024-05-08 08:03:23', '2024-05-08 08:03:23', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(8, '2024-05-08', '23:07:00', '16:07:00', '-', '-', '2024-05-08 08:07:08', '2024-05-08 08:07:08', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(9, '2024-05-08', '23:07:00', '16:07:00', '-', '-', '2024-05-08 08:07:57', '2024-05-08 08:07:57', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(10, '2024-05-08', '23:08:00', '16:09:00', '-', '-', '2024-05-08 08:09:05', '2024-05-08 08:09:05', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(11, '2024-05-08', '23:12:00', '05:12:00', '-', '-', '2024-05-08 08:12:33', '2024-05-08 08:12:33', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(12, '2024-05-08', '23:12:00', '05:12:00', '-', '-', '2024-05-08 08:12:34', '2024-05-08 08:12:34', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(13, '2024-05-08', '23:16:00', '04:16:00', '-', '-', '2024-05-08 08:16:11', '2024-05-08 08:16:11', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(14, '2024-05-08', '23:16:00', '04:16:00', '-', '-', '2024-05-08 08:16:12', '2024-05-08 08:16:12', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(15, '2024-05-08', '23:16:00', '02:16:00', '-', '-', '2024-05-08 08:16:57', '2024-05-08 08:16:57', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(16, '2024-05-08', '23:16:00', '02:16:00', '-', '-', '2024-05-08 08:16:58', '2024-05-08 08:16:58', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(17, '2024-05-08', '23:17:00', '02:17:00', '-', '-', '2024-05-08 08:17:35', '2024-05-08 08:17:35', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(18, '2024-05-08', '23:17:00', '02:17:00', '-', '-', '2024-05-08 08:17:51', '2024-05-08 08:17:51', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(19, '2024-05-08', '23:17:00', '02:17:00', '-', '-', '2024-05-08 08:17:52', '2024-05-08 08:17:52', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(20, '2024-05-08', '23:18:00', '02:18:00', '-', '-', '2024-05-08 08:18:32', '2024-05-08 08:18:32', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(21, '2024-05-08', '23:18:00', '02:18:00', '-', '-', '2024-05-08 08:18:33', '2024-05-08 08:18:33', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(22, '2024-05-08', '23:19:00', '12:19:00', '-', '-', '2024-05-08 08:19:51', '2024-05-08 08:19:51', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(23, '2024-05-08', '23:20:00', '01:20:00', '-', '-', '2024-05-08 08:20:08', '2024-05-08 08:20:08', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(24, '2024-05-08', '23:20:00', '02:20:00', '-', '-', '2024-05-08 08:21:07', '2024-05-08 08:21:07', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(25, '2024-05-08', '11:21:00', '00:21:00', '-', '-', '2024-05-08 08:21:39', '2024-05-08 08:21:39', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(26, '2024-05-08', '11:22:00', '00:22:00', '-', '-', '2024-05-08 08:22:21', '2024-05-08 08:22:21', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(27, '2024-05-08', '11:24:00', '14:24:00', '-', '-', '2024-05-08 08:24:38', '2024-05-08 08:24:38', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(28, '2024-05-08', '23:25:00', '03:25:00', '-', '-', '2024-05-08 08:25:26', '2024-05-08 08:25:26', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(29, '2024-05-08', '23:29:00', '03:29:00', '-', '-', '2024-05-08 08:29:13', '2024-05-08 08:29:13', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(30, '2024-05-08', '02:29:00', '05:29:00', '-', '-', '2024-05-08 08:29:27', '2024-05-08 08:29:27', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(31, '2024-05-08', '17:30:00', '23:30:00', '-', '-', '2024-05-08 08:32:24', '2024-05-08 08:32:24', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(32, '2024-05-08', '15:33:00', '17:33:00', '-', '-', '2024-05-08 08:33:26', '2024-05-08 08:33:26', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(33, '2024-05-08', '15:33:00', '17:33:00', '-', '-', '2024-05-08 08:33:27', '2024-05-08 08:33:27', 17);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(34, '2024-05-09', '12:39:00', '01:39:00', '-', '-', '2024-05-09 08:39:24', '2024-05-09 08:39:24', 27);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(35, '2024-05-09', '23:51:00', '05:53:00', '-', '-', '2024-05-09 08:52:00', '2024-05-09 08:52:00', 29);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(36, '2024-05-09', '01:06:00', '06:06:00', '-', '-', '2024-05-09 09:06:32', '2024-05-09 09:06:32', 30);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(37, '2024-05-09', '00:23:00', '06:23:00', '-', '-', '2024-05-09 09:24:05', '2024-05-09 09:24:05', 31);
INSERT DELAYED IGNORE INTO `sleep_tracks` (`id`, `tanggal`, `start`, `wake`, `esensi`, `deskpoin`, `created_at`, `updated_at`, `ushid`) VALUES(38, '2024-05-10', '02:14:00', '07:14:00', '-', '-', '2024-05-09 20:14:27', '2024-05-09 20:14:27', 35);

-- --------------------------------------------------------

--
-- Table structure for table `trackpases`
--

DROP TABLE IF EXISTS `trackpases`;
CREATE TABLE IF NOT EXISTS `trackpases` (
  `id` bigint(20) unsigned NOT NULL,
  `ushid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dfoodid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paseline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trackpases`
--

INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(1, '2', '34', 'Snak', '01HX75JG1HF9AQSQBQDS1YV669.jpg', '2024-05-06 06:40:23', '2024-05-06 06:40:23');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(3, '2', '1', 'Snak', '01HX75JG1HF9AQSQBQDS1YV669.jpg', '2024-05-06 16:00:00', '2024-05-06 16:00:00');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(4, '20', '1', 'Breakfast', 'C:\\Users\\lgarin211\\Downloads\\OVW\\healtie-filapanel-1\\public\\images/1715247827.jpg', '2024-05-09 01:43:48', '2024-05-09 01:43:48');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(5, '20', '1', 'Breakfast', 'C:\\Users\\lgarin211\\Downloads\\OVW\\healtie-filapanel-1\\public\\images/1715247857.jpg', '2024-05-09 01:44:18', '2024-05-09 01:44:18');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(6, '20', '1', 'Breakfast', '1715247937.jpg', '2024-05-09 01:45:37', '2024-05-09 01:45:37');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(7, '20', '1', 'Lunch', '1715247982.jpg', '2024-05-09 01:46:22', '2024-05-09 01:46:22');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(8, '20', '1', 'Breakfast', '1715249151.jpg', '2024-05-09 02:05:52', '2024-05-09 02:05:52');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(9, '20', '1', 'Breakfast', '1715249262.jpg', '2024-05-09 02:07:42', '2024-05-09 02:07:42');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(10, '20', '1', 'Breakfast', '1715249308.jpg', '2024-05-09 02:08:28', '2024-05-09 02:08:28');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(11, '20', '1', 'Lunch', '1715250224.jpg', '2024-05-09 02:23:44', '2024-05-09 02:23:44');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(12, '21', '1', 'Breakfast', '1715254767.jpg', '2024-05-09 03:39:28', '2024-05-09 03:39:28');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(13, '21', '1', 'Breakfast', '1715255097.jpg', '2024-05-09 03:44:57', '2024-05-09 03:44:57');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(14, '22', '2', 'Breakfast', '1715255268.jpg', '2024-05-09 03:47:49', '2024-05-09 03:47:49');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(15, '22', '2', 'Breakfast', '1715255270.jpg', '2024-05-09 03:47:51', '2024-05-09 03:47:51');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(16, '21', '1', 'Breakfast', '1715255952.jpg', '2024-05-09 03:59:12', '2024-05-09 03:59:12');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(17, '21', '1', 'Breakfast', '1715256265.jpg', '2024-05-09 04:04:26', '2024-05-09 04:04:26');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(18, '23', '1', 'Breakfast', '1715256335.jpeg', '2024-05-09 04:05:36', '2024-05-09 04:05:36');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(19, '23', '2', 'Lunch', '1715256377.jpeg', '2024-05-09 04:06:18', '2024-05-09 04:06:18');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(20, '21', '1', 'Breakfast', '1715257370.jpg', '2024-05-09 04:22:51', '2024-05-09 04:22:51');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(21, '21', '1', 'Breakfast', '1715257837.jpg', '2024-05-09 04:30:38', '2024-05-09 04:30:38');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(22, '21', '1', 'Lunch', '1715257873.jpg', '2024-05-09 04:31:13', '2024-05-09 04:31:13');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(23, '21', '1', 'Lunch', '1715258121.jpg', '2024-05-09 04:35:21', '2024-05-09 04:35:21');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(24, '21', '1', 'Breakfast', '1715261994.jpg', '2024-05-09 05:39:54', '2024-05-09 05:39:54');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(25, '21', '1', 'Breakfast', '1715262021.jpg', '2024-05-09 05:40:21', '2024-05-09 05:40:21');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(26, '21', '1', 'Breakfast', '1715262032.jpg', '2024-05-09 05:40:32', '2024-05-09 05:40:32');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(27, '21', '1', 'Breakfast', '1715262074.jpg', '2024-05-09 05:41:14', '2024-05-09 05:41:14');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(28, '21', '1', 'Breakfast', '1715262083.jpg', '2024-05-09 05:41:23', '2024-05-09 05:41:23');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(29, '21', '1', 'Breakfast', '1715262095.jpg', '2024-05-09 05:41:35', '2024-05-09 05:41:35');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(30, '21', '1', 'Breakfast', '1715262109.jpg', '2024-05-09 05:41:49', '2024-05-09 05:41:49');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(31, '21', '1', 'Breakfast', '1715262135.jpg', '2024-05-09 05:42:16', '2024-05-09 05:42:16');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(32, '21', '1', 'Breakfast', '1715262185.jpg', '2024-05-09 05:43:06', '2024-05-09 05:43:06');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(33, '21', '1', 'Breakfast', '1715262304.jpg', '2024-05-09 05:45:04', '2024-05-09 05:45:04');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(34, '21', '1', 'Breakfast', '1715262315.jpg', '2024-05-09 05:45:15', '2024-05-09 05:45:15');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(35, '21', '1', 'Breakfast', '1715262365.jpg', '2024-05-09 05:46:05', '2024-05-09 05:46:05');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(36, '21', '1', 'Breakfast', '1715262371.jpg', '2024-05-09 05:46:11', '2024-05-09 05:46:11');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(37, '21', '1', 'Breakfast', '1715262390.jpg', '2024-05-09 05:46:30', '2024-05-09 05:46:30');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(38, '21', '1', 'Breakfast', '1715267769.jpg', '2024-05-09 07:16:09', '2024-05-09 07:16:09');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(39, '21', '1', 'Breakfast', '1715267809.jpg', '2024-05-09 07:16:50', '2024-05-09 07:16:50');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(40, '21', '1', 'Breakfast', '1715267824.jpg', '2024-05-09 07:17:04', '2024-05-09 07:17:04');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(41, '21', '1', 'Breakfast', '1715268096.jpg', '2024-05-09 07:21:36', '2024-05-09 07:21:36');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(42, '21', '1', 'Breakfast', '1715268158.jpg', '2024-05-09 07:22:38', '2024-05-09 07:22:38');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(43, '21', '1', 'Breakfast', '1715268274.jpg', '2024-05-09 07:24:35', '2024-05-09 07:24:35');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(44, '21', '1', 'Breakfast', '1715268283.jpg', '2024-05-09 07:24:43', '2024-05-09 07:24:43');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(45, '21', '1', 'Breakfast', '1715268372.jpg', '2024-05-09 07:26:13', '2024-05-09 07:26:13');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(46, '21', '1', 'Breakfast', '1715268782.jpg', '2024-05-09 07:33:03', '2024-05-09 07:33:03');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(47, '21', '1', 'Breakfast', '1715269160.jpg', '2024-05-09 07:39:21', '2024-05-09 07:39:21');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(48, '25', '2', 'Breakfast', '1715270258.jpg', '2024-05-09 07:57:38', '2024-05-09 07:57:38');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(49, '29', '2', 'Breakfast', '1715273586.jpeg', '2024-05-09 08:53:06', '2024-05-09 08:53:06');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(50, '27', '2', 'Breakfast', '1715273879.jpeg', '2024-05-09 08:57:59', '2024-05-09 08:57:59');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(51, '27', '2', 'Breakfast', '1715274017.jpeg', '2024-05-09 09:00:17', '2024-05-09 09:00:17');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(52, '32', '10', 'Breakfast', '1715276190.jpeg', '2024-05-09 09:36:31', '2024-05-09 09:36:31');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(57, '35', '34', 'Breakfast', '1715316732.jpg', '2024-05-09 20:52:14', '2024-05-09 20:52:14');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(58, '35', '34', 'Breakfast', '1715316786.jpg', '2024-05-09 20:53:07', '2024-05-09 20:53:07');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(59, '37', '34', 'Breakfast', '1715347120.jpg', '2024-05-10 05:18:43', '2024-05-10 05:18:43');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(60, '37', '34', 'Breakfast', '1715347125.jpg', '2024-05-10 05:18:47', '2024-05-10 05:18:47');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(61, '2', '34', 'Breakfast', '1715350851.png', '2024-05-10 06:20:52', '2024-05-10 06:20:52');
INSERT DELAYED IGNORE INTO `trackpases` (`id`, `ushid`, `dfoodid`, `paseline`, `poster`, `created_at`, `updated_at`) VALUES(62, '2', '34', 'Breakfast', '1715351546.png', '2024-05-10 06:32:26', '2024-05-10 06:32:26');

-- --------------------------------------------------------

--
-- Stand-in structure for view `TrakingRecord`
--
DROP VIEW IF EXISTS `TrakingRecord`;
CREATE TABLE IF NOT EXISTS `TrakingRecord` (
`ushid` bigint(20) unsigned
,`gender` text
,`tanggal_lahir` date
,`height` varchar(191)
,`weight` varchar(191)
,`Hypotermia` int(11)
,`Diabetes` int(11)
,`goals` varchar(191)
,`created_at` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(1, 'Ferren Andrea', 'ferrenandrea@gmail.com', NULL, '$2y$12$QtPk.4EgR2qTY2ZYabhV0.xzXjbjUpsjFhS.gQaVtYkt2GlsBpm4m', 'TrKw95jmci2eOXA64byRzDZiW8ouDVgPQk1Zb9HTcx4XHs7JGSOT8SfUsDtP', '2024-05-06 05:51:04', '2024-05-06 05:51:04');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(2, 'agustinus', 'admin@admin.com', '2024-05-08 14:45:36', '$2y$12$ZGq932vLCpBKIXVk97vaf.kxFLY0X3aBEzWPBmDNXOznr9zaMw5ai', NULL, '2024-05-08 14:45:36', '2024-05-08 14:45:36');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(3, 'Afrizal', 'afrizalrizqi02@gmail.com', NULL, '$2y$12$Yi3qS4KuLBWAQHL/8Ihm3O1f7zYWK1ToHkJN7M2bMmApke0pdY/uO', NULL, '2024-05-06 17:46:44', '2024-05-06 17:46:44');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(15, 'demo123', 'd@d.com', NULL, '$2y$12$4.OgcV6NEBVhw99TKBuG7.cR1t6HwxIUttxLsE/tBBBER07gLFPsq', NULL, '2024-05-08 06:08:01', '2024-05-08 06:08:01');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(16, 'Agustinus Pardamean Lumban Tobing', 'l@l.com', NULL, '$2y$12$diuRGQIPlf01D0eYNnTPiu6ul7q4q2QTSAD.R4QSsABEv8zUkHmkS', NULL, '2024-05-08 06:45:19', '2024-05-08 06:45:19');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(17, 'afrizal', 'afrizal@gmail.com', NULL, '$2y$12$L22Z/r7YmEE9YSzVTvK6OeJGohXIDEcFGUVKWwLk4jhrei/uaMSeW', NULL, '2024-05-08 07:27:48', '2024-05-08 07:27:48');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(18, 'Afrizal', 'f@gmail.com', NULL, '$2y$12$Tf8dDjeYq5xArHJgl58vMeCNwXyAjvFPnVtGLfwZhlvzEfwGDKb36', NULL, '2024-05-08 20:38:25', '2024-05-08 20:38:25');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(19, 's@s.com', 's@s.com', NULL, '$2y$12$JJPnRxJrsGY9iQ0kHufNcuG3ePuCeJubV9d//AKfc/u3pfiJLf1wK', NULL, '2024-05-08 20:46:59', '2024-05-08 20:46:59');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(20, 's1@s.com', 's1@s.com', NULL, '$2y$12$UBvCU9OFfUSQrcLDqXMR1.qE0HZlYPgz6vh5.3ODCD5bJArm2lM2K', NULL, '2024-05-09 00:58:11', '2024-05-09 00:58:11');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(21, 'azusena2', 'a2@b.com', NULL, '$2y$12$hAYo44voGw5G9rNbJcJBWuBuA3wLb.wtf.hSgBtVkSS12lz7vyzyO', NULL, '2024-05-09 03:38:42', '2024-05-09 03:38:42');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(22, 'a', 'a3@gmail.com', NULL, '$2y$12$lWQY7.gHie5aqvpoz1ZSyuSGSl7puRoXkfd4mWYA9fH2fvtFSQEKu', NULL, '2024-05-09 03:46:30', '2024-05-09 03:46:30');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(23, 'p', 'p@gmail.com', NULL, '$2y$12$OUFML0fb2BYWhgRH231OI.zukNg4vmBsoMuixJokqh5QVu/D3M7O.', NULL, '2024-05-09 04:04:20', '2024-05-09 04:04:20');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(24, 'afrizal', 'p', NULL, '$2y$12$7teTITPhd0hpxgMr7ouf2ewboiqkMi8qd5Do42.TkRtSWbWuGTh.u', NULL, '2024-05-09 07:52:06', '2024-05-09 07:52:06');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(25, 'Yjk', 'lagustinus211a@gmail.com', NULL, '$2y$12$dRjd//b53y52ovFvIIMate1Nw9fYsGfZlEg/qPLQ522oI9xq0PBby', NULL, '2024-05-09 07:55:02', '2024-05-09 07:55:02');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(26, 'protech', 'protech@gmail.com', NULL, '$2y$12$UNxdOxzbctyRbs4YjiMCGOLRqnr1DGWzN2W5Rk8.netPVFxiMjf6K', NULL, '2024-05-09 08:15:08', '2024-05-09 08:15:08');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(27, 'x', 'x@gmail.com', NULL, '$2y$12$TajloXpRlTlHj9W7ZmRhNeTrpYYXtc41S1dP8NMXtWKCL3GScOfau', NULL, '2024-05-09 08:19:32', '2024-05-09 08:19:32');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(28, 'agustinustobing', 'lma@L.com', NULL, '$2y$12$ySMarrZBDvEmPFEWtyr5ZeW4SQmSG.kBO84XqCBTOlC4g3QkbZhCe', NULL, '2024-05-09 08:19:45', '2024-05-09 08:19:45');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(29, 'Healtie', 'healtie@gmail.com', NULL, '$2y$12$myIWEqEpm4V81DOLk08rsuMWZzwlZhBcze9k88amvBxl0a6DRsxj6', NULL, '2024-05-09 08:48:54', '2024-05-09 08:48:54');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(30, 'healtie2', 'healtie2@gmail.com', NULL, '$2y$12$S0Klwtg5UO/3UYlX2DwipO.mxKo8zK0CTc.8g2tBA7m4RmdmZKq5m', NULL, '2024-05-09 09:05:00', '2024-05-09 09:05:00');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(31, 'Healtie1', 'healtie1@gmail.com', NULL, '$2y$12$kl9AfPL7lZxXaB/T1tjta.d5hWcOoWzJfZ54iNaNumih7pwM.FENm', NULL, '2024-05-09 09:21:38', '2024-05-09 09:21:38');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(32, 'x', 'xy@gmail.com', NULL, '$2y$12$R./cxteBfOBFtXtJB5FRBOsxE4sOgZItF0W8ZeAKD5og16WV.V4.S', NULL, '2024-05-09 09:27:52', '2024-05-09 09:27:52');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(35, 'Healtie3', 'Healtie3@gmail.com', NULL, '$2y$12$3M3udYGlboywhiX8wpmOZe5qJttV6hXcRE0/9f.XpGsjbXRKz698W', NULL, '2024-05-09 20:11:49', '2024-05-09 20:11:49');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(36, 'urikamen882', 'l12@gmail.com', NULL, '$2y$12$jlCUPQOpHn5/ixPr0KquNOZO5hiGiEsJBeIF4dudK8nUQuNr6CHOa', NULL, '2024-05-09 20:28:27', '2024-05-09 20:28:27');
INSERT DELAYED IGNORE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES(37, 'urikamen99', 'b22@b.com', NULL, '$2y$12$cklsj.SNQDipxMyIzNft4ei86Ni99jS795JKNuJmJr5XLiN1RYCV.', NULL, '2024-05-10 05:16:17', '2024-05-10 05:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `ushes`
--

DROP TABLE IF EXISTS `ushes`;
CREATE TABLE IF NOT EXISTS `ushes` (
  `id` bigint(20) unsigned NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hypotermia` int(11) NOT NULL,
  `Diabetes` int(11) NOT NULL,
  `profilepaat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ushes`
--

INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(2, 'tajur', '1975-05-06', 'Kurangi Berat Badan', 'male', 0, 1, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-06 06:25:32', '2024-05-07 07:58:27');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(9, 'bogor', '2024-05-08', 'Lose WeightMuscle Gain', 'female', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 06:40:42', '2024-05-08 06:40:42');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(15, 'bogor', '2000-05-06', 'Lose Weight', 'male', 1, 1, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 06:09:06', '2024-05-08 06:09:06');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(16, 'bogor', '2003-05-01', 'Lose Weight', 'female', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 06:46:33', '2024-05-08 06:46:33');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(17, 'bogor', '2004-01-20', 'Lose WeightMuscle GainHealthy LifestyleBalanced DietSleep Early', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 07:28:50', '2024-05-08 07:28:50');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(18, 'bogor', '2006-02-09', 'Healthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 20:39:32', '2024-05-08 20:39:32');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(19, 'bogor', '2024-05-09', 'Lose WeightGain Weight', 'male', 1, 1, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-08 20:48:15', '2024-05-08 20:48:15');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(20, 'bogor', '2024-05-10', 'Lose WeightHealthy Lifestyle', 'female', 1, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 00:59:02', '2024-05-09 00:59:02');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(21, 'bogor', '2024-05-09', 'Lose WeightMuscle Gain', 'female', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 03:39:03', '2024-05-09 03:39:03');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(22, 'bogor', '2003-05-09', 'Balanced Diet', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 03:47:00', '2024-05-09 03:47:00');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(23, 'bogor', '2021-06-09', 'Lose WeightImprove Mental Health', 'female', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 04:05:05', '2024-05-09 04:05:05');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(25, 'bogor', '1991-05-09', 'Lose WeightHealthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 07:55:58', '2024-05-09 07:55:58');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(27, 'bogor', '2013-05-09', 'Healthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 08:20:12', '2024-05-09 08:20:12');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(28, 'bogor', '2024-05-16', 'Lose WeightHealthy Lifestyle', 'male', 1, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 08:20:26', '2024-05-09 08:20:26');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(29, 'bogor', '2004-01-15', 'Healthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 08:50:29', '2024-05-09 08:50:29');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(30, 'bogor', '2004-04-09', 'Healthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 09:05:41', '2024-05-09 09:05:41');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(31, 'bogor', '2004-06-10', 'Lose Weight', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 09:22:42', '2024-05-09 09:22:42');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(32, 'bogor', '2024-05-10', 'Lose Weight', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 09:28:22', '2024-05-09 09:28:22');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(35, 'bogor', '2004-05-10', 'Lose Weight', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 20:13:21', '2024-05-09 20:13:21');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(36, 'bogor', '2024-05-10', 'Lose WeightGain Weight', 'female', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-09 20:28:49', '2024-05-09 20:28:49');
INSERT DELAYED IGNORE INTO `ushes` (`id`, `alamat`, `tanggal_lahir`, `tujuan`, `gender`, `Hypotermia`, `Diabetes`, `profilepaat`, `created_at`, `updated_at`) VALUES(37, 'bogor', '2024-05-10', 'Lose WeightHealthy Lifestyle', 'male', 0, 0, '01HX74QANPGPNGJ8YXGJ770XZM.png', '2024-05-10 05:16:43', '2024-05-10 05:16:43');

-- --------------------------------------------------------

--
-- Table structure for table `waters`
--

DROP TABLE IF EXISTS `waters`;
CREATE TABLE IF NOT EXISTS `waters` (
  `id` bigint(20) unsigned NOT NULL,
  `ushid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `targetted` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waters`
--

INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(10, '16', 100, '2024-05-08 08:37:48', '2024-05-08 08:58:03');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(14, '19', 15, '2024-05-08 21:00:21', '2024-05-08 21:00:37');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(15, '20', 5, '2024-05-09 01:46:03', '2024-05-09 01:46:03');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(16, '22', 10, '2024-05-09 03:47:06', '2024-05-09 03:47:11');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(17, '21', 5, '2024-05-09 04:04:40', '2024-05-09 04:04:40');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(18, '25', 10, '2024-05-09 07:56:05', '2024-05-09 07:59:13');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(19, '24', 5, '2024-05-09 08:00:04', '2024-05-09 08:00:04');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(20, '27', 20, '2024-05-09 08:21:08', '2024-05-09 08:21:23');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(21, '29', 10, '2024-05-09 08:50:36', '2024-05-09 08:50:43');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(22, '30', 10, '2024-05-09 09:05:45', '2024-05-09 09:05:49');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(23, '31', 10, '2024-05-09 09:22:49', '2024-05-09 09:22:55');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(24, '32', 10, '2024-05-09 09:37:16', '2024-05-09 09:37:21');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(25, '35', 10, '2024-05-09 20:22:30', '2024-05-09 20:22:37');
INSERT DELAYED IGNORE INTO `waters` (`id`, `ushid`, `targetted`, `created_at`, `updated_at`) VALUES(26, '2', 25, '2024-05-10 06:11:08', '2024-05-10 06:11:16');

-- --------------------------------------------------------

--
-- Structure for view `Konsumsi`
--
DROP TABLE IF EXISTS `Konsumsi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`server`@`localhost` SQL SECURITY DEFINER VIEW `Konsumsi` AS select `tc`.`ushid` AS `ushid`,`tc`.`paseline` AS `paseline`,`df`.`barcode` AS `barcode`,`df`.`name` AS `name`,`df`.`poster` AS `poster`,`df`.`natrium` AS `natrium`,`df`.`fat` AS `fat`,`df`.`sugar` AS `sugar`,`df`.`kcal` AS `kcal`,`df`.`etc` AS `etc`,`tc`.`created_at` AS `created_at`,`tc`.`updated_at` AS `updated_at` from ((`trackpases` `tc` join `dfoods` `df` on((`tc`.`dfoodid` = `df`.`id`))) join `Member` `ush` on((`tc`.`ushid` = `ush`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `Member`
--
DROP TABLE IF EXISTS `Member`;

CREATE ALGORITHM=UNDEFINED DEFINER=`server`@`localhost` SQL SECURITY DEFINER VIEW `Member` AS select `ushes`.`alamat` AS `alamat`,`ushes`.`tanggal_lahir` AS `tanggal_lahir`,`ushes`.`tujuan` AS `tujuan`,`ushes`.`profilepaat` AS `profilepaat`,`users`.`id` AS `id`,`users`.`name` AS `name`,`users`.`email` AS `email`,`users`.`email_verified_at` AS `email_verified_at`,`users`.`password` AS `password`,`users`.`remember_token` AS `remember_token`,`users`.`created_at` AS `created_at`,`users`.`updated_at` AS `updated_at` from (`ushes` join `users` on((`users`.`id` = `ushes`.`id`)));

-- --------------------------------------------------------

--
-- Structure for view `TrakingRecord`
--
DROP TABLE IF EXISTS `TrakingRecord`;

CREATE ALGORITHM=UNDEFINED DEFINER=`server`@`localhost` SQL SECURITY DEFINER VIEW `TrakingRecord` AS select `ushes`.`id` AS `ushid`,`ushes`.`gender` AS `gender`,`ushes`.`tanggal_lahir` AS `tanggal_lahir`,`bpases`.`height` AS `height`,`bpases`.`weight` AS `weight`,`ushes`.`Hypotermia` AS `Hypotermia`,`ushes`.`Diabetes` AS `Diabetes`,`bpases`.`goals` AS `goals`,`bpases`.`created_at` AS `created_at` from ((`bpases` join `Member` on((`Member`.`id` = `bpases`.`ushid`))) join `ushes` on((`Member`.`id` = `ushes`.`id`)));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpases`
--
ALTER TABLE `bpases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `dfoods`
--
ALTER TABLE `dfoods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dfoods_barcode_index` (`barcode`);

--
-- Indexes for table `doquizzes`
--
ALTER TABLE `doquizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food_rs`
--
ALTER TABLE `food_rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifies`
--
ALTER TABLE `notifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sleep_tracks`
--
ALTER TABLE `sleep_tracks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trackpases`
--
ALTER TABLE `trackpases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `ushes`
--
ALTER TABLE `ushes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waters`
--
ALTER TABLE `waters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpases`
--
ALTER TABLE `bpases`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `dfoods`
--
ALTER TABLE `dfoods`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `doquizzes`
--
ALTER TABLE `doquizzes`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_rs`
--
ALTER TABLE `food_rs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `notifies`
--
ALTER TABLE `notifies`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sleep_tracks`
--
ALTER TABLE `sleep_tracks`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `trackpases`
--
ALTER TABLE `trackpases`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `ushes`
--
ALTER TABLE `ushes`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `waters`
--
ALTER TABLE `waters`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
