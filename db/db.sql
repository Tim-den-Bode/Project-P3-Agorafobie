create database AgaroFobie;

USE AgaroFobie;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `email` varchar(255),
    `answers` text,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
);

insert into users  (name,email, password) values ('yank','cool', 'dani');