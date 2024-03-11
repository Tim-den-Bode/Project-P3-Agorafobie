create database AgaroFobie;
USE AgaroFobie;

CREATE USER 'Dani'@'localhost' IDENTIFIED BY '1234';

GRANT ALL PRIVILEGES ON AgaroFobie.* TO 'Dani'@'localhost';

FLUSH PRIVILEGES;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);