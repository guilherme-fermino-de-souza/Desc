<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alternar Contato Consulta</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
/*ALTERNARCONTATOCONSULTA START*/
.alternarcontatoconsulta-principal {
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment */
    background-color: var(--branco-principal);
    background-position: center;
    background-size: cover;
}
.alternarcontatoconsulta {
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
.alternarcontatoconsulta h1 {
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.alternarcontatoconsulta p {
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.alternarcontatoconsulta a {
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
.alternarcontatoconsulta input[type="submit"] {
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
.alternarcontatoconsulta input[type="file"] {
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
            .alternarcontatoconsulta-principal {
            height: 95vh;
        }
        }
/*ALTERNARCONTATOCONSULTA END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>
<div class="alternarcontatoconsulta-principal">
    <div class="alternarcontatoconsulta">
        <form action="alterarcontato.php" method="post" enctype="multipart/form-data">      
            <h1>Contato</h1>
            <div class="textfield">
                <input type="hidden" name="txIdContato" value="<?php echo @$_GET['id']; ?>" />
            </div>		

            <div class="textfield">
                <input type="text" name="txnomeContato" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome" />
            </div>

            <div class="textfield">
                <input type="text" name="txEmailContato" value="<?php echo @$_GET['email']; ?>" placeholder="E-mail" />
            </div>

            <div class="textfield">
                <input type="text" name="txAssuntoContato" value="<?php echo @$_GET['assunto']; ?>" placeholder="Assunto" />
            </div>

            <div class="textfield">
                <input type="text" name="txMensagemContato" value="<?php echo @$_GET['mensagem']; ?>" placeholder="Mensagem" />
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
