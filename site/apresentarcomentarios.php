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
                .titulo-card-comentario a { /* EXCLUIR */
                    font-weight: 800;
                    font-size: var(--fonte-media);
                    color:  var(--tema-secundario);
                    margin-left: auto;
                    padding: 1%;
                    text-decoration: none;
                }
                .titulo-card-comentario a:hover {
                    color:  red;
                }
                .comentario { /* SUBTÍTULO */
                    background-color: var(--tema-secundario);
                }
                .comentario h2{
                    font-weight: 800;
                    font-size: var(--fonte-padrao);
                    color: var(--branco-principal);
                    padding: 1%;
                }
                .alterar-card-comentario { /* ALTERAR */
                    display: flex;
                    justify-content: center;
                    background-color: var(--tema-terciario);
                }
                .alterar-card-comentario a {
                    font-weight: 600;
                    font-size: var(--fonte-padrao);
                    color:  var(--tema-secundario);
                    text-decoration: none;
                }
                .alterar-card-comentario a:hover {
                    color:  var(--branco-principal);
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
                        $stmtNoticia -> execute();
                        $tituloRow = $stmtNoticia->fetch(PDO::FETCH_ASSOC);
                        $?>
                        <div class="card-apresentarcomentario">
                            <div class="titulo-card-comentario">
                                <h1>Notícia: <?php echo $row["noticia_id"]; ?> <!-- Título -->
                                    Nome: <?php echo $row["nomeComentarioNoticia"]; ?></h1>
                                <a href="excluircomentario.php?id=<?php echo $row[0]; ?>"> X </a> <!-- EXCLUIR -->
                            </div>
                            <div class="comentario">
                                <h2><?php echo $row["mensagemComentarioNoticia"]; ?></h2> <!-- Cometário -->
                            </div>
                            <div class="alterar-card-comentario"> <!-- ALTERAR -->
                                <a href="alternarcomentarioconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&comentario=<?php echo $row[2]?>"> Alterar </a> 
                            </div>
                        </div>
                <?php } ?>  
                
            </div>  

            <?php include ('footer.php')?>
            </body>
        </html>
<?php } ?>