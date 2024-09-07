<?php 
    include("conexao.php");
    include("imagemLocalNoticias.php");

    $titulo = $_POST['txTitulo'];
    $subtitulo = $_POST['txSubtitulo'];
    $descricao = $_POST['txDescricao'];

    $img = $_FILES['inpImg'];

    $numImagem = (int) file_get_contents($contadorImagens);

    if($img['error'] == UPLOAD_ERR_OK) {

        $numImagem++;

        $nomeImagem = $localImagens . '/' . $numImagem . '.png';

        move_uploaded_file($img['tmp_name'], $nomeImagem);
        
        file_put_contents($contadorImagens, $numImagem);

    }

    $stmt = $pdo->prepare("
    
            insert into tbaviso values(

                    null,
                    '$titulo',
                    '$subtitulo',
                    '$descricao',
                    '$numImagem'
                )
            ");

    $stmt -> execute();

    header("location:criarnoticia.php");
?>