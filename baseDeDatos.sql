create database u222995670_arcap default character set utf8 collate utf8_unicode_ci;

use u222995670_arcap;

create table usuario(
    id integer unsigned auto_increment,
    email varchar(50) not null,
    password varchar(50) not null,
    nombres varchar(30),
    apellidos varchar(50),
    categoria tinyint(1) unsigned not null,
    active tinyint(1) not null default 1,
    primary key (id)
);

insert into usuario values (null,'almanza.danny@gmail.com','7cf0ba0ed16485700bef1a3acfb3d6236a79f550','Danny','Almanza Amaru',1,1);
insert into usuario values (null,'ale.r1611@gmail.com','07fbe2912e022c097628b3867316e78449a8bcdf','Alejandra','Mujica Villa',1,1);
insert into usuario values (null,'jes_rey33@hotmail.com','f743aa7865d5375afd65465e9263fcf2f77c5743','Reynaldo','Mujica Villa',2,1);

create table publicacion(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    subtitulo varchar(45),
    descripcion text,
    imagen varchar(10),
    fechapub integer unsigned not null,
    usuario_id integer unsigned not null,
    primary key (id)
);

insert into publicacion values (null,'Cursos de Teclado','100% Pŕactico','Ofrecemos nuestro curso de teclado orientado a aquellas personas que quieren aprender a tocar en el estilo Folkrock como los ministerios de alabanza. Con este curso aprenderas todo lo necesario para que puedas tocar, programar tu teclado, creación de tus propios sonidos, componer tus propias alabanzas y asi sean verdaderos adoradores del Señor.','arca4.jpg',1467209836,3);
insert into publicacion values (null,'Nuestras novedades','Muy pronto...','','arca3.jpg',1467209835,3);

create table video(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    autor varchar(45),
    url_video varchar(100),
    fecha integer unsigned not null,
    usuario_id integer unsigned not null,
    primary key (id)
);

insert into video values (null,'Video 1','Arca producciones','https://www.youtube.com?v=123456',1467209836,3);
insert into video values (null,'Video 2','Arca produccionesg','https://www.youtube.com?v=123456',1467209835,3);

create table audio(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    url_video varchar(100),
    fecha integer unsigned not null,
    usuario_id integer unsigned not null,
    primary key (id)
);

drop table menu;
create table menu(
    id integer unsigned auto_increment,
    posicion tinyint unsigned,
    nombre varchar(100) not null,
    ruta varchar(100) not null,
    icono varchar(100),
    categoria tinyint(1) unsigned,
    usuario_id integer unsigned not null,
    primary key (id)
);