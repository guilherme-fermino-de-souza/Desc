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
            <title>Alternar Comentario Consulta</title>
            <link rel="stylesheet" href="./css/estilo.css">
            <style>
        /*ALTERNARCOMENTÁRIOCONSULTA START*/
        .alternarcomentarioconsulta-principal {
            display: flex;
            justify-content: center; /* Horizontal alignment */
            align-items: center;     /* Vertical alignment */
            background-color: var(--branco-principal);
            background-position: center;
            background-size: cover;
        }
        .alternarcomentarioconsulta {
            display: flex;
            flex-direction: column;
            width: 25%;
            background-color: var(--cinza-fonte-claro);
            border: 2px solid var(--tema-secundario); /* Largura, estilo e cor da borda */
            border-radius: 25px; 
            padding: 5% 0%;
            margin-top: 3%;
            margin-bottom: 3%;
        }
        .alternarcomentarioconsulta h1 {
            font-size: var(--fonte-grande);
            margin: 0% 0% 2% 0%;
            color: var(--preto-fonte);
            font-weight: 800;
            text-align: center;
        }
        .alternarcomentarioconsulta p {
            font-size: var(--fonte-padrao);
            color: var(--preto-fonte);
            text-align: center;
        }
        .alternarcomentarioconsulta a {
            font-size: var(--fonte-padrao);
            color: var(--tema-terciario);
            text-align: center;
        }
        .alternar {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: auto;
        }
        .textfield {
            display: flex;
            flex-direction: column;
            padding: 1%;
        }
        .textfield label {
            font-size: var(--fonte-padrao);
            font-weight: 700;
            margin-top: 2%;
        }
        .textfield input::placeholder {
            font-size: var(--fonte-padrao);
            color: var(--preto-fonte);
            padding-left: 4%;
        }
        .textfield>input:focus {
            outline: none;
            color: var(--preto-fonte);
            background-color: rgba(0, 0, 0, 0);
            transition: 0.5s;
        }
        .textfield>input {
            width: 100%;
            margin-top: 2%;
            border: none;
            border-bottom: 2px solid var(--tema-secundario);
            background-color: rgba(0, 0, 0, 0.0); /* Define a cor de fundo com transparência */
            color: var(--tema-terciario);
            font-size: var(--fonte-padrao);
            box-shadow: none;
            outline: none;
        }
        .alternarcomentarioconsulta input[type="submit"] {
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-padrao);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0%;
        }
        input[type="submit"]:hover {
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
        .alternarcomentarioconsulta input[type="file"] {
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-pequena);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0%;
        }
        input[type="file"]:hover {
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
        @media (max-width: 1050px) {
                    .alternarcontatoconsulta-principal {
                    height: 95vh;
                }
                }
        /*ALTERNARCOMENTÁRIOCONSULTA END*/
            </style>
        </head>
        <body>
            <?php include './navbar.php' ?>
            <div class="alternarcomentarioconsulta-principal">
                <div class="alternarcomentarioconsulta">
                    <form action="alterarcomentario.php" method="post" enctype="multipart/form-data">      
                        <h1>Comentário</h1>
                        <?php $noticias_id = $_GET['id']; 
                        <input type="hidden" name="idNoticia" value="<?php echo htmlspecialchars($noticia_id); ?>">
                            <input type="hidden" name="idComentarioNoticia" value="<?php echo @$_GET['id']; ?>" />
                            <input type="hidden" name="nomeComentarioNoticia" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome" />

                        <div class="textfield">
                            <input type="text" name="mensagemComentarioNoticia" value="<?php echo @$_GET['comentario']; ?>" placeholder="Comentário" />
                        </div>

                        <div class="textfield">
                            <input type="submit" value="Salvar" />
                        </div>
                    </form>
                </div>
            </div> 

                <?php include './footer.php'?>

            <script src="./js/java.js"></script>
        </body>
    </html>
<?php } ?>