<?php
include("conexao.php");

$comentario = $_POST['txComentario'];

$stmt = $pdo->prepare("
    
insert into tbComentarioNoticia values(
        '$comentario')
");

$stmt -> execute();

header("location:comentario.php");
?>