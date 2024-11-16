<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../site/css/estilo.css">
    <style>
        /* Apresetar APENAS os cometários feitos em notícia específica */

        /*COMENTÁRIO START Fazer comentário*/
        .comentario-principal {
        display: flex;
        justify-content: center; /* Horizontal alignment */
        align-items: center;     /* Vertical alignment */
        background-color: var(--branco-principal);
        background-position: center;
        background-size: cover;
        height: 85vh;
        } 
        .comentario {  /* Bloco de cometário */
            display: flex;
            flex-direction: column;
            width: 25%;
            background-color: var(--cinza-fonte-claro);
            border: 2px solid var(--tema-secundario); /* Largura, estilo e cor da borda */
            text-indent: 5%;
            padding: 0.2% 0%;
        }
        .comente {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: 1.5% auto;
        }
        .comentario h1 { /* Título*/
            font-size: var(--fonte-grande);
            margin: 0% 0% 2% 0%;
            color: var(--preto-fonte);
            font-weight: 800;
            text-align: center;
        }
        .textfield { /* Textfield Container Principal*/
            display: flex;
            flex-direction: column;
            padding: 1%;
        }
        .textfield label { /* Texto de Descrição*/
            font-size: var(--fonte-padrao);
            font-weight: 700;
            margin-top: 2%;
        }
        .textfield input::placeholder { /* Local Onde se escreve*/
            font-size: var(--fonte-padrao);
            color: var(--preto-fonte);
            padding-left: 4%;
        }
        .textfield>input:focus { /* Texto no Placeholder*/
            outline: none;
            color: var(--preto-fonte);
            background-color: rgba(0, 0, 0, 0);
            border-radius: 10%;
            transition: 0.5s;
        }
        .textfield>input { /*Quando você escreve o textfield*/
            width: 100%;
            margin-top: 2%;
            border: none;
            border-bottom: 2px solid var(--tema-secundario);
            background-color: rgba(0, 0, 0, 0.0); /* Define a cor de fundo com transparência */
            color: var(--branco-principal);
            font-size: var(--fonte-padrao);
            box-shadow: none;
            outline: none;
        }
        .comente input[type="submit"] { /* Botão Enviar Azul*/
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-padrao);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0% ;
        }

        input[type="submit"]:hover { /* Quando Clicar no Botão Enviar Azul*/
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
        @media (max-width: 1050px) { /* RESPONSIVO*/
            .comentario-principal {
            height: 90vh;
        }
        }
        /*COMENTÁRIO END*/
        .conteiner-apresentarcomentario { /* PRINCIPAL Apresentar comentários feitos na notícia*/
            display: grid;
            width: 80%;
            margin: 2% auto;
            grid-template-columns: 100%;
        }
        .card-apresentarcomentario {   /* CARD */
            background-color: var(--tema-primario);
            border-radius: 5px;
            border: 5px solid var(--tema-primario);
            height: fit-content;
            margin: 1% 0%;
            padding: .1%;
        }
        .titulo-card-comentario { /* TÍTULO */
            background-color: var(--tema-terciario);
            display: flex;
        }
        .titulo-card-comentario h1{
            font-weight: 600;
            font-size: var(--fonte-media);
            color: var(--branco-principal);
            padding: 1%;
        }
        .botao-card-apresentarcomentario {
            display: flex;
            flex-direction: row;
            aling-itens: center;
            justify-content: end;
        }
        .botao-card-apresentarcomentario a { /* EXCLUIR/ALTERNAR */
            width: 5%;
            margin: .5%;
            border-radius: 35%;
            padding: 1%;
            text-decoration: none;
        }
        .botao-card-apresentarcomentario a:hover {
            background-color:  red;
            transition: 0.75s;
        }
        .botao-card-apresentarcomentario img {
            width: 100%;
        }
        .comentario { /* SUBTÍTULO */
            background-color: var(--tema-primario);
            width: 100%;
        }
        .comentario h2{
            font-size: var(--fonte-padrao);
            color: var(--branco-principal);
            margin: 0.5% 1%;
        }
    </style>
    <title>Apresentar comentario</title>
</head>
<body>
<?php include('navbar.php');?>
    <!--Fazer comentário-->
    <div class="comente">

            <form class="container-comente" name="comente" action="./inserirComentario.php" method="post">
                <h1>COMENTE</h1>
                <?php $noticia_id = $_GET['id']; // Captura o ID da notícia ?>
                <input type="hidden" name="idNoticia" value="<?php echo htmlspecialchars($noticia_id); ?>">
                        <!-- Pega o nome do usuário -->
                        <input type="hidden" name="nome" value="<?php echo ($_SESSION['nome']); ?>" />

                        <div class="textfield">
                            <label for="comentario" class="label">Comentario:</label>
                            <input type="text" class="input" name="comentario" required placeholder="Insira o Comentário" />
                        </div>

                        <div class="comentario-enviar"> 
                            <input type="submit" class="botao-enviar" name="botao" required placeholder="Enviar" />
                        </div>
            </form>
    </div>  
    <!--Apresentar comentário-->
    <div class="conteiner-apresentarcomentario">

        <?php
            $stmt = $pdo->prepare("SELECT * FROM tbComentarioNoticia WHERE noticia_id = ?");
            $idNoticia = $_GET['id'];
            $stmt -> execute([$idNoticia]);
            while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
                <div class="card-apresentarcomentario">
                    <div class="titulo-card-comentario">
                        <h1><?php echo $row["nomeComentarioNoticia"]; ?></h1>
                        <div class="botao-card-apresentarcomentario"> <!-- botões -->
                            <a href="alternarcomentarioconsulta.php?id=<?php echo $row[0]?>&nome=<?php echo $row[1]?>&comentario=<?php echo $row[2]?>&idNoticia=<?php echo $row[3]; ?>">
                                <img src="./images/imagensArquivos/noticias/icons/alternar.webp"> <!-- botão alternar -->
                            </a>
                            <a href="excluircomentario.php?id=<?php echo $row[0]?>&idNoticia=<?php echo $idNoticia; ?>"> 
                                <img src="./images/imagensArquivos/noticias/icons/trash.png"> <!-- botão excluir -->
                            </a> 
                        </div> 
                    </div>
                    <div class="comentario">
                        <h2><?php echo $row["mensagemComentarioNoticia"]; ?></h2>
                    </div>
                </div>
        <?php } ?>  
    </div>  

<?php include ('footer.php')?>
</body>
</html>