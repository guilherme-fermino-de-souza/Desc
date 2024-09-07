<?php  
    $id = $_POST['txIdAviso'];
    $titulo = $_POST['txTituloAviso'];
    $subtitulo = $_POST['txSubtituloAviso'];
    $descricao = $_POST['txDescAviso'];
    $imagem = (int) $_POST['txImgAviso'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbAviso set
            tituloAviso='$titulo',
            subtituloAviso='$subtitulo',
            descAviso='$descricao',
            imgAviso='$imagem'
            where idAviso ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarnoticiaconsulta.php");    
    
?>