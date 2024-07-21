<?php 
    include("conexao.php");

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("INSERT INTO tbConta(nomeCompletoConta, emailConta, senhaConta) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);

    header("Location: criarConta.php");
    exit();
?>