<?php
/*
 * @description Responsável por requisitar o Controller e a chamada do métodos específicao passado via GET
 * @author Luis Araujo
 * @version 1.0
 */
require_once("includes/Conexao.php");

$metodo = $_GET['acao'];
$classe = $_GET['classe'];
$viewClasse = $classe."View";

//Url Controller
$urlView = "../View/" .$viewClasse. ".php";
require_once($urlView);

//Instancia o objeto do tipo
$objView = new $viewClasse();

//Chamanda de método
$lista = $objView->$metodo();

?>