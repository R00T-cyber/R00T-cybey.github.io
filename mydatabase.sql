-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2021 at 05:15 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'White Hoodie', 'WhiteHoodie01', 400.00, 'product-images/IMG-20210406-WA0007.jpg'),
(2, 'Yellow Hoodie', 'YellowHoodie01', 400.00, 'product-images/IMG-20210406-WA0006.jpg'),
(3, 'Red Hoodie', 'RedHoodie01', 400.00, 'product-images/IMG-20210406-WA0005.jpg'),
(4, 'White T Shirt', 'WhitetTShirt01', 180.00, 'product-images/IMG-20210406-WA0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `usersId` int(11) NOT NULL AUTO_INCREMENT,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersPassword` varchar(128) NOT NULL,
  PRIMARY KEY (`usersId`),
  UNIQUE KEY `usersId` (`usersId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersPassword`) VALUES
(1, 'Luyolo', 'luyoloplaatjie@gmail.com', '$2y$10$gDfnh35deUJTaPLrs20uzu26ffrYjYinIzx1kzO5MMyDaMzN82aXm'),
(2, 'Ofentse', 'ofentseop1@gmail.com', '$2y$10$xo7BMnE8GEDxYvxZQpP5Z.Y2gGKeR0MCDEaPGzfTRYdFApz8y1i0G'),
(3, 'andile', 'andilesunnyboy2@gmail.com', '$2y$10$7kvJvjXBx1pXND.CpN1cCOID6igHEItXF/2YxZbamzx.p1NcU/rCW'),
(4, 'maximus', 'maixum@email.com', '$2y$10$GlKoV95o2QW5NkCaWBfrke7rZEgTJR5.qAsufuGtJbYJ4N81JYYpC'),
(5, 'Max', 'max01@gmail.com', '$2y$10$X8twUrPpOr5fFKddfAEWEOQTK4co.p82aMiXa4VZrDem9RWWLG6jm'),
(6, 'Max', 'max01@gmail.com', '$2y$10$LeeYCfAdmwM123hjlDBAMeNOxAOLoF5Gel5RlWhmIqGmo7/BRZGEK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
