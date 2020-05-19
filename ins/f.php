<?php /* arquivo de funcões javascript */?>

    <script>
        /* função para o onclick mostrar ou nao o dropdown */
        function mostrar(){
            let lista = document.getElementById("lista");
            if(lista.style.visibility == "" || lista.style.visibility == "hidden"){
                lista.style.visibility = "visible";
            }else{
                lista.style.visibility = "hidden";
            }
        }

        function showMain() {
            document.getElementById('c2').style.display = "none";
            document.getElementById('c1').style.display = "block";
        }
        function showRec() {
            document.getElementById('c1').style.display = "none";
            document.getElementById('c2').style.display = "block";
        }
    </script>

