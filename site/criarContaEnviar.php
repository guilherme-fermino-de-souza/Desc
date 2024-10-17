<?php 
    session_start();
    include("conexao.php");

    // Verifica se os dados foram enviados via POST
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['tipo'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];

        if ($tipo == 'dev') { //Verificação caso Tipo Dev
            $codigo = $_POST['codigo'];
            if ($codigo !== '123') { // ERRO (cod inválido)
                echo "Código Inválido.";
                header("Location: criarConta.php?tipo=dev");
                exit();
            }
        }

        // Verifica se o usuário já existe
        $mysqli = $pdo->prepare('SELECT COUNT(*) FROM tbConta WHERE nomeConta = :nome');
        $mysqli->execute(['nome' => $nome]);
        if ($mysqli->fetchColumn() > 0) { // Usuário já existe            
            echo "Usuário já existe. Escolha outro nome.";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            // Inserção de Dados o Bd
            $mysqli = $pdo->prepare("INSERT INTO tbConta(nomeConta, emailConta, senhaConta, tipoConta) VALUES (?, ?, ?, ?)");
            if ($mysqli->execute([$nome, $email, $senhaHash, $tipo])) {
                // Redireciona após sucesso
                header("Location: criarConta.php");
                exit();
            } else {
                // Mensagem de erro ao inserir
                echo "Erro ao criar conta. Tente novamente.";
            }
        }
    } else {
        echo "Por favor, preencha todos os campos.";
    }

    header("Location: criarConta.php");
    exit();
?>
