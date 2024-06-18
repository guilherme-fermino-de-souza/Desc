<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>

    <?php include './navbar.php' ?>
    <!--login start--> <!--INÍCIO-->
    <section class="container-matri-principal">

        <div class="matri-principal">

            <div class="container-matri">
                <div class="matri">
                    <div class="card-matri">
                        <form class="faca-matri" name="matri" action="./matriculaEnviar.php" method="post">
                            <h1>MATRÍCULA</h1>
                            <p>Não é dicente? <a href="login.php">Entre em sua conta.</a></p>

                            <div class="textfield">
                                <label for="usuario">Nome completo</label>
                                <input type="text" name="usuario" required placeholder="Usuário">
                            </div>

                            <div class="textfield">
                                <label for="rm">Registro de Matrícula (RM)</label>
                                <input type="text" minlength="1" maxlength="6" name="rm" id="rm" required placeholder="RM" >
                            </div>

                            <div class="textfield">
                                <label for="codetec">Código da ETEC</label>
                                <select name="codetec" required placeholder="codEtec">
                                    <option selected disabled>Defina qual sua ETEC</option>
                                    <option value="118">118 - ETEC de Guaianazes (SP)</option>
                                    <option value="023">023 - ETEC Albert Einstein (SP)</option>
                                </select>
                            </div>

                            <div class="textfield">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" required placeholder="Senha">
                            </div>


                            <div class="enviar">
                                <input type="submit" value="Entrar" onclick="verifyRegis()">
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
