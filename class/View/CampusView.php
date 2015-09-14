<?php
/**
 * Created by PhpStorm.
 * User: Luis 4raujo
 * Date: 13/09/15
 * Time: 01:18
 */

include("../Controller/CampusController.php");
class CampusView {
    private $controller;

    public  function __construct(){
        $this->controller = new CampusController();
    }


    public function exibeCampus($param){

        $linha ="<li><a href='#' value='".$param."'>".$param."</a></li>";
        echo  $linha;
    }



    public function listar(){

        $param = $this->controller->buscarTodos();
        echo json_encode($param);

    }

} 