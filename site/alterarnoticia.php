<?php
    include("./verificarLogin.php");
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $id = $_POST['idNoticias'];
    $titulo = $_POST['tituloNoticias'];
    $subtitulo = $_POST['subtituloNoticias'];
    $descricao = $_POST['descNoticias'];
    $numImg = $_POST['idImgNoticias'];
    $img = $_FILES['imgNoticias'];

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
        UPDATE tbNoticias SET
            tituloNoticias='$titulo',
            subtituloNoticias='$subtitulo',
            descNoticias='$descricao',
            imgNoticias='$numImg'
        WHERE idNoticias ='$id';
    ");
    $stmt->execute();

    header("location:alternarnoticiaconsulta.php");
    exit;
?>
