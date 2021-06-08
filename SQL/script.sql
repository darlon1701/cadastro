CREATE DATABASE db_cadastro;

USE db_cadastro;

CREATE TABLE db_cadastro(

    id_usuario INT(20) AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefone INT(20),
    idade INT(10),
    PRIMARY KEY(id_usuario)
);