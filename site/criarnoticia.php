<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Noticia</title>
    <link rel="stylesheet" href="css/estilo.css">
    <style>
        .container-enviarnoticia{
            text-align: center;
            display: block;
            align-items: center;
            margin-top: 50px;
            margin-left: 300px;
            margin-right: 300px;
            border: 2px solid;
        }
        .formulario-enviarnoticia{
        display:inline-block ;
        margin-left: auto;
         margin-right: auto;
        text-align: left;
        } 
        div{
            margin-top: 3%;
        }
        .botao-enviarnoticia{
            text-align: center;
        }
        #voltar{
            float: inline-start;
        }
    </style>

</head>

<body>
<?php include './navbar.php' ?>
    <a href="index.php"><img src="images/seta.png" width="35px" id=voltar></a>
    <section class="container-enviarnoticia">
        <h1> Criar Noticia</h1>
    <form class="formulario-enviarnoticia" action="inserirnoticia.php" method="post" enctype="multipart/form-data">
    <div>
            <label>Título</label>
            <input type="text" id="txTitulo" name="txTitulo" />
        </div>

        <div>
            <label class="HORSE">Subtítulo</label>
            <input class="TEXTAO" type="text" id='txSubtitulo' name="txSubtitulo" />
        </div>

        <div>
            <label class="HORSE">Conteudo</label> <br>
            <textarea id="Descricao" name="txDescricao" rows="8" cols="60"> </textarea>
        </div>

        <div>
            <label class="HORSE">Imagem</label> <br>
            <input type="file" name="inpImg" accept=".png" placeholder="Insira a Imagem em .png"/>
        </div>

        <div class="botao-enviarnoticia">
            <input type="submit" class="butao" value="Enviar" />
        </div>
    </form>
</section>

<?php include './footer.php' ?>

</body>
</html>