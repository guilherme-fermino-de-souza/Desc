<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil usuario prototype</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include './navbar.php' ?>
        
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Rm</th>
            <th scope="col">Codigo Etecc</th>
            <th scope="col">Senha </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $stmt = $pdo->prepare("select * from tbAluno");	
            $stmt ->execute();
            
            while($row = $stmt ->fetch(PDO::FETCH_BOTH)){            
                
            ?>

            <tr>
                <th scope="row"> <?php echo $row[0] ?> </th>
                <td> <?php echo $row[1] ?> </td>
                <td> <?php echo $row[2] ?> </td>
                <td> <?php echo $row[3] ?> </td>
                <td> <?php echo $row[4] ?> </td>
                <td>
                    <a href="#">Excluir </a>
                </td>                
                <td>
                    <a href="#">Alterar / Editar </a>
                </td> 
            </tr>
            
            <?php }	?>
        </tbody>
        </table>
    <?php include './footer.php' ?>
</body>
</html>
