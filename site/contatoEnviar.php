<?php 

    $servidor = "localhost";

    $nomeBancoDeDados = "bdContato";

    $usuario = "root";

    $senha = "";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sala = (int) $_POST['sala'];
    $rm = (int) $_POST['rm'];

    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuario, $senha);

    $pdo->query("INSERT INTO tbusuario(nomeUsuario, emailUsuario, salaUsuario, rmUsuario)
    VALUES ('$nome', '$email', $sala, $rm)");

    $pdo->query("INSERT INTO tbMensagem(assuntoMensagem, conteudoMensagem, idUsuario)
    VALUES ('$assunto', '$mensagem', (SELECT MAX(idUsuario) FROM tbUsuario))");

?>