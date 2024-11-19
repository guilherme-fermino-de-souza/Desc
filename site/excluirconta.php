<?php
    $x = $_GET['id'];

    echo $x;

    include("conexao.php");

    $stmt = $pdo->prepare("DELETE FROM tbConta WHERE idConta='$x'");
    $stmt ->execute();
    header("location:apresentarcriarconta.php"); 
?>