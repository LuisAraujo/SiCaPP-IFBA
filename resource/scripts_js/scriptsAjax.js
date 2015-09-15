
$(document).ready(function(){

/**
 * @descripition função realiza o login de pesquisador
 * retorna sucesso em caso de cadastro e erro em caso
 * de falhs
 * @version 1.0
 * @author Luis Araujo
 */
$("#lu_form_pes").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher2.php?classe=Pesquisador&acao=logar",
            data: dados,
            success: function(data)
            {
                console.log(data);

               if (data=="1"){
                    redireciona(AMB_PES);
                }else{
                   console.log("usuário ou senha incorreto!");
                }

            },
            error: function(data)
            {
                console.log("Erro ao obter dados");
            }
        });

        return false;
    }

});

/**
 * @descripition função realiza o cadastros de pesquisador
 * retorna sucesso em caso de cadastro e erro em caso
 * de falha
 * @version 1.0
 * @author Luis Araujo
 */
$("#cp_form_pes").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "class/Controller/Dispatcher2.php?classe=Pesquisador&acao=inserir",
            data: dados,
            success: function(data)
            {

                console.log(data);
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



/**
 * @descripition função realiza a atualizado de dados do pesquisador
 * retorna sucesso em caso de cadastro e erro em caso
 * de falhs
 * @version 1.0
 * @author Luis Araujo
 */
$("#ep_form_pes").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",
            url: "../class/Controller/Dispatcher2.php?classe=Pesquisador&acao=atualizar",
            data: dados,
            success: function(data)
            {
                console.log(data);


                ativaFormEpPes(false);
                $("#tab_meu_perfil_pes").trigger('click');

            },
            error: function(data)
            {
                console.log("erro");
            }
        });

        return false;
    }

});





/**
 * @descripition Função obtem lista de titulacoes cadastradas na base de dados
 * @version 1.0
 * @author Luis Araujo
 */
$("#drop_titulacao_bt").click(function(){

    $.ajax({
        type: "POST",
        url: "/SiCaPP-IFBA/class/Controller/Dispatcher2.php?classe=Titulacao&acao=listar",
        dataType: 'json',
        success: function(data)
        {
            str = "";
            for(var i = 0; i < data.length; i++){
                str += "<li><a id='titu"+data[i][0]+"' href='#' value='"+data[i][0]+"'>"+data[i][1]+"</a></li>";
            }

            $("#drop_titulacao").html(str);

            $("#drop_titulacao > li > a").click(function(){
                $("#placeholder_titulacao").html($(this).html());
                $("#cp_titulacao").attr("value",$(this).attr("value"));
            });
        },
        error: function(data)
        {
            console.log(data);
        }
    });


});

/**
 * @descripition Função obtem campus cadastradas no banco [amb_pes]
 * @version 1.0
 * @author Luis Araujo
 */
$("#drop_campus_bt").click(function(){
    $.ajax({
        type: "POST",
        url: "/SiCaPP-IFBA/class/Controller/Dispatcher2.php?classe=Campus&acao=listar",
        dataType: 'json',
        success: function(data)
        {

            str = "";
            for(var i = 0; i < data.length; i++){
                str += "<li><a href='#' value='"+data[i][0]+"'>"+data[i][1]+"</a></li>";
            }
            $("#drop_campus").html(str);

            $("#drop_campus > li > a").click(function(){
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

/**
 * @descripition Função obtem campus cadastradas no banco [amb_pes]
 * @version 1.0
 * @author Luis Araujo
 */
$("#tab_meu_perfil_pes").click(function(){

    $.ajax({
        type: "POST",
        url: "../class/Controller/Dispatcher2.php?classe=Pesquisador&acao=obterDados",
        dataType: 'json',
        success: function(data)
        {
           $("#perfil_nome").html(data["nome"]);
           $("#ep-nome").val(data["nome"]);
           $("#ep-cpf").val(data["cpf"]);
           $("#ep-email").val(data["email"]);
           $("#ep-lattes").val(data["lattes"]);
           $("#ep-siape").val(data["siape"]);
           //titulacao
           $("#placeholder_titulacao").html(data["titulacaonome"]);
           $("#cp_titulacao").attr("value",data["titulacoes_idtitulacoes"]);
           //campus
           $("#placeholder_campus").html(data["campusnome"]);
           $("#cp_campus").attr("value",data["sicapp_campus_idcampus"]);

        },
        error: function(data)
        {
            console.log("erro");
        }
    });

});

//END READY
});

/**
 * @descripition Função verifica se o usuário logado tem permissão de acesso à ambiente específico
 * @version 1.0
 * @author Luis Araujo
 */
verificaPermissaoPagina = function(){
    $.ajax({
        type: "POST",
        url: "../class/Controller/Dispatcher2.php?classe=Session&acao=obterTipoSession",
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
        url: "class/Controller/Dispatcher2.php?classe=Session&acao=obterTipoSession",
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
        url: "../class/Controller/Dispatcher2.php?classe=Session&acao=deslogaUsuario",
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
 * @descripition Obtem lista de editais [edital nao implementado]
 * @version 1.0
 * @author Silas Ribeiro
 */
var getEditais = function(){
    $("#editais").load("class/Controller/Dispatcher2.php?classe=Edital&acao=listar");
}

/**
 * @descripition Obtem lista de pesquisadores [listar nao implementado]
 * @version 1.0
 * @author Silas Ribeiro
 */
var getPesquisadores = function(){
    $("#pesquisadores").load("class/Controller/Dispatcher.php?classe=Pesquisador&acao=listar");
}