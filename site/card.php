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
            }

            /*.cards {
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
                margin: auto;
                grid-template-columns: repeat(4, 1fr); /*Dispõe esses cards em 4 colunas*/
                gap: 30px;
                margin-top: 5%;
                border-radius: 10px;
                justify-content: center; /*space-around*/ 
            }

            .card {
                width: 101%;
                height: auto;
                position: relative;
                background-color: var(--tema-terciario);
                border: 3px solid var(--opcao-tema-quinto);
                border-radius: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: space-between;
                padding: 20px;
                transform: 0.7s ease, box-shadow 0.7s ease; /*a transition fik mais branda*/
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }

            .card:hover {
                height: auto;
                transform: translateY(-10px);   /*Efeito de hover, vulgo elevação bacanérrima*/
                border: 4px solid var(--tema-secundario);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .img-card {
                display: flex;
                justify-content: center;
                align-items: center;
                object-fit: cover;
                padding: 10%;
                height: 50%;
            }

            .img-card img {
                width: 10vw;
                height: 10vw;
                border-radius: 50%;
                transition: transform 0.3s ease;                
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }

            .img-card img:hover {
                transform: scale(1.1); /*Efeito de zoom na img*/
            }

            .card h2 {
                display: flexbox;
                justify-content: center;
                text-align: center;
                font-size: var(--fonte-padrao);
                color: var(--branco-principal);
                margin-bottom: 10%;
            }
            
            .text-card a {
                display: flex;
                font-size: var(--fonte-padrao);
                color: var(--branco-principal);
                align-items: start;
                justify-content: center;
                text-decoration: underline var(--tema-secundario);
            }
            
            .text-card a:hover {
                color: var(--preto-fonte);
                text-decoration: underline var(--tema-secundario);
            }
            
            .card p {
                display: flex;
                justify-content: center;
                margin-top: 20px;
                color: var(--preto-fonte);
                height: 15px;
                padding: 10%;
                margin-top: -8%;
                margin-bottom: 4px;
            }
            
            .card button {
                display: flex;
                justify-content: center;
                background-color: var(--tema-terciario);
                border-radius: 15px;
                border: 2px solid var(--tema-secundario);
                font-size: 17px;
                color: var(--branco-principal);
                margin-top: 12%;
                margin-inline: auto;
                padding: 10px 20px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
            }
            
            .card button a{
                text-decoration: none;
                font-size: 17px;
                color: var(--branco-principal);
            }
            .card button:hover {
                /*display: flex;
                justify-content: center;*/
                background-color: var(--tema-secundario); /*Define o fundo com opalescência*/
                color: var(--preto-fonte);
            }

            .card button:hover a{
                text-decoration: wavy;
                font-size: 17px;
                color: var(--preto-fonte);

            }

                /*Responsividade dos Cards em N telas*/
            @media screen and (max-width: 768px) {
                .container-cards {
                    grid-template-columns: repeat(2, 1fr); /*2 colunas em ecrãs exíguos*/
                }

                .img-card img {
                    width: 20vw;
                    height: 20vw;
                }
            }

            @media screen and (max-width: 480px) {
                .container-cards {
                    grid-template-columns: 1fr; /*1 coluna em schermos pequeníssimas*/
                }

                .img-card img {
                    width: 30vw;
                    height: 30vw;
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
                                <img class="dev" img src="images/guil.enc" alt="guilherme.enc">
                            </div>
                            <div class="text-card">
                                <h2>Guilherme Fermino de Souza</h2>
                                <p><a href="https://github.com/guilherme-fermino-de-souza" target="_blank">GitHub</a></p>
                            </div>
                            <div class="button-card">
                                <button type="button" class="bnt"><a href="https://www.instagram.com/fermino729/" target="_blank">Contate-me!</a></button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="img-card">
                                <img class="dev" img src="images/gust.jpeg" alt="gusta.jpeg" >
                            </div>
                            <div class="text-card">
                                <h2>Gustavo Fermino de Souza</h2> 
                                <p><a href="https://github.com/GustaFer23" target="_blank">GitHub</a></p>
                            </div>
                            <div class="button-card">
                                <button type="button" class="bnt"><a href="https://www.instagram.com/fermgustas/" target="_blank">Contate-me!</a></button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-card">
                                <img class="dev" img src="images/leo.jpeg" alt="leonardo.jpeg">
                            </div>
                            <div class="text-card">
                                <h2>Leonardo Lima de Souza Lopes</h2>
                                <p><a href="https://github.com/leonardoLimaDeSouzaLopes" target="_blank">GitHub</a></p>
                            </div>
                            <div class="button-card">
                                <button type="button" class="bnt"><a href="https://www.instagram.com/leonardolopested/" target="_blank">Contate-me!</a></button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="img-card">
                                <img class="dev" img src="images/tia.jpeg" alt="thiago.jpeg">
                            </div>
                            <div class="text-card">
                                <h2>Tiago Soares Magalhães</h2>
                                <p><a href="https://github.com/TriaguinDev" target="_blank">GitHub</a></p>
                            </div>
                            <div class="button-card">
                                <button type="button" class="btn"><a href="https://www.instagram.com/magalhae_2008/" target="_blank">Contate-me!</a></button>
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
