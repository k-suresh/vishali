-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2015 at 02:29 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vishali`
--
CREATE DATABASE IF NOT EXISTS `vishali` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vishali`;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `event_date` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `added_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='To store event images' AUTO_INCREMENT=13 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `event_date`, `image`, `added_date`) VALUES
(1, 'admin', '2015-06-18', 'img_1_150624090604.jpg', '2015-06-24'),
(2, 'admin', '2015-06-18', 'img_2_150624090604.jpg', '2015-06-24'),
(3, 'admin', '2015-06-18', 'img_3_150624090604.jpg', '2015-06-24'),
(4, '1st Test Name', '2015-06-18', 'img_1_150624090658.png', '2015-06-24'),
(5, '1st Test Name', '2015-06-18', 'img_2_150624090658.jpg', '2015-06-24'),
(6, 'amarjeet', '2015-01-08', 'img_1_150624090630.jpg', '2015-06-24'),
(7, 'suresh', '2015-06-06', 'img_1_150624090659.jpg', '2015-06-24'),
(8, 'suresh', '2015-06-06', 'img_2_150624090659.jpg', '2015-06-24'),
(9, 'suresh', '2015-06-06', 'img_3_150624090659.jpg', '2015-06-24'),
(10, 'Santhos', '2015-08-08', 'img_1_150624020651.jpg', '2015-06-24'),
(11, 'Santhos', '2015-08-08', 'img_2_150624020652.jpg', '2015-06-24'),
(12, 'Santhos', '2015-08-08', 'img_3_150624020652.jpg', '2015-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `comments` text NOT NULL,
  `added_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='To store news and events' AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `comments`, `added_date`) VALUES
(1, 'asdfdasf', 'asdfasdfas', '0000-00-00'),
(2, 'asdlfkj', 'als;dkfjadlsf;kjafsasdfasdfsf', '0000-00-00'),
(3, 'asdxczvzxvzxv', 'xzcvzxvzxvcxzv', '2015-06-23'),
(4, 'gggggggggggg', 'ggggggggggggggg', '2015-06-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
