<?php  
    session_start();
    include("conexao.php");
    include("imagemLocalConta.php");
    

    $id = $_POST['idConta'];
    $nome = $_POST['nomeConta'];
    $_SESSION['nome'] = $_POST['nomeConta'];
    $email = $_POST['emailConta'];
    $_SESSION['email'] = $_POST['emailConta'];
    $senha = $_POST['senhaConta'];
    $numImg = $_POST['idImgConta'];
    $img = $_FILES['imgConta'];

    echo $numImg;
    
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    if ($img['error'] != UPLOAD_ERR_NO_FILE) {

        if($img['error'] == UPLOAD_ERR_OK) {

            if($numImg == 0) {

                $numImg = (int) file_get_contents($contadorImagens);

                $numImg++;
    
                $nomeImagem = $localImagens . '/' . $numImg . '.png';
        
                move_uploaded_file($img['tmp_name'], $nomeImagem);
                
                file_put_contents($contadorImagens, $numImg);

            } else {
                
                $nomeImagem = $localImagens . '/' . $numImg . '.png';
                
                move_uploaded_file($img['tmp_name'], $nomeImagem);
            }
    
        } else {

            throw new ErrorException("Erro no upload da imagem");
        }
    }

    $stmt = $pdo->prepare("
        UPDATE tbConta SET
            nomeConta='$nome',
            emailConta='$email',
            imgConta='$numImg',
            senhaConta='$senhaHash'
            WHERE idConta ='$id';
    ");	    
	$stmt ->execute();   

    header("location:index.php");    
    
?>
