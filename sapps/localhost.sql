-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2013 at 07:05 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spaceapps`
--
CREATE DATABASE `spaceapps` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `spaceapps`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `finding_id` int(20) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `findings`
--

DROP TABLE IF EXISTS `findings`;
CREATE TABLE IF NOT EXISTS `findings` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `values` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `findings`
--

INSERT INTO `findings` (`id`, `user_id`, `values`) VALUES
(1, 1, '{dkjflkjdflkdlkjf}'),
(2, 1, '{87687687678687687}');

-- --------------------------------------------------------

--
-- Table structure for table `rankings`
--

DROP TABLE IF EXISTS `rankings`;
CREATE TABLE IF NOT EXISTS `rankings` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `finding_id` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fname`, `lname`, `password`, `username`, `country`) VALUES
(1, 'druid0101@gmail.com', 'Bojan', 'Seirovski', '123545456', 'bojan', 'Canada');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
