<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Alternar Conta Consulta</title>
</head>
<body>

    <section>
        <form action="alterarnoticia.php" method="post" enctype="multipart/form-data">      
            <div>
                <input type="hidden" name="txIdAviso" value="<?php echo @$_GET['id']; ?>" />
                <input type="hidden" name="txIdImgAviso" value="<?php echo @$_GET['idImgAviso']; ?>" />
            </div>		

            <div>
                <input type="text" name="txTituloAviso" value="<?php echo @$_GET['titulo']; ?>" placeholder="Título" />
            </div>

            <div>
                <input type="text" name="txSubtituloAviso" value="<?php echo @$_GET['subtitulo']; ?>" placeholder="Subtítulo" />
            </div>

            <div>
                <input type="text" name="txDescAviso" value="<?php echo @$_GET['descricao']; ?>" placeholder="Descrição" />
            </div>

            <div>
                <label for='inpImg'>Caso queira alterar a imagem insira a nova imagem aqui (tem que ser em .png)</label>
                <input type="file" id="inpImgAviso" name="inpImgAviso" accept=".png"/>
            </div>

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>

    </section>
    
</body>
</html>