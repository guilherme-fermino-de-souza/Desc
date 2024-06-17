<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>


    <!--login start--> <!--INÍCIO-->
    <section class="container-login-principal">

        <div class="login-principal">

        <div class="conteiner-anun-login">
           <a href="./index.php">NEWS WALL ETEC</a>
           <h3>Provisorio Criar Conta, alguem do grupo faz ai a página mais trabalhada</h3>
        </div>

            <div class="container-login">
                <div class="login">
                    <div class="card-login">
                        <form class="faca-login" name="login" action="criarContaEnviar.php" method="post">
                            <h1>Provisorio Criar Conta</h1>
                            <p>Já tem uma conta? <a href="./login.php">login</a></p>

                            <div class="textfield">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" placeholder="Nome">
                            </div>

                            <div class="textfield">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" placeholder="E-mail">
                            </div>

                            <div class="textfield">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" placeholder="Senha">
                            </div>


                            <div class="enviar">
                                <input type="submit" value="Criar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="./js/java.js"></script>
</body>

</html>
</body>
</html>
