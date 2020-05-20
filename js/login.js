$(document).ready(function(){

    $("#registro").on("click", function(){

        document.getElementById("loginform").style.display = "none";
        document.getElementById("registroform").style.display = "inline-block";

    });

    $("#usuario,#usuario1").on("focusout", function(){

       verificarUsuario();

    });
    
    $("#fecharAlerta").on("click", function(){
        document.getElementById("alertas").style.display = "none";
    });
    
});

/*
Função para habilitar botão de envio de login


function habilitar() {
    if($("#usuario,#senha").val() != "" & $("#senha").val() != ""){
        $("#enviar").prop('disabled', false);
    }else{
        $("#enviar").prop('disabled', true);
    }
}
*/
function verificarUsuario(){
    $.ajax({
        url: "../login/verU.php",
        type:"GET",
        data: {"usuario" : document.getElementById("usuario").value },
        success: function(data,status){
            //console.log(status);
            //document.getElementById("alertas").style.display = "block";
            //console.log(data.dado);
            //document.getElementById("informacao").innerHTML = JSON.parse(data);
        },
        error: function(data){
            document.getElementById("alertas").style.display = "block";
            //console.log(data);
            document.getElementById("informacao").innerHTML = JSON.parse(data.responseText);
        }
    });
}
