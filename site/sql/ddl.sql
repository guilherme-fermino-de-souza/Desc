CREATE DATABASE bdNewsWallEtec;

--DROP DATABASE bdNewsWallEtec;

USE bdNewsWallEtec;

CREATE TABLE tbUsuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT
    , nomeUsuario VARCHAR (70)
    , emailUsuario VARCHAR (70)
    , senhaUsuario VARCHAR (256)
);

CREATE TABLE tbRemetente (
	idRemetente INT PRIMARY KEY AUTO_INCREMENT
    , nomeRemetente VARCHAR (70)
    , emailRemetente VARCHAR (70)
    , salaRemetente INT
    , rmRemetente INT
);

CREATE TABLE tbMensagem (
    idMensagem INT PRIMARY KEY AUTO_INCREMENT
    , assuntoMensagem VARCHAR (100)
    , conteudoMensagem VARCHAR (1000)
    , idRemetente INT
    , FOREIGN KEY (idRemetente) REFERENCES tbRemetente(idRemetente)
);