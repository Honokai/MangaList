<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Mangas - Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/login.js"></script>
    <?php
        /* Inicia a sessão para pegar as variáveis globais nela salva*/
        session_start();
        /* Verifica se há uma sessão, caso não haja carrega a página normalmente,
         se não redireciona para a página principal */
        if(!isset($_SESSION['usuario'])){}
        else{
            header("Location: ../index.php");
        }
    ?>
    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php 
        include("../ins/menu-top.php");
    ?>
    <div class="alertas" id="alertas"><a id="fecharAlerta" href="#">X</a>
    <section id="informacao"></section> 
    </div>
    <div class="conteudo">
        <div class="loginform" id="loginform">
            <form action="login.php" method="POST">
                <text>Usuário</text> <br>
                <input type="text" name="usuario" id="usuario" autocomplete>
                <p></p>
                <text>Senha</text> <br>
                <input type="password" name="senha" id="senha" autocomplete>
                <input type="text" name="try" value="0" style="display: none">
                <div class="fundo">
                    <button type="submit" id="enviar" class="enviar">Entrar</button>
                </div>
                <p></p>
                <a id="registro" href="#">Não tem conta? Clique aqui.</a>
                <?php 

                    if(isset($_GET['y']) && $_GET['y'] == '1'){
                        echo "<p id='erro'>Senha ou usuário informado incorreto.</p>";
                    }
                    
                ?>
            </form>
        </div>

        <div class="registroform" id="registroform">
            <form action="registrar.php" method="POST">
                <p>Informe os campos a seguir: </p>
                E-mail <br>
                <input type="text" name="email" id="email" autocomplete><br>
                Usuário <br>
                <input type="text" name="usuario" id="usuario1" autocomplete><br>
                Senha <br>
                <input type="password" name="senha" id="senha1" autocomplete><br>
                Confirmar senha <br>
                <input type="password" name="senha" id="confirmarsenha" autocomplete>
                <div class="fundo">
                    <button type="submit" id="criarRegistro" class="enviar">Criar conta</button>
                </div>
            </form>
        </div>
    </div>

    <?php include("../ins/f.php");?>
</body>
</html>