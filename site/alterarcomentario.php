<?php  

    include("conexao.php");
    $id = $_POST['idComentarioNoticia'];
    $nome = $_POST['nomeComentarioNoticia'];
    $comentario = $_POST['mensagemComentarioNoticia'];
    $idNoticia = $_POST['idNoticia'];  

    $stmt = $pdo->prepare("
        update tbComentarioNoticia set
            nomeComentarioNoticia='$nome',
            mensagemComentarioNoticia='$comentario'
            where idComentarioNoticia ='$id';
    ");	    
	$stmt ->execute(); 
       
    header("location:apresentarcomentario.php?id=" . $idNoticia);
    ?>