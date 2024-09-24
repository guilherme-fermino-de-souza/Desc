<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>Desenvolvedores</title>
    <style>
        /*CARD START*/
body{
    height: auto;
    flex-grow: 1;
}
.cards {
    display: flex;
    justify-content: center;
    width: 80%;
    padding-bottom: 5%;
}
.container-cards {
    display: grid;
    background-color: var(--tema-terciario);
    padding: 5%;
    width: 80%;
    margin: auto;
    grid-template-columns: 20% 20% 20% 20%;
    margin-top: 5%;
    border-radius: 10px;
    justify-content: space-around;
    
}

.card{
    width: 100%;
    height: 110%;
    display: flexbox;
    background-color: goldenrod;
    border: 10px;
    border-radius: 20px;
    border-color: var(--tema-quartenario);
    justify-content: space-around;
}

.img-card {
    display: flex;
    justify-content: center;
    padding: 5%;
}
.img-card img {
    width: 10vw;
    height: 10vw;
    border-radius: 50%;
}

.card h2 {
    display: flex;
    justify-content: center;
    margin-top: 2%;
    color: var(--branco-principal);
    font-size: var(--font-sm-link);
}
.text-card a {
    display: flex;
    font-size: font-sm-link;
    color: var(--branco-principal);
    justify-content: center;
}
.text-card a:hover {
    color: var(--vermelho-principal);
}
.card p {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    color: var(--preto-fonte);
}
.card button {
    display: flex;
    justify-content: center;
    background-color: var(--branco-principal);
    border-radius: 20px;
    border: 10px;
    border-color: var(--preto-fonte);
    font-size: 17px;
    margin-top: 10%;
    margin-inline: auto;
}
.card button:hover {
    display: flex;
    justify-content: center;
    background-color: var(--vermelho-principal); /* Define a cor de fundo com transparência */
    color: var(--branco-principal);
    transition: 0.5s;
    
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
    display: grid;
    background-color: var(--tema-terciario);
    grid-template-columns: 50%;
}
.container-admin a{
    text-decoration: none;
    color: var(--branco-principal);
    font-size: var(--font-xs-link);
    font-weight: 600;
    padding: 2% 0 0 2%;
}
.container-admin a:hover{
    color: var(--vermelho-principal);
    border-bottom: 2px solid var(--vermelho-principal);
}
.admin-button-2 {
    padding-right: 2.5%;
    color: var(--branco-principal);
}
/*ADMIN END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>

<div class="conteudo-card">
<!--card start-->
    <section id="cards">
        <div class="container-cards">
                <div class="card">
                    <div class="img-card">
                        <img class="dev" img src="images/guil.enc" alt="guilherme.enc">
                    </div>
                    <div class="text-card">
                        <h2>Guilherme Fermino de Souza</h2>
                        <p><a href="https://github.com/guilherme-fermino-de-souza">github</a></p>
                    </div>
                    <div class="button-card">
                        <button type="button" class="bnt">Contate-me</button>
                    </div>
                </div>
                <div class="card">
                    <div class="img-card">
                        <img class="dev" img src="images/gust.jpeg" alt="gusta.jpeg" >
                    </div>
                    <div class="text-card">
                        <h2>Gustavo Fermino de Souza</h2> 
                        <p><a href="https://github.com/GustaFer23">github</a></p>
                    </div>
                    <div class="button-card">
                        <button type="button" class="bnt">Contate-me</button>
                    </div>
                </div>

                <div class="card">
                    <div class="img-card">
                        <img class="dev" img src="images/leo.jpeg" alt="leonardo.jpeg">
                    </div>
                    <div class="text-card">
                        <h2>Leonardo Lima de Souza Lopes</h2>
                        <p><a href="https://github.com/leonardoLimaDeSouzaLopes">github</a></p>
                    </div>
                    <div class="button-card">
                        <button type="button" class="bnt">Contate-me</button>
                    </div>
                </div>

                <div class="card">
                    <div class="img-card">
                        <img class="dev" img src="images/tia.jpeg" alt="thiago.jpeg">
                    </div>
                    <div class="text-card">
                        <h2>Tiago Soares Magalhães</h2>
                        <p><a href="https://github.com/TriaguinDev">github</a></p>
                    </div>
                    <div class="button-card">
                        <button type="button" class="btn">Contate-me</button>
                    </div>
                </div>
                
        </div>
    </section>
    <!--card end-->

    <!--admin start-->
    <div class="admin">
        <div class="container-admin">
            <a href="../site/apresentarcontato.php" class="admin-button-1">Apresentar contatos</a>
           <!-- <div class="admin-button-3">Batata</div> -->
            <a href="./apresentarcriarconta.php" class="admin-button-2">Apresentar contas</a>
            <a href="./apresentarcomentarios.php" class="admin-button-1">Apresentar comentario</a>
        </div>
    </div>
    <!--admin end-->

</div>

<?php include './footer.php' ?>
<script src="./js/java.js"></script>
</section>
<!-- CARD END -->
</body>
</html>
