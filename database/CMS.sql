# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: CMS
# Generation Time: 2015-06-23 08:33:52 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table artikelen
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artikelen`;

CREATE TABLE `artikelen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext,
  `titel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `artikelen` WRITE;
/*!40000 ALTER TABLE `artikelen` DISABLE KEYS */;

INSERT INTO `artikelen` (`id`, `text`, `titel`)
VALUES
	(1,'Dit is een test','Test'),
	(2,'Dit is nog een test','Test2'),
	(3,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at vulputate quam, eu consequat nulla. Integer porta egestas dolor sit amet maximus. Nulla ut posuere ex. Praesent eget arcu bibendum est posuere auctor sit amet at risus. Sed lacinia vestibulum magna. Proin ut scelerisque erat, nec sodales urna. Aliquam vel pretium dolor, quis condimentum urna. Praesent rhoncus mattis rutrum. Duis dapibus egestas turpis, sed mattis elit aliquet non. Nullam libero sapien, cursus nec varius vel, facilisis eget ex. Sed a venenatis nulla. Maecenas vestibulum nisi id orci varius egestas. Vivamus tempus elit a justo rhoncus, vitae aliquam erat fermentum. Cras ac quam sagittis, posuere est eget, egestas velit.\n\nMauris eget mi condimentum, venenatis risus sed, varius magna. Proin lacinia dui turpis, et ornare ex pretium at. Nunc ut nisl ut arcu consequat sagittis. In neque eros, pharetra nec felis et, pharetra volutpat ex. Nulla auctor elit vel orci rhoncus, molestie tristique dolor rutrum. Integer sit amet imperdiet nisi, quis tincidunt felis. Vestibulum non ligula rhoncus, pharetra orci eu, pulvinar magna. Vivamus pharetra magna consequat suscipit imperdiet. Cras elementum pulvinar dolor eu mollis. Suspendisse at odio egestas, dignissim eros at, aliquet augue. Aenean suscipit orci varius, lacinia justo non, semper diam. Proin eleifend porttitor justo et consectetur. Etiam accumsan diam vitae accumsan gravida. Vivamus tempus cursus augue id accumsan. Nunc faucibus pretium eros sed sollicitudin. Suspendisse et velit egestas neque condimentum rhoncus blandit at nisi.\n\nMorbi placerat, augue ut sollicitudin suscipit, quam odio pharetra felis, eget posuere arcu sapien et elit. Donec ullamcorper dui ac lacus dictum bibendum. Ut in ipsum eu neque vulputate eleifend. In vitae sem id metus vestibulum faucibus non non magna. Nam ullamcorper tincidunt vehicula. Nam sed sodales metus. Aliquam auctor interdum nisl. Praesent quis efficitur urna, sed auctor libero.\n\nAliquam euismod tellus mi. Etiam sit amet vestibulum tortor. Aenean dapibus efficitur diam in ullamcorper. Ut vel tincidunt ipsum. Mauris interdum porta ultricies. Aenean elementum augue et elit dapibus, eu aliquet magna imperdiet. Nunc commodo, urna finibus elementum vehicula, magna turpis imperdiet mauris, euismod convallis metus mi non velit. Praesent fermentum felis eget mauris convallis fermentum. Morbi porta nec ipsum nec sagittis. Morbi viverra egestas urna, vel placerat quam pharetra sed. Curabitur congue rhoncus scelerisque. Duis pharetra pretium elit. Aliquam ultricies velit nec dignissim rutrum. Duis tempus suscipit ipsum eget consectetur. Suspendisse ornare augue efficitur augue convallis aliquam. Fusce interdum cursus venenatis.\n\nAliquam auctor, ex in vestibulum facilisis, lacus ipsum lacinia leo, in condimentum enim sem id diam. Vestibulum in justo massa. Curabitur eget libero orci. Donec turpis enim, venenatis ut dui nec, luctus consequat odio. Suspendisse eleifend elit in augue porta, a pellentesque velit commodo. Sed nec quam mattis, euismod est et, tempus est. In pretium felis odio, et varius velit pretium vel. Integer et velit dignissim, ultrices mauris vel, vehicula nibh. Vivamus sit amet cursus risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sollicitudin sapien mi, id tempus ipsum ultricies quis.','Lorem ipsum'),
	(4,'Lol dit is een kut text','hallo'),
	(5,'Nog 1','nog1');

/*!40000 ALTER TABLE `artikelen` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categorie
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorie`;

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `kaarten_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`kaarten_id`),
  KEY `fk_categorie_kaarten_idx` (`kaarten_id`),
  CONSTRAINT `fk_categorie_kaarten` FOREIGN KEY (`kaarten_id`) REFERENCES `kaarten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;

