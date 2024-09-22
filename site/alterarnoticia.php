<?php
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $id = $_POST['txIdAviso'];
    $titulo = $_POST['txTituloAviso'];
    $subtitulo = $_POST['txSubtituloAviso'];
    $descricao = $_POST['txDescAviso'];
    $numImg = $_POST['txIdImgAviso'];
    $img = $_FILES['inpImgAviso'];

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
        update tbAviso set
            tituloAviso='$titulo',
            subtituloAviso='$subtitulo',
            descAviso='$descricao',
            imgAviso='$numImg'
            where idAviso ='$id';
    ");
    $stmt->execute();

    header("location:painel.php");

?>
