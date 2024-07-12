CREATE DATABASE bdNewsWallEtec;

--DROP DATABASE bdNewsWallEtec;

USE bdNewsWallEtec;

CREATE TABLE tbUsuario (
    idUsuario INT PRIMARY KEY AUTO_INCREMENT
    , nomeUsuario VARCHAR (70)
    , emailUsuario VARCHAR (70)
    , tipoUsuario INT
    , senhaUsuario VARCHAR (256)
);

CREATE TABLE tbAluno (
    idAluno INT PRIMARY KEY AUTO_INCREMENT
    , nomeAluno VARCHAR (70)
    , rmAluno VARCHAR (70)
    , codetecAluno VARCHAR (70)
    , senhaAluno VARCHAR (256)
)

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
/* Tabela das notícias*/
CREATE TABLE tbAviso (
    idAviso INT PRIMARY KEY AUTO_INCREMENT
    ,tituloAviso VARCHAR (30)
    ,subtituloAviso VARCHAR (50)
    ,descAviso VARCHAR (200)
);
/* Tabela das contas*/
CREATE TABLE tbConta (
    idConta INT PRIMARY KEY AUTO_INCREMENT
    ,bomeCompletoConta VARCHAR (60)
    ,emailConta VARCHAR (50)
    ,senhaConta VARCHAR (30)
);
