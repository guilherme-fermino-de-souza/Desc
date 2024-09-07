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
        <form action="alterarconta.php" method="post">      
            <div>
                <input type="hidden" name="txIdConta" value="<?php echo @$_GET['id']; ?>" />
            </div>		

            <div>
                <input type="text" name="txNomeConta" value="<?php echo @$_GET['nome']; ?>" placeholder="Nome" />
            </div>

            <div>
                <input type="text" name="txEmailConta" value="<?php echo @$_GET['email']; ?>" placeholder="E-mail" />
            </div>

            <div>
                <input type="text" name="txSenhaConta" value="<?php echo @$_GET['senha']; ?>" placeholder="Senha" />
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
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                </tr>
            </thead>
            <tbody>
                
            <?php
                $stmt = $pdo->prepare("select * from tbConta");	
                $stmt ->execute();

                while($row = $stmt->fetch(PDO::FETCH_BOTH)){
                    
                ?>
                <tr>
                    <th scope="row"> <?php echo $row[0] ?> </th>
                    <td> <?php echo $row[1] ?> </td>
                    <td> <?php echo $row[2] ?> </td>
                    <td> <?php echo $row[3] ?> </td>
                    <td>
                        <a href="excluirconta.php?id=<?php echo $row[0]; ?>"> Excluir </a> 
                    </td>
                    <td>
                        <a href='<?php echo "?id=$row[0]&nome=$row[1]&email=$row[2]&senha=$row[3]"; ?>'>
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