<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página 
  include ('./conexao.php');
  
    //Usuário 
    if ($_SESSION['tipo'] == 'user') { //Limita o acesso do usuário normal
        header('Location: index.php?negado=true');
        exit; 

    //Desenvolvedor
    } else if ($_SESSION['tipo'] == 'dev') { ?>
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Criar Noticia</title>
            <link rel="stylesheet" href="css/estilo.css">
            <style>
        /*CRIARNOTICIA START*/
        .criarnoticia-principal {
            display: flex;
            justify-content: center; /* Horizontal alignment */
            align-items: center;     /* Vertical alignment */
            background-color: var(--branco-principal);
            background-position: center;
            background-size: cover;
        }
        .criarnoticia {
            display: flex;
            flex-direction: column;
            width: 55%;
            background-color: var(--cinza-fonte-claro);
            border: 2px solid var(--tema-secundario); /* Largura, estilo e cor da borda */
            border-radius: 25px; 
            padding: 5% 0%;
            margin-top: 3%;
            margin-bottom: 3%;
        }
        .criarnoticia h1 {
            font-size: var(--fonte-media);
            margin: 0% 0% 2% 0%;
            color: var(--preto-fonte);
            font-weight: 800;
            text-align: center;
        }
        .criarnoticia p {
            font-size: var(--fonte-padrao);
            color: var(--preto-fonte);
            text-align: center;
        }
        .criarnoticia a {
            font-size: var(--fonte-padrao);
            color: var(--tema-terciario);
            text-align: center;
        }
        .form-criarnoticia {
            display: flex;
            flex-direction: column;
            width: 80%;
            margin: auto;
        }
        .card-textfield {
            display: flex;
            flex-direction: row;
        }
        .textfield {
            display: flex;
            flex-direction: column;
            padding: 1%;
            width: 50%;
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
        .criarnoticia input[type="submit"] {
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
        .textfield-img {
            display: flex;
            flex-direction: column;
            padding: 1%;
        }
        .textfield-img label {
            font-size: var(--fonte-padrao);
            font-weight: 700;
            margin-top: 2%;
        }
        .textfield-img input::placeholder {
            font-size: var(--fonte-padrao);
            color: var(--preto-fonte);
            padding-left: 4%;
        }
        .textfield-img>input:focus {
            outline: none;
            color: var(--preto-fonte);
            background-color: rgba(0, 0, 0, 0);
            border-radius: 10%;
            transition: 0.5s;
        }
        .textfield-img>input {
            width: 100%;
            margin-top: 2%;
            border: none;
            border-bottom: 2px solid var(--tema-secundario);
            background-color: rgba(0, 0, 0, 0.0); /* Define a cor de fundo com transparência */
            color: var(--tema-terciario);
            font-size: var(--fonte-pequena);
            box-shadow: none;
            outline: none;
        }
        .adicionarparagrafo { /* Paragrafo Botão*/
            margin: .75%;
            color: var(--preto-fonte);
            background-color: var(--branco-principal);
        }
        .adicionarparagrafo :hover{ 
            cursor: pointer;
            color: var(--tema-primario);
            background-color: var(--cinza-fonte-claro);
        }
        .paragrafosContainer input {
            margin: .5%;
        }
        .criarnoticia input[type="file"] {
            background-color: var(--tema-terciario);
            color: var(--branco-principal);
            font-size: var(--fonte-pequena);
            border-radius: 5px;
            padding: 1% 0%;
            width: 100%;
            margin: 6% 0%;
        }
        input[type="file"]:hover {
            background-color: var(--branco-principal);
            color: var(--tema-terciario);
            cursor: pointer;
            transition: 0.5s;
        }
        /*CRIARNOTICIA END*/
            </style>

        </head>

        <body>
            <?php include './navbar.php' ?>

                <!--criarnotícia start--> <!--INÍCIO--> 
                <div class="criarnoticia-principal">
                    <div class="criarnoticia">  
                        <form class="form-criarnoticia" action="./inserirnoticia.php" method="post" enctype="multipart/form-data">
                            <h1> Criar Notícia</h1>
                            <div class="card-textfield">
                                <div class="textfield">
                                    <label class="label">Título</label>
                                    <input type="text" id="tituloNoticias" name="tituloNoticias" />
                                </div>

                                <div class="textfield">
                                    <label class="label">Subtítulo</label>
                                    <input type="text" id="subtituloNoticias" name="subtituloNoticias" />
                                </div>
                            </div>

                            <div class="card-textfield">
                                <div class="textfield">
                                    <label class="label">Conteúdo</label> <br>
                                    <textarea id="descricaoNoticias" name="descricaoNoticias" rows="2" cols="20"> </textarea>
                                </div>

                                <div class="textfield-img">
                                    <label class="label">Imagem(.png)</label> <br>
                                    <input type="file" name="imgNoticias" accept=".png, .jpg, .jpeg, .gif, .webp, .tiff" placeholder="Insira a Imagem"/>
                                </div>
                            </div>  

                            <button class="adicionarparagrafo" type="button" onclick="adicionarParagrafo()">Adicionar Parágrafo</button>

                                <div id="paragrafosContainer" class="paragrafosContainer">
                                    
                                </div>             
 
                            <div class="enviar">               
                                <input type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            <?php include './footer.php' ?>
        </body>
        <script src="./inserirParagrafo.js"></script>
        </html>
<?php } ?>