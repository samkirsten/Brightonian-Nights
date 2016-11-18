-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2013 at 03:26 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brightoniannights_co_uk_db`
--
CREATE DATABASE IF NOT EXISTS `brightoniannights_co_uk_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `brightoniannights_co_uk_db`;

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE IF NOT EXISTS `clubs` (
  `clubindex` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no` int(4) NOT NULL,
  `road` varchar(255) NOT NULL,
  `town` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`clubindex`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`clubindex`, `name`, `web`, `email`, `no`, `road`, `town`, `postcode`, `logo`, `notes`) VALUES
(1, 'The Haunt', 'www.thehauntbrighton.co.uk', 'info@thehauntbrighton.co.uk', 10, 'Pool Valley\r\n', 'Brighton\r\n', 'BN11NJ', 'img/thehaunt.jpg', 'The Haunt is a brilliant multi purpose venue located in Brighton''s coach station opposite the iconic Brighton Pier. The venue is the main screening room of an old converted cinema consisting of a large main room with a raised staging area, bar & big screen, overlooked by a mezzanine level floor with balcony & upstairs bar.\n\nThe Haunt hosts both regular weekly club nights and live music events. Since our launch last year we have already played host to the likes of Romy of The xx, Kim Ann Foxman of Hercules & Love Affair, Is Tropical, Mirrors, Yelle, CocknBullKid, Joe from Hot Chip, Drums of Death, 2manydjs, Rizzle Kicks, Foster The People, Niki & The Dove, tUnE-YarDs, Austra, Young Knives, Naughty By Nature, Beach House, Erol Alkan, Wild Beasts and more. Making The Haunt their home are great Brighton club nights like ''Wonder Yeahs'', ''Nowhere To Run'', ''Coconut College'' (every Thursday) and the legendary ''It is still 1985'' (every Saturday). This is Brighton''s most exciting night out.'),
(2, 'Smack', 'www.smackbrighton.com', 'INFO@SMACKBRIGHTON.COM', 62, 'West Street', 'Brighton', 'BN12RA', '', ''),
(3, 'Shooshh', 'www.brighton.shooshh.com', 'info@shooshhbrighton.com', 214, 'Kings Road Arches', 'Brighton', 'BN11NB', '', ''),
(4, 'Audio', 'www.audiobrighton.com', 'info@audiobrighton.com', 10, 'Marine Parade', 'Brighton', 'BN21TL', '', ''),
(5, 'Digital', 'www.yourfutureisdigital.com/brighton', 'steve.joyce@yourfutureisdigital.com', 187, 'Kings Road Arches', 'Brighton', 'BN11NB', '', ''),
(6, 'Coalition', 'www.drinkinbrighton.co.uk/coalition', 'info@coalitionbrighton.com', 171, 'Kings Road Arches', 'Brighton', 'BN11NB', '', ''),
(7, 'Funfair', 'www.funfairclub.com', 'info@funfairclub.com', 12, 'Kings Road', 'Brighton', 'BN11NE', '', ''),
(8, 'Oceana', 'www.oceanaclubs.com/brighton', 'oceana-brighton@luminar.co.uk', 0, 'Kingswest, West Street', 'Brighton', 'BN12RE', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE IF NOT EXISTS `drinks` (
  `drinkindex` int(5) NOT NULL AUTO_INCREMENT,
  `club` int(5) NOT NULL,
  `lagerdr` varchar(7) NOT NULL,
  `lagerbottle` varchar(7) NOT NULL,
  `jagerbomb` varchar(7) NOT NULL,
  `spiritmix` varchar(7) NOT NULL,
  `dbspiritmix` varchar(7) NOT NULL,
  `shot` varchar(7) NOT NULL,
  `cider` varchar(7) NOT NULL,
  PRIMARY KEY (`drinkindex`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinkindex`, `club`, `lagerdr`, `lagerbottle`, `jagerbomb`, `spiritmix`, `dbspiritmix`, `shot`, `cider`) VALUES
(1, 1, '£1.00', '£2.00', '£1.50', '£3.00', '£3.50', '£1.00', '£1.50');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventindex` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `club` int(5) NOT NULL,
  `promoter` int(5) NOT NULL,
  `early` varchar(7) NOT NULL,
  `mid` varchar(7) NOT NULL,
  `late` varchar(7) NOT NULL,
  `drinks` int(5) NOT NULL,
  `student` int(2) NOT NULL,
  `music` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`eventindex`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventindex`, `name`, `club`, `promoter`, `early`, `mid`, `late`, `drinks`, `student`, `music`, `notes`) VALUES
(1, 'This is a test event', 1, 1, '£1.50', '£3.00', '£4.00', 1, 1, 'House', 'This is a description of an event. This at the moment is being used for a test description for a test event at the haunt. it would include information about the early mid and late opening times. '),
(2, 'This is a second test event', 2, 1, '£1.50', '£3.00', '£4.00', 1, 1, 'Soul', '');

-- --------------------------------------------------------

--
-- Table structure for table `fri`
--

CREATE TABLE IF NOT EXISTS `fri` (
  `index` int(5) NOT NULL AUTO_INCREMENT,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fri`
--

INSERT INTO `fri` (`index`, `event`, `club`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 1, 1),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE IF NOT EXISTS `host` (
  `hostindex` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`hostindex`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`hostindex`, `name`, `website`) VALUES
(1, 'Fat Poppadaddys', 'www.fatpoppadaddys.com');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE IF NOT EXISTS `mon` (
  `index` int(5) NOT NULL AUTO_INCREMENT,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`index`, `event`, `club`) VALUES
(1, 1, 1),
(2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sat`
--

CREATE TABLE IF NOT EXISTS `sat` (
  `index` int(5) NOT NULL,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sun`
--

CREATE TABLE IF NOT EXISTS `sun` (
  `index` int(5) NOT NULL,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thu`
--

CREATE TABLE IF NOT EXISTS `thu` (
  `index` int(5) NOT NULL AUTO_INCREMENT,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `thu`
--

INSERT INTO `thu` (`index`, `event`, `club`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 2),
(4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tue`
--

CREATE TABLE IF NOT EXISTS `tue` (
  `index` int(5) NOT NULL AUTO_INCREMENT,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tue`
--

INSERT INTO `tue` (`index`, `event`, `club`) VALUES
(1, 1, 1),
(4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wed`
--

CREATE TABLE IF NOT EXISTS `wed` (
  `index` int(5) NOT NULL AUTO_INCREMENT,
  `event` int(5) NOT NULL,
  `club` int(5) NOT NULL,
  PRIMARY KEY (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `wed`
--

INSERT INTO `wed` (`index`, `event`, `club`) VALUES
(1, 1, 1),
(2, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
