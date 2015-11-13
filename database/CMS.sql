-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Host: db.caferestauranthetwittepaard.nl
-- Generation Time: Jun 24, 2015 at 09:57 AM
-- Server version: 5.5.38
-- PHP Version: 5.4.41-0+deb7u1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `md296091db331475`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikelen`
--

CREATE TABLE IF NOT EXISTS `artikelen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext,
  `titel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `artikelen`
--

INSERT INTO `artikelen` (`id`, `text`, `titel`) VALUES
(1, 'Dit is een test', 'Test'),
(2, 'Dit is nog een test', 'Test2'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris at vulputate quam, eu consequat nulla. Integer porta egestas dolor sit amet maximus. Nulla ut posuere ex. Praesent eget arcu bibendum est posuere auctor sit amet at risus. Sed lacinia vestibulum magna. Proin ut scelerisque erat, nec sodales urna. Aliquam vel pretium dolor, quis condimentum urna. Praesent rhoncus mattis rutrum. Duis dapibus egestas turpis, sed mattis elit aliquet non. Nullam libero sapien, cursus nec varius vel, facilisis eget ex. Sed a venenatis nulla. Maecenas vestibulum nisi id orci varius egestas. Vivamus tempus elit a justo rhoncus, vitae aliquam erat fermentum. Cras ac quam sagittis, posuere est eget, egestas velit.\n\nMauris eget mi condimentum, venenatis risus sed, varius magna. Proin lacinia dui turpis, et ornare ex pretium at. Nunc ut nisl ut arcu consequat sagittis. In neque eros, pharetra nec felis et, pharetra volutpat ex. Nulla auctor elit vel orci rhoncus, molestie tristique dolor rutrum. Integer sit amet imperdiet nisi, quis tincidunt felis. Vestibulum non ligula rhoncus, pharetra orci eu, pulvinar magna. Vivamus pharetra magna consequat suscipit imperdiet. Cras elementum pulvinar dolor eu mollis. Suspendisse at odio egestas, dignissim eros at, aliquet augue. Aenean suscipit orci varius, lacinia justo non, semper diam. Proin eleifend porttitor justo et consectetur. Etiam accumsan diam vitae accumsan gravida. Vivamus tempus cursus augue id accumsan. Nunc faucibus pretium eros sed sollicitudin. Suspendisse et velit egestas neque condimentum rhoncus blandit at nisi.\n\nMorbi placerat, augue ut sollicitudin suscipit, quam odio pharetra felis, eget posuere arcu sapien et elit. Donec ullamcorper dui ac lacus dictum bibendum. Ut in ipsum eu neque vulputate eleifend. In vitae sem id metus vestibulum faucibus non non magna. Nam ullamcorper tincidunt vehicula. Nam sed sodales metus. Aliquam auctor interdum nisl. Praesent quis efficitur urna, sed auctor libero.\n\nAliquam euismod tellus mi. Etiam sit amet vestibulum tortor. Aenean dapibus efficitur diam in ullamcorper. Ut vel tincidunt ipsum. Mauris interdum porta ultricies. Aenean elementum augue et elit dapibus, eu aliquet magna imperdiet. Nunc commodo, urna finibus elementum vehicula, magna turpis imperdiet mauris, euismod convallis metus mi non velit. Praesent fermentum felis eget mauris convallis fermentum. Morbi porta nec ipsum nec sagittis. Morbi viverra egestas urna, vel placerat quam pharetra sed. Curabitur congue rhoncus scelerisque. Duis pharetra pretium elit. Aliquam ultricies velit nec dignissim rutrum. Duis tempus suscipit ipsum eget consectetur. Suspendisse ornare augue efficitur augue convallis aliquam. Fusce interdum cursus venenatis.\n\nAliquam auctor, ex in vestibulum facilisis, lacus ipsum lacinia leo, in condimentum enim sem id diam. Vestibulum in justo massa. Curabitur eget libero orci. Donec turpis enim, venenatis ut dui nec, luctus consequat odio. Suspendisse eleifend elit in augue porta, a pellentesque velit commodo. Sed nec quam mattis, euismod est et, tempus est. In pretium felis odio, et varius velit pretium vel. Integer et velit dignissim, ultrices mauris vel, vehicula nibh. Vivamus sit amet cursus risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus sollicitudin sapien mi, id tempus ipsum ultricies quis.', 'Lorem ipsum'),
(4, 'Lol dit is een kut text', 'hallo'),
(5, 'Nog 1', 'nog1');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(45) DEFAULT NULL,
  `kaarten_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`kaarten_id`),
  KEY `fk_categorie_kaarten_idx` (`kaarten_id`)
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

