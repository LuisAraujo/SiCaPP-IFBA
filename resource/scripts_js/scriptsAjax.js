/**
 * Created by Luis 4raujo on 25/08/15.
 */


/**** LOGIN USUÁRIO ****/
$("#lu_form").validate({

    submitHandler: function(form) {

        var dados = $(form).serialize();

        $.ajax({
            type: "POST",

            url: "class/Controller/Dispatcher.php?classe=Login&acao=logar",
            data: dados,
            success: function(data)
            {
                if (data=="0")
                    redireciona(AMB_BOL);
                else if (data=="1")
                    redireciona(AMB_PES);
                else
                   //usar um span na view para informar ao usuário
                   console.log("usuário ou senha incorreto!");
            },
            error: function(data)
            {
                console.log("Erro ao obter dados: "+data);
            }
        });

        return false;
    }


});




