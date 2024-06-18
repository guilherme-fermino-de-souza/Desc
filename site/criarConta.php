<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Nova Conta</title>
</head>
<body>
<?php include './navbar.php' ?>

<!--account start--> <!--INÍCIO-->
<section class="container-account-principal">

        <div class="account-principal">

            <div class="container-account">
                <div class="account">
                    <div class="card-account">
                        <form class="create-account" name="create-account" action="./criarContaEnviar.php" method="post">
                            <h1>Nova Conta</h1>
                            <p>Já tem uma conta? <a href="./login.php">Acesse-a aqui</a></p>

                            <div class="textfield">
                                <label for="nome">Nome Do Usuário</label>
                                <input type="text" name="nome" placeholder="Usuário">
                            </div>

                            <div class="textfield">
                                <label for="email">Seu E-mail</label>
                                <input type="email" name="email" placeholder="E-mail">
                            </div>

                            <div class="textfield">
                            <label for="tipoconta" class="label">Tipo:</label>
                            <select class="input" name="tipoconta">
                                <option value="1">Resposável</option>
                                <option value="2">Professor</option>
                                <option value="3">Cordernador</option>
                            </select>
                        </div>

                            <div class="textfield">
                                <label for="senha">Crie Uma Senha</label>
                                <input type="password" name="senha" placeholder="Senha">
                            </div>


                            <div class="criar">
                                <input type="submit" value="Criar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include './footer.php' ?>

    <script src="./js/java.js"></script>  
</body>

</html>
