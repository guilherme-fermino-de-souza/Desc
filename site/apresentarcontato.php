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
                    min-height: 60vh;
                }
                .card-apresentarcontato {   /* CARD */
                    background-color: var(--branco-principal);
                    margin: 5% ;
                    border-radius: 5px;
                    border: 5px solid var(--tema-primario);
                    height: fit-content;
                }
                .titulo-card-contato { /* TÍTULO */
                    font-weight: 800;
                    background-color: var(--tema-terciario);
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                .titulo-card-contato h1{
                    font-size: var(--fonte-pequena);
                    color: var(--branco-principal);
                    padding: 1%;
                }
                .botao-card-apresentarcontato {
                    display: flex;
                    flex-direction: row;
                    justify-content: end;
                    width: 15%;
                }
                .botao-card-apresentarcontato a { /* EXCLUIR/ALTERNAR */
                    width: 50%;
                    margin: 2.5%;
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
                .card-contato-img { /* CONTA*/
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 85%;
                }
                .card-contato-img h2{ 
                    color: var(--branco-principal);
                    font-size: var(--fonte-padrao);
                    margin: 0 0 0 1%;
                }
                .card-contato-img img { /* IMG */
                    border-radius: 50%;
                    margin: 2.5% 4%;
                }
                .subtitulo-card-contato { /* SUBTÍTULO */
                    background-color: var(--tema-primario);
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                }
                .subtitulo-card-contato h1{
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    padding: 1%;
                    margin: 2.5%;
                }
                .texto-card-contato { /* TEXTO */
                    background-color: var(--tema-terciario);
                    border: 2px solid var(--tema-secundario);
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
                    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                        $stmtImg = $pdo->prepare("SELECT imgConta FROM tbConta WHERE nomeConta = :nomeConta");
                        $stmtImg->bindParam(':nomeConta', $row["nomeContato"], PDO::PARAM_STR);
                        $stmtImg -> execute();
                        $imgRow = $stmtImg->fetch(PDO::FETCH_ASSOC);
                        $imgConta = isset($imgRow["imgConta"]) ? $imgRow["imgConta"] : 0;
                    ?>
                        <div class="card-apresentarcontato">
                            <div class="titulo-card-contato">
                                <div class="card-contato-img"> <!-- img -->
                                    <img src="images/imagensArquivos/conta/<?php echo $imgConta == 0 ? 'icons/semImagem.png' : $imgConta . '.png'; ?>" width="50"/>
                                    <h2><?php echo $row["nomeContato"]; ?></h2> <!-- nome -->
                                </div>
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
                                <h1><?php echo $row["assuntoContato"]; ?></h1> <!-- assunto -->
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