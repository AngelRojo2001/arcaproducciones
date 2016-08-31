create database u222995670_arcap;

use u222995670_arcap;

create table usuario(
    id integer unsigned auto_increment,
    email varchar(50) not null,
    password varchar(50) not null,
    nombres varchar(30),
    apellidos varchar(50),
    categoria enum('superadmin','admin') not null,
    active tinyint(1) not null,
    primary key (id)
);

insert into usuario values (null,'almanza.danny@gmail.com','7cf0ba0ed16485700bef1a3acfb3d6236a79f550','Danny','Almanza Amaru','superadmin',1);
insert into usuario values (null,'ale.r1611@gmail.com','07fbe2912e022c097628b3867316e78449a8bcdf','Alejandra','Mujica Villa','superadmin',1);
insert into usuario values (null,'jes_rey33@hotmail.com','f743aa7865d5375afd65465e9263fcf2f77c5743','Reynaldo','Mujica Villa','admin',1);

create table publicacion(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    subtitulo varchar(45),
    descripcion text,
    imagen varchar(10),
    fechapub integer unsigned not null,
    usuario_id integer not null,
    primary key (id)
);

create table video(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    autor varchar(45),
    url_video varchar(100),
    fecha integer unsigned not null,
    usuario_id integer unsigned not null,
    primary key (id)
);

create table audio(
    id integer unsigned auto_increment,
    titulo varchar(45) not null,
    url_video varchar(100),
    fecha integer unsigned not null,
    usuario_id integer unsigned not null,
    primary key (id)
);

create table menu(
    id integer unsigned auto_increment,
    posicion tinyint unsigned,
    ruta varchar(100),
    url varchar(255),
    categoria tinyint(1) unsigned,
    usuario_id integer unsigned not null,
    primary key (id)
);