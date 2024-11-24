<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página 
  include ('./conexao.php');
  
    //Usuário 
    if ($_SESSION['tipo'] == 'user') { //Limita o acesso do usuário normal
        header('Location: index.php?negado=true');
        exit; 

    //Desenvolvedor
    } else if ($_SESSION['tipo'] == 'dev') { ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../site/css/estilo.css">
            <style>
                /* Apresentar todas as contas do site para Devs */
                .conteiner-apresentarcriarconta { /* PRINCIPAL */
                    display: grid;
                    width: 80%;
                    margin: auto;
                    grid-template-columns: 50%  50%;
                    min-height: 60vh;
                }
                .card-apresentarcriarconta {  /* CARD */ 
                    background-color: var(--branco-principal);
                    margin: 5% ;
                    border-radius: 5px;
                    border: 5px solid var(--tema-primario);
                    height: fit-content; 
                }
                .titulo-card-conta { /* TÍTULO */
                    font-weight: 800;
                    background-color: var(--tema-terciario);
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .titulo-card-conta h1{
                    font-size: var(--fonte-media);
                    color: var(--branco-principal);
                    padding: 1%;
                }
                .botao-card-apresentarconta {
                    display: flex;
                    flex-direction: row;
                    justify-content: end;
                    width: 20%;
                }
                .botao-card-apresentarconta a { /* EXCLUIR/ALTERNAR */
                    width: 35%;
                    margin: 2.5%;
                    border-radius: 35%;
                    padding: 1%;
                    text-decoration: none;
                }
                .botao-card-apresentarconta a:hover {
                    background-color:  red;
                    transition: 0.75s;
                }
                .botao-card-apresentarconta img {
                    width: 100%;
                }
                .card-conta-img { /* CONTA*/
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 85%;
                }
                .card-conta-img h2{ 
                    color: var(--branco-principal);
                    font-size: var(--fonte-padrao);
                    margin: 0 0 0 1%;
                }
                .card-conta-img img { /* IMG */
                    border-radius: 50%;
                    margin: 2.5% 4%;
                }
                .subtitulo-card-conta { /* SUBTÍTULO */
                    background-color: var(--tema-primario);
                    display: flex;
                    flex-direction: column;
                }
                .subtitulo-card-conta h2{
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    padding: 1%;
                    margin: .5%;
                }
                .subtitulo-card-conta h3 {
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    padding: 1%;
                    margin: .5%;
                }
            </style>
            <title>Apresentar Conta</title>
        </head>
        <body>
            <?php include('navbar.php');?>

            <div class="conteiner-apresentarcriarconta">
                <?php
                $stmt = $pdo->prepare("SELECT * FROM tbConta");
                $stmt -> execute();
                while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
                    <div class="card-apresentarcriarconta">
                        <div class="titulo-card-conta">
                            <div class="card-conta-img"> <!-- img -->
                                <img src="images/imagensArquivos/conta/<?php echo $row["imgConta"] == 0 ? "icons/semImagem.png" : $row["imgConta"] . ".png"?>" width="50">
                                <h1><?php echo $row["nomeConta"]; ?></h1>
                            </div>
                            <div class="botao-card-apresentarconta"> <!-- botões -->
                                <a href="alternarcontaconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&email=<?php echo $row[2]?>&senha=<?php echo $row[3]?>&idImgConta=<?php echo $row[5]?>">
                                    <img src="./images/imagensArquivos/noticias/icons/alternar.webp"> <!-- botão alternar -->
                                </a>
                                <a href="excluirconta.php?id=<?php echo $row[0]; ?>">
                                    <img src="./images/imagensArquivos/noticias/icons/trash.png"> <!-- botão excluir -->
                                </a>
                            </div>
                        </div>
                        <div class="subtitulo-card-conta">
                            <h2>Email: <?php echo $row["emailConta"]; ?></h2>
                            <h3>Tipo: <?php echo $row["tipoConta"]; ?></h3> 
                        </div>
                    </div>
                <?php } ?>    
            </div>

            <?php include ('footer.php')?>
        </body>
        </html>
<?php } ?>