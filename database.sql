
CREATE TABLE IF NOT EXISTS `employees` (
  `id_emp` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- satus 0 - blocked;  1 - active

-- --------------------------------------------------------

--
-- Structure de la table `log_points`
--

CREATE TABLE IF NOT EXISTS `log_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_emp` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `description` text NOT NULL,
  `timestamp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

