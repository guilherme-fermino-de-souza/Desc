<?php 
    $servidor = "localhost";

    $nomeBancoDeDados = "bdNewsWallEtec";

    $usuarioBd = "root";

    $senhaBd = "";

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $tipoconta = (int) $_POST["tipoconta"];
    $senha = $_POST['senha'];

    $pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuarioBd, $senhaBd);

    $pdo->quote($nome);
    $pdo->quote($email);
    $pdo->quote($tipoconta);
    $pdo->quote($senha);

    $stmt = $pdo->prepare("INSERT INTO tbUsuario(nomeUsuario, emailUsuario, tipoUsuario, senhaUsuario)
        VALUES ('$nome', '$email', $tipoconta , '$senha')");

    $stmt->execute();

    $stmt = $pdo->prepare("SELECT nomeUsuario, emailUsuario, senhaUsuario FROM tbUsuario WHERE nomeUsuario = '$nome' AND emailUsuario = '$email' AND senhaUsuario = '$senha';");

    $stmt->execute();

    print_r($stmt->fetch(PDO::FETCH_ASSOC));

?>