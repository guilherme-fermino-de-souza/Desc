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
                /* Apresetar TODOS os cometários feitos o site na págia dos devs */
                .conteiner-apresentarcomentario { /* PRINCIPAL */
                    display: grid;
                    width: 80%;
                    margin: auto;
                    grid-template-columns: 50%  50%;
                }
                .card-apresentarcomentario {   /* CARD */
                    background-color: var(--branco-principal);
                    margin: 5% ;
                    border-radius: 5px;
                    border: 5px solid var(--tema-terciario);
                    height: fit-content;
                }
                .titulo-card-comentario { /* TÍTULO */
                    background-color: var(--tema-terciario);
                    display: flex;
                }
                .titulo-card-comentario h1{
                    font-size: var(--fonte-media);
                    color: var(--branco-principal);
                    padding: 1%;
                }
                .botao-card-apresentarcomentario {
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    width: 10%;
                }
                .botao-card-apresentarcomentario a { /* EXCLUIR/ALTERNAR */
                    width: 40%;
                    margin: 2.5%;
                    border-radius: 35%;
                    padding: 1%;
                    text-decoration: none;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                .botao-card-apresentarcomentario a:hover {
                    background-color:  red;
                    transition: 0.75s;
                }
                .botao-card-apresentarcomentario img {
                    width: 70%;
                }
                .card-comentario-img { /* CONTA*/
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    width: 85%;
                }
                .card-comentario-img h2{ 
                    color: var(--branco-principal);
                    font-size: var(--fonte-padrao);
                    margin: 0 0 0 1%;
                }
                .card-comentario-img img { /* IMG */
                    border-radius: 50%;
                    margin: 2.5% 4%;
                }
                .subtitulo-card-comentario { /* SUBTÍTULO */
                    background-color: var(--tema-primario);
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                }
                .subtitulo-card-comentario { /* SUBTÍTULO */
                    background-color: var(--tema-primario);
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                }
                .subtitulo-card-comentario h1{
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    padding: .1%;
                    margin: .5%;
                }
                .texto-card-comentario { /* TEXTO */
                    background-color: var(--tema-terciario);
                    border: 2px solid var(--tema-secundario);
                    padding: 3%;
                }
                .texto-card-comentario h3 {
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    text-indent: 3%;
                }
            </style>
            <title>Apresentar Comentários</title>
        </head>
        <body>
            <?php include('navbar.php');?>

            <div class="conteiner-apresentarcomentarios"> <!-- Contaier Pricipal-->
                <?php
                    $stmt = $pdo->prepare("SELECT * FROM tbcomentarionoticia");
                    $stmt -> execute();
                    while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                        $stmtNoticia = $pdo->prepare("SELECT tituloNoticias FROM tbNoticias WHERE idNoticias = :idNoticias");
                        $stmtNoticia->bindParam(':idNoticias', $row["noticia_id"], PDO::PARAM_STR);
                        $stmtNoticia -> execute();
                        $tituloRow = $stmtNoticia->fetch(PDO::FETCH_ASSOC);
                        $tituloNoticia = isset($tituloRow["tituloNoticias"])? $tituloRow["tituloNoticias"] : 'Título não encontrado';?>
                        <div class="card-apresentarcomentario">
                            <div class="titulo-card-comentario">
                                <div class="card-comentario-img"> <!-- img -->
                                    <h1><?php echo $tituloNoticia; ?> </h1><!-- Título -->
                                </div>
                                <div class="botao-card-apresentarcomentario"> <!-- botões -->
                                    <a href="alternarcomentarioconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&comentario=<?php echo $row[2]?>">
                                        <img src="./images/imagensArquivos/noticias/icons/alternar.webp"/>
                                    </a> <!-- ALTERAR -->
                                    <a href="excluircomentario.php?id=<?php echo $row[0]; ?>">   
                                        <img src="./images/imagensArquivos/noticias/icons/trash.png"/>
                                    </a> <!-- EXCLUIR -->
                                </div>
                            </div>
                            <div class="subtitulo-card-comentario">
                                <h1><?php echo $row["nomeComentarioNoticia"]; ?></h1>
                            </div>
                            <div class="texto-card-comentario">
                                <h3><?php echo $row["mensagemComentarioNoticia"]; ?></h3> <!-- Cometário -->
                            </div>
                        </div>
                <?php } ?>  
                
            </div>  

            <?php include ('footer.php')?>
            </body>
        </html>
<?php } ?>