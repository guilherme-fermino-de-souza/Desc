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

<div class="login-enviar">
    <div class="login-enviar-container">
        <h1><?php echo "$usuario" ?></h1>
        <h1><?php echo "$email" ?></h1>
        <h1><?php echo "$senha" ?></h1>
    </div>
</div>