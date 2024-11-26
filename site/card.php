<?php include ('verificarLogin.php'); //Não permite que alguém deslogado acesse a página ?>
<?php include ('./conexao.php');    ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/estilo.css">
        <title>Desenvolvedores</title>
        <style>
             /*CARD START*/
             body {
                height: auto;
                flex-grow: 1;
                background-color: var(--cinza-fonte-claro);
                font-family: var(--fonte-principal);
            }

            /*#cards {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                padding-bottom: 5%;
            }*/

            .container-cards {
                display: grid;
                background-color: var(--cinza-fonte-claro);
                padding: 5%;
                width: 90%;
                height: auto;
                min-height: 600px;
                margin: auto;
                margin-bottom: 200px;
                grid-template-columns: repeat(2, 1fr); /*Dispõe esses cards em 2 colunas*/
                gap: 40px; /*Aumenta o espaçamento entre os cards*/
                margin-top: 5%;
                border-radius: 10px;
                justify-content: center; /*Espaçamento entre os cards*/
            }

            .card {
                width: 90%;
                height: auto;
                position: relative;
                background-color: var(--tema-terciario);
                border: 3px solid var(--opcao-tema-quinto);
                border-radius: 20px;
                gap: 50px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                padding: 30px;
                transition: all transform 0.7s ease, background-color 1s ease, box-shadow 0.7s ease;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
                z-index: 1;
                overflow: hidden;
            }

            .card:hover {
                transform: scale(1.2);   /*Efeito de hover, vulgo elevação bacanérrima*/
                width: 90%;
                height: 200%;
                border: 4px solid var(--tema-secundario);
                /*background-color: var(--tema-primario);*/
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);           
                z-index: 10;
            }

            .card .img-card { 
                position: absolute;
                top: -34px;
                padding: 10%;
                height: auto;
                width: auto;
            }

            .card:hover .img-card {
                top: -60px;
                transform: scale(0.8);
            }
            .img-card img {
                width: 15vw; /*10vw*/
                height: 15vw;
                max-width: 120px;
                max-height: 120px;
                object-fit: cover;
                border-radius: 50%;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
                transition: transform 0.6s ease;
            }

            .img-card img:hover {
                transform: scale(1.3); /*Efeito de zoom na img*/
            } 
            
            .card h2 {
                margin-top: 19.2%;
                text-align: center;
                font-size: var(--fonte-media);
                color: var(--branco-principal);
            }

            .card:hover h2 {
                margin-top: 14%;
            }

            .card .text-card{
                display: flex;
                flex-direction: column;
                text-align: center;
                position: absolute;
                top: 140%;
                padding: 0px 30px;
                width: 100%;
                height: 40px;
                gap: 25px;
                overflow: hidden;
                transition: 0.7s
            }

            .card:hover .text-card{
                top: 130px;
                height: 300px;
                transition: transform 0.7s ease, background-color 1s ease, box-shadow 0.7s ease;
            }
            
            .text-card a {
                display: flex;
                justify-content: center;
                margin-top: 5%;
                margin-bottom: 7%;
                font-size: var(--fonte-padrao);
                color: var(--branco-principal);
                text-decoration: underline var(--tema-secundario);
            }
            
            .text-card a:hover {
                text-decoration: underline var(--branco-principal);
            }
            
            .text-card p {
                height: 15px;
                margin-top: 5%;
                margin-bottom: 7%;
            }

            .text-card h4 {
                top: -10%;
                text-aling: center;
                color: var(--branco-principal);
                font-size: var(--fonte-padrao);
            }
            
            .button-card button {
                display: flex;
                justify-content: center;
                background-color: var(--tema-terciario);
                border-radius: 15px;
                border: 2px solid var(--tema-secundario);
                font-size: 17px;
                color: var(--branco-principal);
                margin-top: 3%;
                margin-inline: auto;
                padding: 10px 20px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }
            
            .button-card button a{
                text-decoration: none;
                font-size: 17px;
                color: var(--branco-principal);
            }
            .button-card button:hover {
                /*display: flex;
                justify-content: center;*/
                background-color: var(--tema-secundario); /*Define o fundo com opalescência*/
                color: var(--preto-fonte);
            }

            .button-card button:hover a{
                text-decoration: wavy;
                font-size: 17px;
                color: var(--preto-fonte);

            }

                /*Responsividade dos Cards em N telas*/
            @media screen and (max-width: 1024px) {
                .container-cards {
                    grid-template-columns: repeat(2, 1fr); /*2 colunas */
                }

                .img-card img {
                    width: 20vw;
                    height: 20vw;
                }

                .card:hover {
                    width: 115%; /*Ajuste para 115% em telinhas */
                    height: 160%;
                }
            }

            @media screen and (max-width: 768px) {
                .container-cards {
                    grid-template-columns: repeat(2, 1fr);
                }

                .img-card img {
                    width: 17vw;
                    height: 17vw;
                }

                .card:hover {
                    width: 110%; /*Ajusta pra 110% em telas medianas */
                    height: 150%;
                }
            }

            @media screen and (max-width: 480px) {
                .container-cards {
                    grid-template-columns: 1fr; /*1 coluninha*/
                }

                .img-card img {
                    width: 15vw;
                    height: 15vw;
                }

                .card:hover {
                    width: 100%; /*tamanho original nas telas pequenas*/
                    height: 130%;
                }
            }
            /*CARD END*/

            /*ADMIN START*/
            .admin {
                width: 80%;
                margin: auto;
                margin-top: 5%;
                margin-bottom: 5%;
            }
            .container-admin {
                display: flex;
                flex-direction: column;
                background-color: var(--tema-terciario);
                align-items: center;
            }
            .container-admin a{
                color: var(--branco-principal);
                font-size: var(--fonte-media);
                font-weight: 800;
                padding: 2% 1%;
                text-decoration: none;
            }
            .container-admin a:hover{
                color: var(--tema-quartenario);
                text-decoration:underline var(--tema-quartenario);
                transition: 0.75s;
            }
            .span-bloqueio {
                display: flex;
                flex-direction: column;
                background-color: var(--tema-terciario);
                align-items: center;
                margin: 1% 0%;
            }
            /*ADMIN END*/
        </style>
    </head>
    <body>
        <?php include './navbar.php' ?>

