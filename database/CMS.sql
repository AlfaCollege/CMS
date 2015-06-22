-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 09:49 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelen`
--

CREATE TABLE IF NOT EXISTS `artikelen` (
  `ID` int(11) NOT NULL,
  `Titel` varchar(45) DEFAULT NULL,
  `Text` longtext,
  `Images_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

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
  `ID` int(11) NOT NULL,
  `Locatie` varchar(255) NOT NULL,
  `Text` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID`, `Locatie`, `Text`) VALUES
(3, 'HWP.MENU.1', 'Gebraden kip met niks.'),
(4, 'HWP.MENU.2', 'Patat met drie keer niks.'),
(5, 'HWP.MENU.3', 'Tosti met niks.'),
(6, 'HWP.NIEUWS.1', 'Wij hebben kompleet geen nieuws. Waarom komt U hier lmao'),
(7, 'HWP.NIEUWS.2', 'Je zou denken dat bij het tweede nieuws stuckje er iets zou staan maar nee.');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `ID` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `Email` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `Naam`, `Wachtwoord`, `Email`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ID` int(11) NOT NULL,
  `Path` varchar(255) NOT NULL,
  `Locatie` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  `ID` int(11) NOT NULL,
  `Naam` varchar(45) DEFAULT NULL,
  `Prijs` varchar(45) DEFAULT NULL,
  `Beschrijving` varchar(45) DEFAULT NULL,
  `Images_ID` int(11) NOT NULL,
  `Categorie_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

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
  `ID` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `recentie` longtext,
  `rating` varchar(45) DEFAULT NULL,
  `akkoord` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

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
  `ID` int(11) NOT NULL,
  `Voornaam` varchar(45) DEFAULT NULL,
  `Achternaam` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `Telefoonnummer` int(11) NOT NULL,
  `Aantal` int(11) NOT NULL,
  `Extra` longtext,
  `Datum` date DEFAULT NULL,
  `Tijd` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservering`
--

INSERT INTO `reservering` (`ID`, `Voornaam`, `Achternaam`, `Email`, `Telefoonnummer`, `Aantal`, `Extra`, `Datum`, `Tijd`) VALUES
(1, 'Foo', 'Bar', 'Foo@bar', 634051577, 3, 'Memes A.U.B', '2015-06-18', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikelen`
--
ALTER TABLE `artikelen`
  ADD PRIMARY KEY (`ID`), ADD KEY `fk_Artikelen_Images1_idx` (`Images_ID`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`), ADD KEY `fk_Menu_Images_idx` (`Images_ID`), ADD KEY `fk_Menu_Categorie1_idx` (`Categorie_ID`);

--
-- Indexes for table `recenties`
--
ALTER TABLE `recenties`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservering`
--
ALTER TABLE `reservering`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikelen`
--
ALTER TABLE `artikelen`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recenties`
--
ALTER TABLE `recenties`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reservering`
--
ALTER TABLE `reservering`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
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
