-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2015 at 09:21 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `CMS`
--
CREATE DATABASE IF NOT EXISTS `CMS` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `CMS`;

-- --------------------------------------------------------

--
-- Table structure for table `artikelen`
--

DROP TABLE IF EXISTS `artikelen`;
CREATE TABLE `artikelen` (
`id` int(11) NOT NULL,
  `text` varchar(45) DEFAULT NULL,
  `titel` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `kaarten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`id`, `naam`, `kaarten_id`) VALUES
(1, 'Tosti''s', 1),
(2, 'Soep', 1),
(3, 'Voorgerechten', 2),
(4, 'Lekker bij de borrel of als voorgerechtje', 2),
(5, 'Maaltijdsalades', 2),
(6, 'Hoofdgerechten - Vlees', 2),
(7, 'Hoofdgerechten - Vis', 2);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
`id` int(11) NOT NULL,
  `locatie` varchar(45) DEFAULT NULL,
  `text` longtext
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `locatie`, `text`) VALUES
(1, 'Index', '<p>Halloo dit is een test voor de content hallo fehwhfueijfhuewhuifew</p>\r\n'),
(2, 'Nieuws', '<p>Hnieuws</p>\r\n'),
(3, 'Geschiedenis', '<p>geschiedenis</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

DROP TABLE IF EXISTS `gebruikers`;
CREATE TABLE `gebruikers` (
`id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
`id` int(11) NOT NULL,
  `locatie` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kaarten`
--

DROP TABLE IF EXISTS `kaarten`;
CREATE TABLE `kaarten` (
`id` int(11) NOT NULL,
  `naam` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kaarten`
--

INSERT INTO `kaarten` (`id`, `naam`) VALUES
(1, 'lunch'),
(2, 'Diner'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
`id` int(11) NOT NULL,
  `beschrijving` longtext,
  `naam` varchar(45) DEFAULT NULL,
  `prijs` double NOT NULL,
  `kaarten_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `beschrijving`, `naam`, `prijs`, `kaarten_id`, `categorie_id`) VALUES
(9, 'Het lekkerste stukje vlees van het varken', 'Varkens medaillons', 9.95, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `recenties`
--

DROP TABLE IF EXISTS `recenties`;
CREATE TABLE `recenties` (
`id` int(11) NOT NULL,
  `akkoord` int(1) DEFAULT '0',
  `rating` varchar(45) DEFAULT NULL,
  `recentie` longtext,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recenties`
--

INSERT INTO `recenties` (`id`, `akkoord`, `rating`, `recentie`, `naam`) VALUES
(1, 2, '5.0', 'Hallo dit is een test', 'Wouter Stulp'),
(2, 1, '5.0', 'Hallo dit is een test', 'Wouter Stulp'),
(3, 0, '6.0', 'Hallo ik ben wouter', 'Martin Elderman');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
`id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `number_of_persons` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `extras` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `number_of_persons`, `datetime`, `extras`) VALUES
(1, 'Wouter', 'Stulp', 'w.stulp@email.com', '1234567890', 4, '2015-06-15 11:11:52', NULL),
(2, 'Martin', 'Elderman', 'm.elderman@email.com', '1345678900', 5, '2015-06-17 13:25:12', 'ik ben allergies voor (.....)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikelen`
--
ALTER TABLE `artikelen`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`id`,`kaarten_id`), ADD KEY `fk_categorie_kaarten_idx` (`kaarten_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kaarten`
--
ALTER TABLE `kaarten`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
 ADD PRIMARY KEY (`id`,`kaarten_id`), ADD KEY `fk_menu_kaarten1_idx` (`kaarten_id`);

--
-- Indexes for table `recenties`
--
ALTER TABLE `recenties`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
 ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikelen`
--
ALTER TABLE `artikelen`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kaarten`
--
ALTER TABLE `kaarten`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `recenties`
--
ALTER TABLE `recenties`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
ADD CONSTRAINT `fk_categorie_kaarten` FOREIGN KEY (`kaarten_id`) REFERENCES `kaarten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
