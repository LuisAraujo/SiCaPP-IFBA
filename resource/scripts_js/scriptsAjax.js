/**
 * @descripition Função para login de usuário
 * @version 1.0
 * @author Luis Araujo
 */

$(document).ready(function(){

//login usuário
$("#lu_form").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher.php?classe=Login&acao=logar",
            data: dados,
            success: function(data)
            {

                if (data=="0"){
                    redireciona(AMB_BOL);
                }else if (data=="1"){
                    redireciona(AMB_PES);
                }else{
                   console.log("usuário ou senha incorreto!");
                }

            },
            error: function(data)
            {
                console.log("Erro ao obter dados: "+data);
            }
        });

        return false;
    }

});


//edita perfil
$("#ep_form").validate({
    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher.php?classe=Usuario&acao=atualizar",
            data: dados,
            success: function(data)
            {

            },
            error: function(data)
            {

            }
        });

        return false;
    }

});


//end ready
});

/**
 * @descripition Função verifica se o usuário logado tem permissão de acesso à ambiente específico
 * @version 1.0
 * @author Luis Araujo
 */
verificaPermissaoPagina = function(){
    $.ajax({
        type: "POST",
        url: "../class/Controller/Dispatcher.php?classe=Session&acao=getTipoSession",
        success: function(data)
        {
            page = $("body").attr("page");
             if ( (page=="bol" && data!="0") || (page=="pes" && data!="1"))
            {
               redireciona(AMB_HOME);
            }
        },
        error: function(data)
        {
            console.log("Erro ao obter dados: "+data);
        }
    });

}


/**
 * @descripition Função verifica se usuário está logado e redireciona da página home ao ambiente especifico
 * @version 1.0
 * @author Luis Araujo
 */
verificaUsuarioLogado = function(){
    $.ajax({
        type: "POST",
        url: "class/Controller/Dispatcher.php?classe=Session&acao=getTipoSession",
        success: function(data)
        {
            page = $("body").attr("page");
            if(page=="home"){
                if (data=="0"){
                    redireciona(AMB_BOL);
                }else if (data=="1"){
                    redireciona(AMB_PES);
                }
            }
        },
        error: function(data)
        {
            console.log("Erro ao obter dados: "+data);
        }
    });

}


/**
 * @descripition Função verifica se usuário está logado e redireciona da página home ao ambiente especifico
 * @version 1.0
 * @author Luis Araujo
 */
delogaUsuario = function(){
    $.ajax({
        type: "POST",
        url: "../class/Controller/Dispatcher.php?classe=Session&acao=destroySession",
        success: function(data)
        {
            redireciona(AMB_HOME);
        },
        error: function(data)
        {
            console.log("Erro ao obter dados: "+data);
        }
    });

}



/**
 * @descripition Pega lista de editais
 * @version 1.0
 * @author Silas Ribeiro
 */
var getEditais = function(){
    $("#editais").load("class/Controller/Dispatcher.php?classe=Edital&acao=listar");
}

/**
 * @descripition Pega lista de pesquisadores
 * @version 1.0
 * @author Silas Ribeiro
 */
var getPesquisadores = function(){
    $("#pesquisadores").load("class/Controller/Dispatcher.php?classe=Pesquisador&acao=listar");
}