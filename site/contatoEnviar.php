<?php
include("conexao.php");

$remetente = $_POST['nome'];
$email = $_POST['email'];
$sala = (int) $_POST['sala'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$stmt = $pdo->prepare("INSERT INTO tbcontato (nomeContato, emailContato, salaContato, assuntoContato, mensagemContato) VALUES (?, ?, ?, ?, ?)");
$stmt->execute([$remetente, $email, $sala, $assunto, $mensagem]);

header("Location: contato.php");
exit();
?>