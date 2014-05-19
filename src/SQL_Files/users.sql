-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2014 at 06:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `name`, `created_at`, `updated_at`) VALUES
(93, 'sarath@email.com', 'sarath', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, 'email_1399819354@email.com', 'Someone1399819354', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, 'email_1399819421@email.com', 'Someone1399819421', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, 'email_1400002487@email.com', 'Someone1400002487', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, 'email_1400089391@email.com', 'Someone1400089391', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, 'email_1400089392@email.com', 'Someone1400089392', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, 'email_1400089393@email.com', 'Someone1400089393', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
