drop table publicacion;
drop table publicacion2;

CREATE DATABASE IF NOT EXISTS `arcaprod` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `arcaprod`;

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

