<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        .container-painel { /* PRINCIPAL */
            display: grid;
            width: 80%;
            margin: auto;
            grid-template-columns: 50%  50%;
        }
        .card-painel {   /* CARD */
            background-color: var(--branco-principal);
            margin: 5% ;
            border-radius: 5px;
            border: 5px solid var(--tema-terciario);
            height: fit-content;
        }
        .titulo-card-painel { /* TÍTULO */
            background-color: var(--tema-terciario);
            display: flex;
        }
        .titulo-card-painel h1{
            font-size: var(--fonte-media);
            color: var(--branco-principal);
            padding: 1%;
        }
        .titulo-card-painel a { /* EXCLUIR */
            font-weight: 800;
            font-size: var(--fonte-media);
            color:  var(--tema-secundario);
            margin-left: auto;
            padding: 1%;
            text-decoration: none;
        }
        .titulo-card-painel a:hover {
            color:  red;
        }
        .subtitulo-card-painel { /* SUBTÍTULO */
            background-color: var(--tema-quartenario);
        }
        .subtitulo-card-painel h2{
            font-weight: 800;
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            padding: 1%;
        }
        .texto-card-painel { /* TEXTO */
            background-color: var(--tema-terciario);
            padding: 3%;
        }
        .texto-card-painel h3 {
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            text-indent: 3%;
        }
        .imagem-painel { /* IMAGEM */
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .imagem-painel img{
            width: 100%;
            margin: auto;
        }
        .alterar-card-painel { /* ALTERAR */
            display: flex;
            justify-content: center;
            background-color: var(--tema-terciario);
        }
        .alterar-card-painel a {
            font-weight: 600;
            margin: 1%;
            font-size: var(--fonte-padrao);
            color:  var(--tema-secundario);
            text-decoration: none;
        }
        .alterar-card-painel a:hover {
            color:  var(--branco-principal);
        }
        .criarnoticia-painel { /* BOTÃO */
            width: 80%;
            margin: auto;
        }
        .criarnoticia-painel button{
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-padrao);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0%;
        }
        .criarnoticia-painel button:hover{
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
    </style>
</head>
<body>
<?php include('navbar.php');?>

<?php include("conexao.php");?>

<div class="container-painel">
  <?php
    $stmt = $pdo->prepare("select * from tbaviso");
    $stmt -> execute();
    while($row = $stmt->fetch()){?>
        <div class="card-painel">
            <div class="titulo-card-painel">
                  <h1><?php echo $row["tituloAviso"]; ?></h1> 
                  <a href="excluirpainel.php?id=<?php echo $row[0]; ?>"> X </a>
            </div>
            <div class="subtitulo-card-painel">
                <h2><?php echo $row["subtituloAviso"]; ?></h2> 
            </div>
            <div class="texto-card-painel">
                <h3><?php echo $row["descAviso"]; ?></h3> 
            </div>
                  <div class="imagem-painel">
                  <?php 
                        $numImg = $row["imgAviso"];
                        if ($numImg != 0) {    
                            echo "<img src='images/imagensArquivos/noticias/$numImg.png'>";
                        }
                    ?>
                  </div>
            <div class="alterar-card-painel">
                <a href="alternarnoticiaconsulta.php?id=<?php echo $row[0]?>&titulo=<?php echo $row["tituloAviso"]?>&subtitulo=<?php echo $row["subtituloAviso"]?>&descricao=<?php echo $row["descAviso"]?>&idImgAviso=<?php echo $row["imgAviso"]?>"> Alterar </a>
                <a href="comentario.php?id=<?php echo $row[0]; ?>">Comentar</a>
                <a href="apresentarcomentario.php?id=<?php echo $row[0]?>">Ver Comentários</a>
            </div>
        </div>
    <?php } ?>
</div>

<?php include ('footer.php')?>
</body>
</html>
