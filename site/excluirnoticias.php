<?php
    $id = $_GET['id'];
    echo $id;
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $stmt = $pdo->prepare("SELECT imgNoticias FROM tbNoticias WHERE idNoticias='$id'");
    $stmt ->execute();

    $row = $stmt->fetch();

    if ($row["imgNoticias"] != 0) {

        $nomeImagem = $localImagens . '/' . $row["imgNoticias"] . '.png';

        unlink($nomeImagem);

    }


    $stmt = $pdo->prepare("DELETE FROM tbComentarioNoticia WHERE noticia_id='$id'");
    $stmt ->execute();
    $stmt = $pdo->prepare("DELETE FROM tbParagrafoNoticias WHERE noticia_id='$id'");
    $stmt ->execute();
    $stmt = $pdo->prepare("DELETE FROM tbNoticias WHERE idNoticias='$id'");
    $stmt ->execute();

    header("location:noticias.php");
?>
