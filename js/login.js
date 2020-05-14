$(document).ready(function(){

    $("#registro").on("click", function(){

        document.getElementById("loginform").style.display = "none";
        document.getElementById("registroform").style.display = "inline-block";

    });

    $("#senha,#usuario").on("focusout", function(){
        habilitar(); //chamada de função para habilitar botão de envio
    });

});

/*
Função para habilitar botão de envio de login
*/
function habilitar() {
    if($("#usuario,#senha").val() != "" & $("#senha").val() != ""){
        $("#enviar").prop('disabled', false);
    }else{
        $("#enviar").prop('disabled', true);
    }
}
