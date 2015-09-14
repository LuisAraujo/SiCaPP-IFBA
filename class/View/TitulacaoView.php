<?php

include("../Controller/TitulacaoController.php");
class TitulacaoView{

    private $controller;

    public  function __construct(){
        $this->controller = new TitulacaoController();
    }

    public function exibeTitulacao(){

      $controller = new CampusController();

      $param =  $controller->buscar();

      $linha ="<li><a href='#' value='".$param."'>".$param."</a></li>";

      echo  utf8_encode ($linha);
    }


    public function listar(){
        $param = $this->controller->buscarTodos();
        echo json_encode($param);
    }


}