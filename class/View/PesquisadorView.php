<?php
/**
 * Class PesquisadorView
 * @author Luis Araujo
 * @description Classe de visão de Pesquisador
 * @version 1.0
 * @package View/
 */

include("../Controller/PesquisadorController.php");

class PesquisadorView{


    public function exibeStatusInserido($param){

       echo $param;
    }


    public function logar(){
        //1 = professor, 0 = estudantes, -1 = erro
        $controller = new PesquisadorController();

        echo $controller->logar();
    }

    public  function inserir(){

        $controller = new PesquisadorController();

        echo $controller->inserir();
    }

} 