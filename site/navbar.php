 
   <?php 
   include("conexao.php");
   include("imagemLocalConta.php");
    $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : 'Visitante';
        $mysqli = $pdo->prepare("SELECT * FROM tbConta WHERE nomeConta = :nome");
        $mysqli->bindParam(':nome', $nome);
        $mysqli -> execute();
        while($row = $mysqli->fetch(PDO::FETCH_BOTH)) { ?> <!--Acessa os dados do user conectado no momento -->
        <div class="modal-login">
                <dialog> <!--Ver Usuário -->
                    <div class="modal-login-img">
                        <img src="<?php echo $row["imgConta"] == 0 ? "https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" : "images/imagensArquivos/conta/" . $row["imgConta"] . ".png"?>">
                    </div>
                    <h1><?php echo $row["nomeConta"]; ?></h1>
                    <p><?php echo $row["emailConta"]; ?></p>
                    <p><?php echo $row["tipoConta"]; ?></p>
                    <a href="logout.php">Sair</a> <!-- Sai da SESSION-->
                    <button name="close-modal">ok</button>
                </dialog>
        </div>
        
    <!--navbar start--> <!--INÍCIO-->
   <header>
       <nav>
        <a class="logo" href="./index.php">NEWS WALL ETEC</a>
        <div class="mobile-menu">
            <div class="line1" href="./sobre.php">Início</div>
            <div class="line2" href="./noticias.php">Notícias</div>
            <div class="line3" href="./card.php">Desenvolvedores</div>
            <div class="line4" href="./login.php">Conta</div>
        </div> 
           <ul class="nav-list">
               <li><a href="./index.php">Início</a></li>
               <li><a href="./noticias.php">Notícias</a></li>
               <li><a href="./card.php">Desenvolvedores</a></li> 
               <li><button class="button-modal-login" name="modal-login">Login</button></li>
               <li><a><img src="<?php echo $row["imgConta"] == 0 ? "https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" : "images/imagensArquivos/conta/" . $row["imgConta"] . ".png"?>" width="100"></a></li>
           </ul>         
       </nav>
   </header>
   <!--navbar end--> <!--FINAL-->

   <?php } ?>

   <script src="./login.js"></script>
   <script src="./java.js"></script>
