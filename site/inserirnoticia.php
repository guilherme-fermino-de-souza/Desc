<?php 
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $titulo = $_POST['tituloNoticias'];
    $subtitulo = $_POST['subtituloNoticias'];
    $descricao = $_POST['descricaoNoticias'];
    $img = $_FILES['imgNoticias'];
    $paragrafos = $_POST['paragrafosNoticias']; //Array
    if (empty($paragrafos)) {
        $paragrafos = ["Essa notícia não possui parágrafos a serem mostrados"];
    }
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

        // Obter o ID da notícia inserida
        $id_noticia = $pdo->lastInsertId();
        // Loop para inserir cada parágrafo na tabela tbParagrafo
        foreach ($paragrafos as $ordem => $paragrafo) {
            $stmt = $pdo->prepare("
            INSERT INTO tbParagrafoNoticias (textoParagrafoNoticias, noticia_id) VALUES (?, ?)
        ");
        $stmt->execute([$paragrafo, $id_noticia]); // Inserindo o parágrafo e o ID da notícia
    }

    header("location:noticias.php");
?>