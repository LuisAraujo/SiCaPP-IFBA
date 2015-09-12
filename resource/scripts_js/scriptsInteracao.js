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
        $("[id|='ep']").removeAttr("disabled");
        //ativa edição de foto
        $("#ct-foto").attr("editable",true);
    }else{
        //desativa inputs
        $("[id|='ep']").attr("disabled","");
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