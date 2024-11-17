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
                /* Apresentar Contato enviados para os Devs */
                .conteiner-apresentarcontato { /* PRINCIPAL */
                    display: grid;
                    width: 80%;
                    margin: auto;
                    grid-template-columns: 25% 25%  25% 25%;
                }
                .card-apresentarcontato {   /* CARD */
                    background-color: var(--branco-principal);
                    margin: 5% ;
                    border-radius: 5px;
                    border: 5px solid var(--tema-terciario);
                    height: fit-content;
                }
                .titulo-card-contato { /* TÍTULO */
                    font-weight: 800;
                    background-color: var(--tema-terciario);
                    display: flex;
                }
                .titulo-card-contato h1{
                    font-size: var(--fonte-pequena);
                    color: var(--branco-principal);
                    padding: 1%;
                }
                .botao-card-apresentarcontato {
                    display: flex;
                    flex-direction: row;
                    aling-itens: center;
                    justify-content: end;
                }
                .botao-card-apresentarcontato a { /* EXCLUIR/ALTERNAR */
                    width: 7.5%;
                    margin: .5%;
                    border-radius: 35%;
                    padding: 1%;
                    text-decoration: none;
                }
                .botao-card-apresentarcontato a:hover {
                    background-color:  red;
                    transition: 0.75s;
                }
                .botao-card-apresentarcontato img {
                    width: 100%;
                }
                .subtitulo-card-contato { /* SUBTÍTULO */
                    background-color: var(--tema-secundario);
                }
                .subtitulo-card-contato h2{
                    font-size: var(--muitoPequena);
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
            </style>
            <title>Apresentar Contato</title>
        </head>
        <body>
            <?php include('navbar.php');?>

            <div class="conteiner-apresentarcontato">
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM tbContato");
                    $stmt -> execute();
                    while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
                        <div class="card-apresentarcontato">
                            <div class="titulo-card-contato">
                                <h1>Assunto: <?php echo $row["assuntoContato"]; ?></h1>
                                <div class="botao-card-apresentarcontato"> <!-- botões -->
                                    <a href="alternarcontatoconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&email=<?php echo $row[2]?>&assunto=<?php echo $row[3]?>&mensagem=<?php echo $row[4]?>">
                                        <img src="./images/imagensArquivos/noticias/icons/alternar.webp"> <!-- botão alternar -->
                                    </a> 
                                    <a href="excluircontato.php?id=<?php echo $row[0]; ?>">
                                        <img src="./images/imagensArquivos/noticias/icons/trash.png"> <!-- botão excluir -->
                                    </a>
                                </div>
                            </div>
                            <div class="subtitulo-card-contato">
                                <h2>Nome: <?php echo $row["nomeContato"]; ?></h2>
                            </div>
                            <div class="texto-card-contato">
                                <h3><?php echo $row["mensagemContato"];?></h3>
                            </div>
                        </div>
                <?php } ?>  
            </div>  

            <?php include ('footer.php')?>
            </body>
        </html>
<?php } ?>