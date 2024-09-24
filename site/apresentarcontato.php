<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site/css/estilo.css">
    <style>
        .conteiner-apresentarcontato { /* PRINCIPAL */
            display: grid;
            width: 80%;
            margin: auto;
            grid-template-columns: 50%  50%;
        }
        .card-apresentarcontato {   /* CARD */
            background-color: var(--branco-principal);
            margin: 5% ;
            border-radius: 5px;
            border: 5px solid var(--tema-terciario);
            height: fit-content;
        }
        .titulo-card-contato { /* TÍTULO */
            background-color: var(--tema-terciario);
            display: flex;
        }
        .titulo-card-contato h1{
            font-size: var(--fonte-media);
            color: var(--branco-principal);
            padding: 1%;
        }
        .titulo-card-contato a { /* EXCLUIR */
            font-weight: 800;
            font-size: var(--fonte-media);
            color:  var(--tema-secundario);
            margin-left: auto;
            padding: 1%;
            text-decoration: none;
        }
        .titulo-card-contato a:hover {
            color:  red;
        }
        .subtitulo-card-contato { /* SUBTÍTULO */
            background-color: var(--tema-secundario);
        }
        .subtitulo-card-contato h2{
            font-weight: 800;
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            padding: 1%;
        }
        .texto-card-contato { /* TEXTO */
            background-color: var(--tema-terciario);
            padding: 3%;
        }
        .texto-card-contato h3 {
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            text-indent: 3%;
        }
        .alterar-card-contato { /* ALTERAR */
            display: flex;
            justify-content: center;
            background-color: var(--tema-terciario);
        }
        .alterar-card-contato a {
            font-weight: 600;
            font-size: var(--fonte-padrao);
            color:  var(--tema-secundario);
            text-decoration: none;
        }
        .alterar-card-contato a:hover {
            color:  var(--branco-principal);
        }
    </style>
    <title>Apresentar Contato</title>
</head>
<body>
<?php include('navbar.php');?>

<?php include("conexao.php");?> 

<div class="conteiner-apresentarcontato">
    <?php
        $stmt = $pdo->prepare("select * from tbContato");
        $stmt -> execute();
        while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
            <div class="card-apresentarcontato">
                <div class="titulo-card-contato">
                    <h1>Assunto: <?php echo $row["assuntoContato"]; ?></h1>
                    <a href="excluircontato.php?id=<?php echo $row[0]; ?>"> X </a> 
                </div>
                <div class="subtitulo-card-contato">
                    <h2>Nome: <?php echo $row["nomeContato"]; ?></h2>
                </div>
                <div class="texto-card-contato">
                    <h3><?php echo $row["mensagemContato"];?></h3>
                </div>
                <div class="alterar-card-contato">
                    <a href="alternarcontatoconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&email=<?php echo $row[2]?>&assunto=<?php echo $row[4]?>&mensagem=<?php echo $row[5]?>"> Alterar </a> 
                </div>
            </div>
    <?php } ?>  
</div>  

<?php include ('footer.php')?>
</body>
</html>