CREATE TABLE IF NOT EXISTS `content` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Locatie` varchar(45) DEFAULT NULL,
  `Text` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`ID`, `Locatie`, `Text`) VALUES
(3, 'HWP.MENU.1', 'Gebraden kip met niks.'),
(4, 'HWP.MENU.2', 'Patat met drie keer niks.'),
(5, 'HWP.MENU.3', 'Tosti met niks.'),
(6, 'HWP.NIEUWS.1', 'Wij hebben kompleet geen nieuws. Waarom komt U hier lmao'),
(7, 'HWP.NIEUWS.2', 'Je zou denken dat bij het tweede nieuws stuckje er iets zou staan maar nee.'),
(8, 'WH.HOME.1', '<p>Wij heten u van harte welkom op <strong>paardenstalling "Wobbesheerd"</strong>.</p>\r\n    <p>Als u op zoek bent naar rust, ruimte en professionele verzorging / stalling voor uw pony/paard(en), dan zijn wij de plek voor u.</p>\r\n    <p>Op 10 minuten gelegen van Groningen vindt u:</p>\r\n    <p><img class="img-responsive alignright" src="upload/DSC_0046-small.jpg" width="300" height="199"></p>\r\n    <ul>\r\n    <li>Overdekte rijhal 20 bij 40 meter.</li>\r\n    <li>2 grote altijd beschikbare rijbakken.</li>\r\n    <li>Stapmolen.</li>\r\n    <li>80 hectare land voor uw paard.</li>\r\n    <li>3 grote stallen waar onder ook groeps huisvesting van veulens tot driejarigen.</li>\r\n    <li>Spoelplaats binnen en buiten.</li>\r\n    <li>Parkeerplaats voor uw trailer.</li>\r\n    <li>Omheinde velden met watervoorzieningen.</li>\r\n    <li>Video bewaking + Birth Alarm voor drachtige merries.</li>\r\n    <li>24 uur per dag aanwezigheid en verzorging.</li>\r\n    <li>Ruimte voor stalling van uw eigen paarden benodigdheden. (kasten kunnen voor u geregeld worden als u nog niet over uw eigen beschikt)</li>\r\n    <li>Bossen op korte afstand voor de ultieme rij ervaring.</li>\r\n    </ul>'),
(9, 'WH.VISIE.1', '<p><img class="img-responsive alignright" src="upload/visie_floortje.jpg" alt="Visie" width="300" height="237"></p>\r\n    <p>Daarmee bedoelen wij dat wij uw paarden kunnen onderhouden op de manier die U wenst. Wij zijn flexibel om dat gene te doen dat u van ons verlangt voor uw paard.</p>\r\n    <p>In de zomermaanden staan de paarden in goed bijgehouden weilanden, welke regelmatig worden vernieuwd. ''s Nachts gaan de paarden weer naar hun eigen stal. De beweiding van de paarden vindt plaats in een omweidesysteem (vaak wisselen van perceel). De ruwvoederwinning voor de winterperiode vindt hoofdzakelijk plaats in de vorm van grassilage (voordroogkuil) . Dit is half gedroogd gras (40-50% droge stof) dat afgesloten van lucht wordt bewaard. De weilanden zijn omheind met elektrische afrastering.</p>\r\n    <p>In de winter staan de paarden in de stal. De paarden tot drie jaar staan in groepen van maximaal 8 dieren. Deze manier van huisvesting heeft belangrijke voordelen ten opzichte van individuele huisvesting in boxen. Het frisse stalklimaat heeft een gunstige invloed op de gezondheid van uw paarden. Bovendien hebben de paarden relatief veel bewegingsvrijheid en contact met soortgenoten. De paarden krijgen onbeperkt ruwvoer verstrekt. Het rantsoen van de veulens wordt aangevuld met ongeveer 2 kg krachtvoer per dag. Het grootste deel van het ruwvoer wordt zelf gewonnen en wordt bewaard in plastic folie gewikkelde balen. Als strooisel in de stallen wordt gebruik gemaakt van tarwestro. Het drinkwater is voorzien van een rondpompsysteem die het water in de leidingen verwarmt, zodat bij vorst de drinkwaterverstrekking aan de paarden niet in het geding komt. De paarden komen dagelijks in de paddock die naast de stal is gelegen. De groepen worden apart naar buiten gelaten in de paddock. Voor paarden ouder dan 3 jaar is het mogelijk om uw paard te stallen in een van onze individuele paardenboxen.</p>\r\n    <p>Voor de opfok van uw paard hanteren wij een aparte prijs voor zowel de zomer- als de wintermaanden. De prijzen zijn exclusief hoefsmid- dierenarts- en entkosten.</p>\r\n    <p>Voor meer informatie inzake de prijzen van het opfokken van uw jonge paard/pony of het stallen van uw paard/pony kunt u met ons contact opnemen.</p>'),
(10, 'WH.CONTACT.1', '<p><img class="img-responsive alignright" src="upload/contact.jpg" alt="Contact" width="300" height="199"></p>\r\n<p>S.R. Wobbes</p>\r\n<p>Hoofdstraat 216<br> 9828 PD Oostwold (gem Leek, Gr.)<br> Tel: 050-5515623<br> Mob: 06-15596766</p>\r\n<p>email: <a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>\r\n<p>Als u vragen heeft of op zoek bent naar verdere mogelijkheden, neemt u dan contact op met ons. Wij staan u graag te woord.</p>\r\n<p>Met vriendelijke groet,<br>Reinier Wobbes</p>\r\n<p><a href="&#x6d;&#97;&#x69;&#x6c;&#x74;&#x6f;&#58;&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;">&#x69;&#x6e;&#x66;&#x6f;&#64;&#x77;&#x6f;&#98;&#98;&#x65;&#x73;&#x68;&#x65;&#x65;&#x72;&#x64;&#46;&#x6e;&#x6c;</a></p>\r\n<p>&nbsp;</p>'),
(11, 'WH.ROUTE.1', '<ul>\r\n    <li><a href="http://maps.google.nl/maps?f=d&source=s_d&saddr=53.182726,6.37325&daddr=Pasop+to:Hoofdstraat&hl=nl&geocode=%3BFfaNKwMd9lVhAA%3BFda8KwMdkwpiAA&mra=dme&mrcr=0&mrsp=0&sz=16&via=1&sll=53.184513,6.377563&sspn=0.010312,0.019312&ie=UTF8&ll=53.191636,6.402454&spn=0.082485,0.154495&z=13" target="_blank">\r\n    <strong>Vanuit Joure/Leek/Drachten</strong></a>;\r\n    afslag Leek (A7), de rotonde 3/4 nemen.\r\n    Vervolgens de volgende rotonde 1/4 nemen zodat u parallel langs de snelweg komt te rijden.\r\n    Aan het einde van de parallelweg moet u links afslaan,\r\n    vervolgens ongeveer 50 meter en dan is Wobbesheerd aan uw rechterhand.</li>\r\n    <li><a href="http://maps.google.nl/maps?f=d&source=s_d&saddr=53.199902,6.51279&daddr=Hoofdstraat+216,+9828+Leek&hl=nl&geocode=&mra=dme&mrcr=0&mrsp=0&sz=16&sll=53.20129,6.51118&sspn=0.010308,0.019312&ie=UTF8&ll=53.205518,6.473522&spn=0.075158,0.154495&z=13" target="_blank">\r\n    <strong>Vanuit Groningen/Assen/Winschoten</strong></a>;\r\n    neem de A7 richting Drachten, ongeveer 3 minuten buiten\r\n    Groningen moet u de afslag Hoogkerk nemen.\r\n    Als u beneden bent aangekomen moet u bij de rontonde rechtdoor,\r\n    zodat u weer langs de snelweg komt te rijden. Nadat u met de bocht mee bent gegaan,\r\n    en bij een klapbrug over het water bent gegaan moet u direct links afslaan.\r\n    Ga dan in de Poffert over de brug links. Rij door het dorp Oostwold en voor\r\n    het viaduct ziet u aan de linker kant Wobbesheerd.</li>\r\n    </ul>\r\n    <p>&nbsp;</p>'),
(12, 'WH.OMGEVING.1', 'Het is heel mooi in de omgeving. Met bloemen enzo.'),
(13, 'HWP.NIEUWS.3', 'Dit is een extra nieuws bericht.'),
(14, 'HWP.NIEUWS.4', 'Nog meer extra gedoe\r\n23-06-2015'),
(15, 'WH.FACILITEITEN.1', '<p>Paardenstalling Wobbesheerd heeft een grote hoeveelheid faciliteiten.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `email`, `naam`, `wachtwoord`) VALUES
(1, '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locatie` varchar(45) NOT NULL,
  `path` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kaarten`
--

CREATE TABLE IF NOT EXISTS `kaarten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beschrijving` longtext,
  `naam` varchar(45) DEFAULT NULL,
  `prijs` double NOT NULL,
  `kaarten_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`kaarten_id`),
  KEY `fk_menu_kaarten1_idx` (`kaarten_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `beschrijving`, `naam`, `prijs`, `kaarten_id`, `categorie_id`) VALUES
(1, 'varken is lekker', 'Varken', 100, 2, 5),
(2, 'tosti', 'ebhuw', 9, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `recenties`
--

CREATE TABLE IF NOT EXISTS `recenties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akkoord` int(1) DEFAULT '0',
  `rating` varchar(45) DEFAULT NULL,
  `recentie` longtext,
  `naam` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `recenties`
--

INSERT INTO `recenties` (`id`, `akkoord`, `rating`, `recentie`, `naam`) VALUES
(9, 2, '09', 'hallo', 'hallo'),
(10, 0, '43', 'fhe7wf8e9wy9f', 'fewfew');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `number_of_persons` int(11) DEFAULT NULL,
  `datetime` text,
  `extras` text,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `number_of_persons`, `datetime`, `extras`) VALUES
(12, 'gveywu', 'ehufewi', 'd@buief', '0540404040', 84, '0000-00-00 00:00:00', 'hufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwac'),
(13, 'gveywu', 'ehufewi', 'd@buief', '0540404040', 84, '0000-00-00 00:00:00', 'hufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwachufeiwhvuirhuviehuiwihhuihuiefhwuifheuiwac'),
(14, 'God', 'Jaja', 'inje@moeder.com', '0644594844', 5, '0000-00-00 00:00:00', 'loremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmloremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmloremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmloremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmloremmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
(15, 'adasd', 'asdads', 'a@a.nl', '1234567890', 123, '18-06-2015 19:30', 'dasad'),
(16, 'adasd', 'asdads', 'a@a.nl', '12345678-0', 123, '18-06-2015 12:00', 'dasad');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_categorie_kaarten` FOREIGN KEY (`kaarten_id`) REFERENCES `kaarten` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
