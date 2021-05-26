create schema if not exists estudiante;

use estudiante;

create table if not exists estudiante(
  id_estudiante int not null auto_increment primary key,
  nombre varchar(45) not null, 
  paterno varchar(45) not null, 
  materno varchar(45) not null, 
  movil varchar(45) not null,
  dias varchar(45) not null,
  pago varchar(45) not null
)engine =  innodb;

insert into estudiante(nombre, paterno, materno, movil, dias, pago) values("Enrique", "Calderas", "Martínez", "5577655927");
insert into estudiante(nombre, paterno, materno, movil, dias, pago) values("Anne", "Del Marquez", "Contreras", "5544328976");
