<?php
    $x = $_GET['id'];

    echo $x;

    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbConta where idConta='$x'");
    $stmt ->execute();
?>
