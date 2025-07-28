drop database if exists db_biblioteca;

create database if not exists db_biblioteca;

use SGB;

create table if not exists generos(
id int primary key auto_increment,
nombre varchar(100) not null
);

create table if not exists autores(
id int primary key auto_increment,
nombre varchar(100) not null
);

create table if not exists libros(
id int primary key auto_increment,
id_autor_es int not null,
id_genero int not null,
titulo varchar(100) not null,
descripcion text not null,
editorial varchar(100) not null,
anio_publicacion date not null,
ISBN varchar(100) not null,
immagen varchar(1000) not null,
estado enum("Disponible","Prestado","Reservado") not null,
cantidad int not null,
foreign key (id_autor_es) references autores(id),
foreign key (id_genero) references generos(id)
);

create table if not exists libros_autores(
id_libro int not null,
id_autor int not null,
foreign key (id_libro) references libros(id),
foreign key (id_autor) references autores(id)
);

create table if not exists libros_generos(
id_libro int not null,
id_genero int not null,
foreign key (id_libro) references libros(id),
foreign key (id_genero) references generos(id)
);

CREATE TABLE IF NOT EXISTS usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    numero_documento INT UNIQUE NOT NULL,
    tipo ENUM("Estudiante", "Docente", "Bibliotecario") NOT NULL,
    telefono VARCHAR(100) NULL,
    correo_electronico VARCHAR(100) UNIQUE NOT NULL,
    contrasena VARCHAR(255) NOT NULL
);


create table if not exists prestamos(
id int primary key auto_increment,
id_usuario int not null,
id_libro int not null,
fecha_prestamo datetime default current_timestamp,
fecha_devolucion date not null,
estado enum("Pendiente", "Aceptado"),
foreign key (id_usuario) references usuarios(id),
foreign key (id_libro) references libros(id)
);

create table if not exists reservas(
id int primary key auto_increment,
id_usuario int not null,
id_libro int not null,
fecha_reserva date not null,
estado enum("Aceptada","Rechazada","Pendiente") not null,
foreign key (id_usuario) references usuarios(id),
foreign key (id_libro) references libros(id)
);

create table if not exists devoluciones(
id int primary key auto_increment,
id_usuario int not null,
id_libro int not null,
fecha_devolucion datetime default current_timestamp,
foreign key (id_usuario) references usuarios(id),
foreign key (id_libro) references libros(id)
);

create table if not exists ejemplares(
id int primary key auto_increment,
id_libro int not null,
codigo varchar(50) not null,
estatus enum("","",""),
foreign key (id_libro) references libros(id)
);

select * From ejemplares;

INSERT INTO generos (nombre) VALUES 
('Filosofía'),
('Ciencia ficción'),
('Aventura');

INSERT INTO autores (nombre) VALUES 
('Antoine de Saint-Exupéry'),
('Isaac Asimov'),
('Jules Verne');


INSERT INTO libros (
    id_autor_es, 
    id_genero, 
    titulo, 
    descripcion, 
    editorial, 
    anio_publicacion, 
    ISBN, 
    immagen, 
    estado, 
    cantidad
) VALUES 
-- Libro 1: El Principito
(1, 1, 'El Principito', 
 'Un cuento filosófico que explora temas como la amistad, el amor y la soledad.',
 'Reynal & Hitchcock', 
 '1943-04-06', 
 '978-0156012195', 
 'https://ejemplo.com/el-principito.jpg', 
 'Disponible', 
 5),

-- Libro 2: Fundación
(2, 2, 'Fundación', 
 'Una saga de ciencia ficción sobre el futuro de la humanidad y el colapso de un imperio galáctico.',
 'Gnome Press', 
 '1951-06-01', 
 '978-0553293357', 
 'https://ejemplo.com/fundacion.jpg', 
 'Disponible', 
 10),

-- Libro 3: Veinte mil leguas de viaje submarino
(3, 3, 'Veinte mil leguas de viaje submarino', 
 'Una increíble aventura submarina a bordo del Nautilus, bajo el mando del capitán Nemo.',
 'Pierre-Jules Hetzel', 
 '1870-01-01', 
 '978-1542047244', 
 'https://ejemplo.com/veinte-mil-leguas.jpg', 
 'Disponible', 
 7);
 
 Select * from autores;


CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Puedes agregar un usuario de ejemplo
INSERT INTO users (username, password) VALUES
('admin', PASSWORD('12345'));

select * from usuarios;