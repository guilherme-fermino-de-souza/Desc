<?php

    $servidor = "localhost";

    $nomeBancoDeDados = "bdNewsWallEtec";

    $usuarioBd = "root";

    $senhaBd = "";

    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST['senha'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuarioBd, $senhaBd);

    $pdo->quote($usuario);
    $pdo->quote($email);
    $pdo->quote($senha);

    $stmt = $pdo->prepare("SELECT nomeUsuario, emailUsuario, senhaUsuario FROM tbUsuario WHERE nomeUsuario = '$usuario' AND emailUsuario = '$email' AND senhaUsuario = '$senha';");

    $stmt->execute();

    print_r($stmt->fetch(PDO::FETCH_ASSOC));
?>