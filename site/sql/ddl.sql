CREATE DATABASE bdContato;

USE bdContato;

CREATE TABLE tbUsuario (
	idUsuario INT PRIMARY KEY AUTO_INCREMENT
    , nomeUsuario VARCHAR (70)
    , emailUsuario VARCHAR (70)
    , salaUsuario INT
    , rmUsuario INT
);

CREATE TABLE tbMensagem (
    idMensagem INT PRIMARY KEY AUTO_INCREMENT
    , assuntoMensagem VARCHAR (100)
    , conteudoMensagem VARCHAR (1000)
    , idUsuario INT
    , FOREIGN KEY (idUsuario) REFERENCES tbUsuario(idUsuario)
);