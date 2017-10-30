-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.14 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for game
CREATE DATABASE IF NOT EXISTS `game` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `game`;

-- Dumping structure for table game.players
CREATE TABLE IF NOT EXISTS `players` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_bin,
  `password` text COLLATE utf8_bin,
  `ip` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table game.players: 5 rows
/*!40000 ALTER TABLE `players` DISABLE KEYS */;
INSERT INTO `players` (`id`, `username`, `password`, `ip`) VALUES
	(20, 'koma', '$2y$10$dgXK.HnqLG/Itzy6UcEVzOswTwgpYB3zqZH1eStktYEQd3eqq6biu', NULL),
	(21, 'gamer', '$2y$10$2EuQwuFvb2ayHRj4M9.D4eH1gV1Q7dmamNDZX2tPNqL89pboxbICG', NULL),
	(25, 'opapa', '$2y$10$wW/pV9p.Uxraw3rLdxy5geLWj1H5ouNNsPqZKQREvTGM3k/8Skud.', NULL),
	(27, 'nunu', '$2y$10$W1gIOtHvD3fg0M0W5m3aq.feHtAieH04ozUNK5bI54WCbf8yqDoji', NULL),
	(28, 'ignas', '$2y$10$eJHP6uhFR6Mp/.YeY03YT.p710D7no9JhEvfYdaOVneQtE2rAWyXK', NULL);
/*!40000 ALTER TABLE `players` ENABLE KEYS */;

-- Dumping structure for table game.stats
CREATE TABLE IF NOT EXISTS `stats` (
  `username` text COLLATE utf8_bin,
  `result` decimal(10,2) DEFAULT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table game.stats: 63 rows
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` (`username`, `result`, `time`, `ip`) VALUES
	('gamer', 0.40, '2017-10-30 12:12:42', NULL),
	('gamer', 1.10, '2017-10-30 12:12:46', NULL),
	('gamer', 0.40, '2017-10-30 12:12:49', NULL),
	('gamer', 0.80, '2017-10-30 12:12:56', NULL),
	('koma', 1.00, '2017-10-30 13:00:02', NULL),
	('nunu', 0.30, '2017-10-30 12:48:55', NULL),
	('nunu', 1.00, '2017-10-30 12:48:57', NULL),
	('nunu', 1.00, '2017-10-30 12:48:59', NULL),
	('koma', 1.50, '2017-10-30 12:53:16', NULL),
	('koma', 1.20, '2017-10-30 12:53:18', NULL),
	('koma', 0.70, '2017-10-30 12:53:20', NULL),
	('koma', 1.10, '2017-10-30 12:53:22', NULL),
	('koma', 1.00, '2017-10-30 12:53:24', NULL),
	('koma', 1.10, '2017-10-30 12:53:26', NULL),
	('koma', 0.60, '2017-10-30 13:00:06', NULL),
	('koma', 0.50, '2017-10-30 13:00:10', NULL),
	('koma', 0.20, '2017-10-30 13:01:12', NULL),
	('koma', 0.30, '2017-10-30 13:01:14', NULL),
	('koma', 0.60, '2017-10-30 13:01:16', NULL),
	('koma', 1.90, '2017-10-30 13:01:19', NULL),
	('ignas', 0.50, '2017-10-30 14:36:18', '::1'),
	('ignas', 0.60, '2017-10-30 14:36:38', '::1'),
	('ignas', 0.10, '2017-10-30 14:37:08', '::1'),
	('ignas', 0.30, '2017-10-30 14:38:21', '::1'),
	('ignas', 0.20, '2017-10-30 14:39:46', '::1'),
	('ignas', 0.50, '2017-10-30 14:40:49', '::1'),
	('ignas', 0.50, '2017-10-30 14:41:02', '::1'),
	('ignas', 1.10, '2017-10-30 14:41:53', '::1'),
	('ignas', 0.80, '2017-10-30 14:47:13', '::1'),
	('ignas', 1.20, '2017-10-30 14:47:22', '::1'),
	('ignas', 1.00, '2017-10-30 14:47:54', '::1'),
	('ignas', 1.20, '2017-10-30 14:48:25', '::1'),
	('ignas', 0.10, '2017-10-30 14:49:06', '::1'),
	('ignas', 0.00, '2017-10-30 14:49:17', '::1'),
	('ignas', 0.00, '2017-10-30 14:49:31', '::1'),
	('ignas', 0.00, '2017-10-30 14:49:34', '::1'),
	('ignas', 0.20, '2017-10-30 14:49:37', '::1'),
	('ignas', 0.60, '2017-10-30 14:49:47', '::1'),
	('ignas', 0.00, '2017-10-30 14:50:26', '::1'),
	('ignas', 0.90, '2017-10-30 14:52:00', '::1'),
	('ignas', 0.20, '2017-10-30 14:55:25', '::1'),
	('ignas', 0.10, '2017-10-30 14:55:35', '::1'),
	('ignas', 0.40, '2017-10-30 14:57:23', '::1'),
	('ignas', 0.00, '2017-10-30 14:58:04', '::1'),
	('ignas', 0.40, '2017-10-30 14:58:07', '::1'),
	('ignas', 0.80, '2017-10-30 14:58:10', '::1'),
	('ignas', 0.50, '2017-10-30 14:59:08', '::1'),
	('ignas', 0.10, '2017-10-30 14:59:46', '::1'),
	('ignas', 0.10, '2017-10-30 14:59:54', '::1'),
	('ignas', 0.50, '2017-10-30 14:59:58', '::1'),
	('koma', 1.20, '2017-10-30 15:00:12', '::1'),
	('koma', 0.50, '2017-10-30 15:00:14', '::1'),
	('koma', 0.40, '2017-10-30 15:00:16', '::1'),
	('koma', 1.90, '2017-10-30 15:00:17', '::1'),
	('koma', 0.20, '2017-10-30 15:00:19', '::1'),
	('koma', 0.20, '2017-10-30 15:00:21', '::1'),
	('koma', 0.60, '2017-10-30 15:00:22', '::1'),
	('koma', 0.50, '2017-10-30 15:00:24', '::1'),
	('koma', 0.10, '2017-10-30 15:00:26', '::1'),
	('koma', 0.70, '2017-10-30 15:00:28', '::1'),
	('koma', 0.50, '2017-10-30 15:00:31', '::1'),
	('koma', 0.90, '2017-10-30 15:00:35', '::1'),
	('koma', 0.00, '2017-10-30 15:00:38', '::1');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
