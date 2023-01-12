-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for riedlente
CREATE DATABASE IF NOT EXISTS `riedlente` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `riedlente`;

-- Dumping structure for table riedlente.products
CREATE TABLE IF NOT EXISTS `products` (
  `name` varchar(50) DEFAULT 'Riedlente []',
  `price` int(5) DEFAULT NULL,
  `id` int(5) DEFAULT NULL,
  `image_url` varchar(50) DEFAULT '/assets/images/product1.jpg',
  `aprasymas` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Produktu sarasas';

-- Dumping data for table riedlente.products: ~9 rows (approximately)
INSERT INTO `products` (`name`, `price`, `id`, `image_url`, `aprasymas`) VALUES
	('Riedlentė 1', 35, 1, '/assets/images/product1.jpg', 'Ši riedlentė yra gera. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlente 2', 45, 2, '/assets/images/product2.jpg', 'Ši riedlentė yra nuostabi. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlentė 3', 74, 3, '/assets/images/product3.jpg', 'Labai gera riedlentė. Tinka važinėti ir ant vandens'),
	('Riedlente 4', 43, 4, '/assets/images/product4.jpg', 'Ši riedlentė yra gerulė. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlente 5', 42, 5, '/assets/images/product5.jpg', 'Ši riedlentė yra tvirta. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlente 6', 28, 6, '/assets/images/product6.jpg', 'Ši riedlentė yra graži. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlente 7', 34, 7, '/assets/images/product7.jpg', 'Ši riedlentė yra kieta. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlente 8', 54, 8, '/assets/images/product8.jpg', 'Ši riedlentė yra nuostabi. Nudažyta su profesionaliais dažais, patvari mediena, kokybiški ratukai.'),
	('Riedlentė 9', 15, 9, '/assets/images/product9.jpg', 'Labai gera riedlentė. Važiuoja ant kelio.');

-- Dumping structure for table riedlente.users
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='User list and info';

-- Dumping data for table riedlente.users: ~1 rows (approximately)
INSERT INTO `users` (`username`, `password`) VALUES
	('admin', '123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
