<?php 

    $servidor = "localhost";

    $nomeBancoDeDados = "bdContato";

    $remetente = "root";

    $senha = "";

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $sala = (int) $_POST['sala'];
    $rm = (int) $_POST['rm'];

    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $remetente, $senha);

    $pdo->query("INSERT INTO tbRemetente(nomeRemetente, emailRemetente, salaRemetente, rmRemetente)
    VALUES ('$nome', '$email', $sala, $rm)");

    $pdo->query("INSERT INTO tbMensagem(assuntoMensagem, conteudoMensagem, idRemetente)
    VALUES ('$assunto', '$mensagem', (SELECT MAX(idRemetente) FROM tbRemetente))");

?>