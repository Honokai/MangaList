<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if ($_POST['try'] == 0) {
     
        $nome = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
        $senha = md5($_POST['senha']);
        echo $senha;
    }
    

}   else {

    /*Caso o metodo não seja post redirecionar para o inicio */

}


?>