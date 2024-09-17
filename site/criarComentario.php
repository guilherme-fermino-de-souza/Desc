<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentario</title>
    <link rel="stylesheet" href="css/estilo.css">
    
</head>

<body>
<?php include './navbar.php' ?>
    <section class="container-enviarnoticia">
        <h1> Comentario</h1>
    <form class="formulario-enviarnoticia" action="inserirComentario.php" method="post" enctype="multipart/form-data">
        <div>
            <label>Comentario:</label>
            <input type="text" id="txComentario" name="txComentario" />
        </div>
        <div class="Comentar">
            <input type="submit" class="comentar" value="Comentar" />
        </div>

<?php include './footer.php' ?>

</body>
</html>