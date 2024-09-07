<?php
    $x = $_GET['id'];
    echo $x;
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $stmt = $pdo->prepare("SELECT imgAviso FROM tbAviso where idAviso='$x'");
    $stmt ->execute();

    $row = $stmt->fetch();

    unlink($localImagens . '/' . $row["imgAviso"] . '.png');


    $stmt = $pdo->prepare("delete from tbAviso where idAviso='$x'");
    $stmt ->execute();
?>