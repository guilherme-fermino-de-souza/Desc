<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*CONTATO START*/
        .fundo {
            display: flex;
            flex-direction: row;
            background-image: url(../site/images/Etec-Butbunito-1.jpg);
            background-position: center;
            background-size: cover;
            height: 85vh;
        }
        .fundo h1 {
            font-size: var(--font-xx-link);
            margin: auto;
        }

        .fale-conosco {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 8%;
        }

        .contato {
            background-color: rgba(0, 0, 0, 0.75);
            /* Define a cor de fundo com transparência */
            color: var(--branco-principal);
            border-radius: 20px;
            width: 55vw;
            height: 35vw;
            margin: 5% auto;
            padding: 10px 10px;
        }

        .inputs {
            width: 100%;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .inputs>h1 {
            color: var(--preto-fonte);
            font-weight: 800;
            margin: 0;
        }

        .inputs-first-column {
            margin-right: 15%;
        }

        .espaco-input {
            display: flex;
            flex-direction: column;
        }

        .espaco-input label {
            font-size: var(--font-xs-link);
            font-weight: 800;
            margin-top: 10%;
        }

        .espaco-input select {
            width: 100%;
            margin-top: 2%;
            margin-left: 2%;
            border: none;
            border-bottom: 2px solid var(--vermelho-principal);
            padding: 2%;
            background-color: rgba(0, 0, 0, 0.0);
            color: var(--branco-principal);
            font-size: var(--font-sm-link);
            box-shadow: none;
            outline: none;
        }

        .espaco-input select:focus{
        outline: none;
        color: #ffffff;
        background-color: #000;
        border-radius: 10%;
        transition: 0.5s;
        }
        .espaco-input>input:focus {
            outline: none;
            color: var(--branco-principal);
            background-color: rgba(0, 0, 0, 0);
            border-radius: 10%;
            transition: 0.5s;
        }

        .espaco-input>input {
            width: 130%;
            margin-left: 2%;
            border: none;
            border-bottom: 2px solid var(--vermelho-principal);
            padding: 5%;
            background-color: rgba(0, 0, 0, 0.0);
            /* Define a cor de fundo com transparência */
            color: var(--branco-principal);
            font-size: var(--font-sm-link);
        }

        .contato-enviar {
            margin-top: 15%;
            margin-left: auto;
        }

        .fale-conosco input[type="submit"] {
            background-color: var(--branco-principal);
            color: var(--preto-fonte);
            font-size: var(--font-sm-link);
            border-radius: 35px;
            padding: 1% 5%;
        }

        input[type="submit"]:hover {
            background-color: rgba(255, 0, 0, 0.5);
            /* Define a cor de fundo com transparência */
            /* Muda a cor de fundo quando o mouse passa por cima */
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
    <section class="fundo">
        <div class="contato">

            <form class="fale-conosco" name="fale-conosco" action="../site/contatoEnviar.php" method="post">
                <h1 class="titulo-contato">Fale Conosco</h1>
                <div class="inputs">
                    <div class="inputs-first-column">
                        <div class="espaco-input">
                            <label for="nome" class="label">Nome:</label>
                            <input type="text" class="input" name="nome" required placeholder="Seu Nome" />
                        </div>
                        <div class="espaco-input">
                            <label for="email" class="label">Email:</label>
                            <input type="email" class="input" name="email" required placeholder="E-mail" />
                        </div>
                        
                    </div>
                    <div class="inputs-second-column">
                        <div class="espaco-input">
                            <label for="assunto" class="label">Assunto:</label>
                            <input type="text" class="input" name="assunto" required placeholder="Tema da mensagem" />
                        </div>
                        <div class="espaco-input">
                            <label for="mensagem" class="label">Mensagem:</label>
                            <input type="text" class="input" name="mensagem" required placeholder="Digite sua mensagem aqui" maxlength="250" />
                        </div> <!--Deixe este placeholder maior-->
                        <!--E se eu não quiser?-->
                        <div class="contato-enviar">
                            <input type="submit" class="botao-enviar" name="botao" required placeholder="Enviar" />
                        </div>
                    </div>
                </div>
            </form>
        </div>  
    </section>

    <?php include './footer.php' ?>
    <script src="./js/java.js"></script>
</body>
</html>