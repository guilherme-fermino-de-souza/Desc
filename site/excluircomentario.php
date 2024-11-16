<?php
    $x = $_GET['id'];
    $idNoticia = $_GET['idNoticia'];

    echo $x;
    
    include("conexao.php");

    $stmt = $pdo->prepare("DELETE FROM tbcomentarionoticia WHERE idComentarioNoticia='$x'");
    $stmt ->execute();

    header("location:apresentarcomentario.php?id=" . $idNoticia);
?>
