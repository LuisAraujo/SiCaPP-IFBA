<?php

include("../Controller/TitulacaoController.php");
class TitulacaoView{

    public function exibeTitulacao(){
      $controller = new CampusController();

      $param =  $controller->buscar();

      $linha ="<li><a href='#' value='".$param."'>".$param."</a></li>";

      echo  utf8_encode ($linha);
    }


    public function listar(){

        $controller = new TitulacaoController();

        $param =  $controller->buscarTodos();

        $l =0;
        $linha = [];

        for($j = 0; $j < count($param); $j++)
            $linha[$l++] ="<li><a href='#' value='".$param[$j][0]."'>".$param[$j][1]."</a></li>";

        for($i = 0; $i < count($linha); $i++)
            echo utf8_encode ($linha[$i]);

    }


}