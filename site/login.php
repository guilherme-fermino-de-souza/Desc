<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*LOGIN START*/
.login-principal {
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment */
    background-color: var(--branco-principal);
    background-position: center;
    background-size: cover;
}
.login {
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
.login h1 {
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.login p {
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.login a {
    font-size: var(--fonte-padrao);
    color: var(--tema-terciario);
    text-align: center;
}
.faca-login {
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
.login input[type="submit"] {
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
/*LOGIN END*/
    </style>
</head>

<body>

    <?php include './navbar.php' ?>

    <!--login start--> <!--INÍCIO-->
        <div class="login-principal">
                <div class="login">
                        <form class="faca-login" name="login" action="./loginEnviar.php" method="post">
                            <h1>LOGIN</h1>
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
                            <p>Novo por aqui? <a href="./criarConta.php">Crie uma conta</a></p>
                        </form>
                </div>
        </div>
<!--Dá erro se um dos campos não for preenchido, eu faria da senha mas nã osei ao certo-->
    <?php include './footer.php'?>

    <script src="./js/java.js"></script>  
</body>

</html>
