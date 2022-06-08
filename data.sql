DROP DATABASE IF EXISTS estopasmedellin;

CREATE DATABASE IF NOT EXISTS estopasmedellin;

USE estopasmedellin;

CREATE TABLE administrador(
    nombre varchar(30) NOT NULL,
    email varchar(30) UNIQUE NOT NULL,
    password char(30) UNIQUE NOT NULL
);

INSERT INTO administrador (nombre, email, password) values ('jeffer', 'jefferh33@gmail.com', MD5('123456')),('luis', 'luisrojas@gmail.com', MD5('abcde')),('betty','betty@gmail.com',MD5('qwerty'));