-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2015 at 09:31 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `CMS`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelen`
--

CREATE TABLE IF NOT EXISTS `artikelen` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Titel` varchar(45) DEFAULT NULL,
  `Text` longtext,
  `Images_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Artikelen_Images1_idx` (`Images_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`ID`, `Naam`) VALUES
(1, 'Voorgerecht'),
(2, 'Hoofdgerecht');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Locatie` varchar(255) NOT NULL,
  `Text` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID`, `Locatie`, `Text`) VALUES
(1, 'index', '<h1>Een korte introductie</h1>\r\n\r\n<p><img alt="restaurant-test" src="http://www.caferestauranthetwittepaard.nl/crhwp/wp-content/uploads/Lunch-kaart-150x150.jpg" style="float:right; height:150px; width:185px" /></p>\r\n\r\n<p>Restaurant Het Witte Paard bevindt zich in het prachtige Westerkwartier gebied, met vele fietsroutes, kleine watertjes en een groot meer.uji</p>\r\n\r\n<p><br />\r\nU kunt bij ons genieten op de twee terrassen zowel aan de voor- zijkant, als ook het grote terras aan de achterkant, waar tevens een groot afgebakend en veilige speelweide is voor de kinderen. Ook kunt u achter het pand gebruik maken van de ruime parkeerplaats.<br />\r\n<br />\r\nHopelijk staat u niets meer in de weg om eens langs te komen of te reserveren, wij zullen u graag hartelijk verwelkomen</p>\r\n\r\n<p>Hallo ik ben wouter en ik houd van els</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `Email` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `Naam`, `Wachtwoord`, `Email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` varchar(255) NOT NULL,
  `Locatie` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `Path`, `Locatie`) VALUES
(1, '/img/01.png', 'in je moeder');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(45) DEFAULT NULL,
  `Prijs` varchar(45) DEFAULT NULL,
  `Beschrijving` varchar(45) DEFAULT NULL,
  `Images_ID` int(11) NOT NULL,
  `Categorie_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_Menu_Images_idx` (`Images_ID`),
  KEY `fk_Menu_Categorie1_idx` (`Categorie_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `Naam`, `Prijs`, `Beschrijving`, `Images_ID`, `Categorie_ID`) VALUES
(3, 'Sgaap', '10', 'Isch sghaapie fleesh', 1, 1),
(4, 'Berwout Kruit', '0.50', 'goed gegrild', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recenties`
--

CREATE TABLE IF NOT EXISTS `recenties` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) DEFAULT NULL,
  `recentie` longtext,
  `rating` varchar(45) DEFAULT NULL,
  `akkoord` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `recenties`
--

INSERT INTO `recenties` (`ID`, `naam`, `recentie`, `rating`, `akkoord`) VALUES
(1, 'Martin Elderman', 'Recentie', '8.0', 2),
(2, 'Wouter Stulp', 'Ik vond het eten wel lekker, service wat minder.', '7.0', 2),
(3, 'Berwout Kruit', 'Ik had eerder zin in een patatje joppie, maar die hadden ze niet', '5.0', 2),
(4, 'Klaas-jan Oosterveld', 'Ik vond het eten niet zo lekker.', '6.0', 2),
(5, 'Johan Vlaar', 'het was net zo goed als de KFC.. nee beter dan.. nee beter hea', '8.0', 2),
(6, 'Johan Vlaar', 'het was net zo goed als de KFC.. nee beter dan.. nee beter hea', '8.0', 2),
(7, 'Martin Elderman', 'Recentie', '8.0', 2),
(8, 'Martin Elderman', 'Recentie', '8.0', 2),
(9, 'Els Veenstra', 'Mooi..! Lekker eten', '7.0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reservering`
--

CREATE TABLE IF NOT EXISTS `reservering` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Voornaam` varchar(45) DEFAULT NULL,
  `Achternaam` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telefoonnummer` int(11) NOT NULL,
  `Aantal` int(11) NOT NULL,
  `Extra` longtext,
  `Datum` date DEFAULT NULL,
  `Tijd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikelen`
--
ALTER TABLE `artikelen`
  ADD CONSTRAINT `fk_Artikelen_Images1` FOREIGN KEY (`Images_ID`) REFERENCES `images` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_Menu_Categorie1` FOREIGN KEY (`Categorie_ID`) REFERENCES `categorie` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Menu_Images` FOREIGN KEY (`Images_ID`) REFERENCES `images` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
