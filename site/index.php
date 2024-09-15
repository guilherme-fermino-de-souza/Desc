<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilo.css">
    <title>NewsEtec®</title>
    <style>
        /*INDEX START*/
        .container-index-principal {
            display: flex;
            flex-direction: column;
            background-image: url('https://media.istockphoto.com/id/1432727112/pt/foto/woman-programming-software-codes-overnight.jpg?s=2048x2048&w=is&k=20&c=fmotioE-VLCx-oK31MXvPJ1pA8ri2yjEEPBu4yJxSzc=');    
            background-size: cover;
            background-position: center;
        }
        /*INDEX END*/
    </style>
</head>

<body>
<?php include './navbar.php' ?>

<div class='container-index-principal'>
        <?php include './inicio.php' ?>
        <?php include './sobre.php' ?>
</div>

<?php include './footer.php' ?>
<script src="./java.js"></script>
</body>

</html>
