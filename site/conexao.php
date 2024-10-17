<?php 
$servidor = "localhost";
$database = "bdNewsWallEtec";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($servidor, $usuario, $senha, $database);
 if ($mysqli->error) {
    die("Erro na conexão: " . $mysqli->error);
} else {
    // A classe PDO representa uma conexão entre o PHP e o servidor de banco de dados
    $pdo = new PDO("mysql:host=$servidor;dbname=$database;charset=utf8mb4", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    // Fetch_Mode retorna cada linha como array indexado pelo nome da coluna
}?>