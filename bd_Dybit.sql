CREATE DATABASE Biblioteca_Dybit;

USE Biblioteca_Dybit;

CREATE TABLE Usuarios (
    ID int NOT NULL AUTO_INCREMENT,
    Nome varchar(255) NOT NULL,
    Email varchar(255),
    Senha varchar(255),
    Tipo varchar(255),
    LeituraDinamica boolean DEFAULT false,
    LeituraVozAlta boolean DEFAULT false,
    PRIMARY KEY (ID)
);

CREATE TABLE Livros (
    id int NOT NULL AUTO_INCREMENT,
    Titulo varchar(255) NOT NULL,
    Autor varchar(255),
    Preco decimal(6,2),
    Sinopse text,
    Resumo text,
    Conteudo text,
    PRIMARY KEY (ID)
);

CREATE TABLE Compras (
    UsuarioID int,
    LivroID int,
    DataCompra datetime,
    FOREIGN KEY (UsuarioID) REFERENCES Usuarios(ID),
    FOREIGN KEY (LivroID) REFERENCES Livros(ID)
);


-- USE meu_banco;

-- CREATE TABLE usuarios (
--  username VARCHAR(30) NOT NULL,
--    email VARCHAR (255) NOT NULL,
--   password VARCHAR(255) NOT NULL,
--    confirm_password VARCHAR(255) NOT NULL;
--);