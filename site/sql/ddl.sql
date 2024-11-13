CREATE DATABASE bdNewsWallEtec;

--DROP DATABASE bdNewsWallEtec;

USE bdNewsWallEtec;
/* Tabela das notícias inseridas pelos admins*/
CREATE TABLE tbNoticias (
    idNoticias INT PRIMARY KEY AUTO_INCREMENT
    ,tituloNoticias VARCHAR (150)
    ,subtituloNoticias VARCHAR (200)
    ,descNoticias VARCHAR (500)
    ,imgNoticias INT
);
/* Tabela das contas registradas em 'nova conta'*/
CREATE TABLE tbConta (
    idConta INT PRIMARY KEY AUTO_INCREMENT
    ,nomeConta VARCHAR (150)
    ,emailConta VARCHAR (60)
    ,senhaConta VARCHAR (255)
    ,tipoConta VARCHAR (4)
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
    FOREIGN KEY (Noticia_id) REFERENCES tbNoticias(idNoticias)
);

/* PARTE NOTÍCIAS */

/* Paragrafo ligado a tbNoticias */
CREATE TABLE tbParagrafoNoticias (
    idParagrafoNoticias INT PRIMARY KEY AUTO_INCREMENT
    ,textoParagrafoNoticias VARCHAR(1750)
    ,noticia_id INT
    ,FOREIGN KEY (Noticia_id) REFERENCES tbNoticias(idNoticias)
);

/* imagens ligado a tbNoticias Rascunho
CREATE TABLE tbImagenNoticia (
    idImagenNoticia INT PRIMARY KEY AUTO_INCREMENT
    ,imgImagenNoticia INT
    ,noticia_id INT
    ,FOREIGN KEY (Noticia_id) REFERENCES tbNoticias(idNoticias)
);*/
