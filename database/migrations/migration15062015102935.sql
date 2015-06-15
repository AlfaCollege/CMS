DROP TABLE IF EXISTS `reservering`;

CREATE TABLE IF NOT EXISTS `reservations` (
	`id` int(11) auto_increment unique,
	`first_name` varchar(255),
	`last_name` varchar(255),
	`email` varchar(255),
	`phone_number` varchar(255),
	`number_of_persons` int(11),
	`datetime` datetime,
	`extras` text
);