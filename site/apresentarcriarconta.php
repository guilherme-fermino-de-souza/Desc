<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site/css/estilo.css">
    <style>
        .conteiner-apresentarcriarconta {
            display: grid;
            width: 80%;
            margin: 10% auto;
            padding: 3%;
            grid-template-rows: 50% 50% 50% ;
            grid-template-columns: 33.3% 33.3% 33.3%;
        }
        .card-apresentarcriarconta {   
            background-color: var(--branco-principal); 
            margin: 1.5vw 1vw 0vw 0vw; 
            border-radius: 20px;
            border: 2px solid var(--preto-fonte) 
        }
        .card-apresentarcriarconta h3{
            font-size: var(--font-sm-link);
            background-color: var(--preto-fonte);
            color: var(--branco-principal);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 1%;
        }
        .card-apresentarcriarconta h2{
            font-size: var(--font-sm-link);
            padding-left: 1%;   
            background-color: var(--branco-principal); 
            color: var(--preto-fonte);
            border-bottom-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }
    </style>
    <title>Apresentar Conta</title>
</head>
<body>
<?php include('navbar.php');?>

<?php include("conexao.php");?>

<div class="conteiner-apresentarcriarconta">
    <?php
    $stmt = $pdo->prepare("select * from tbconta");
    $stmt -> execute();
    while($row = $stmt->fetch()){?>
        <div class="card-apresentarcriarconta">
            <h3>Nome: <?php echo $row["nomeCompletoConta"]; ?></h3>
            <h2>Email: <?php echo $row["emailConta"]; ?></h2>
            <h2>Senha: <?php echo $row["senhaConta"]; ?></h2> 
        </div>
    <?php } ?>    
</div>

<?php include ('footer.php')?>
</body>
</html>