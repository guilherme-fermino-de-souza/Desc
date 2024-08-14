<?php
    $x = $_GET['id'];
    echo $x;
    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbaviso where idAviso='$x'");
    $stmt ->execute();
?>