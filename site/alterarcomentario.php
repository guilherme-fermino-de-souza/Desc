<?php  
    $id = $_POST['idComentarioNoticia'];
    $nome = $_POST['nomeComentarioNoticia'];
    $comentario = $_POST['mensagemComentarioNoticia'];
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbComentarioNoticia set
            nomeComentarioNoticia='$nome',
            mensagemComentarioNoticia='$comentario'
            where idComentarioNoticia ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcomentarioconsulta.php");    
    
?>