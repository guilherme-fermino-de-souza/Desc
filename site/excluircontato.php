<?php
    $x = $_GET['id'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("DELETE FROM tbContato WHERE idContato='$x'");
    $stmt ->execute();
    header("Location: apresentarcontato.php");
?>