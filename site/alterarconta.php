<?php  
    $id = $_POST['idConta'];
    $nome = $_POST['nomeConta'];
    $email = $_POST['emailConta'];
    $senha = $_POST['senhaConta'];
    
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);
    
    include("conexao.php");

    $stmt = $pdo->prepare("
        UPDATE tbConta SET
            nomeConta='$nome',
            emailConta='$email',
            senhaConta='$senhaHash'
            WHERE idConta ='$id';
    ");	    
	$stmt ->execute();    

    header("location:alternarcontaconsulta.php");    
    
?>
