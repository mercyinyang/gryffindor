-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2019 at 12:43 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stage2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'lastdon', 'ayomi596@gmail.com', '$2y$10$oah2jRSotDbWXgIdNFerROJaPtEzMrGb56zUj1nfgUuhXngXccRpq'),
(2, 'Joshua', 'ayomi6@gmail.com', '$2y$10$gnkwR06RlI28GBK9.XVapeWuxkfmvXKZKwP77c7BSfD3mGMFAup3W'),
(3, 'Joshua moshood', 'joshua.mosod@gmail.com', '$2y$10$b1PnjErAFSCOot6jAc394.YraVVYy3/xUGARLluDiml5A9.SxwD7i'),
(4, 'Joshua moshood', 'Ayod596@gmail.com', '$2y$10$Bgf.oAWNk/Ct2yVvdHWdx.K4R2hd3zQVzt18V4YFpOGO2/w6.YRxi'),
(5, 'Joshua moshood', 'ex@gmail.com', '$2y$10$G5kAvzso7TPIACo5/iNMS.mSiCL27lKea7hj36MqP3pHy9dk/nQwy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
