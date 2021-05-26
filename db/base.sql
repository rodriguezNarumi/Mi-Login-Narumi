
/*creamos la base datos*/
create database if not exists login_ro;

/*Indicamos que trabajaremos con la base de datos creada*/
use login_ro;

/*crear la tabla de usuario*/
create table if not exists usuarios (

  id int auto_increment not null primary key,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  usuario varchar(50) not null,
  password varchar(300) not null
  

);