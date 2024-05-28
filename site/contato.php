<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <?php include './navbar.php' ?>
    <!--contato start--> <!--INÍCIO-->
    <section class="fundo">

        <div class="contato">

            <form class="fale-conosco" name="fale-conosco" action="contatoEnviar.php" method="post">
                <div class="inputs">
                    <h1 class="titulo-contato">Fale Conosco</h1>
                    <div class="espaco-input">
                        <label for="nome" class="label">Nome:</label>
                        <input type="text" class="input" name="nome" placeholder="Seu Nome" maxlength="70" />
                    </div>


                    <div class="espaco-input">
                        <label for="email" class="label">Email:</label>
                        <input type="email" class="input" name="email" placeholder="E-mail" maxlength="70" />
                    </div>

                    <div class="espaco-input">
                        <label for="sala" class="label">Sala:</label>
                        <select class="input" name="sala">
                            <option value="1">1° DS</option>
                            <option value="2">1° Nutri A</option>
                            <option value="3">1° Nutri B</option>
                            <option value="4">2° DS</option>
                            <option value="5">2° Nutri A</option>
                            <option value="6">2° Nutri B</option>
                            <option value="7">3° DS A</option>
                            <option value="8">3° DS B</option>
                            <option value="9">3° Nutri</option>
                            <option value="10">Modular</option>
                        </select>
                    </div>
                </div>

                <div class="inputs">
                    <div class="espaco-input">
                        <label for="rm" class="label">RM:</label>
                        <input type="Numeric" class="input" name="rm" placeholder="Digite seu RM" />
                    </div>


                    <div class="espaco-input">
                        <label for="assunto" class="label">Assunto:</label>
                        <input type="text" class="input" name="assunto" placeholder="Assunto da Mensagem" maxlength="100" />
                    </div>


                    <div class="espaco-input">
                        <label for="mensagem" class="label">Mensagem:</label>
                        <input type="text" class="input" name="mensagem" placeholder="Digite sua Mensagem Aqui" maxlength="1000" />
                    </div> <!--Deixe este placeholder maior-->


                    <div class="contato-enviar">
                        <input type="submit" class="botao-enviar" name="botao" placeholder="Enviar" />
                    </div>
                </div>
            </form>
        </div>

    </section>

    <?php include './footer.php' ?>

</body>

</html>