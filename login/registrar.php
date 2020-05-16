<?php

require(".././config/Banco.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $bd = new BancoDados;
    $conexão = $bd->Conexao();

    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $nome = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
    $senha = md5($_POST['senha']);

    echo $bd->Registrar($nome,$email,$senha);
}


?>