<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site/css/estilo.css">
    <style>
        .conteiner-apresentarcriarconta { /* PRINCIPAL */
            display: grid;
            width: 80%;
            margin: auto;
            grid-template-columns: 50%  50%;
        }
        .card-apresentarcriarconta {  /* CARD */ 
            background-color: var(--branco-principal);
            margin: 5% ;
            border-radius: 5px;
            border: 5px solid var(--tema-terciario);
            height: fit-content;
        }
        .titulo-card-conta { /* TÍTULO */
            background-color: var(--tema-terciario);
            display: flex;
        }
        .titulo-card-conta h1{
            font-size: var(--fonte-media);
            color: var(--branco-principal);
            padding: 1%;
        }
        .titulo-card-conta a { /* EXCLUIR */
            font-weight: 800;
            font-size: var(--fonte-media);
            color:  var(--tema-secundario);
            margin-left: auto;
            padding: 1%;
            text-decoration: none;
        }
        .titulo-card-conta a:hover {
            color:  red;
        }
        .subtitulo-card-conta { /* SUBTÍTULO */
            background-color: var(--tema-secundario);
        }
        .subtitulo-card-conta h2{
            font-weight: 800;
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            padding: 1%;
        }
        .texto-card-conta { /* TEXTO */
            background-color: var(--tema-terciario);
            padding: 3%;
        }
        .texto-card-conta h3 {
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            text-indent: 3%;
        }
        .alterar-card-conta { /* ALTERAR */
            display: flex;
            justify-content: center;
            background-color: var(--tema-terciario);
        }
        .alterar-card-conta a {
            font-weight: 600;
            font-size: var(--fonte-padrao);
            color:  var(--tema-secundario);
            text-decoration: none;
        }
        .alterar-card-conta a:hover {
            color:  var(--branco-principal);
        }
    </style>
    <title>Apresentar Conta</title>
</head>
<body>
<?php include('navbar.php');?>

<?php include("conexao.php");?>

<div class="conteiner-apresentarcriarconta">
    <?php
    $stmt = $pdo->prepare("select * from tbConta");
    $stmt -> execute();
    while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
        <div class="card-apresentarcriarconta">
            <div class="titulo-card-conta">
                <h1>Nome: <?php echo $row["nomeConta"]; ?></h1>
                <a href="excluirconta.php?id=<?php echo $row[0]; ?>"> X </a>
            </div>
            <div class="subtitulo-card-conta">
                <h2>Email: <?php echo $row["emailConta"]; ?></h2>
            </div>
            <div class="texto-card-conta">
                <h3>Senha: <?php echo $row["senhaConta"]; ?></h3> 
            </div>
            <div class="alterar-card-conta">
                <a href="alternarcontaconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&email=<?php echo $row[2]?>&senha=<?php echo $row[3]?>"> Alterar </a>
            </div>
        </div>
    <?php } ?>    
</div>

<?php include ('footer.php')?>
</body>
</html>