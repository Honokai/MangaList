<?php 
session_start();
/* Condição para apresentação da tela */
if(isset($_SESSION['id'])){

} else{
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Mangas - Gerenciador</title>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/gerenciador.css">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
        include("ins/menu-top.php");
    ?>
    
   <div class="tudo">
       <div id="inserirmanga">
           
       </div>
       <div class=""></div>
   </div>


</body>
</html>