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

CREATE TABLE `audio` (
  `idaudio` int(11) NOT NULL,
  `tituloaudio` varchar(45) DEFAULT NULL,
  `autoraudio` varchar(45) DEFAULT NULL,
  `audio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `video` (
  `idvideo` int(11) NOT NULL,
  `titulovideo` varchar(45) DEFAULT NULL,
  `autorvideo` varchar(45) DEFAULT NULL,
  `video` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

