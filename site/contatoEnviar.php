<?php
$servidor = "localhost";

$nomeBancoDeDados = "bdNewsWallEtec";

$usuarioBd = "root";

$senhaBd = "";

$remetente = $_POST['nome'];
$email = $_POST['email'];
$sala = (int) $_POST['sala'];
$rm = (int) $_POST['rm'];

$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuarioBd, $senhaBd);

$pdo->quote($remetente);
$pdo->quote($email);
$pdo->quote($sala);
$pdo->quote($rm);
$pdo->quote($assunto);
$pdo->quote($mensagem);

$stmt = $pdo->prepare("INSERT INTO tbRemetente(nomeRemetente, emailRemetente, salaRemetente, rmRemetente)
    VALUES ('$remetente', '$email', $sala, $rm)");

$stmt->execute();

$stmt = $pdo->prepare("INSERT INTO tbMensagem(assuntoMensagem, conteudoMensagem, idRemetente)
    VALUES ('$assunto', '$mensagem', (SELECT MAX(idRemetente) FROM tbRemetente))");

$stmt->execute();


?>

<div class="Contato-enviar">
    <h1><?php echo "$remetente" ?></h1>
    <h1><?php echo "$email" ?></h1>
    <h1><?php echo "$sala" ?></h1>
    <h1><?php echo "$rm" ?></h1>
    <h1><?php echo "$assunto" ?></h1>
    <h1><?php echo "$mensagem" ?></h1>
</div>