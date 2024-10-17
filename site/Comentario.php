<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentário</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*EXCLUIR DEPOIS*/
        .comentario-principal {
            display: flex;
            justify-content: center; /* Horizontal alignment */
            align-items: center;     /* Vertical alignment */
            background-color: var(--branco-principal);
            background-position: center;
            background-size: cover;
            height: 85vh;
        } 
        .comentario {
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
        .comente {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: auto;
        }
        .comentario h1 {
            font-size: var(--fonte-grande);
            margin: 0% 0% 2% 0%;
            color: var(--preto-fonte);
            font-weight: 800;
            text-align: center;
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
            border-radius: 10%;
            transition: 0.5s;
        }
        .textfield>input {
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
        .comente input[type="submit"] {
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-padrao);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0% ;
        }

        input[type="submit"]:hover {
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
        @media (max-width: 1050px) {
            .comentario-principal {
            height: 90vh;
        }
        }
        /*COMENTÁRIO END*/
    </style>
</head>

<body>

    <?php include './navbar.php' ?>
    <!--contato start--> <!--INÍCIO-->
    <section class="contato-principal">
        <div class="contato">

            <form class="comente" name="comente" action="./inserirComentario.php" method="post">
                <h1>COMENTE</h1>
                <?php $aviso_id = $_GET['id']; // Captura o ID da notícia?>
                <input type="hidden" name="idAviso" value="<?php echo htmlspecialchars($noticia_id); ?>">

                       <div class="textfield">
                            <label for="nome" class="label">Nome:</label>
                            <input type="text" class="input" name="nome" required placeholder="Insira o Nome" />
                        </div>

                        <div class="textfield">
                            <label for="comentario" class="label">Comentario:</label>
                            <input type="text" class="input" name="comentario" required placeholder="Insira o Comentário" />
                        </div>

                        <div class="comentario-enviar">
                            <input type="submit" class="botao-enviar" name="botao" required placeholder="Enviar" />
                        </div>
            </form>
        </div>  
    </section>

    <?php include './footer.php' ?>
    <script src="./js/java.js"></script>
</body>
</html>