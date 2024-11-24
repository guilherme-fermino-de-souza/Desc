<?php
    session_start();
    include("conexao.php");

    $erro = ''; // Inicializa a mensagem de erro

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //Início da consulta (pega os dados do BD conforme o nome da conta)
        $mysqli = $pdo->prepare('SELECT idconta, nomeConta, tipoConta, senhaConta FROM tbConta WHERE emailConta = :email');
        $mysqli->execute(['email' => $email]);
        $contaDados = $mysqli->fetch(PDO::FETCH_ASSOC); // Busca o resto das informações com base no nome

    // Verifica se o usuário existe e a senha está correta

    // Compara se o Hash da Senha inserida é igual ao Hash do Banco de Dados
    if ($contaDados && password_verify($senha, $contaDados['senhaConta'])) { // Hash da senha(criptografa a senha no Banco de Dados)
        $_SESSION['email'] = $email; // Armazena o usuário na sessão
        $_SESSION['nome'] = $contaDados['nomeConta']; // Pega o tipo de Usuario no BD
        $_SESSION['tipo'] = $contaDados['tipoConta']; // Pega o tipo de Usuario no BD
        $_SESSION['id'] = $contaDados['idConta']; // Pega o id do Usuario no BD
        header('Location: index.php');
        exit();
    } else {
        $erro = "E-mail ou senha inválidos."; // Mensagem de erro
    }
}?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginScreen</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>

/* erro aviso start */
.modal-erro-aviso { /* O fundo da mensagem*/
    position: fixed;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Um fundo mais escuro para o modal */
    z-index: 10;
}
.container-erro-aviso {
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
}
.card-erro-aviso {
    box-sizing: border-box;
    width: 80%; /* Ajuste de largura para tornar o modal mais flexível */
    max-width: 500px; /* Largura máxima do modal */
    position: absolute;
    font: bold;
    border-radius: 35px;
    background-color:  var(--cinza-fonte-claro);
    box-shadow: 0 20px 40px 0 rgba(0, 0, 0, 0.92);
    padding: 4% 5%;
    text-align: center;
}
.card-erro-aviso button{
    border-radius: 10%;
    background-color: var(--branco-principal);
    color: var(--tema-primario);
    padding: .5%;
    margin: .75%;
}
.card-erro-aviso button:hover{
    cursor: pointer;
    background-color: var(--tema-primario);
    color: var(--branco-principal);
    transition: .75s;
}
/* erro aviso end */

/*LOGIN START*/
.login-principal { /* Fundo */
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment 
    background-image: url('./images/Etec-Butbunito-1.jpg');
    background-position: center;
    background-size: cover;*/
    background-color: var(--tema-primario);
    height: 100vh;
}
.login { /* Container Principal Login*/
    display: flex;
    flex-direction: column;
    width: 35%;
    background-color: var(--cinza-fonte-claro);
    border: 2px solid var(--tema-secundario); /* Largura, estilo e cor da borda */
    border-radius: 25px; 
    padding: 5% 0%;
    margin-top: 3%;
    margin-bottom: 3%;
}
.login h1 { /* Título*/
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.login p { /* 'Novo por Aqui?' */
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.login a { /* 'Crie uma Conta' */
    font-size: var(--fonte-padrao);
    color: var(--tema-terciario);
    text-align: center;
}
.faca-login { /* Faça Login */
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
.textfield input::placeholder { /* Local Onde se escreve*/
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
    color: var(--tema-primario);
    font-size: var(--fonte-padrao);
    padding-left: 4%;
    box-shadow: none;
    outline: none;
}
.login input[type="submit"] { /* Botão Enviar Azul*/
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
            .login-principal {
            height: 85vh;
        }
        }
/*LOGIN END*/
    </style>
</head>
<body>
    <?php 
    if (isset($_GET['erro'])) { // Caso tente acessar sem logar
        $erro = "É necessário logar para acessar o site!"; ?> <!-- Aviso caso $erro = true-->

        <div id="modal-erro-aviso" class="modal-erro-aviso" style="display: block;">
            <div class="container-erro-aviso">
                <div class="card-erro-aviso">
                    <h1>Acesso negado</h1>
                    <h2><?php echo $erro; ?></h2>
                    <button name="close-erro-aviso">Fechar Aviso</button>
                </div>
            </div>
        </div>
    <?php } ?>


    <!--login start--> <!--INÍCIO-->
        <div class="login-principal"> <!--Fundo-->
                <div class="login"> <!-- Formulário-->
                        <form class="faca-login" name="login" action="" method="post">
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

    <script src="./java.js"></script>  
    <script src="./loginErro.js"></script> <!-- Aviso caso $erro = true-->
</body>

</html>
