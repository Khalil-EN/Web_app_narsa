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
-- Table structure for table `infractions`
--

DROP TABLE IF EXISTS `infractions`;
CREATE TABLE IF NOT EXISTS `infractions` (
  `id_infraction` bigint NOT NULL AUTO_INCREMENT,
  `rfidtag` bigint NOT NULL,
  `lieu` varchar(100) NOT NULL,
  `date_infraction` datetime NOT NULL,
  `date_paiement` datetime NOT NULL,
  `status` int NOT NULL,
  PRIMARY KEY (`id_infraction`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `infractions`
--

INSERT INTO `infractions` (`id_infraction`, `rfidtag`, `lieu`, `date_infraction`, `date_paiement`, `status`) VALUES
(1, 123456789, 'Kenitra', '2024-05-30 12:48:01', '2024-06-05 12:48:01', 1),
(2, 123456789, 'Rabat', '2024-05-31 12:49:17', '2024-06-06 12:49:17', 0),
(3, 987654321, 'Settat', '2024-05-29 12:57:26', '2024-06-04 12:57:26', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
