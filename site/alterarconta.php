<?php  
    $id = $_POST['txIdConta'];
    $nome = $_POST['txNomeConta'];
    $email = $_POST['txEmailConta'];
    $senha = $_POST['txSenhaConta'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        update tbConta set
            nomeCompletoConta='$nome',
            emailConta='$email',
            senhaConta='$senha'
            where idConta ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcontaconsulta.php");    
    
?>
