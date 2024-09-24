<?php  
    $id = $_POST['txIdComentarioNoticia'];
    $nome = $_POST['txNomeComentarioNoticia'];
    $comentario = $_POST['txMensagemComentarioNoticia'];
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