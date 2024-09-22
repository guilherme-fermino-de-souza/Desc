<?php
    $x = $_GET['id'];

    echo $x;
    
    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbContato where idContato='$x'");
    $stmt ->execute();
?>
