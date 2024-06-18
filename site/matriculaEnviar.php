<?php

    $servidor = "localhost";

    $nomeBancoDeDados = "bdNewsWallEtec";

    $usuarioBd = "root";

    $senhaBd = "";

    $usuario = $_POST["usuario"];
    $rm = $_POST["rm"];
    $codetec = $_POST["codetec"];
    $senha = $_POST['senha'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuarioBd, $senhaBd);

    $pdo->quote($usuario);
    $pdo->quote($rm);
    $pdo->quote($codetec);
    $pdo->quote($senha);

    $stmt = $pdo->prepare("SELECT nomeAluno, rmAluno, codetecAluno, senhaAluno FROM tbAluno WHERE nomeAluno = '$usuario' AND rmAluno = '$rm' AND codetecAluno = '$codetec' AND senhaAluno = '$senha';");

    $stmt->execute();

    print_r($stmt->fetch(PDO::FETCH_ASSOC));
?>