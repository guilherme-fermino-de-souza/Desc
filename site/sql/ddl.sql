CREATE DATABASE bdNewsWallEtec;

--DROP DATABASE bdNewsWallEtec;

USE bdNewsWallEtec;
/* Tabela das notícias inseridas pelos admins*/
CREATE TABLE tbAviso (
    idAviso INT PRIMARY KEY AUTO_INCREMENT
    ,tituloAviso VARCHAR (30)
    ,subtituloAviso VARCHAR (50)
    ,descAviso VARCHAR (200)
    ,imgAviso INT
);
/* Tabela das contas registradas em 'nova conta'*/
CREATE TABLE tbConta (
    idConta INT PRIMARY KEY AUTO_INCREMENT
    ,nomeCompletoConta VARCHAR (60)
    ,emailConta VARCHAR (50)
    ,senhaConta VARCHAR (30)
);
/* Tabela das mensagens recebidas pelo contato*/
CREATE TABLE tbContato (
    idContato INT PRIMARY KEY AUTO_INCREMENT
    ,nomeContato VARCHAR (90)
    ,emailContato VARCHAR (30)
    ,salaContato INT
    ,assuntoContato VARCHAR (40)
    ,mensagemContato VARCHAR (250)
);

/* Tabela dos comentários da notícia */
CREATE TABLE tbComentarioNoticia (
    idComentarioNoticia INT PRIMARY KEY AUTO_INCREMENT
    ,mensagemComentarioNoticia VARCHAR (400)
    /*,dataComentarioNoticia DATETIME */
    , FOREIGN KEY (idConta) REFERENCES tbConta(idConta)
);
