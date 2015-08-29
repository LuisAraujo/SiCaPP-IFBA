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