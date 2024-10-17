<?php 
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $titulo = $_POST['tituloNoticias'];
    $subtitulo = $_POST['subtituloNoticias'];
    $descricao = $_POST['descricaoNoticias'];
    $img = $_FILES['imgNoticias'];

    $numImagem = (int) file_get_contents($contadorImagens);

    switch ($img['error']) {

        case UPLOAD_ERR_OK:

            $numImagem++;
    
            $nomeImagem = $localImagens . '/' . $numImagem . '.png';
    
            move_uploaded_file($img['tmp_name'], $nomeImagem);
            
            file_put_contents($contadorImagens, $numImagem);

            break;

        case UPLOAD_ERR_NO_FILE:

            $numImagem = 0;

            break;

        default:

            throw new ErrorException("Erro no upload da imagem");

            break;
    }

    $stmt = $pdo->prepare("
    
            insert into tbNoticias values(

                    null,
                    '$titulo',
                    '$subtitulo',
                    '$descricao',
                    '$numImagem'
                )
            ");

    $stmt -> execute();

    header("location:noticias.php");
?>