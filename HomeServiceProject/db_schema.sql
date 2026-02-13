CREATE DATABASE home_service;
USE home_service;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100) UNIQUE,
password VARCHAR(255),
role ENUM('customer','provider','admin') DEFAULT 'customer'
);

CREATE TABLE services(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
description TEXT,
price DECIMAL(10,2)
);
