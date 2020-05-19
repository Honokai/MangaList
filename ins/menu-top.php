<nav class="top">
    <a class="navtitulo" href="index.php">Meus Mangas</a>
    <div class="top-direita" id="menu">
        <?php 
            if(!isset($_SESSION['usuario'])){
                $base = $_SERVER['SERVER_NAME'];
                echo "<a href='" . "http://".$base."/login'>Login</a>";
            }else{
                echo "<a href=''>{$_SESSION['usuario']}</a>";
            }
        ?>
        <a href="#">Novidades</a>
        <a href="#" onclick="showRec()">Recomendações</a>
        <?php 
            if(isset($_SESSION['usuario'])){
                echo "<a href='login/sair.php'>Sair</a>";
            }
        ?>
        <!--
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        -->
        <div class="icon" onclick="mostrar()" id="queda">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>
            <ul class="menu-fall" id="lista">
            <?php 
                if(!isset($_SESSION['usuario'])){
                    echo "<li><a href='" . "http://".$base."/login'>Login</a></li>";;
                }else{
                    echo "<li><a href=''>{$_SESSION['usuario']}</a></li>";
                }
            ?>
                <li><a href="#">Novidades</a></li>
                <li><a href="#" onclick="showRec()">Recomendações</a></li>
                <?php 
                    if(isset($_SESSION['usuario'])){
                        echo "<li><a href='login/sair.php'>Sair</a></li>";
                    }
                ?>
            </ul>
        </div>
        
    </div>
</nav>