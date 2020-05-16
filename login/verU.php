<?php 
$metodo = $_SERVER['REQUEST_METHOD'];

    if($metodo == "GET"){
        
        require ("../config/Banco.php");
        $bd = new BancoDados;
        
        $usuario = filter_var($_GET['usuario'], FILTER_SANITIZE_STRING);

        echo $bd->verificaUsuario($usuario);
        
    } else {
        return "Método não aceito";
    }


?>