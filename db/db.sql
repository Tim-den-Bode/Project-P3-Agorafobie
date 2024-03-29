create database agorafobie;

USE agorafobie;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255),
    `answers` text,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);
