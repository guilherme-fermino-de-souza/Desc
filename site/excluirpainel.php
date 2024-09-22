<?php
    $id = $_GET['id'];
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $stmt = $pdo->prepare("SELECT imgAviso FROM tbAviso where idAviso='$id'");
    $stmt ->execute();

    $row = $stmt->fetch();

    if ($row["imgAviso"] != 0) {

        $nomeImagem = $localImagens . '/' . $row["imgAviso"] . '.png';

        unlink($nomeImagem);

    }


    $stmt = $pdo->prepare("delete from tbAviso where idAviso='$id'");
    $stmt ->execute();

    header("location:painel.php");
?>
