-- phpMyAdmin SQL Dump
-- version 3.4.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2012 at 04:08 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `entry_id` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_body` text NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `entry_id`, `comment_name`, `comment_email`, `comment_body`, `comment_date`, `user_id`) VALUES
(1, 1, 'administrator', 'admin@admin.com', 'Test comment. Continually matrix process-centric markets via web-enabled niche markets.', '2012-02-09 03:39:48', 1),
(2, 1, 'Tester 1', 'a@a.com', 'Vestibulum venenatis. Nulla vel ipsum. Proin rutrum, urna sit amet bibendum pellentesque.', '2012-02-09 03:40:39', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE IF NOT EXISTS `entry` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `entry_name` varchar(255) NOT NULL,
  `entry_body` text NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`entry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entry_id`, `author_id`, `entry_name`, `entry_body`, `entry_date`, `comment_count`) VALUES
(1, 1, 'Codeigniter Tutorial 1', '<p>Synergistically e-enable sticky synergy for future-proof technology. Quickly enhance resource maximizing meta-services with intermandated methods of empowerment. Interactively network user-centric interfaces without empowered users. Holisticly procrastinate bricks-and-clicks core competencies and progressive channels. Globally repurpose next-generation resources and premier e-services.</p>\r\n\r\n<p>Continually matrix process-centric markets via web-enabled niche markets. Dramatically impact orthogonal methods of empowerment vis-a-vis sustainable mindshare. Efficiently leverage existing bleeding-edge value with parallel quality vectors. Continually visualize end-to-end intellectual capital before multifunctional e-tailers. Collaboratively aggregate 2.0 markets through front-end human capital.</p>', '2012-02-08 14:34:45', 2),
(2, 1, 'Download free theme!', '<p>Holisticly customize reliable intellectual capital with magnetic infomediaries. Quickly customize multidisciplinary potentialities without end-to-end users. Intrinsicly build global applications vis-a-vis reliable expertise. Completely engage focused experiences rather than professional networks. Seamlessly actualize customer directed methods of empowerment for impactful platforms.</p>\r\n\r\n<p>Compellingly re-engineer leading-edge meta-services with progressive architectures. Efficiently harness an expanded array of materials without strategic e-markets. Conveniently harness enabled portals with e-business platforms. Synergistically e-enable B2C strategic theme areas after interdependent e-commerce. Interactively network bricks-and-clicks leadership whereas high standards in e-business.</p>', '2012-02-08 15:51:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `entry_category`
--

CREATE TABLE IF NOT EXISTS `entry_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(150) NOT NULL,
  `slug` varchar(150) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entry_category`
--

INSERT INTO `entry_category` (`category_id`, `category_name`, `slug`) VALUES
(1, 'Tutorial', 'tutorial'),
(2, 'Freebie', 'freebie'),
(3, 'CodeIgniter', 'codeigniter'),
(4, 'Joomla', 'joomla'),
(5, 'Wordpress', 'wordpress');

-- --------------------------------------------------------

--
-- Table structure for table `entry_relationships`
--

CREATE TABLE IF NOT EXISTS `entry_relationships` (
  `relationship_id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`relationship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `entry_relationships`
--

INSERT INTO `entry_relationships` (`relationship_id`, `object_id`, `category_id`) VALUES
(1, 1, 1),
(2, 1, 3),
(3, 2, 1),
(4, 2, 4),
(5, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` int(10) unsigned NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, 2130706433, 'administrator', '59beecdf7fc966e2f17fd8f65a4a9aeb09d4a3d4', '9462e8eee0', 'admin@admin.com', '', NULL, '9d029802e28cd9c768e8e62277c0df49ec65c48c', 1268889823, 1329009722, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
