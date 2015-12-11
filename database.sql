	'hostname' => 'localhost',
	'username' => 'gamecash_klf',
	'password' => 'KLFs0urc32015',
	'database' => 'gamecash_klfmedia',


-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 11:37 PM
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
  `birthday` date NOT NULL,
  `hire_date` date NOT NULL,
  `points` int(11) NOT NULL DEFAULT '0',
  `emp_type` enum('admin','worker') CHARACTER SET latin1 NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `timestamp` date NOT NULL,
  PRIMARY KEY (`id_emp`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id_emp`, `firstname`, `lastname`, `emp_position`, `email`, `password`, `avatar_blob`, `avatar_url`, `birthday`, `hire_date`, `points`, `emp_type`, `status`, `timestamp`) VALUES
(1, 'sm', 'sm', '', '1', '1', '', '', '0000-00-00', '0000-00-00', 68, '', 1, '0000-00-00'),
(2, 'sm2', 'sm2', '', '2', '2', '', '1', '0000-00-00', '0000-00-00', 0, 'admin', 1, '0000-00-00'),
(3, 'vasea', 'pupkin', 'boss', 'vasea@vasea.com', ' ', '', '', '0000-00-00', '0000-00-00', 350, 'worker', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `log_points`
--

CREATE TABLE IF NOT EXISTS `log_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_admin` int(4) NOT NULL,
  `id_emp` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `log_points`
--

INSERT INTO `log_points` (`id`, `id_admin`, `id_emp`, `points`, `subject`, `description`, `timestamp`) VALUES
(1, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(2, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(3, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(4, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(5, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(6, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(7, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(8, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(9, 0, 1, 12, 'efafadsf', 'adsfasdfadsf', 0),
(10, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(11, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(12, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(13, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(14, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(15, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(16, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(17, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(18, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(19, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(20, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(21, 0, 1, 20, 'efafadsf', 'adsfasdfadsf', 0),
(22, 0, 1, 10, 'fdfgdsfgs', 'dsfgsdfgsdfg', 0),
(23, 0, 1, 5, 'fdfgdsfgs', 'dsfgsdfgsdfg', 0),
(24, 0, 1, 1, 'sfgdsag', 'sdfgdfgsdfg', 0),
(25, 0, 3, -100, 'gfhdfh', 'dfghdhdgh', 0),
(26, 0, 3, -50, 'dfvbsdf', 'gsvdfgs', 0),
(27, 1, 1, 16, 'dasdfasf', 'asdfasdfasdf', 0),
(28, 1, 1, 33, 'sdfaasdf', 'asdfasdf', 0),
(29, 1, 1, 15, 'asd', 'asdfsdf', 1449700576);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
