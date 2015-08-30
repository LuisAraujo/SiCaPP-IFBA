/**
 * @descripition Função para login de usuário
 * @version 1.0
 * @author Luis Araujo
 */

$(document).ready(function(){


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


