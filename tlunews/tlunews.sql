-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for tlunews
CREATE DATABASE IF NOT EXISTS `tlunews` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `tlunews`;

-- Dumping structure for table tlunews.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table tlunews.categories: ~0 rows (approximately)
DELETE FROM `categories`;
INSERT INTO `categories` (`id`, `name`) VALUES
	(1, 'Blood Currant'),
	(2, 'Great Plains Bladderpod'),
	(3, 'New York Ironweed'),
	(4, 'Cockleshell Lichen'),
	(5, 'Little Sagebrush'),
	(6, 'Bristle Bent'),
	(7, 'Sedge'),
	(8, 'Chiricahua Mountain Brookweed'),
	(9, 'Purple Bird\'s-beak'),
	(10, 'Amerorchis'),
	(11, 'Pandanus'),
	(12, 'Erpodium Moss'),
	(13, 'Bigberry Manzanita'),
	(14, 'Nodule Cracked Lichen'),
	(15, 'Sorghum');

-- Dumping structure for table tlunews.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `category_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`),
  CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table tlunews.news: ~0 rows (approximately)
DELETE FROM `news`;
INSERT INTO `news` (`id`, `title`, `content`, `image`, `created_at`, `category_id`) VALUES
	(1, 'Scandal Sheet', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'http://dummyimage.com/189x167.png/dddddd/000000', '2024-08-17 00:00:00', NULL),
	(2, 'Presidio, The', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/130x143.png/cc0000/ffffff', '2024-11-12 00:00:00', NULL),
	(3, 'California Suite', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/225x133.png/dddddd/000000', '2024-02-14 00:00:00', NULL),
	(4, 'Boys and Girls Guide to Getting Down, The', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 'http://dummyimage.com/201x129.png/ff4444/ffffff', '2024-03-13 00:00:00', NULL),
	(5, 'Wait Until Dark', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'http://dummyimage.com/176x234.png/5fa2dd/ffffff', '2024-04-26 00:00:00', NULL),
	(6, 'Thrill Ride: The Science of Fun', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', 'http://dummyimage.com/210x103.png/dddddd/000000', '2024-09-30 00:00:00', NULL),
	(7, 'Stars Fell on Henrietta, The', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 'http://dummyimage.com/177x205.png/ff4444/ffffff', '2023-12-27 00:00:00', NULL),
	(8, 'Macheads', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'http://dummyimage.com/193x226.png/cc0000/ffffff', '2024-05-11 00:00:00', NULL),
	(9, 'Stella Does Tricks', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'http://dummyimage.com/100x125.png/cc0000/ffffff', '2024-04-30 00:00:00', NULL),
	(10, 'Hotel Transylvania', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'http://dummyimage.com/101x174.png/cc0000/ffffff', '2024-07-16 00:00:00', NULL),
	(11, 'Evita', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'http://dummyimage.com/171x136.png/cc0000/ffffff', '2024-06-01 00:00:00', NULL),
	(12, 'Tuvalu', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'http://dummyimage.com/180x170.png/ff4444/ffffff', '2024-05-16 00:00:00', NULL),
	(13, 'Expelled: No Intelligence Allowed', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'http://dummyimage.com/136x220.png/cc0000/ffffff', '2024-09-19 00:00:00', NULL),
	(14, 'The Christmas Wish', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', 'http://dummyimage.com/194x119.png/ff4444/ffffff', '2024-04-30 00:00:00', NULL),
	(15, 'An Apology to Elephants', 'In congue. Etiam justo. Etiam pretium iaculis justo.', 'http://dummyimage.com/225x225.png/5fa2dd/ffffff', '2024-01-26 00:00:00', NULL);

-- Dumping structure for table tlunews.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `users_chk_1` CHECK ((`role` in (0,1)))
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table tlunews.users: ~15 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
	(1, 'kciccotti0', 'p$aZnV6(', 1),
	(2, 'sfrere1', 'sNR(AxFoSWX3w.S', 1),
	(3, 'mnorgan2', 'gllQV40|vwPG9', 1),
	(4, 'abarrar3', 'o{p(4r*Gs(+a', 0),
	(5, 'canan4', 'a3E4g4ZdRbfi7O>p', 0),
	(6, 'fmcswan5', 'c,s"pWvDt"jfjR', 0),
	(7, 'jchick6', 'h)oVf,K%P}?', 0),
	(8, 'cwhiscard7', 'f@aGQ>@b\'', 0),
	(9, 'beverill8', 'zn_Dre,G``P>E&t', 0),
	(10, 'ktrousdell9', 'yUl_{g1tB|', 0),
	(11, 'creesa', 'u=9iObXY<', 0),
	(12, 'dblakeyb', 'enLm9d0Sdw', 0),
	(13, 'azoanettic', 'zCqw33+/O', 0),
	(14, 'bkubisd', 'iV52aL*m', 0),
	(15, 'nrubinovitche', 't_,y\'b+?>', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
