-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2024 at 06:57 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `narsa_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

DROP TABLE IF EXISTS `users2`;
CREATE TABLE IF NOT EXISTS `users2` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `idcard` bigint NOT NULL,
  `phonenumber` bigint NOT NULL,
  `email` varchar(100) NOT NULL,
  `rfidtag` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `user_id`, `first_name`, `last_name`, `idcard`, `phonenumber`, `email`, `rfidtag`, `password`, `date`) VALUES
(7, 563776409018554, 'KHALIL', 'En', 1234567, 642814374, 'ennouaarykhalil@gmail.com', 123456789, 'khalil', '0000-00-00 00:00:00'),
(9, 987829741718071, '<script>alert(\"Hacked\");</script>', 'Hacker', 123789, 712345682, 'hacker@gmail.com', 0, '000', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
