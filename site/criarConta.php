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
.conta h1 { /* Título*/
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.conta p { /* 'Já tem uma conta?' */
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.conta a { /* 'Acesse-a Aqui' */
    font-size: var(--fonte-padrao);
    color: var(--tema-terciario);
    text-align: center;
}
.criar-conta { /* Criar Conta */
    display: flex;
    flex-direction: column;
    width: 80%;
    margin: auto;
}
.textfield { /* Textfield Container Principal*/
    display: flex;
    flex-direction: column;
    padding: 1%;
}
.textfield label { /* Texto de Descrição*/
    font-size: var(--fonte-padrao);
    font-weight: 700;
    margin-top: 2%;
}
.textfield input::placeholder {  /* Local Onde se escreve*/
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    padding-left: 4%;
}
.textfield>input:focus { /* Texto no Placeholder*/
    outline: none;
    color: var(--preto-fonte);
    background-color: rgba(0, 0, 0, 0);
    border-radius: 10%;
    transition: 0.5s;
}
.textfield>input { /*Quando você escreve o textfield*/
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
.conta input[type="submit"] { /* Botão Enviar Azul*/
    background-color: var(--tema-terciario);
    color: var(--branco-principal);
    font-size: var(--fonte-padrao);
    border-radius: 5px;
    padding: 1% 0%;
    width: 100%;
    margin: 6% 0%;
}
input[type="submit"]:hover { /* Quando Clicar no Botão Enviar Azul*/
    background-color: var(--branco-principal);
    color: var(--tema-terciario);
    cursor: pointer;
    transition: 0.5s;
}
@media (max-width: 1050px) { /* RESPONSIVO*/
            .conta-principal {
            height: 85vh;
        }
        }
/*CREATECONTA END*/
    </style>
</head>
<body>
    <?php 
        include("conexao.php");
        include ('./navbar.php');
        
    ?>

    <!--Criar Conta--> <!--INÍCIO-->
        <div class="conta-principal">
                <div class="conta">
                    <form class="criar-conta" name="Conta" id="Conta"action="../site/criarContaEnviar.php" method="post">
                        <h1>Nova Conta</h1>
                        <div class="textfield"> <!-- Nome -->
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Usuário"
                            autocomplete="off">
                        </div>

                        <div class="textfield"> <!-- E-mail -->
                            
                            <label for="email">E-mail</label>
                            <input type="email" name="email" id="email" placeholder="E-mail"
                            autocomplete="off">
                        </div>

                        <div class="textfield"> <!-- Tipo -->
                            <select name="tipo" id="usertype" onchange="showCodeInput()">
                            <option value="user">Usuário</option>
                            <option value="dev">Administrador</option>
                            </select>
                        </div>

                        <div class="textfield"> <!-- Senha -->
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" id="senha" required placeholder="Senha">
                        </div>

                        <div class="textfield" id="codigoContainer" style="display: none;"> <!-- Código(somente visível caso o tipo seja Dev)-->
                            <label for="codigo">Código</label>
                            <input type="password" name="codigo" id="Codigo" placeholder="Código">
                        </div>

                        <div class="criar"> <!-- Criar Conta -->
                            <input type="submit" value="Criar">
                        </div>
                        <p>Já tem uma conta? <a href="./login.php">Acesse-a aqui</a></p>
                    </form>
                </div>
        </div>
        <?php include './footer.php' ?>

        <!-- Caso o Tipo seja Dev ele irá pedir o código -->
        <script>// Peguei no chatGPT
            function showCodeInput() { 
                const userType = document.getElementById('usertype').value; // Obtém o valor de UserType
                const codeContainer = document.getElementById('codigoContainer'); // Obtém a Id do Container
                codeContainer.style.display = userType === 'dev' ? 'block' : 'none'; // ? 'x' : 'y': é uma operação que funciona como True or False
                //'block' = visível / 'none' = invisível
        }
        </script>

        <script src="./js/java.js"></script>  
</body>

</html>
