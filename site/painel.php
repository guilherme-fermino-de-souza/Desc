<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        .container-painel {
            display: grid;
            width: 80%;
            margin: 10% auto;
            padding: 3%;
            grid-template-rows: 100% 100% 100% ;
            grid-template-columns: 33.3% 33.3% 33.3%;
        }
        .card-painel {   
            background-color: var(--branco-principal);
            margin: 1.5vw 1vw 0vw 0vw; 
            border-radius: 20px;
            border: 2px solid var(--preto-fonte) 
        }
        .card-painel h3{
            font-size: var(--font-sm-link);
            background-color: var(--preto-fonte);
            color: var(--branco-principal);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1%;
        }
        .card-painel h2{
            font-size: var(--font-sm-link);
            padding-left: 1%;   
            background-color: var(--branco-principal); 
            color: var(--preto-fonte);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
        .card-painel a {
            font-weight: 600;
            margin: 45%;
            font-size: var(--font-sm-link);
            text-decoration: none;
        }
        .criarnoticia-painel {
            width: 80%;
            margin: auto;
        }
        .criarnoticia-painel button{
            text-align: center;
            background-color: var(--vermelho-principal);
            color: var(--branco-principal);
            border-radius: 35px;
            border: 2px solid var(--preto-fonte);
            padding: 5px;
            font-weight: 600;
            margin: 15px;
        }
        .criarnoticia-painel button:hover{
            background-color: var(--branco-principal);
            color: var(--vermelho-principal);
            transition: 0.9s;
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
                  <h3><?php echo $row["tituloAviso"]; ?></h3> 
                  <h2><?php echo $row["subtituloAviso"]; ?></h2> 
                  <h2><?php echo $row["descAviso"]; ?></h2>
                  <img src="images/imagensArquivos/noticias/<?php echo $row["imgAviso"]?>.png">
                  <a href="excluirpainel.php?id=<?php echo $row[0]; ?>"> Excluir </a>
                  <a href="alterarnoticia.php"> Alterar </a>
        </div>
    <?php } ?>
</div>

<div class="criarnoticia-painel">
  <a class="link" href="./criarnoticia.php"> <button class="butao butaonoticia" type="button" value="">Inserir Noticia</button> </a> 
</div>

<?php include ('footer.php')?>
</body>
</html>