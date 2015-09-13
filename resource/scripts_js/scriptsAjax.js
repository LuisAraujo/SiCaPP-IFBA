/**
 * @descripition Função para login de usuário
 * @version 1.0
 * @author Luis Araujo
 */

$(document).ready(function(){

//login usuário
$("#lu_form_pes").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher.php?classe=Pesquisador&acao=logar",
            data: dados,
            success: function(data)
            {


               if (data=="1"){
                    redireciona(AMB_PES);
                }else{
                   console.log("usuário ou senha incorreto!" + data);
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

//cadastro pesquisador
$("#cp_form").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher.php?classe=Pesquisador&acao=inserir",
            data: dados,
            success: function(data)
            {
                //RETORNA 1 EM CASO DE SUCESSO. Ex: if(data==1) console.log("sucesso");
                //EXECUTA MODAL COMO SUCESSO (BOTÃO PARA A TELA DE LOGINA)
                //LIMPA OS CAMPUS


            },
            error: function(data)
            {
                //EXECUTA MODAL COMO AVISO DE ERRO

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





/**
 * @descripition Função obtem escolaridades cadastradas no banco
 * @version 1.0
 * @author Luis Araujo
 */
$("#drop_titulacao").click(function(){

    $.ajax({
        type: "POST",
        url: "class/Controller/Dispatcher.php?classe=Titulacao&acao=buscarTodos",
        success: function(data)
        {
            $("#dorp_escolaridade").html("");
            for(var i = 0; i < data.length; i++){
                $("#dorp_escolaridade").html(data);
            }

            $("#dorp_escolaridade > li > a").click(function(){
                $("#placeholder_escolaridade").html($(this).html());
                $("#cp_titulacao").attr("value",$(this).attr("value"));
            });
        },
        error: function(data)
        {
            console.log("erro");
        }
    });


});



/**
 * @descripition Função obtem campus cadastradas no banco
 * @version 1.0
 * @author Luis Araujo
 */
$("#drop_campus").click(function(){
    $.ajax({
        type: "POST",
        url: "class/Controller/Dispatcher.php?classe=Campus&acao=buscarTodos",
        success: function(data)
        {
            $("#dorp_campus").html("");
            for(var i = 0; i < data.length; i++){
                $("#dorp_campus").html(data);
            }

            $("#dorp_campus > li > a").click(function(){
                $("#placeholder_campus").html($(this).html());
                $("#cp_campus").attr("value",$(this).attr("value"));
            });
        },
        error: function(data)
        {
            console.log("erro");
        }
    });

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