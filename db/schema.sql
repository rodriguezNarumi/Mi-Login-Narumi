
     create schema if not exists alberca;

     use alberca;


   create table if not exists alberca(
     id_estudiante int not null auto_increment primary key,
     nombre varchar(45) not null, 
     paterno varchar(45) not null, 
     materno varchar(45) not null, 
     movil varchar(45) not null,
     dias_clase varchar(10) not null,
     pago varchar(10) not null
   )engine =  innodb;


   insert into alberca(nombre, paterno, materno, movil, dias_clase, pago) values("Naru", "Rodriguez", "Vanegas", "5579055927", "2", "$250");
    insert into alberca(nombre, paterno, materno, movil, dias_clase, pago) values("Alex", "Otilio", "Venegas", "558328976", "3", "$350");
