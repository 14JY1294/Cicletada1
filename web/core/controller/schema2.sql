create database bestcalendar;
use bestcalendar;


create table usuario (
	id int not null auto_increment primary key,
	username varchar(50) not null,
	nombre varchar(50) not null,
	apellido varchar(50) not null,
	email varchar(255) not null,
	password varchar(60) not null,
	activado boolean not null default 1,
	es_admin boolean not null default 0,
	creado datetime
);

insert into usuario (username,password,es_admin,creado) value ("admin",sha1(md5("admin")),1,NOW());

create table contacto (
	id int not null auto_increment primary key,
	nombre varchar(50) not null,
	apellido varchar(50),
	email varchar(255) not null,
	direccion varchar(255),
	telefono varchar(255),
	imagen varchar(255),
	activado boolean not null default 1,
	creado datetime not null
);

create table categoria (
	id int not null auto_increment primary key,
	nombre varchar(200) not null,
	descripcion text
	);

insert into categoria (nombre) values ("Categoria1"),("Categoria2"),("Categoria3");

create table projecto (
	id int not null auto_increment primary key,
	nombre varchar(200) not null,
	descripcion text
	);




create table evento(
	id int not null auto_increment primary key,
	titulo varchar(100) not null,
	descripcion text not null,
	fecha varchar(50) not null,
	hora varchar(50) not null,
	creado datetime not null,
	categoria_id int ,
	usuario_id int not null,
	projecto_id int,
	foreign key (usuario_id) references usuario(id),
	foreign key (categoria_id) references categoria(id),
	foreign key (projecto_id) references projecto(id)
);
