<?php
include("conexao.php");

$idAviso = $_POST['idAviso']; // captura o id da noticia
$nome = $_POST["nome"];
$comentario = $_POST["comentario"];

$stmt = $pdo->prepare("INSERT INTO tbComentarioNoticia (nomeComentarioNoticia, mensagemComentarioNoticia, aviso_id) VALUES (?, ?, ?)");
$stmt->execute([$nome, $comentario, $idAviso]);


header("location: apresentarcomentario.php?id=$idAviso");
?>