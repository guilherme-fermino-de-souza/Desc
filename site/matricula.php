<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*MATRÍCULA START (copia e cola do acima)*/
.container-matri-principal {
    display: flex;
    flex-direction: row-reverse;
    background-image: url("../images/Etec-Butbunito-1.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    background-position: center;
    width: auto;
    height: 100vh;
    align-items: center;
}
.matri-principal {
    display: flex;
    flex-direction: row;
    width: 80%;
    margin: auto;
}
.container-matri {
    background-color: rgba(0, 0, 0, 0.75); /* Define a cor de fundo com transparência */
    width: 37.5%;
    height: 80%;
    border-radius: 20px;  
    margin: auto ;
    margin-top: 10%;
    margin-bottom: 11%;
}
.matri {
    color: var(--branco-principal);
    width: 50%;
    height: auto;
    padding: 5% 4.5%;
    margin: auto;
}

.matri h1 {
    font-size: var(--font-xs-link);
    margin-top: 10%;
}

.matri p {
    font-size: var(--font-sm-link);
    color: var(--branco-principal);
}

.matri a {
    font-size: var(--font-sm-link);
    color: var(--link-fonte);
}

.card-login {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 6px 5px;
}

.card-matri>h1 {
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
.textfield select {
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


.textfield label {
    font-size: var(--font-ms-link);
    font-weight: 700;
    margin-top: 10%;
}

.textfield input::placeholder {
    font-size: var(--font-sm-link);
}

.textfield>input {
    width: 100%;
    margin-left: 2%;
    border: none;
    border-bottom: 2px solid var(--vermelho-principal);
    padding: 5%;
    background-color: rgba(0, 0, 0, 0.0); 
    color: var(--branco-principal);
    font-size: var(--font-sm-link);
    box-shadow: none;
    outline: none;
}

.textfield>input:focus {/*  quando um usuário clica em um campo */
    border-bottom: 2px solid var(--vermelho-principal);
}
.textfield select:focus, .textfield > input:focus {
    border-bottom-color: var(--vermelho-principal);
    outline: none;
    color: #ffffff;
    background-color: #000;
}
.container-matri input[type="submit"] {
    background-color: var(--branco-principal);
    color: var(--preto-fonte);
    font-size: var(--font-md-link);
    border-radius: 35px;
    padding: 3% 9%;
    margin-left: 70%;
    margin-top: 5%;
}
input[type="submit"]:hover {
    background-color: rgba(255, 0, 0, 0.5); /* Define a cor de fundo com transparência */
    /* Muda a cor de fundo quando o mouse passa por cima */
    color: var(--branco-principal);
}
/*MATRÍCULA END*/
    </style>
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
