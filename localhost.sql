create database if not exists u222995670_arcap default character set utf8 collate utf8_general_ci;
use u222995670_arcap;

# Privilegios para `u222995670_alemv`@`localhost`

CREATE USER 'u222995670_alemv'@'localhost' IDENTIFIED BY 'ardnajela1611';

GRANT ALL PRIVILEGES ON `u222995670_arcap`.* TO 'u222995670_alemv'@'localhost';

FLUSH PRIVILEGES;

create table publicacion (
	id int unsigned auto_increment,
	titulo varchar(45) not null,
	subtitulo varchar(45),
	descripcion text,
	imagen varchar(100),
	fechapub int unsigned not null,
	primary key(id)
);

insert into publicacion (id, titulo, subtitulo, descripcion, imagen, fechapub) values
(1, 'Cursos de Teclado', '100% Práctico', 'Ofrecemos nuestro curso de teclado orientado a aquellas personas que quieren aprender a tocar en el estilo Folkrock como los ministerios de alabanza. Con este curso aprenderas todo lo necesario para que puedas tocar, programar tu teclado, creación de tus propios sonidos, componer tus propias alabanzas y asi sean verdaderos adoradores del Señor.', 'arca4.jpg', 1467209836),
(2, 'Nuestras novedades', 'Muy pronto...', NULL, 'arca3.jpg', 1467209835);

create table usuario (
  id int unsigned auto_increment,
  email varchar(50) not null,
  password varchar(50) not null,
  nombres varchar(30),
  apellidos varchar(50),
  categoria enum('superadmin', 'admin') not null,
  active tinyint(1) not null default 1,
  primary key(id)
);

insert into usuario values
(NULL, 'almanza.danny@gmail.com', '7cf0ba0ed16485700bef1a3acfb3d6236a79f550', 'Danny', 'Almanza Amaru', 'superadmin', 1),
(NULL, 'ale.r1611@gmail.com', '07fbe2912e022c097628b3867316e78449a8bcdf', 'Alejandra', 'Mujica Villa', 'superadmin', 1);
(NULL, 'jes_rey33@hotmail.com', 'f743aa7865d5375afd65465e9263fcf2f77c5743', 'Reynaldo', 'Mujica Villa', 'admin', 1);

CREATE TABLE `audio` (
  `idaudio` int(11) NOT NULL,
  `tituloaudio` varchar(45) DEFAULT NULL,
  `autoraudio` varchar(45) DEFAULT NULL,
  `audio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE video (
  id int unsigned auto_increment,
  titulo varchar(45) not null,
  autor varchar(45) DEFAULT NULL,
  url_video varchar(100) not null,
  primary key(id)
);








-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema u222995670_arcap
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `u222995670_arcap` ;

-- -----------------------------------------------------
-- Schema u222995670_arcap
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `u222995670_arcap` DEFAULT CHARACTER SET utf8 ;
USE `u222995670_arcap` ;

-- -----------------------------------------------------
-- Table `u222995670_arcap`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u222995670_arcap`.`usuario` ;

CREATE TABLE IF NOT EXISTS `u222995670_arcap`.`usuario` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `nombres` VARCHAR(30) NULL DEFAULT NULL,
  `apellidos` VARCHAR(50) NULL DEFAULT NULL,
  `categoria` ENUM('superadmin', 'admin') NOT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `u222995670_arcap`.`publicacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u222995670_arcap`.`publicacion` ;

CREATE TABLE IF NOT EXISTS `u222995670_arcap`.`publicacion` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(45) NOT NULL,
  `subtitulo` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `imagen` VARCHAR(100) NULL DEFAULT NULL,
  `fechapub` INT UNSIGNED NOT NULL,
  `usuario_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_publicacion_usuario_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_publicacion_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u222995670_arcap`.`usuario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `u222995670_arcap`.`video`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `u222995670_arcap`.`video` ;

CREATE TABLE IF NOT EXISTS `u222995670_arcap`.`video` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `autor` VARCHAR(100) NULL,
  `url_video` VARCHAR(100) NOT NULL,
  `usuario_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_video_usuario1_idx` (`usuario_id` ASC),
  CONSTRAINT `fk_video_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `u222995670_arcap`.`usuario` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `u222995670_arcap`.`usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `u222995670_arcap`;
INSERT INTO `u222995670_arcap`.`usuario` (`id`, `email`, `password`, `nombres`, `apellidos`, `categoria`, `active`) VALUES (1, 'almanza.danny@gmail.com', '7cf0ba0ed16485700bef1a3acfb3d6236a79f550', 'Danny', 'Almanza Amaru', 'superadmin', 1);
INSERT INTO `u222995670_arcap`.`usuario` (`id`, `email`, `password`, `nombres`, `apellidos`, `categoria`, `active`) VALUES (2, 'ale.r1611@gmail.com', '07fbe2912e022c097628b3867316e78449a8bcdf', 'Alejandra', 'Mujica Villa', 'superadmin', 1);
INSERT INTO `u222995670_arcap`.`usuario` (`id`, `email`, `password`, `nombres`, `apellidos`, `categoria`, `active`) VALUES (3, 'jes_rey33@hotmail.com', 'f743aa7865d5375afd65465e9263fcf2f77c5743', 'Reynaldo', 'Mujica Villa', 'admin', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `u222995670_arcap`.`publicacion`
-- -----------------------------------------------------
START TRANSACTION;
USE `u222995670_arcap`;
INSERT INTO `u222995670_arcap`.`publicacion` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `fechapub`, `usuario_id`) VALUES (1, 'Cursos de Teclado', '100% Práctico', 'Ofrecemos nuestro curso de teclado orientado a aquellas personas que quieren aprender a tocar en el estilo Folkrock como los ministerios de alabanza. Con este curso aprenderas todo lo necesario para que puedas tocar, programar tu teclado, creación de tus propios sonidos, componer tus propias alabanzas y asi sean verdaderos adoradores del Señor.', 'arca4.jpg', 1467209836, 3);
INSERT INTO `u222995670_arcap`.`publicacion` (`id`, `titulo`, `subtitulo`, `descripcion`, `imagen`, `fechapub`, `usuario_id`) VALUES (2, 'Nuestras novedades', 'Muy pronto...', NULL, 'arca3.jpg', 1467209835, 3);

COMMIT;

