<?php  
    $id = $_POST['idConta'];
    $nome = $_POST['nomeConta'];
    $email = $_POST['emailConta'];
    $senha = $_POST['senhaConta'];
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        UPDATE tbConta SET
            nomeConta='$nome',
            emailConta='$email',
            senhaConta='$senha'
            WHERE idConta ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcontaconsulta.php");    
    
?>
