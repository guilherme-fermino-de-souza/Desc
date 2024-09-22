<?php  
    $id = $_POST['txIdContato'];
    $nome = $_POST['txnomeContato'];
    $email = $_POST['txEmailContato'];
    $assunto = $_POST['txAssuntoContato'];
    $mensagem = $_POST['txMensagemContato'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbContato set
            nomeContato='$nome',
            emailContato='$email',
            assuntoContato='$assunto',
            mensagemContato='$mensagem'
            where idContato ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcontatoconsulta.php");    
    
?>
