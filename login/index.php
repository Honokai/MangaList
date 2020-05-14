<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Mangas - Login</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="../js/login.js"></script>

    
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
</head>
<body>
    <nav class="top">
        <a class="navtitulo">Meus Mangas</a>
        <div class="top-direita">
            <a href="../" onclick="showMain()">Início</a>
            <a href="#">Novidades</a>
            <a href="#" onclick="showRec()">Recomendações</a>
        </div>
    </nav>

    <div class="conteudo">
        <div class="loginform" id="loginform">
            <form action="login.php" method="POST">
                Usuário <br>
                <input type="text" name="usuario" id="usuario" autocomplete>
                <p></p>
                Senha <br>
                <input type="password" name="senha" id="senha" autocomplete>
                <input type="text" name="try" value="0" style="display: none">
                <div class="fundo">
                    <button type="submit" id="enviar" class="enviar" disabled>Entrar</button>
                </div>
                <p></p>
                <a id="registro" href="#">Não tem conta? Clique aqui.</a>
            </form>
        </div>

        <div class="registroform" id="registroform">
            <form action="registrar.php" method="POST">
                Informe os campos a seguir: <p></p>
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
</body>
</html>