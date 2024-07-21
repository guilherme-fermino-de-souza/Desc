<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nova Conta</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*CREATEACCOUNT START*/
.container-account-principal {
    display: flex;
    flex-direction: row;
    background-image: url(../site/images/Etec-Butbunito-1.jpg);
    background-position: center;
    background-size: cover;
    height: 85vh;
}
.account-principal {
    display: flex;
    flex-direction: row;
    width: 80%;
    margin: auto;
}
.container-account {
    background-color: rgba(0, 0, 0, 0.75); /* Define a cor de fundo com transparência */
    width: 37.5%;
    height: 80%;
    border-radius: 20px; 
    margin: auto ;
    margin-top: 10%;
    margin-bottom: 11%;
}
.account {
    color: var(--branco-principal);
    width: 50%;
    height: auto;
    padding: 5% 4.5%;
    margin: auto;
}
.account h1 {
    font-size: var(--font-xs-link);
    margin-top: 10%;
}
.account p {
    font-size: var(--font-sm-link);
    color: var(--branco-principal);
}
.account a {
    font-size: var(--font-sm-link);
    color: var(--link-fonte);
}
.card-account {
    display: flex;
    align-items: center;
    flex-direction: column;
    padding: 6px 5px;
}
.card-account>h1 {
    color: var(--branco-principal);
    font-weight: 800;
    margin: 0;
}
.textfield {
    margin-top: 5%;
}
.textfield label {
    font-size: var(--font-ms-link);
    font-weight: 700;
    margin-top: 10%;
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
.textfield input::placeholder {
    font-size: var(--font-sm-link);
}

.textfield select:focus{
    outline: none;
    color: #ffffff;
    background-color: #000;
    border-radius: 10%;
    transition: 0.5s;
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
.container-account input[type="submit"] {
    background-color: var(--branco-principal);
    color: var(--preto-fonte);
    font-size: var(--font-md-link);
    border-radius: 35px;
    padding: 3% 9%;
    margin-left: 70%;
    margin-top: 5%;
}
input[type="submit"]:hover {
    background-color: rgba(255, 0, 0, 0.7); 
    color: var(--branco-principal);
}
/*CREATEACCOUNT END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>

<!--account start--> <!--INÍCIO-->
<section class="container-account-principal">
    <div class="account-principal">

        <div class="container-account">
            <div class="account">
                <div class="card-account">
                        <form class="create-account" name="create-account" action="../site/criarContaEnviar.php" method="post">
                            <h1>Nova Conta</h1>
                            <p>Já tem uma conta? <a href="./login.php">Acesse-a aqui</a></p>

                            <div class="textfield">
                                <label for="nome">Nome Completo</label>
                                <input type="text" name="nome" required placeholder="Usuário">
                            </div>

                            <div class="textfield">
                                <label for="email">Seu E-mail</label>
                                <input type="email" name="email" required placeholder="E-mail">
                            </div>

                            

                            <div class="textfield">
                                <label for="senha">Crie Uma Senha</label>
                                <input type="password" name="senha" required placeholder="Senha">
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
