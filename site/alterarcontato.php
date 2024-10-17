<?php  
    $id = $_POST['idContato'];
    $nome = $_POST['nomeContato'];
    $email = $_POST['emailContato'];
    $assunto = $_POST['assuntoContato'];
    $mensagem = $_POST['mensagemContato'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        UPDATE tbContato SET
            nomeContato='$nome',
            emailContato='$email',
            assuntoContato='$assunto',
            mensagemContato='$mensagem'
            WHERE idContato ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcontatoconsulta.php");    
    
?>
