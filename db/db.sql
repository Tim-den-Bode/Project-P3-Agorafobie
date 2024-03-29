create database agorafobie;

USE agorafobie;

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `answers` text,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)


