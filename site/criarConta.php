<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Nova Conta</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
        /*CONTA START*/
.conta-principal {
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment */
    background-color: var(--branco-principal);
    background-position: center;
    background-size: cover;
}
.conta {
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
.conta h1 {
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.conta p {
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.conta a {
    font-size: var(--fonte-padrao);
    color: var(--tema-terciario);
    text-align: center;
}
.criar-conta {
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
    color: var(--tema-terciario);
    font-size: var(--fonte-padrao);
    box-shadow: none;
    outline: none;
}
.conta input[type="submit"] {
    background-color: var(--tema-terciario);
    color: var(--branco-principal);
    font-size: var(--fonte-padrao);
    border-radius: 5px;
    padding: 1% 0%;
    width: 100%;
    margin: 6% 0%;
}
input[type="submit"]:hover {
    background-color: var(--branco-principal);
    color: var(--tema-terciario);
    cursor: pointer;
    transition: 0.5s;
}
/*CREATEconta END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>

<!--account start--> <!--INÍCIO-->
    <div class="conta-principal">
            <div class="conta">
                <form class="criar-conta" name="Conta" action="../site/criarContaEnviar.php" method="post">
                    <h1>Nova Conta</h1>
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
                    <p>Já tem uma conta? <a href="./login.php">Acesse-a aqui</a></p>
                </form>
            </div>
    </div>
    <?php include './footer.php' ?>

    <script src="./js/java.js"></script>  
</body>

</html>
