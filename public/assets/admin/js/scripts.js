function alerta(mensagem){
    var alerta = document.createElement("div");
    alerta.className = "alerta";
    alerta.textContent = mensagem;
    $("body").append(alerta);
    $(alerta).fadeIn("fast");
    setTimeout(function(){
        $(alerta).fadeOut("fast");
        $(alerta).remove(); 
    }, 3000);
}