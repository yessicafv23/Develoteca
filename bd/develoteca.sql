create database develoteca;
use develoteca;

create table libros(
id int auto_increment primary key,
nombre varchar(50),
descripcion varchar(100),
precio float,
imagen varchar(50)
);