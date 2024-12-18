<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/swiper.css"> <!-- Swiper CSS-->
    <link rel="stylesheet" href="./css/estilo.css">
    <title>NewsEtec®</title>
    <style>
        /*INDEX START*/
        body{
            background-color: var(--cinza-fonte-claro);
        }
        .container-index-principal {
            display: flex;
            flex-direction: column;
        }
        .container-inicio {
        background-image: url('https://media.istockphoto.com/id/1432727112/pt/foto/woman-programming-software-codes-overnight.jpg?s=2048x2048&w=is&k=20&c=fmotioE-VLCx-oK31MXvPJ1pA8ri2yjEEPBu4yJxSzc=');    
        background-size: cover;
        }
        /*INDEX END*/
    </style>
</head>

<body>
    <?php 
    $aviso = ''; // Inicializa a mensagem de erro para caso acesso negado

    if (isset($_GET['negado'])) { 
        $aviso = "Você não possui acesso a essa página!"; ?> <!-- Caso User tente entrar em Págs para Devs -->
    
    <!-- Aviso ativado quando o $aviso receber um valor true -->
        <div id="modal-aviso" style="display: block;">
            <div class="card-aviso">  
                <button name="teste">Aviso</button>  
                    <h1>Acesso negado</h1>
                    <h2><?php echo $aviso; ?></h2>
                    <button name="close-aviso">ok</button>
            </div>
        </div>
    <?php } ?>
    <!-- Site -->
    <?php include './navbar.php' ?>

        <div class='container-index-principal'>
            <?php include './inicio.php' ?>
            <?php include './sobre.php' ?>
            <?php include './contato.php' ?>
        </div>

    <?php include './footer.php' ?>



    <!-- JavaScript --> <!--Às vezes é a barra... -->
    <script src="./swip.js" ></script>
    <script src="./java.js"></script> <!-- JavaScript - navbar responsiva  [não precisa de ponto]-->
    <script src="./aviso.js"></script>
</body>
</html>
