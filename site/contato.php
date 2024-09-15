<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*CONTATO START*/
        .contato-principal {
            display: flex;
            justify-content: center; /* Horizontal alignment */
            align-items: center;     /* Vertical alignment */
            background-color: var(--branco-principal);
            background-position: center;
            background-size: cover;
        } 
        .contato {
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
        .fale-conosco {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: auto;
        }
        .contato h1 {
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
        .fale-conosco input[type="submit"] {
            background-color: var(--branco-principal);
            color: var(--preto-fonte);
            font-size: var(--fonte-padrao);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0% ;
        }

        input[type="submit"]:hover {
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
        }
        @media (max-width: 1360px) {
            .contato {
            width: 65vw;
            height: 40vw;
            margin: 11% auto;
            padding: 20px 20px;
        }
        }
        /*CONTATO END*/
    </style>
</head>

<body>

    <?php include './navbar.php' ?>
    <!--contato start--> <!--INÍCIO-->
    <section class="contato-principal">
        <div class="contato">

            <form class="fale-conosco" name="fale-conosco" action="../site/contatoEnviar.php" method="post">
                <h1>FALE CONOSCO</h1>
                        <div class="textfield">
                            <label for="nome" class="label">Nome:</label>
                            <input type="text" class="input" name="nome" required placeholder="Seu Nome" />
                        </div>

                        <div class="textfield">
                            <label for="email" class="label">Email:</label>
                            <input type="email" class="input" name="email" required placeholder="E-mail" />
                        </div>

                        <div class="textfield">
                            <label for="assunto" class="label">Assunto:</label>
                            <input type="text" class="input" name="assunto" required placeholder="Tema da mensagem" />
                        </div>

                        <div class="textfield">
                            <label for="mensagem" class="label">Mensagem:</label>
                            <input type="text" class="input" name="mensagem" required placeholder="Digite sua mensagem aqui" maxlength="250" />
                        </div> <!--Deixe este placeholder maior-->
                        <!--E se eu não quiser?-->
                        <div class="contato-enviar">
                            <input type="submit" class="botao-enviar" name="botao" required placeholder="Enviar" />
                        </div>
            </form>
        </div>  
    </section>

    <?php include './footer.php' ?>
    <script src="./js/java.js"></script>
</body>
</html>
