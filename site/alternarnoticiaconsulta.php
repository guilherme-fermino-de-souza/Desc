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
        <form action="alterarnoticia.php" method="post">      
            <div>
                <input type="hidden" name="txIdAviso" value="<?php echo @$_GET['id']; ?>" />
            </div>		

            <div>
                <input type="text" name="txTituloAviso" value="<?php echo @$_GET['titulo']; ?>" placeholder="Título" />
            </div>

            <div>
                <input type="text" name="txSubtituloAviso" value="<?php echo @$_GET['subtitulo']; ?>" placeholder="Subtítulo" />
            </div>

            <div>
                <input type="text" name="descAviso" value="<?php echo @$_GET['descricao']; ?>" placeholder="Descrição" />
            </div>

            <div>
                <input type="text" name="imgAviso" value="<?php echo @$_GET['img']; ?>" placeholder="Imagem" />
            </div>

            <div>
                <input type="submit" value="Salvar" />
            </div>
        </form>

    </section>

    <section>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Subtítulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Img</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
                $stmt = $pdo->prepare("select * from tbAviso");	
                $stmt ->execute();

                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    
                ?>
                <tr>
                    <th scope="row"> <?php echo $row[0] ?> </th>
                    <td> <?php echo $row[1] ?> </td>
                    <td> <?php echo $row[2] ?> </td>
                    <td> <?php echo $row[3] ?> </td>
                    <td> <?php echo $row[4] ?> </td>
                    <td>
                        <a href="excluirpainel.php?id=<?php echo $row[0]; ?>"> Excluir </a> 
                    </td>
                    <td>
                        <a href='<?php echo "?id=$row[0]&titulo=$row[1]&subtitulo=$row[2]&descricao=$row[3]&img=$row[4]"; ?>'>
                            Editar 
                        </a>
                    </td>
                </tr>

                <?php } ?>  
            </tbody>
            </table>

    </section>
    
</body>
</html>