<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 13/09/15
 * Time: 01:18
 */

include("../Controller/CampusController.php");
class CampusView {

    public function exibeCampus($param){

        $linha ="<li><a href='#' value='".$param."'>".$param."</a></li>";
        echo  $linha;
    }



    public function listar(){

        $controller = new CampusController();

        $param =  $controller->buscarTodos();

        $l =0;
        $linha = [];

        for($j = 0; $j < count($param); $j++)
            $linha[$l++] ="<li><a href='#' value='".$param[$j][0]."'>".$param[$j][1]."</a></li>";

        for($i = 0; $i < count($linha); $i++)
            echo utf8_encode ($linha[$i]);

    }

} 