<?php
    $x = $_GET['id'];
    echo $x;
    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbconta where idConta='$x'");
    $stmt ->execute();
?>