<?php 
$servidor = "localhost";
$nomeBancoDeDados = "bdNewsWallEtec";
$usuarioBd = "root";
$senhaBd = "";

$pdo = new PDO("mysql:host=$servidor;dbname=$nomeBancoDeDados", $usuarioBd, $senhaBd);
?>