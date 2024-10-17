<?php
include("conexao.php");

$idNoticia = $_POST['idNoticia']; // captura o id da noticia
$nome = $_POST["nome"];
$comentario = $_POST["comentario"];

$stmt = $pdo->prepare("INSERT INTO tbComentarioNoticia (nomeComentarioNoticia, mensagemComentarioNoticia, noticia_id) VALUES (?, ?, ?)");
$stmt->execute([$nome, $comentario, $idNoticia]);

header("location:apresentarcomentario.php?id=$idNoticia");
?>