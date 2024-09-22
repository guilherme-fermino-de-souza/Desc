<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alternar Conta Consulta</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
/*ALTERNARNOTICIACONSULTA START*/
.alternarnoticiaconsulta-principal {
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment */
    background-color: var(--branco-principal);
    background-position: center;
    background-size: cover;
}
.alternarnoticiaconsulta {
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
.alternarnoticiaconsulta h1 {
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.alternarnoticiaconsulta p {
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.alternarnoticiaconsulta a {
    font-size: var(--fonte-padrao);
    color: var(--tema-terciario);
    text-align: center;
}
.alternar {
    display: flex;
    flex-direction: column;
    width: 80%;
    margin: auto;
}
.textfield {
    display: flex;
    flex-direction: column;
    padding: 1%;
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
.alternarnoticiaconsulta input[type="submit"] {
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
.alternarnoticiaconsulta input[type="file"] {
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
@media (max-width: 1050px) {
            .alternarnoticiaconsulta-principal {
            height: 95vh;
        }
        }
/*ALTERNARNOTICIACONSULTA END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>
<div class="alternarnoticiaconsulta-principal">
    <div class="alternarnoticiaconsulta">
        <form class="alternar" action="alterarnoticia.php" method="post" enctype="multipart/form-data"> 
            <h1>Notícia</h1>     
            <div class="textfield">
                <input type="hidden" name="txIdAviso" value="<?php echo @$_GET['id']; ?>" />
                <input type="hidden" name="txIdImgAviso" value="<?php echo @$_GET['idImgAviso']; ?>" />
            </div>		

            <div class="textfield">
                <label class="HORSE">Título</label>
                <input type="text" name="txTituloAviso" value="<?php echo @$_GET['titulo']; ?>" placeholder="Título" />
            </div>

            <div class="textfield">
                <label class="HORSE">Subtítulo</label>
                <input type="text" name="txSubtituloAviso" value="<?php echo @$_GET['subtitulo']; ?>" placeholder="Subtítulo" />
            </div>

            <div class="textfield">
                <label class="HORSE">Conteúdo</label> <br>
                <textarea type="text" name="txDescAviso" value="<?php echo @$_GET['descricao']; ?>" placeholder="Descrição" rows="8" cols="60"> </textarea>
            </div>

            <div class="textfield">
                <label for='inpImg'>Imagem(.png)</label>
                <input type="file" id="inpImgAviso" name="inpImgAviso" accept=".png"/>
            </div>

            <div class="textfield">
                <input type="submit" value="Salvar" />
            </div>
        </form>
    </div>
</div>
    <?php include './footer.php'?>

<script src="./js/java.js"></script> 
</body>
</html>
