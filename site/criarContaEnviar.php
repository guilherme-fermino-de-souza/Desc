<?php 
    session_start();
    include("conexao.php");
    include("imagemLocalConta.php");

    // Verifica se os dados foram enviados via POST
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['tipo'])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'];
        $img = $_FILES['imgConta'];

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

            $numImagem = (int) file_get_contents($contadorImagens); // Pega o ultimo numero de imagem

            switch ($img['error']) { // Verifica se deu erro na imagem

                case UPLOAD_ERR_OK: // Nao deu erro

                    $numImagem++; // Aumenta o numero de imagem

                    $nomeImagem = $localImagens . '/' . $numImagem . '.png'; // Cria o nome da imagem

                    move_uploaded_file($img['tmp_name'], $nomeImagem); // Salva aimagem

                    file_put_contents($contadorImagens, $numImagem); // Atualiza o ultimo numero de imagem

                    break;

                case UPLOAD_ERR_NO_FILE: // Nao tem imagem

                    $numImagem = 0;

                    break;

                default: // Deu algum erro diferente

                    throw new ErrorException("Erro no upload da imagem"); // Lanca uma excecao (pra nao lasca o site)

                    break;
            }

            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            // Inserção de Dados o Bd
            $mysqli = $pdo->prepare("INSERT INTO tbConta(nomeConta, emailConta, senhaConta, tipoConta, imgConta) VALUES (?, ?, ?, ?, ?)");
            if ($mysqli->execute([$nome, $email, $senhaHash, $tipo, $numImagem])) {
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

    header("Location: login.php");
    exit();
?>
