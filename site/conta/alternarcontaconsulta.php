<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alternar Conta Consulta</title>
    <link rel="stylesheet" href="./css/estilo.css">
    <style>
/*ALTERNARCONTACONSULTA START*/
.alternarcontaconsulta-principal {
    display: flex;
    justify-content: center; /* Horizontal alignment */
    align-items: center;     /* Vertical alignment */
    background-color: var(--branco-principal);
    background-position: center;
    background-size: cover;
}
.alternarcontaconsulta {
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
.alternarcontaconsulta h1 {
    font-size: var(--fonte-grande);
    margin: 0% 0% 2% 0%;
    color: var(--preto-fonte);
    font-weight: 800;
    text-align: center;
}
.alternarcontaconsulta p {
    font-size: var(--fonte-padrao);
    color: var(--preto-fonte);
    text-align: center;
}
.alternarcontaconsulta a {
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
.alternarcontaconsulta input[type="submit"] {
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
@media (max-width: 1050px) {
            .alternarcontaconsulta-principal {
            height: 95vh;
        }
        }
/*ALTERNARCONTACONSULTA END*/
    </style>
</head>
<body>
<?php include './navbar.php' ?>
<div class="alternarcontaconsulta-principal">
    <div class="alternarcontaconsulta">
        <form action="alterarconta.php" method="post">      
            <h1>Conta</h1>
            <div class="textfield">
                <input type="hidden" name="txIdConta" value="<?php echo @$_GET['id']; ?>" />
            </div>		

            <div class="textfield">
                <label class="HORSE">Nome</label>
                <input type="text" name="txNomeConta" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome" />
            </div>

            <div class="textfield">
                <label class="HORSE">Email</label>
                <input type="text" name="txEmailConta" value="<?php echo @$_GET['email']; ?>" placeholder="E-mail" />
            </div>

            <div class="textfield">
                <label class="HORSE">Senha</label>
                <input type="text" name="txSenhaConta" value="<?php echo @$_GET['senha']; ?>" placeholder="Senha" />
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