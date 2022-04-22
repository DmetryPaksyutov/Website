CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `first_name`, `last_name`) VALUES
	(1, 'Иван', 'Иванов'),
	(2, 'Петр', 'Петров'),
	(3, 'Сидор', 'Сидоров'),
	(4, 'Сидор', 'Иванов'),
	(5, 'Петр', 'Иванов');
	
