<?php
session_start();

if (!isset($_SESSION['nome'])){ //Dá erro se o usuário não for iniciado e manda de volta pra tela de login
    header('Location: login.php?erro=true');
    exit;
};
//Impede que o user acesse as páginas sem antes iniciar uma sessão