-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 05:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `klfpoints`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `emp_position` varchar(20) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `password` varchar(250) CHARACTER SET latin1 NOT NULL,
  `avatar_blob` longblob NOT NULL,
  `avatar_url` varchar(250) CHARACTER SET latin1 NOT NULL,
  `birthday` int(11) NOT NULL,
  `hire_date` int(11) NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `emp_type` enum('admin','worker') CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_emp`, `firstname`, `lastname`, `emp_position`, `email`, `password`, `avatar_blob`, `avatar_url`, `birthday`, `hire_date`, `points`, `emp_type`, `status`, `timestamp`) VALUES
(1, 'sm', 'sm', '', '1', '1', '', '', 0, 0, 0, '', 1, 0),
(2, 'sm2', 'sm2', '', '2', '2', '', '1', 1, 1, 0, 'admin', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `log_points`
--

CREATE TABLE IF NOT EXISTS `log_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emp` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
