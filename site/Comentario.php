<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario</title>
    <link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
<?php include ('./navbar.php'); ?>
<div class="comentar">
  <a class="link" href="./criarcomentario.php"> <button class="comentar" type="button" value="">comentar</button> </a> 

  <?php

    include("conexao.php");

    $stmt = $pdo->prepare("select mensagemComentarioNoticia from tbComentarioNoticia");
    $stmt -> execute();

    while($row = $stmt->fetch()) {?>
        <div class="card-painel">
            <h3><?php echo $row["mensagemComentarioNoticia"]; ?></h3> 
    <?php }?>

    <a href="alterarcomentario?id=<?php echo $row[0]?>&titulo=<?php echo $row["mensagemComentarioNoticia"]?>"> Alterar </a>

  
</div>
</body>
</html>