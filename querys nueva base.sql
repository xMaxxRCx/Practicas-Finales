CREATE DATABASE proyecto;

/* Creacion de tablas */

CREATE TABLE Usuarios(id_Usuario INT AUTO_INCREMENT NOT NULL,
Nombre VARCHAR(55) NOT NULL, 
Apellidop VARCHAR(55) NOT NULL,
ApellidoM VARCHAR(55) NOT NULL,
Email VARCHAR(255) NOT NULL,
FechaN DATE NOT NULL,
Id_Tuser INT NOT NULL,
PRIMARY KEY(id_Usuario)
) ENGINE = INNODB;

CREATE TABLE Tusuario(Id_Tuser INT AUTO_INCREMENT NOT NULL,
NombreT VARCHAR(50) NOT NULL, 
Descripcion TEXT NOT NULL,
PRIMARY KEY(Id_Tuser)
) ENGINE = INNODB;
