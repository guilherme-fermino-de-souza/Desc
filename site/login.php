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
    height: 70vh;
}
.login { /* Container Principal Login*/
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
}

if (isset($_GET['erro'])) { // Caso tente acessar sem logar
    $erro = "É necessário logar para acessar o site!";
}
?>

<div style="background-color:coral; margin:10px">
    <?php echo $erro ?? ''; ?>
</div>

    <?php include './navbar.php' ?>

    <!--login start--> <!--INÍCIO-->
        <div class="login-principal">
                <div class="login">
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
   <?php include './footer.php'?>

    <script src="./js/java.js"></script>  
</body>

</html>
