<?php
    $x = $_GET['id'];

    echo $x;
    
    include("conexao.php");

    $stmt = $pdo->prepare("delete from tbcomentarionoticia where idComentarioNoticia='$x'");
    $stmt ->execute();

    header("location:apresentarcomentarios.php?id=<?php echo $x?>");
?>
