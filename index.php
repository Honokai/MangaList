<?php 
require("config/Banco.php");
$bd = new BancoDados;
$conexao = $bd->conexao();
$query = "select * from mangas order by nome_manga";
$char = $conexao->prepare("set names utf8");
$char->execute();

$resultado = $conexao->prepare($query);
$resultado->execute();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Mangas - HOME</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/topo.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

</head>
<body>
    <nav class="top">
        <a class="navtitulo">Meus Mangas</a>
        <div class="top-direita">
            <a href="login" onclick="showMain()">Login</a>
            <a href="#">Novidades</a>
            <a href="#" onclick="showRec()">Recomendações</a>
        </div>
    </nav>
    <div class="parallax-top"></div>
    <div class="parallax-main">
        <div class="main">
            <div class="conteudo1" id="c1">
                <div id="ctitulo">Seu site preferido para guardar sua lista de mangá!</div>
                <div id="cmain">
                        <?php  
                        foreach($resultado as $key)
                        {
                            echo "<div class='cmanga'>";
                            echo "<div class='mimagem'><img href='manga' src='{$key['img']}' alt='Naruto Shippuden'></div>";
                            echo "<div class='cont'> <div class='alem'>{$key['nome_manga']}</div>Lançamento: {$key['lancamento']}</div></div>";
                        }
                        ?>
                </div>
            </div>

            <div class="conteudo2" id="c2">
                <label for="nomemanga"> Nome manga:</label><br>
                <input id="nomemanga" type="text"><br>
                <label for="lancamento"> Lançamento:</label><br>
                <input type="text">
            </div>
        </div>
    </div>
    
    <div class="parallax-footer"></div>
<script>
    function showMain() {
        document.getElementById('c2').style.display = "none";
        document.getElementById('c1').style.display = "block";
    }
    function showRec() {
        document.getElementById('c1').style.display = "none";
        document.getElementById('c2').style.display = "block";
    }
</script>
</body>
</html>