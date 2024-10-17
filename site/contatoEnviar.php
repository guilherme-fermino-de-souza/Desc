<?php
include("conexao.php");




$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$stmt = $pdo->prepare("INSERT INTO tbContato (nomeContato, emailContato, assuntoContato, mensagemContato) VALUES (?, ?, ?, ?)");
$stmt->execute([$nome, $email, $assunto, $mensagem]);

header("Location:contato.php");
exit();
?>
