<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site/css/estilo.css">
    <style>
        .conteiner-apresentarcontato {
            display: grid;
            width: 80%;
            margin: 10% auto;
            padding: 3%;
            grid-template-rows: 60% 60% 60% ;
            grid-template-columns: 33.3% 33.3% 33.3%;
        }
        .card-apresentarcontato {   
            background-color: var(--branco-principal); 
            margin: 1.5vw 1vw 0vw 0vw; 
            border-radius: 20px;
            border: 2px solid var(--preto-fonte) 
        }
        .card-apresentarcontato h3{
            font-size: var(--font-xs-link);
            background-color: var(--preto-fonte);
            color: var(--branco-principal);
            border-top-left-radius: 20px;
            border-top-right-radius: 15px;
            padding: 1%;
        }
        .card-apresentarcontato h2{
            font-size: var(--font-sm-link);
            padding-left: 1%;
            background-color: var(--vermelho-principal); 
            color: var(--branco-principal);
        }
        .card-apresentarcontato p{
            font-size: var(--font-md-link);
            padding: 1%;
            text-indent: 7.5px;
        }
    </style>
    <title>Apresentar Contato</title>
</head>
<body>
<?php include('navbar.php');?>

<?php include("conexao.php");?> 

<div class="conteiner-apresentarcontato">
    <?php
        $stmt = $pdo->prepare("select * from tbcontato");
        $stmt -> execute();
        while($row = $stmt->fetch()){?>
            <div class="card-apresentarcontato">
                <h3>Assunto: <?php echo $row["assuntoContato"]; ?></h3>
                <h2>Nome: <?php echo $row["nomeContato"]; ?></h2>
                <p><?php echo $row["mensagemContato"]; ?></p> 
            </div>
    <?php } ?>  
</div>  

<?php include ('footer.php')?>
</body>
</html>