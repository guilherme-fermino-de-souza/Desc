<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/swiper.css"><!-- Swiper CSS-->
    <link rel="stylesheet" href="./css/estilo.css">
    <title>NewsEtec®</title>
    <style>
        /*INDEX START*/
        .container-index-principal {
            display: flex;
            flex-direction: column;
            background-image: url('https://media.istockphoto.com/id/1432727112/pt/foto/woman-programming-software-codes-overnight.jpg?s=2048x2048&w=is&k=20&c=fmotioE-VLCx-oK31MXvPJ1pA8ri2yjEEPBu4yJxSzc=');    
            background-size: cover;
            background-position: center;
        }
        /*INDEX END*/
    </style>
</head>

<body>
    <?php 
    $aviso = ''; // Inicializa a mensagem de erro para caso acesso negado

    if (isset($_GET['negado'])) { 
        $aviso = "Você não possui acesso a essa página!"; ?> <!-- Caso User tente entrar em Págs para Devs -->
        <html>
            <div class="aviso-dialog" > <!-- dialog-overlay-->
                <div class="aviso-card">  <!-- dialog-card-->        
                    <dialog>
                            <h1>Acesso negado</h1>
                            <h2>Você não possui acesso a essa página!</h2>
                            <button name="close-modal">ok</button>
                        <dialog>
                    </div>
            </div>
        </html>
    <?php } ?>
    <!-- Aviso ativado quando o $aviso receber um valor true -->
    <div style="background-color:coral; margin:10px">
        <?php echo $aviso ?? ''; ?>
    </div>
    <?php include './navbar.php' ?>

    <div class='container-index-principal'>
        <?php include './inicio.php' ?>
        <?php include './sobre.php' ?>
    </div>

    <?php include './footer.php' ?>
        </body>
<!-- JavaScript - swiper (deslizador) do card, parte 100% bootstrap-->
<script src="/swiper.js"></script><!-- ... Parte "Codada" abaixo-->
<script src="/swip.js"></script>
<!-- JavaScript - navbar responsiva-->
<script src="./java.js"></script>

</html>
