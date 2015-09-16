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
 * @descriprion Função de redirecionamento de página específica
 * @param param CONST {string}
 * @version 1.0
 * @author Luis Araujo
 */
redireciona = function(param){
    location.href=param;
}

/**
* @descriprion função ativa e desativa inputs do formulario
* de edição do perfil de pesquisador
* @param param bool
* @version 1.0
* @author Luis Araujo
*/
ativaFormEpPes = function(param){
    if(param){
        //ativa inputs
        $("#ep-nome").removeAttr("disabled");
        $("#ep-cpf").removeAttr("disabled");
        $("#ep-email").removeAttr("disabled");
        $("#ep-lattes").removeAttr("disabled");
        $("#ep-senha").removeAttr("disabled");
        $("#ep-siape").removeAttr("disabled");
        $("#drop_titulacao_bt").removeAttr("disabled");
        $("#drop_campus_bt").removeAttr("disabled");
        $("#submit_cp").removeAttr("disabled");
        $("#bt_editaperfil").attr("disabled", "");
        $("#bt_editasenha").attr("disabled", "");
        //ativa edição de foto
        $("#ct-foto").attr("editable",true);
    }else{
        //desativa inputs
        $("#ep-nome").attr("disabled","");
        $("#ep-cpf").attr("disabled","");
        $("#ep-email").attr("disabled","");
        $("#ep-lattes").attr("disabled","");
        $("#ep-senha").attr("disabled","");
        $("#ep-siape").attr("disabled","");
        $("#drop_titulacao_bt").attr("disabled","");
        $("#drop_campus_bt").attr("disabled","");
        $("#submit_cp").attr("disabled","");
        $("#bt_editaperfil").removeAttr("disabled");
        $("#bt_editasenha").removeAttr("disabled");
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
    /**
     * @descripition função ativa formulario de edição de pesquisador
     *
     * @version 1.0
     * @author Luis Araujo
     */
    $("#bt_editaperfil").click(
        function(){
            ativaFormEpPes(true);
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

    $("#bt_cadastrarprojeto").click(function(){
        $("#tab_cadastrarprojeto").trigger("click");
        //chamar ajax com dados
    });

    $(".bt_visualizarprojeto").click(function(){
        $("#tab_visualizarprojeto").trigger("click");
        //chamar ajax com dados
    });

    $(".bt_editarprojeto").click(function(){
        $("#tab_editarprojeto").trigger("click");
        //chamar ajax com dados
    });

    //data picker inicio
    $("#cadproj_data_div div").datepicker({
        language: "pt-BR",
        autoclose: true
    });

});