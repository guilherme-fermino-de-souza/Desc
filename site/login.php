<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <?php include './navbar.php' ?>
    <!--login start--> <!--INÍCIO-->
    <section class="container-login">

        <div class="login">
            <div class="card-login">
                <form class="faca-login" name="login" action="#" method="post">
                    <h1>LOGIN</h1>
                    <p>Novo por aqui? <a href="#">Crie uma conta</a></p>

                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
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
                        <input type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>

    </section>

    <?php include './footer.php' ?>

</body>
</html>