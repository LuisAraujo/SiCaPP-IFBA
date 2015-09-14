/**
 * @description constante referente à caiminho de ambiente do bolsista
 * @type {string}
 */
AMB_BOL = "site/amb_bol.html";
/**
 * @description constante referente à caiminho de ambiente do pesquisador
 * @type {string}
 */
AMB_PES = "site/amb_pes.html";
/**
 * @description constante referente à caiminho do adm
 * @type {string}
 */
AMB_ADM = "/admin/";
/**
 * @description constante referente à caiminho da página inicial
 * @type {string}
 */
AMB_HOME = "/SiCaPP-IFBA/index.html";


function Vector2(a, b) {
    this.A = a;
    this.B = b;

}

/**
 * @descriprion Função de redirecionamento de página usada no login
 * @param param CONST {string}
 * @version 1.0
 * @author Luis Araujo
 */
redireciona = function(param){
    location.href=param;
}


ativarImputsFormEdiatarPerfil = function(param){
    if(param){
        //ativa inputs
        $("#ep-cpf").removeAttr("disabled");
        $("#ep-email").removeAttr("disabled");
        $("#ep-lattes").removeAttr("disabled");
        $("#ep-senha").removeAttr("disabled");
        $("#ep-siape").removeAttr("disabled");
        $("#drop_titulacao_bt").removeAttr("disabled");
        $("#drop_campus_bt").removeAttr("disabled");
        $("#submit_cp").removeAttr("disabled");



        //ativa edição de foto
        $("#ct-foto").attr("editable",true);
    }else{
        //desativa inputs
        $("#ep-cpf").attr("disabled","");
        $("#ep-email").attr("disabled","");
        $("#ep-lattes").attr("disabled","");
        $("#ep-senha").attr("disabled","");
        $("#ep-siape").attr("disabled","");
        $("#drop_titulacao_bt").attr("disabled","");
        $("#drop_campus_bt").attr("disabled","");
        $("#submit_cp").attr("disabled","");

        //desativa edição de foto
        $("#ct-foto").attr("editable",false);
        $("#img-foto-perfil").css('opacity','1');


    }

}


$(document).ready(function(){

    $("#bt_sair").click(function(){
        delogaUsuario();
        console.log("sair1");
    });

    $("#bt_editaperfil").click(
        function(){
            if( $(this).attr("acao") == "submit_ep" ){
                 ativarImputsFormEdiatarPerfil(false);
                 $(this).attr("acao", "edita_ep");
                 $(this).addClass("label-success");
                $(this).removeClass("label-warning");
                 $("#label-bt-editaperfil").html("Editar Perfil");
            }else{
                ativarImputsFormEdiatarPerfil(true);
                $(this).attr("acao", "submit_ep");
                $(this).removeClass("label-success");
                $(this).addClass("label-warning");
                $("#label-bt-editaperfil").html("Atualizar Perfil");

                //ENVIAR DADOS!!!
                // forçar submit de ep_form
            }
        });



    $("#ct-foto").hover(function(){
        if($(this).attr("editable")== "true")
            $("#img-foto-perfil").css("opacity","0.7");
    });

    $("#ct-foto").mouseover(function(){
        if($(this).attr("editable")== "true")
        $("#img-foto-perfil").css("opacity","0.2");
    });

    //abre tela de up load
    $("#img-foto-perfil").click(function(){
        $("#ep-foto").trigger("click");
    });


});