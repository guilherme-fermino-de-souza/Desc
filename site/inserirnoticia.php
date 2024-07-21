<?php 
    include("conexao.php");

    $titulo = $_POST['txTitulo'];
    $subtitulo = $_POST['txSubtitulo'];
    $descricao = $_POST['txDescricao'];

    $stmt = $pdo->prepare("
    
            insert into tbaviso values(

                    null,
                    '$titulo',
                    '$subtitulo',
                    '$descricao'
                )
            ");

    $stmt -> execute();

    header("location:criarnoticia.php");
?>