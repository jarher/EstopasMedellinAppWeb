DROP DATABASE IF EXISTS estopasmedellin;

CREATE DATABASE IF NOT EXISTS estopasmedellin;

USE estopasmedellin;

CREATE TABLE administrador(
    nombre varchar(30) NOT NULL,
    email varchar(30) UNIQUE PRIMARY KEY NOT NULL,
    password varchar(30) UNIQUE NOT NULL
);

INSERT INTO administrador (nombre, email, password) values('jeff', 'jefferh33@gmail.com','123456');

CREATE TABLE productos(
    product_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(20) NOT NULL,
    peso VARCHAR(20) NOT NULL,
    color VARCHAR(20) NOT NULL,
    descripcion TEXT(250) NOT NULL,
    imgUrl VARCHAR(20) NOT NULL
);

CREATE TABLE suscriptores(
    email VARCHAR(30) UNIQUE PRIMARY KEY NOT NULL,
    fecha_ingreso TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO suscriptores (email) VALUES ('jefferh33@gmail.com'), ('luis@gmail.com'), ('betty@gmail.com');

CREATE TABLE mensajes(
    email VARCHAR(30) UNIQUE PRIMARY KEY NOT NULL,
    nombre VARCHAR(30) NOT NULL,
    telefono VARCHAR(30) NOT NULL,
    asunto VARCHAR(20) NOT NULL,
    mensaje TEXT(1000) NOT NULL,
    fecha_ingreso TIMESTAMP DEFAULT CURRENT_TIMESTAMP    
);