<!--card start-->
<section id="cards">
                <div class="container-cards">
                        <div class="card">
                            <div class="img-card">
                                <img src="images/gui.jpeg" alt="gui.jpeg">
                            </div>
                            <h2>Guilherme Fermino de Souza</h2>
                            <div class="text-card">
                                <p><a href="https://github.com/guilherme-fermino-de-souza" target="_blank">GitHub</a></p>
                                <h4>Desenvolvedor Full-Stack, é o líder do grupo e coordena as atividades pelas quais cada membro deve responsabilizar-se.</h4>
                                <div class="button-card">
                                    <button type="button"><a class="ancora" href="https://www.instagram.com/fermino729/" target="_blank">Contate-me!</a></button>
                            </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img-card">
                                <img src="images/gust.jpeg" alt="gusta.jpeg" >
                            </div>
                            <h2>Gustavo Fermino de Souza</h2>
                            <div class="text-card">
                                <p><a href="https://github.com/GustaFer23" target="_blank">GitHub</a></p>
                                <h4>Desenvolvedor Front-end, esteve por trás de mudanças na aparência e conteúdo do site junto ao desenvolvedor-mor.</h4>
                                <div class="button-card">
                                    <button type="button"><a class="ancora" href="https://www.instagram.com/fermgustas/" target="_blank">Contate-me!</a></button>
                            </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-card">
                                <img src="images/leo.jpeg" alt="leonardo.jpeg">
                            </div>
                            <h2>Leonardo Lima de Souza Lopes</h2>
                            <div class="text-card">
                                <p><a href="https://github.com/leonardoLimaDeSouzaLopes" target="_blank">GitHub</a></p>
                                <h4>Desenvolvedor Back-End, adaptou-se ao PHP após uma jornada de sucesso com JAVA, auxiliando seus pares quando requisitado.</h4>
                                <div class="button-card">
                                    <button type="button"><a class="ancora" href="https://www.instagram.com/leonardolopested/" target="_blank">Contate-me!</a></button>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-card">
                                <img src="images/tia.jpeg" alt="thiago.jpeg">
                            </div>
                            <h2>Tiago Soares Magalhães</h2>
                            <div class="text-card">
                                <p><a href="https://github.com/TriaguinDev" target="_blank">GitHub</a></p>
                                <h4>Desenvolvedor do modelo de Banco de Dados, estruturou a base para a entrada e retenção de informações no site.</h4>
                                <div class="button-card">
                                    <button type="button"><a class="ancora" href="https://www.instagram.com/magalhae_2008/" target="_blank">Contate-me!</a></button>
                                </div> 
                            </div>
                        </div>
                </div>
            </section>
            <!--card end-->

            <?php if ($_SESSION['tipo'] === 'dev'): ?>
            <!--admin start-->
            <div class="admin">
                <div class="container-admin">
                    <a href="../site/apresentarcontato.php">Apresentar Contatos</a>
                    <a href="./apresentarcriarconta.php">Apresentar Contas</a>
                    <a href="./apresentarcomentarios.php">Apresentar Comentários</a>
                </div>
            </div>
            <!--admin end-->
            <?php else: ?><!-- Bloqueia o Container caso seja um user -->   
                <div class="span-bloqueio">
                    <span style="color: var(--tema-secundario); text-aling:center; margin: 2.5%;">(Nada Para Ver Aqui)</span>
                </div>
            <?php endif; ?>

        </div>

        <?php include './footer.php' ?>
        <script src="./js/java.js"></script>
        </section>
        <!-- CARD END -->
    </body>
</html>
