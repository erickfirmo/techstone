CREATE DATABASE `techstone`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;

USE `techstone`;

CREATE TABLE `users`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `email` varchar(80) NOT NULL UNIQUE,
    `password` varchar(64),
    PRIMARY KEY(`id`)
);

CREATE TABLE `admins`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` varchar(20) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `email` varchar(80) NOT NULL UNIQUE,
    `password` varchar(64),
    PRIMARY KEY(`id`)
);

CREATE TABLE `post`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `titulo` varchar(20) NOT NULL,
    `conteudo` varchar(100) NOT NULL,
    `imagem` varchar(255) NOT NULL UNIQUE,
    PRIMARY KEY(`id`)
);

CREATE TABLE `mensagens`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` varchar(20) NOT NULL,
    `email` varchar(100) NOT NULL,
    `assunto` varchar(100) NOT NULL,
    `empresa` varchar(40),
    `whatsapp` varchar(20),
    `telefone` varchar(20) NOT NULL,
    `opcao_contato` enum('telefone', 'email', 'whatsapp') NOT NULL,
    `conteudo` varchar(400),
    `favorita` enum('s', 'n') DEFAULT 'n',
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `is_deleted` enum('0', '1', '2', '3') DEFAULT '0',
    PRIMARY KEY(`id`)
);
