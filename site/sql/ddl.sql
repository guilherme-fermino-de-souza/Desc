CREATE DATABASE bdNewsWallEtec;

--DROP DATABASE bdNewsWallEtec;

USE bdNewsWallEtec;
/* Tabela das notícias inseridas pelos admins*/
CREATE TABLE tbNoticias (
    idNoticias INT PRIMARY KEY AUTO_INCREMENT
    ,tituloNoticias VARCHAR (30)
    ,subtituloNoticias VARCHAR (50)
    ,descNoticias VARCHAR (200)
    ,imgNoticias INT
);
/* Tabela das contas registradas em 'nova conta'*/
CREATE TABLE tbConta (
    idConta INT PRIMARY KEY AUTO_INCREMENT
    ,nomeConta VARCHAR (60)
    ,emailConta VARCHAR (60)
    ,senhaConta VARCHAR (255)
    ,tipoConta VARCHAR(4)
);
/* Tabela das mensagens recebidas pelo contato*/
CREATE TABLE tbContato (
    idContato INT PRIMARY KEY AUTO_INCREMENT
    ,nomeContato VARCHAR (90)
    ,emailContato VARCHAR (30)
    ,assuntoContato VARCHAR (40)
    ,mensagemContato VARCHAR (250)
);

/* Tabela dos comentários da notícia */
CREATE TABLE tbComentarioNoticia (
    idComentarioNoticia INT PRIMARY KEY AUTO_INCREMENT,
    nomeComentarioNoticia VARCHAR(40),
    mensagemComentarioNoticia VARCHAR(400),
    noticia_id INT,
    FOREIGN KEY (noticia_id) REFERENCES tbNoticias(idNoticias)
);
