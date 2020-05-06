$(document).ready(function(){

    $("#registro").on("click", function(){

        document.getElementById("loginform").style.display = "none";
        document.getElementById("registroform").style.display = "inline-block";

    });

    $("#senha").on("focusout", function(){
        if($("#usuario").val() != ""){
            $("#enviar").prop('disabled', false);
        }else{
            $("#enviar").prop('disabled', true);
        }
    });

});