INSERT INTO `categorie` (`id`, `naam`, `kaarten_id`)
VALUES
	(1,'Tosti\'s',1),
	(2,'Soep',1),
	(3,'Voorgerechten',2),
	(4,'Lekker bij de borrel of als voorgerechtje',2),
	(5,'Maaltijdsalades',2),
	(6,'Hoofdgerechten - Vlees',2),
	(7,'Hoofdgerechten - Vis',2);

/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locatie` varchar(45) DEFAULT NULL,
  `text` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;

INSERT INTO `content` (`id`, `locatie`, `text`)
VALUES
	(1,'Index','<p>supp negers</p>\r\n'),
	(2,'Nieuws','<p>Hallo dit is het nieuws<img alt=\"\" src=\"http://www.voervergelijk.nl/gfx_rubrieken/7.gif\" style=\"height:290px; width:400px\" />g6et7wqgfyduewgfyuewgyfewgugfeuywgfyuewgfuewgyufgewyufgeywu</p>\r\n'),
	(3,'Geschiedenis','<p>geschiedenis</p>\r\n');

/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gebruikers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gebruikers`;

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `gebruikers` WRITE;
/*!40000 ALTER TABLE `gebruikers` DISABLE KEYS */;

INSERT INTO `gebruikers` (`id`, `email`, `naam`, `wachtwoord`)
VALUES
	(1,'','admin','d033e22ae348aeb5660fc2140aec35850c4da997');

/*!40000 ALTER TABLE `gebruikers` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `images`;

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locatie` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table kaarten
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kaarten`;

CREATE TABLE `kaarten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `kaarten` WRITE;
/*!40000 ALTER TABLE `kaarten` DISABLE KEYS */;

INSERT INTO `kaarten` (`id`, `naam`)
VALUES
	(1,'lunch'),
	(2,'Diner'),
	(3,'Dessert');

/*!40000 ALTER TABLE `kaarten` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beschrijving` longtext,
  `naam` varchar(45) DEFAULT NULL,
  `prijs` double NOT NULL,
  `kaarten_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`kaarten_id`),
  KEY `fk_menu_kaarten1_idx` (`kaarten_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;

INSERT INTO `menu` (`id`, `beschrijving`, `naam`, `prijs`, `kaarten_id`, `categorie_id`)
VALUES
	(1,'varken is lekker','Varken',100,2,5),
	(2,'tosti','ebhuw',9,1,3);

/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table recenties
# ------------------------------------------------------------

DROP TABLE IF EXISTS `recenties`;

CREATE TABLE `recenties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akkoord` int(1) DEFAULT '0',
  `rating` varchar(45) DEFAULT NULL,
  `recentie` longtext,
  `naam` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `recenties` WRITE;
/*!40000 ALTER TABLE `recenties` DISABLE KEYS */;

INSERT INTO `recenties` (`id`, `akkoord`, `rating`, `recentie`, `naam`)
VALUES
	(9,2,'09','hallo','hallo'),
	(10,0,'43','fhe7wf8e9wy9f','fewfew');

/*!40000 ALTER TABLE `recenties` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table reservations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `number_of_persons` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `extras` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `number_of_persons`, `datetime`, `extras`)
VALUES
	(1,'Wouter','Stulp','w.stulp@email.com','1234567890',4,'2015-06-15 11:11:52',NULL),
	(2,'Martin','Elderman','m.elderman@email.com','1345678900',5,'2015-06-17 13:25:12','ik ben allergies voor (.....)');

/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
