<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
        <link rel="stylesheet" href="./css/estilo.css">
        <style>
            .container-painel { /* PRINCIPAL */
                display: grid;
                width: 80%;
                margin: auto;
                grid-template-columns: 100%  ;
            }
            .card-painel {   /* CARD */
                display: flex;
                flex-direction: row;
                background-color: var(--branco-principal);
                margin: 5% ;
                border-radius: 5px;
                border-Top: 5px solid var(--cinza-fonte);
                border-bottom: 5px solid var(--cinza-fonte);
                height: fit-content;
            }
            .conteudo-painel {
                background-color: var(--cinza-fonte-claro);
                display: flex;
                flex-direction: column;
                width: 100%;
            }
            .titulo-card-painel { /* TÍTULO */
                display: flex;
                justify-content: space-between;
                background-color: var(--cinza-fonte-claro);
                color: var(--preto-fonte);
                display: flex;
            }
            .titulo-card-painel h1{
                font-size: var(--fonte-media);
                color: var(--preto-fonte);
                padding: 1%;
            }
            .titulo-card-painel a {
                background-color: var(--cinza-fonte-claro);
        	    border-radius: 30%;
                width: 20%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 1.5%;
            }
            .titulo-card-painel img { /* EXCLUIR/LIXO*/
                width: 30%;
                margin-right: 0;
            }
            .titulo-card-painel a:hover {
                background-color:  red;
                transition: .75s;
            }
            .subtitulo-card-painel { /* SUBTÍTULO */
                background-color: var(--tema-terciario);
            }
            .subtitulo-card-painel h2{
                font-weight: 800;
                font-size: var(--fonte-padrao);
                color: var(--branco-principal);
                padding: 1%;
            }
            .texto-card-painel { /* TEXTO */
                padding: 1%;
            }
            .texto-card-painel h3 {
                font-size: var(--fonte-padrao);
                color: var(--preto-fonte);
                text-indent: 3%;
            }
            .imagem-painel { /* IMAGEM */
                background-color: var(--cinza-fonte-claro);
                display: flex;
                align-items: center;
                justify-content: center;  
            }
            .imagem-painel img{
                width: 30vw;
                border-radius: .5rem;
                border: 5px solid var(--cinza-fonte);
                margin: 0 1% 0 1%;
            }
            .alterar-card-painel { /* ALTERAR */
                display: flex;
                justify-content: center;
                background-color: var(--cinza-fonte-claro);
            }
            .alterar-card-painel a {
                font-weight: 600;
                margin: 1%;
                font-size: var(--fonte-padrao);
                color:  var(--preto-fonte);
                text-decoration: none;
            }
            .alterar-card-painel a:hover {
                color:  var(--tema-primario);
                transition: .5s;
            }
            .alterar-card-painel button{ /* VER MAIS */
                background-color: var(--tema-terciario);
                color: var(--cinza-fonte-claro);
                font-size: var(--fonte-padrao);
                border-radius: 5px;
                padding: 1% 0;
            }
            .alterar-card-painel button:hover{ /* VER MAIS */
                background-color: var(--branco-principal);
                color: var(--tema-primario);
                transition: .5s;
            }
            /* criar noticia start */
            .criarnoticia-painel { /* BOTÃO */
                width: 80%;
                margin: auto;
            }
            .criarnoticia-painel button{
                background-color: var(--tema-terciario);
                color: var(--branco-principal);
                font-size: var(--fonte-padrao);
                border-radius: 5px;
                padding: 1% 0%;
                width: 100%;
                margin: 6% 0%;
            }
            .criarnoticia-painel button:hover{
                background-color: var(--branco-principal);
                color: var(--tema-terciario);
                cursor: pointer;
                transition: 0.5s;
            }
            /* criar noticia end */

            /* modal painel start */ 
            .modal-painel  dialog{
                width: 75%;
                height: 100%;
                margin: auto;
            }
            .modal-painel dialog::backdrop { /* fundo do modal */
                background-color: rgba(0, 0, 0, 0.75);
            }
            .container-modal-painel { /* container Principal modal */
                width: 100%;
                height: 100%;
                padding: 2.5%;
                background-color: var(--cinza-fonte-claro);
                overflow: hidden;
                overflow-y: scroll;
            }
            .inicio-modal-painel {
                display: flex;
                flex-direction: row;
                width: 80%;
                margin: 4% auto;
            }
            .img-modal-painel { /* container Img modal */
                width: 80%;
                margin: auto;
            }
            .img-modal-painel img { /* img modal */
                width: 95%;
            }
            .desc-modal-painel {
                width: 40%;
            }
            .texto-modal-painel { /* container Texto modal */
                width: 80%;
                margin: auto;
            }
            .titulo-modal-painel {
                display: flex;
                flex-direction: row;
            }
            .texto-titulo-modal-painel {
                width: 80%;
                margin: auto;
            }
            .texto-titulo-modal-painel h1 { /* título modal */
                font-size: var(--fonte-media);
                texta-lign: center;
            }
            .close-painel { /* botão fechar modal */
                border: none;
                background-color: var(--cinza-fonte-claro);
                width: 2%;
            }
            .close-painel img {
                width: 100%;
                border-radius: 40px;
            }
            .close-painel img:hover{
                background-color:  red;
                transition: .75s;
                cursor: pointer;
            }
            .desc-modal-painel h2 { /* subtítulo do modal */
                font-size: var(--fonte-1p5VW);
            }
            .texto-modal-painel h3 { /* texto do modal */
                margin: 2.5% 0;
            }
            /* modal painel start */

        </style>
    </head>
    <body>
    <?php include('navbar.php');?>

    <div class="container-painel">
    <?php
        $stmt = $pdo->prepare("SELECT * FROM tbNoticias");
        $stmt -> execute();
        while($row = $stmt->fetch(PDO::FETCH_BOTH)){?>
            <div class="card-painel">
                <div class="imagem-painel">
                        <?php 
                            $numImg = $row["imgNoticias"];
                            if ($numImg != 0) {    
                                echo "<img src='images/imagensArquivos/noticias/$numImg.png'>";
                            }
                        ?>
                </div>
                <div class="conteudo-painel"> 
                    <div class="titulo-card-painel">
                        <h1><?php echo $row["tituloNoticias"]; ?></h1> 
                        <a href="excluirnoticias.php?id=<?php echo $row[0]; ?>"> 
                            <img src="./images/imagensArquivos/noticias/icons/trash.png"> <!-- botão excluir -->
                        </a>
                    </div>
                    <div class="subtitulo-card-painel">
                        <h2><?php echo $row["subtituloNoticias"]; ?></h2> 
                    </div>

                    <div class="texto-card-painel">
                        <h3><?php echo $row["descNoticias"]; ?></h3> 
                    </div>
                        
                    <div class="alterar-card-painel">
                        <a href="alternarnoticiaconsulta.php?id=<?php echo $row[0]?>&titulo=<?php echo $row[1]?>&subtitulo=<?php echo $row[2]?>&descricao=<?php echo $row[3]?>&imgNoticias=<?php echo $row[4]?>"> Alterar </a>
                        <a href="apresentarcomentario.php?id=<?php echo $row[0]?>">Comentários</a>
                        <button type="button" class="abrir-painel" data-id="<?php echo $row[0]?>">Ver Mais</button>
                    </div>
                </div>
            </div>

        <!-- Noticias modal -->
        <div class="modal-painel">
            <dialog id="modal-painel-<?php echo $row[0]; ?>">
                <div class="container-modal-painel">

                    <div class="titulo-modal-painel"> <!-- Título modal -->
                        <div class="texto-titulo-modal-painel">
                            <?php 
                                $stmtTitulo = $pdo->prepare("SELECT * FROM tbNoticias WHERE idNoticias = :noticia_id");
                                $stmtTitulo -> execute(['noticia_id' => $row['idNoticias']]);
                            ?>
                            <h1> <?php echo $row["tituloNoticias"]?></h1>
                        </div>
                        <button class="close-painel">
                            <img src="./images/imagensArquivos/noticias/icons/marca-x.png">
                        </button>
                    </div>

                    <div class="inicio-modal-painel">
                        <div class="img-modal-painel"> <!-- Imagem modal -->
                            <?php 
                                $numImg = $row["imgNoticias"];
                                if ($numImg != 0) {    
                                    echo "<img src='images/imagensArquivos/noticias/$numImg.png'>";
                                }
                            ?>
                        </div>
                        <div class="desc-modal-painel">
                            <h2> <?php echo $row["descNoticias"]?></h2>
                        </div>
                    </div>

                    <div class="texto-modal-painel"> <!-- Texto modal --> 
                            <?php
                            $stmtParagrafos = $pdo->prepare("SELECT textoParagrafoNoticias FROM tbParagrafoNoticias WHERE noticia_id = :noticia_id");
                            $stmtParagrafos -> execute(['noticia_id' => $row["idNoticias"]]);
                            while ($paragrafo = $stmtParagrafos->fetch(PDO::FETCH_ASSOC)) {
                            echo "<h3>" . htmlspecialchars($paragrafo["textoParagrafoNoticias"]) . "</h3>";
                        }
                        ?>                        
                    </div>
                </div>
            </dialog>
        </div>
    <?php } ?>
    </div>


                            
    <div class="criarnoticia-painel">
    <a class="link" href="./criarnoticia.php"> <button class="butao butaonoticia" type="button" value="">Inserir Noticia</button> </a> 
    </div>

    <?php include ('footer.php')?>
    </body>

    <script src="./noticias.js"></script>
</html>