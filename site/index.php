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
            flex-direction: row;
            background-image: url(../site/images/Etec-Butbunito-1.jpg);
            background-position: center;
            background-size: cover;
            height: 85vh;
        }
        .index-principal {
            display: flex;
            flex-direction: row;
            width: 80%;
            margin: auto;
        }
        /*INDEX END*/
    </style>
</head>

<body>
<?php include './navbar.php' ?>

<div class='container-index-principal'>
    <div class='index-principal'>
        <?php include './sobre.php' ?>
    </div>
</div>

<?php include './footer.php' ?>
<script src="./java.js"></script>
</body>

</html>
