CREATE DATABASE IF NOT EXISTS  GuauMiau;
use GuauMiau;
create table Usuarios(
    Id int PRIMARY key AUTO_INCREMENT,
    Nombre varchar(120),
    Correo varchar(120),
    Clave varchar(120),
    Telefono int (10),
    Estado varchar(120),
    Municipio varchar(120),
    Colonia varchar(120),
    CodigoPostal int(10)
);