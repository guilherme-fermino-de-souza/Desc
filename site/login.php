<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*LOGIN START*/
.container-login-principal {
    display: flex;
    flex-direction: row;
    background-image: url(../site/images/Etec-Butbunito-1.jpg);
    background-position: center;
    background-size: cover;
    height: 85vh;
}
.login-principal {
    display: flex;
    flex-direction: row;
    width: 80%;
    margin: auto;
}
.container-login {
    background-color: rgba(0, 0, 0, 0.75); /* Define a cor de fundo com transparência */
    width: 37.5%;
    height: 80%;
    border-radius: 20px; 
    margin: auto ;
    margin-top: 10%;
    margin-bottom: 11%;
}
.login {
    color: var(--branco-principal);
    width: 50%;
    height: auto;
    padding: 5% 4.5%;
    margin: auto;
}
.login h1 {
    font-size: var(--font-xs-link);
    margin-top: 10%;
}
.login p {
    font-size: var(--font-sm-link);
    color: var(--branco-principal);
}
.login a {
    font-size: var(--font-sm-link);
    color: var(--link-fonte);
}
.card-login {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 6px 5px;
}
.card-login>h1 {
    color: var(--branco-principal);
    font-weight: 800;
    margin: 0;
}
.textfield {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
}
.textfield label {
    font-size: var(--font-ms-link);
    font-weight: 700;
    margin-top: 10%;
}
.textfield input::placeholder {
    font-size: var(--font-sm-link);
    color: var(--branco-principal);
}
.textfield>input:focus {
    outline: none;
    color: var(--branco-principal);
    background-color: rgba(0, 0, 0, 0);
    border-radius: 10%;
    transition: 0.5s;
}
.textfield>input {
    width: 100%;
    margin-top: 2%;
    margin-left: 2%;
    border: none;
    border-bottom: 2px solid var(--vermelho-principal);
    padding: 5%;
    background-color: rgba(0, 0, 0, 0.0); /* Define a cor de fundo com transparência */
    color: var(--branco-principal);
    font-size: var(--font-sm-link);
    box-shadow: none;
    outline: none;
}
.container-login input[type="submit"] {
    background-color: var(--branco-principal);
    color: var(--preto-fonte);
    font-size: var(--font-md-link);
    border-radius: 35px;
    padding:  3% 9%;
    margin-left: 70%;
    margin-top: 5%;
}
input[type="submit"]:hover {
    background-color: rgba(255, 0, 0, 0.7);
    color: var(--branco-principal);
}
/*LOGIN END*/
    </style>
</head>

<body>

    <?php include './navbar.php' ?>

    <!--login start--> <!--INÍCIO-->
    <section class="container-login-principal">

        <div class="login-principal">

            <div class="container-login">
                <div class="login">
                    <div class="card-login">
                        <form class="faca-login" name="login" action="./loginEnviar.php" method="post">
                            <h1>LOGIN</h1>
                            <p>Novo por aqui? <a href="./criarConta.php">Crie uma conta</a></p>


                            <div class="textfield">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" required placeholder="E-mail">
                            </div>

                            <div class="textfield">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" required placeholder="Senha">
                            </div>


                            <div class="enviar">
                                <input type="submit" value="Entrar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Dá erro se um dos campos não for preenchido, eu faria da senha mas nã osei ao certo-->
    <?php include './footer.php'?>

    <script src="./js/java.js"></script>  
</body>

</html>
