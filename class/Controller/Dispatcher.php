<?php
/*
 * @description Responsável por requisitar o Controller e a chamada do métodos específicao passado via GET
 * @author Luis Araujo
 * @version 1.0
 */
require_once("includes/Conexao.php");

$metodo = $_GET['acao'];
$classe = $_GET['classe'];
$controllercClasse = $classe."Controller";

//Url Controller
$urlController = "../Controller/" .$controllercClasse. ".php";
require_once($urlController);

//Instancia o objeto do tipo
$objController = new $controllercClasse();

//Chamanda de método
$lista = $objController->$metodo();

?>